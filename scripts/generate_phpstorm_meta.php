<?php
declare(strict_types=1);

/**
 * PhpStorm Meta 自动生成器
 * 
 * 此生成器从 Widget 文件夹下的 .phpstorm.meta.php 文件中读取配置信息，
 * 动态学习映射关系，分析全局帮助函数的参数位置，自动生成对应的 expectedArguments 配置，
 * 然后将 Widget 配置、Definition 配置和全局函数配置分类合并写入到根目录的 .phpstorm.meta.php 文件中
 */

class PhpStormMetaGenerator
{
    private string $projectRoot;
    private string $widgetMetaPath;
    private string $helpersFilePath;
    private string $rootMetaPath;
    private array $registerArgumentsSets;
    private array $expectedArguments;
    private array $dynamicMappings; // 动态读取的映射关系

    public function __construct()
    {
        $this->projectRoot = dirname(__DIR__);
        $this->widgetMetaPath = $this->projectRoot . '/src/Widget/.phpstorm.meta.php';
        $this->helpersFilePath = $this->projectRoot . '/src/amis_helpers.php';
        $this->rootMetaPath = $this->projectRoot . '/.phpstorm.meta.php';
        
        $this->registerArgumentsSets = [];
        $this->expectedArguments = [];
        $this->dynamicMappings = [];
    }

    public function generate(): void
    {
        echo "开始生成 PhpStorm Meta 配置...\n";
        
        // 1. 读取 Widget 文件夹下的 meta 配置
        $this->parseWidgetMeta();
        echo "解析 Widget Meta 配置完成\n";
        
        // 2. 分析全局帮助函数
        $helperFunctions = $this->analyzeHelperFunctions();
        echo "找到 " . count($helperFunctions) . " 个组件函数\n";
        
        // 3. 生成全局函数的 expectedArguments 配置
        $this->generateHelperExpectedArguments($helperFunctions);
        echo "生成全局组件函数配置完成\n";
        
        // 4. 写入合并后的 meta 文件
        $this->writeGeneratedMetaFile();
        echo "成功写入根目录 .phpstorm.meta.php 文件\n";
    }

    private function parseWidgetMeta(): void
    {
        if (!file_exists($this->widgetMetaPath)) {
            throw new RuntimeException("Widget Meta 文件不存在: {$this->widgetMetaPath}");
        }

        $content = file_get_contents($this->widgetMetaPath);
        
        // 解析 registerArgumentsSet
        if (preg_match_all("/registerArgumentsSet\('([^']+)',\s*([^)]+)\);/", $content, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $setName = $match[1];
                $values = $match[2];
                $this->registerArgumentsSets[$setName] = "registerArgumentsSet('{$setName}', {$values});";
            }
        }
        
        // 解析 expectedArguments 并动态提取映射关系
        $lines = explode("\n", $content);
        foreach ($lines as $line) {
            $line = trim($line);
            if (str_starts_with($line, 'expectedArguments(') && str_ends_with($line, ');')) {
                $this->expectedArguments[] = $line;
                
                // 动态提取映射关系
                $this->extractMappingFromLine($line);
            }
        }
    }

    private function extractMappingFromLine(string $line): void
    {
        // 解析 expectedArguments 行来提取映射关系
        // 格式: expectedArguments(\AmisSchema\Widget\[Type]\[ClassName]::[methodName](), [position], [values]);
        if (preg_match('/expectedArguments\(\\\\AmisSchema\\\\Widget\\\\([^:]+)::(\w+)\(\)/', $line, $matches)) {
            $widgetClass = $matches[1]; // 如: Layout\Grid
            $methodName = $matches[2];   // 如: gap
            
            // 提取类名
            $classParts = explode('\\', $widgetClass);
            $className = end($classParts); // 如: Grid
            
            // 建立函数名到Widget类型的映射
            $functionName = 'Amis' . $className;
            $this->dynamicMappings['functionToWidget'][$functionName] = $widgetClass;
            
            // 建立参数名到方法名的映射
            $paramKey = strtolower($methodName);
            if (!isset($this->dynamicMappings['paramToMethod'][$paramKey])) {
                $this->dynamicMappings['paramToMethod'][$paramKey] = [];
            }
            if (!in_array($methodName, $this->dynamicMappings['paramToMethod'][$paramKey])) {
                $this->dynamicMappings['paramToMethod'][$paramKey][] = $methodName;
            }
        }
    }

    private function analyzeHelperFunctions(): array
    {
        if (!file_exists($this->helpersFilePath)) {
            throw new RuntimeException("帮助函数文件不存在: {$this->helpersFilePath}");
        }

        $content = file_get_contents($this->helpersFilePath);
        $functions = [];

        // 匹配函数定义
        if (preg_match_all('/function\s+(Amis\w+)\s*\(([^{]*)\{/s', $content, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $functionName = $match[1];
                $paramString = $match[2];
                
                // 解析参数
                $params = $this->parseParameters($paramString);
                
                // 根据函数名推断对应的Widget类型
                $widgetType = $this->inferWidgetType($functionName);
                
                if ($widgetType) {
                    $functions[$functionName] = [
                        'widget_type' => $widgetType,
                        'parameters' => $params,
                    ];
                }
            }
        }

        return $functions;
    }

    private function parseParameters(string $paramString): array
    {
        $params = [];
        
        // 清理参数字符串
        $paramString = preg_replace('/\s+/', ' ', trim($paramString));
        $paramString = rtrim($paramString, ',');
        
        if (empty($paramString)) {
            return $params;
        }

        // 按逗号分割参数，但要考虑默认值中的逗号
        $paramParts = [];
        $currentParam = '';
        $depth = 0;
        $inString = false;
        $stringChar = '';
        
        for ($i = 0; $i < strlen($paramString); $i++) {
            $char = $paramString[$i];
            
            if (($char === '"' || $char === "'") && !$inString) {
                $inString = true;
                $stringChar = $char;
            } elseif ($char === $stringChar && $inString) {
                $inString = false;
                $stringChar = '';
            } elseif (!$inString) {
                if ($char === '(' || $char === '[' || $char === '{') {
                    $depth++;
                } elseif ($char === ')' || $char === ']' || $char === '}') {
                    $depth--;
                } elseif ($char === ',' && $depth === 0) {
                    $paramParts[] = trim($currentParam);
                    $currentParam = '';
                    continue;
                }
            }
            
            $currentParam .= $char;
        }
        
        if (!empty(trim($currentParam))) {
            $paramParts[] = trim($currentParam);
        }

        foreach ($paramParts as $index => $param) {
            $param = trim($param);
            if (empty($param)) continue;
            
            // 提取参数名
            if (preg_match('/mixed\s+\$(\w+)/', $param, $matches)) {
                $paramName = $matches[1];
                $params[$index] = [
                    'name' => $paramName,
                    'raw' => $param,
                ];
            }
        }

        return $params;
    }

    private function inferWidgetType(string $functionName): ?string
    {
        // 首先使用动态映射
        if (isset($this->dynamicMappings['functionToWidget'][$functionName])) {
            return $this->dynamicMappings['functionToWidget'][$functionName];
        }
        
        // 如果动态映射没有找到，尝试从函数名推断
        if (!str_starts_with($functionName, 'Amis')) {
            return null;
        }
        
        $widgetName = substr($functionName, 4); // 去掉 "Amis" 前缀
        
        // 查找已知的映射中是否有匹配的
        foreach ($this->dynamicMappings['functionToWidget'] as $knownFunc => $widgetClass) {
            $knownWidget = substr($knownFunc, 4);
            if ($knownWidget === $widgetName) {
                return $widgetClass;
            }
        }
        
        return null;
    }

    private function generateHelperExpectedArguments(array $helperFunctions): void
    {
        foreach ($helperFunctions as $functionName => $functionInfo) {
            $widgetType = $functionInfo['widget_type'];
            $parameters = $functionInfo['parameters'];
            
            // 查找对应Widget类的expectedArguments配置
            $widgetClassName = "\\AmisSchema\\Widget\\{$widgetType}";
            
            foreach ($this->expectedArguments as $expectedArg) {
                if (str_contains($expectedArg, $widgetClassName . '::')) {
                    // 解析Widget方法配置
                    if (preg_match('/expectedArguments\(\\\\AmisSchema\\\\Widget\\\\[^:]+::(\w+)\(\), (\d+), (.+)\)/', $expectedArg, $matches)) {
                        $methodName = $matches[1];
                        $paramPosition = (int)$matches[2];
                        $values = $matches[3];
                        
                        // 查找对应的参数
                        $targetParamIndex = $this->findParameterForMethod($parameters, $methodName);
                        
                        if ($targetParamIndex !== null) {
                            $helperExpectedArg = "expectedArguments(\\{$functionName}(), {$targetParamIndex}, {$values});";
                            
                            // 避免重复添加
                            if (!in_array($helperExpectedArg, $this->expectedArguments)) {
                                $this->expectedArguments[] = $helperExpectedArg;
                            }
                        }
                    }
                }
            }
        }
    }

    private function findParameterForMethod(array $parameters, string $methodName): ?int
    {
        $methodLower = strtolower($methodName);
        
        // 使用动态读取的映射关系构建参数映射
        $paramMappings = [];
        
        // 从动态映射中构建参数映射
        if (isset($this->dynamicMappings['paramToMethod'])) {
            foreach ($this->dynamicMappings['paramToMethod'] as $paramKey => $methods) {
                foreach ($methods as $method) {
                    $methodKey = strtolower($method);
                    if (!isset($paramMappings[$methodKey])) {
                        $paramMappings[$methodKey] = [];
                    }
                    if (!in_array($paramKey, $paramMappings[$methodKey])) {
                        $paramMappings[$methodKey][] = $paramKey;
                    }
                }
            }
        }
        
        // 查找匹配的参数
        foreach ($parameters as $index => $param) {
            $paramLower = strtolower($param['name']);
            
            // 直接匹配
            if ($paramLower === $methodLower) {
                return $index;
            }
            
            // 通过动态映射匹配
            if (isset($paramMappings[$methodLower]) && in_array($paramLower, $paramMappings[$methodLower])) {
                return $index;
            }
            
            // 反向匹配
            if (isset($paramMappings[$paramLower]) && in_array($methodLower, $paramMappings[$paramLower])) {
                return $index;
            }
        }
        
        return null;
    }

    private function writeGeneratedMetaFile(): void
    {
        $content = "<?php\ndeclare(strict_types=1);\n\nnamespace PHPSTORM_META {\n\n";
        
        // 添加 registerArgumentsSet
        foreach ($this->registerArgumentsSets as $line) {
            $content .= "    {$line}\n";
        }
        
        $content .= "\n";
        
        // 分类整理 expectedArguments
        $widgetArgs = [];
        $definitionArgs = [];
        $helperArgs = [];
        
        foreach ($this->expectedArguments as $line) {
            if (str_contains($line, '\\AmisSchema\\Widget\\')) {
                $widgetArgs[] = $line;
            } elseif (str_contains($line, '\\AmisSchema\\Definition\\')) {
                $definitionArgs[] = $line;
            } elseif (str_contains($line, '\\Amis')) {
                $helperArgs[] = $line;
            }
        }
        
        // 添加Widget方法配置
        if (!empty($widgetArgs)) {
            $content .= "    // Widget 类方法配置\n";
            foreach ($widgetArgs as $line) {
                $content .= "    {$line}\n";
            }
            $content .= "\n";
        }
        
        // 添加Definition类配置
        if (!empty($definitionArgs)) {
            $content .= "    // Definition 类配置\n";
            foreach ($definitionArgs as $line) {
                $content .= "    {$line}\n";
            }
            $content .= "\n";
        }
        
        // 添加全局函数配置
        if (!empty($helperArgs)) {
            $content .= "    // 全局组件函数配置\n";
            foreach ($helperArgs as $line) {
                $content .= "    {$line}\n";
            }
        }
        
        $content .= "}\n";
        
        if (file_put_contents($this->rootMetaPath, $content) === false) {
            throw new RuntimeException("无法写入文件: {$this->rootMetaPath}");
        }
    }
}

// 运行生成器
try {
    $generator = new PhpStormMetaGenerator();
    $generator->generate();
    echo "生成完成！\n";
} catch (Exception $e) {
    echo "错误: " . $e->getMessage() . "\n";
    exit(1);
}
