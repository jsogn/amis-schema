<?php

class AmisFactoryGenerator
{
    private array $components = [];
    
    public function __construct()
    {
        $this->scanAllComponents();
    }
    
    /**
     * 扫描所有组件
     */
    private function scanAllComponents(): void
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
        
        echo "发现了 " . count($this->components) . " 个组件\n";
    }
    
    /**
     * 扫描目录
     */
    private function scanDirectory(string $directory): void
    {
        $files = glob($directory . '/*.php');
        
        foreach ($files as $file) {
            $this->parseComponent($file);
        }
    }
    
    /**
     * 解析组件文件
     */
    private function parseComponent(string $file): void
    {
        $content = file_get_contents($file);
        
        // 提取命名空间
        if (!preg_match('/namespace\s+([^;]+);/', $content, $namespaceMatch)) {
            return;
        }
        $namespace = $namespaceMatch[1];
        
        // 提取类名
        if (!preg_match('/class\s+(\w+)/', $content, $classMatch)) {
            return;
        }
        $className = $classMatch[1];
        
        // 跳过抽象类和接口
        if (preg_match('/abstract\s+class/', $content) || preg_match('/interface\s+\w+/', $content)) {
            return;
        }
        
        $fullClassName = $namespace . '\\' . $className;
        
        // 确定组件类别
        $category = $this->determineCategory($fullClassName);
        
        $this->components[$className] = [
            'className' => $className,
            'fullClassName' => $fullClassName,
            'category' => $category,
            'file' => $file
        ];
    }
    
    /**
     * 确定组件类别
     */
    private function determineCategory(string $fullClassName): string
    {
        if (strpos($fullClassName, '\\Display\\') !== false) {
            return 'Display';
        } elseif (strpos($fullClassName, '\\Input\\') !== false) {
            return 'Input';
        } elseif (strpos($fullClassName, '\\Layout\\') !== false) {
            return 'Layout';
        } elseif (strpos($fullClassName, '\\Function\\') !== false) {
            return 'Function';
        } elseif (strpos($fullClassName, '\\Feedback\\') !== false) {
            return 'Feedback';
        } elseif (strpos($fullClassName, '\\Extra\\') !== false) {
            return 'Extra';
        }
        
        return 'Other';
    }
    
    /**
     * 生成工厂类
     */
    public function generateFactory(): string
    {
        $output = "<?php\n";
        $output .= "declare(strict_types=1);\n\n";
        $output .= "namespace AmisSchema;\n\n";
        $output .= "/**\n";
        $output .= " * Amis 组件工厂类\n";
        $output .= " * \n";
        $output .= " * 提供静态方法来创建各种 Amis 组件\n";
        $output .= " * 自动生成时间: " . date('Y-m-d H:i:s') . "\n";
        $output .= " * 组件总数: " . count($this->components) . "\n";
        $output .= " */\n";
        $output .= "class AmisFactory\n";
        $output .= "{\n";
        
        // 按类别分组
        $categorizedComponents = [];
        foreach ($this->components as $component) {
            $categorizedComponents[$component['category']][] = $component;
        }
        
        // 为每个类别生成方法
        foreach ($categorizedComponents as $category => $components) {
            // 排序组件
            usort($components, function($a, $b) {
                return $a['className'] <=> $b['className'];
            });
            
            $output .= "\n    // ==================== {$category} 组件 ====================\n\n";
            
            foreach ($components as $component) {
                $output .= $this->generateComponentMethod($component);
            }
        }
        
        $output .= "}\n";
        
        return $output;
    }
    
    /**
     * 生成单个组件的工厂方法
     */
    private function generateComponentMethod(array $component): string
    {
        $className = $component['className'];
        $fullClassName = $component['fullClassName'];
        
        // 生成方法名 - 处理特殊情况
        $methodName = $this->generateMethodName($className);
        
        $output = "    /**\n";
        $output .= "     * 创建 {$className} 组件\n";
        $output .= "     * \n";
        $output .= "     * @param array \$attributes 组件属性\n";
        $output .= "     * @return \\{$fullClassName}\n";
        $output .= "     */\n";
        $output .= "    public static function {$methodName}(array \$attributes = []): \\{$fullClassName}\n";
        $output .= "    {\n";
        $output .= "        return \\{$fullClassName}::make(\$attributes);\n";
        $output .= "    }\n\n";
        
        return $output;
    }
    
    /**
     * 生成方法名 - 处理特殊情况
     */
    private function generateMethodName(string $className): string
    {
        // 1. 如果类名以 Widget 结尾，去掉 Widget 后缀
        if (str_ends_with($className, 'Widget')) {
            $className = substr($className, 0, -6); // 去掉 'Widget' (6个字符)
        }
        
        return $className;
    }
    
    /**
     * 保存工厂类到文件
     */
    public function saveFactory(string $filePath): void
    {
        $content = $this->generateFactory();
        file_put_contents($filePath, $content);
        echo "AmisFactory 已生成到: {$filePath}\n";
        echo "生成了 " . count($this->components) . " 个组件的工厂方法\n";
    }
}

// 运行生成器
$generator = new AmisFactoryGenerator();
$generator->saveFactory(__DIR__ . '/../src/AmisFactory.php');
