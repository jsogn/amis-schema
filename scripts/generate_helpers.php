<?php
declare(strict_types=1);

/**
 * 组件助手函数生成器
 *
 * 解析所有组件的 @method 注解，生成对应的全局助手函数
 * 支持继承链和trait的方法提取
 */

require_once __DIR__ . '/../vendor/autoload.php';

class ComponentHelperGenerator
{
    private array $components = [];
    private array $inheritanceChain = [];
    private array $traitMethods = [];
    private array $classNamespaceMap = []; // 缓存类名到命名空间的映射

    public function __construct()
    {
        $this->buildInheritanceChain();
        $this->extractTraitMethods();
        $this->scanComponents();
    }

    /**
     * 构建继承链信息
     */
    private function buildInheritanceChain(): void
    {
        // 扫描所有PHP文件以构建继承关系
        $directories = [
            __DIR__ . '/../src/Widget',
            __DIR__ . '/../src/Trait',
            __DIR__ . '/../src'
        ];

        foreach ($directories as $dir) {
            $this->scanForInheritance($dir);
        }
    }

    /**
     * 扫描目录构建继承关系
     */
    private function scanForInheritance(string $directory): void
    {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($directory)
        );

        foreach ($iterator as $file) {
            if ($file->isFile() && $file->getExtension() === 'php') {
                $this->parseFileForInheritance($file->getPathname());
            }
        }
    }

    /**
     * 解析文件的继承关系
     */
    private function parseFileForInheritance(string $file): void
    {
        $content = file_get_contents($file);

        // 提取命名空间
        if (!preg_match('/namespace\s+([^;]+);/', $content, $namespaceMatch)) {
            return;
        }
        $namespace = $namespaceMatch[1];

        // 提取use语句
        $useStatements = [];
        if (preg_match_all('/use\s+([^;]+);/', $content, $useMatches)) {
            foreach ($useMatches[1] as $useStatement) {
                $parts                 = explode(' as ', $useStatement);
                $fullClass             = trim($parts[0]);
                $alias                 = isset($parts[1]) ? trim($parts[1]) : basename(str_replace('\\', '/', $fullClass));
                $useStatements[$alias] = $fullClass;
            }
        }

        // 提取类名、父类、traits
        if (preg_match('/class\s+(\w+)(?:\s+extends\s+(\w+))?/', $content, $classMatch)) {
            $className     = $classMatch[1];
            $parentClass   = $classMatch[2] ?? null;
            $fullClassName = $namespace . '\\' . $className;

            // 解析父类的完整命名空间
            $fullParentClass = null;
            if ($parentClass) {
                if (isset($useStatements[$parentClass])) {
                    $fullParentClass = $useStatements[$parentClass];
                } elseif (strpos($parentClass, '\\') !== false) {
                    $fullParentClass = $parentClass;
                } else {
                    $fullParentClass = $namespace . '\\' . $parentClass;
                }
            }

            // 提取使用的traits
            $traits = [];
            // 匹配类内部的use语句（trait使用）
            if (preg_match('/class\s+\w+[^{]*\{(.+)\}/s', $content, $classBodyMatch)) {
                $classBody = $classBodyMatch[1];
                if (preg_match_all('/use\s+([^;{]+)(?:\s*\{[^}]*\})?;/', $classBody, $traitMatches)) {
                    foreach ($traitMatches[1] as $traitList) {
                        $traitNames = array_map('trim', explode(',', $traitList));
                        foreach ($traitNames as $traitName) {
                            // 跳过macroCall这种非trait的use
                            if (strpos($traitName, '{') !== false || strpos($traitName, 'as') !== false) {
                                continue;
                            }

                            // 处理完整的trait名称
                            if (strpos($traitName, '\\') === false) {
                                $traits[] = $namespace . '\\' . $traitName;
                            } else {
                                $traits[] = $traitName;
                            }
                        }
                    }
                }
            }

            $this->inheritanceChain[$fullClassName] = [
                'parent' => $fullParentClass,
                'traits' => $traits,
                'file'   => $file
            ];
        }
    }

    /**
     * 提取所有trait中的方法
     */
    private function extractTraitMethods(): void
    {
        $traitDir = __DIR__ . '/../src/Trait';
        if (!is_dir($traitDir)) {
            return;
        }

        $files = glob($traitDir . '/*.php');
        foreach ($files as $file) {
            $this->extractMethodsFromFile($file, true);
        }
    }

    /**
     * 从文件中提取@method注解
     */
    private function extractMethodsFromFile(string $file, bool $isTrait = false): array
    {
        $content = file_get_contents($file);
        $methods = [];

        // 提取命名空间和类名/trait名
        if (!preg_match('/namespace\s+([^;]+);/', $content, $namespaceMatch)) {
            return $methods;
        }
        $namespace = $namespaceMatch[1];

        $classPattern = $isTrait ? '/trait\s+(\w+)/' : '/class\s+(\w+)/';
        if (!preg_match($classPattern, $content, $classMatch)) {
            return $methods;
        }

        $fullName = $namespace . '\\' . $classMatch[1];

        // 提取@method注解
        // 按行处理，避免多行匹配问题
        $lines = explode("\n", $content);
        foreach ($lines as $line) {
            if (preg_match('/@method\s+\$this\s+(\w+)\(([^)]*)\)(?:\s+([^\r\n]*))?/', $line, $match)) {
                $methodName  = $match[1];
                $parameters  = $this->parseParameters($match[2]);
                $description = trim($match[3] ?? '');

                $methods[$methodName] = [
                    'parameters'  => $parameters,
                    'description' => $description,
                    'source'      => $fullName
                ];
            }
        }
        if ($isTrait) {
            $this->traitMethods[$fullName] = $methods;
        }

        return $methods;
    }

    /**
     * 获取类的所有方法（包括继承和trait）
     */
    private function getAllMethodsForClass(string $fullClassName): array
    {
        $allMethods = [];

        // 获取当前类的方法
        $classInfo = $this->inheritanceChain[$fullClassName] ?? null;
        if ($classInfo && isset($classInfo['file'])) {
            $classMethods = $this->extractMethodsFromFile($classInfo['file']);
            $allMethods   = array_merge($allMethods, $classMethods);
        }

        // 获取trait中的方法
        if ($classInfo && !empty($classInfo['traits'])) {
            foreach ($classInfo['traits'] as $trait) {
                if (isset($this->traitMethods[$trait])) {
                    $allMethods = array_merge($allMethods, $this->traitMethods[$trait]);
                }
            }
        }

        // 递归获取父类的方法
        if ($classInfo && $classInfo['parent']) {
            $parentMethods = $this->getAllMethodsForClass($classInfo['parent']);
            $allMethods    = array_merge($parentMethods, $allMethods); // 子类方法优先
        }

        return $allMethods;
    }

    /**
     * 扫描所有组件
     */
    private function scanComponents(): void
    {
        $directories = [
            __DIR__ . '/../src/Widget/Display',
            __DIR__ . '/../src/Widget/Input',
            __DIR__ . '/../src/Widget/Layout',
            __DIR__ . '/../src/Widget/Function',
            __DIR__ . '/../src/Widget/Feedback',
            __DIR__ . '/../src/Widget/Extra'
        ];

        foreach ($directories as $dir) {
            if (is_dir($dir)) {
                $this->scanDirectory($dir);
            }
        }
    }

    /**
     * 扫描目录中的组件文件
     */
    private function scanDirectory(string $directory): void
    {
        $files = glob($directory . '/*.php');

        foreach ($files as $file) {
            $this->parseComponent($file);
        }
    }

    /**
     * 解析单个组件文件
     */
    private function parseComponent(string $file): void
    {
        $content = file_get_contents($file);

        // 提取类名和命名空间
        if (!preg_match('/namespace\s+([^;]+);/', $content, $namespaceMatch)) {
            return;
        }

        if (!preg_match('/class\s+(\w+)\s+extends/', $content, $classMatch)) {
            return;
        }

        $namespace     = $namespaceMatch[1];
        $className     = $classMatch[1];
        $fullClassName = $namespace . '\\' . $className;

        // 提取类型
        $type = '';
        if (preg_match('/protected\s+string\s+\$type\s*=\s*[\'"]([^\'"]+)[\'"]/', $content, $typeMatch)) {
            $type = $typeMatch[1];
        }

        // 获取所有方法（包括继承和trait）
        $allMethods = $this->getAllMethodsForClass($fullClassName);

        $this->components[strtolower($className)] = [
            'className'     => $className,
            'fullClassName' => $fullClassName,
            'type'          => $type,
            'methods'       => $allMethods,
            'file'          => $file
        ];
    }

    /**
     * 解析方法参数
     */
    private function parseParameters(string $paramString): array
    {
        $paramString = trim($paramString);
        if (empty($paramString)) {
            return [];
        }

        $parameters = [];
        $parts      = explode(',', $paramString);

        foreach ($parts as $part) {
            $part = trim($part);
            if (empty($part)) continue;

            // 解析参数: type $name = defaultValue
            if (preg_match('/^([^$]*)\s*\$(\w+)(?:\s*=\s*(.*))?$/', $part, $match)) {
                $type    = trim($match[1]);
                $name    = $match[2];
                $default = isset($match[3]) ? trim($match[3]) : null;

                // 规范化类型
                $type = $this->normalizeDocParameterType($type);

                $parameters[] = [
                    'type'       => $type,
                    'name'       => $name,
                    'default'    => $default,
                    'hasDefault' => isset($match[3])
                ];
            }
        }

        return $parameters;
    }

    /**
     * 生成助手函数
     */
    public function generateHelperFunctions(): string
    {
        $output = "<?php\n\n";
        $output .= "declare(strict_types=1);\n\n";

        $output .= "/**\n";
        $output .= " * Amis Schema 组件助手函数\n";
        $output .= " * \n";
        $output .= " * 提供类似 Flutter 的组件调用方式\n";
        $output .= " * 生成时间: " . date('Y-m-d H:i:s') . "\n";
        $output .= " */\n\n";

        // 生成每个组件的助手函数
        foreach ($this->components as $functionName => $component) {
            $output .= $this->generateSingleHelperFunction($functionName, component: $component);
            $output .= "\n";
        }

        return $output;
    }

    /**
     * 生成单个助手函数
     */
    private function generateSingleHelperFunction(string $functionName, array $component): string
    {
        $className     = $component['className'];
        $fullClassName = $component['fullClassName'];
        $methods       = $component['methods'];

        // 添加Amis前缀，并保持类名的大小写
        $functionName = 'Amis' . $className;

        // 获取最重要的参数作为函数参数
        $parameters     = $this->getTopParameters($methods);
        $paramSignature = $this->generateParameterSignature($parameters);
        $functionBody   = $this->generateFunctionBody($parameters, $fullClassName);
        $docComment     = $this->generateDocComment($className, $fullClassName, $parameters, $methods);

        $output = $docComment;
        $output .= "function $functionName($paramSignature): \\$fullClassName\n";
        $output .= "{\n";
        $output .= $functionBody;
        $output .= "}\n";

        return $output;
    }

    /**
     * 获取最重要的参数
     */
    private function getTopParameters(array $methods): array
    {
        // 优先级顺序 - 增加更多重要方法
        $priorities = [
            'type'        => 20,
            'name'        => 15,
            'title'       => 10,
            'label'       => 10,
            'body'        => 8,
            'value'       => 8,
            'actionType'  => 8,  // Action 的核心属性
            'api'         => 7,         // Action 的重要属性
            'url'         => 7,         // Action 的重要属性
            'link'        => 7,        // Action 的重要属性
            'placeholder' => 6,
            'level'       => 6,       // Button 样式
            'size'        => 6,        // Button 大小
            'icon'        => 5,        // Button 图标
            'disabled'    => 5,
            'required'    => 5,
            'visible'     => 5,
            'className'   => 4,
            'style'       => 4,
            'tooltip'     => 3,     // 提示信息
            'confirmText' => 3, // 确认对话框
            'reload'      => 3,      // 刷新目标
            'close'       => 3,       // 关闭动作
            'redirect'    => 3,    // 重定向
            'dialog'      => 3,      // 弹框
            'drawer'      => 3,      // 抽屉
            'feedback'    => 2,    // 反馈
            'messages'    => 2,    // 消息
            'block'       => 2,       // 块级显示
            'active'      => 2,      // 激活状态
            'loading'     => 2,     // 加载状态
        ];

        $selectedParams = [];

        // 先按优先级选择参数
        foreach ($priorities as $methodName => $priority) {
            if (isset($methods[$methodName])) {
                $methodInfo = $methods[$methodName];
                if (!empty($methodInfo['parameters'])) {
                    $param            = $methodInfo['parameters'][0];
                    $selectedParams[] = [
                        'name'        => $methodName,
                        'type'        => $param['type'],
                        'default'     => 'null',
                        'hasDefault'  => true,
                        'description' => $methodInfo['description'],
                        'priority'    => $priority
                    ];
                }
            }
        }

        // 添加所有其他可用的方法（移除数量限制）
        foreach ($methods as $methodName => $methodInfo) {
            // 跳过已经添加的方法
            $alreadyAdded = false;
            foreach ($selectedParams as $existing) {
                if ($existing['name'] === $methodName) {
                    $alreadyAdded = true;
                    break;
                }
            }

            if (!$alreadyAdded && !empty($methodInfo['parameters'])) {
                $param            = $methodInfo['parameters'][0];
                $selectedParams[] = [
                    'name'        => $methodName,
                    'type'        => $param['type'],
                    'default'     => 'null',
                    'hasDefault'  => true,
                    'description' => $methodInfo['description'],
                    'priority'    => 0
                ];
            }
        }

        // 按优先级排序，高优先级的参数排在前面
        usort($selectedParams, function ($a, $b) {
            return $b['priority'] <=> $a['priority'];
        });

        // 返回所有参数，不再有数量限制
        return $selectedParams;
    }

    /**
     * 生成参数签名
     */
    private function generateParameterSignature(array $parameters): string
    {
        if (empty($parameters)) {
            return '';
        }

        $parts = [];
        foreach ($parameters as $param) {
            $type    = $this->normalizeParameterType($param['type']);
            $name    = $param['name'];
            $default = ' = null'; // 所有参数都设为可选，默认值为null

            $parts[] = "$type \$$name$default";
        }
        $parts[] = '...$args';

        // 美观的参数排列：第一个和最后一个参数都换行
        if (count($parts) === 1) {
            return "\n    " . $parts[0] . "\n";
        } else {
            return "\n    " . implode(",\n    ", $parts) . "\n";
        }
    }

    /**
     * 生成文档注释
     */
    private function generateDocComment(string $className, string $fullClassName, array $parameters, array $methods): string
    {
        $output = "/**\n";
        $output .= " * 创建 $className 组件\n";
        $output .= " * \n";

        // 添加参数文档
        foreach ($parameters as $param) {
            $type = $this->normalizeDocParameterType($param['type']);
            $name = $param['name'];
            $desc = $param['description'] ?: $this->getDefaultDescription($name);
            // 清理描述中可能的注释结束符
            $desc   = str_replace('*/', '* /', $desc);
            $output .= " * @param $type \$$name $desc\n";
        }

        $output .= " * @param mixed ...\$args 其他参数\n";
        $output .= " * \n";
        $output .= " * @return \\$fullClassName\n";
        $output .= " */\n";

        return $output;
    }

    /**
     * 获取默认描述
     */
    private function getDefaultDescription(string $paramName): string
    {
        $descriptions = [
            'title'       => '组件标题',
            'label'       => '组件标签',
            'name'        => '字段名称',
            'body'        => '组件内容',
            'value'       => '组件值',
            'placeholder' => '占位文本',
            'className'   => 'CSS类名',
            'disabled'    => '是否禁用',
            'required'    => '是否必填',
            'visible'     => '是否可见'
        ];

        return $descriptions[$paramName] ?? '';
    }

    /**
     * 生成函数体 - 将参数转换为关联数组
     */
    private function generateFunctionBody(array $parameters, string $fullClassName): string
    {
        if (empty($parameters)) {
            return "    return \\$fullClassName::make([]);\n";
        }

        $body = "";
        foreach ($parameters as $i => $param) {
            $paramName = $param['name'];
            $body      .= "    \$$paramName !== null && \$args['$paramName'] = \$$paramName;\n";
        }
        $body .= "    return \\$fullClassName::make(\$args);\n";

        return $body;
    }

    /**
     * 标准化参数类型
     */
    /**
     * 规范化参数类型 - 函数签名中全部使用mixed
     */
    private function normalizeParameterType(string $type): string
    {
        return 'mixed';
    }

    /**
     * 规范化文档注释中的参数类型
     */
    private function normalizeDocParameterType(string $type): string
    {
        if (empty($type) || $type === 'mixed') {
            return 'mixed';
        }

        // 移除false类型，PHP中没有false类型
        $type = preg_replace('/\|?false\|?/', '', $type);
        $type = preg_replace('/^\||\|$/', '', $type); // 清理首尾的|

        // 分解联合类型
        $types           = array_map('trim', explode('|', $type));
        $normalizedTypes = [];

        foreach ($types as $singleType) {
            $normalizedTypes[] = $this->normalizeClassType($singleType);
        }

        $result = implode('|', $normalizedTypes);

        if (empty($result)) {
            return 'mixed';
        }

        return $result;
    }

    /**
     * 规范化单个类型
     */
    private function normalizeClassType(string $type): string
    {
        // 如果已经是完整命名空间，直接返回
        if (strpos($type, '\\') !== false) {
            return $type;
        }

        // 处理数组类型
        $isArray = false;
        if (preg_match('/^(.+)\[\]$/', $type, $matches)) {
            $isArray = true;
            $type    = $matches[1];
        }

        // 内置类型，直接返回
        $builtinTypes = ['string', 'int', 'float', 'bool', 'array', 'object', 'callable', 'mixed', 'null', 'void'];
        if (in_array(strtolower($type), $builtinTypes)) {
            return $isArray ? $type . '[]' : $type;
        }

        // 尝试解析自定义类型
        $fullClassName = $this->resolveClassName($type);

        return $isArray ? $fullClassName . '[]' : $fullClassName;
    }

    /**
     * 解析类名为完整命名空间
     */
    private function resolveClassName(string $className): string
    {
        // 首先检查是否在已知的类映射中
        if (isset($this->classNamespaceMap[$className])) {
            return $this->classNamespaceMap[$className];
        }

        // 尝试在项目中查找这个类
        $foundClass = $this->findClassInProject($className);
        if ($foundClass) {
            $this->classNamespaceMap[$className] = $foundClass;
            return $foundClass;
        }

        // 如果找不到，返回原始类名
        return $className;
    }

    /**
     * 在项目中查找类
     */
    private function findClassInProject(string $className): ?string
    {
        $searchPaths = [
            __DIR__ . '/../src/Widget',
            __DIR__ . '/../src/Definition',
            __DIR__ . '/../src'
        ];

        foreach ($searchPaths as $searchPath) {
            $result = $this->searchClassInDirectory($searchPath, $className);
            if ($result) {
                return $result;
            }
        }

        return null;
    }

    /**
     * 在目录中递归查找类
     */
    private function searchClassInDirectory(string $directory, string $className): ?string
    {
        if (!is_dir($directory)) {
            return null;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }

            $content = file_get_contents($file->getPathname());

            // 提取命名空间
            if (!preg_match('/namespace\s+([^;]+);/', $content, $namespaceMatch)) {
                continue;
            }
            $namespace = $namespaceMatch[1];

            // 查找类定义
            $patterns = [
                '/(?:class|interface|trait)\s+' . preg_quote($className, '/') . '\b/',
            ];

            foreach ($patterns as $pattern) {
                if (preg_match($pattern, $content)) {
                    return '\\' . $namespace . '\\' . $className;
                }
            }
        }

        return null;
    }

    /**
     * 获取调试信息
     */
    public function getDebugInfo(): array
    {
        return [
            'inheritanceChainCount' => count($this->inheritanceChain),
            'traitMethodsCount'     => count($this->traitMethods),
            'componentsCount'       => count($this->components)
        ];
    }

    /**
     * 获取组件方法信息
     */
    public function getComponentMethods(string $componentName): ?array
    {
        return $this->components[strtolower($componentName)]['methods'] ?? null;
    }

    /**
     * 获取组件数量
     */
    public function getComponentCount(): int
    {
        return count($this->components);
    }

    /**
     * 获取继承链信息
     */
    public function getInheritanceInfo(string $componentName): ?array
    {
        $className = 'AmisSchema\\Widget\\Layout\\' . ucfirst($componentName);
        return $this->inheritanceChain[$className] ?? null;
    }

    /**
     * 获取所有继承链
     */
    public function getAllInheritanceChains(): array
    {
        return $this->inheritanceChain;
    }
}

// 运行生成器
$generator = new ComponentHelperGenerator();

// 输出调试信息
$debugInfo = $generator->getDebugInfo();
echo "构建的继承链数量: " . $debugInfo['inheritanceChainCount'] . "\n";
echo "提取的trait方法数量: " . $debugInfo['traitMethodsCount'] . "\n";

// 测试一个具体的组件
$pageMethods = $generator->getComponentMethods('page');
if ($pageMethods) {
    echo "Page组件的方法数量: " . count($pageMethods) . "\n";
    echo "Page组件的方法列表: " . implode(', ', array_keys($pageMethods)) . "\n";
}

// 测试继承链
$pageInheritance = $generator->getInheritanceInfo('page');
if ($pageInheritance) {
    echo "Page组件继承链: parent=" . ($pageInheritance['parent'] ?? 'null') . "\n";
    echo "Page组件traits: " . implode(', ', $pageInheritance['traits'] ?? []) . "\n";
}

// 测试一个InputText组件
$inputTextMethods = $generator->getComponentMethods('inputtext');
if ($inputTextMethods) {
    echo "InputText组件的方法数量: " . count($inputTextMethods) . "\n";
} else {
    echo "未找到InputText组件\n";
}

// 生成助手函数文件
$helperFunctions = $generator->generateHelperFunctions();
file_put_contents(__DIR__ . '/../src/amis_helpers.php', $helperFunctions);

echo "助手函数已生成到: src/amis_helpers.php\n";
echo "生成了 " . $generator->getComponentCount() . " 个组件的助手函数\n";
