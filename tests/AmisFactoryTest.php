<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Tests;

use Jiangwang\AmisSchema\AmisFactory;
use Jiangwang\AmisSchema\Widget\Layout\Page;

/**
 * 测试 Amis 工厂类
 */
class AmisFactoryTest
{
    public function testFactoryCreatesPageInstance(): void
    {
        $factory = new AmisFactory();
        $page = $factory->Page();
        
        assert($page instanceof Page, 'Factory should create Page instance');
        assert($page->toArray()['type'] === 'page', 'Page should have correct type');
        
        echo "✓ Factory creates Page instance correctly\n";
    }
    
    public function testHelperFunction(): void
    {
        if (function_exists('amis')) {
            $page = amis()->Page(['title' => 'Test Page']);
            
            assert($page instanceof Page, 'Helper function should create Page instance');
            assert($page->toArray()['title'] === 'Test Page', 'Page should have correct title');
            
            echo "✓ Helper function works correctly\n";
        } else {
            echo "✗ Helper function not loaded\n";
        }
    }
    
    public function testChainedCalls(): void
    {
        $factory = new AmisFactory();
        $page = $factory->Page()
            ->title('My Page')
            ->subTitle('Page Subtitle')
            ->body(['content' => 'Hello World']);
        
        $array = $page->toArray();
        
        assert($array['type'] === 'page', 'Type should be page');
        assert($array['title'] === 'My Page', 'Title should be set');
        assert($array['subTitle'] === 'Page Subtitle', 'Subtitle should be set');
        assert($array['body']['content'] === 'Hello World', 'Body should be set');
        
        echo "✓ Chained calls work correctly\n";
    }
    
    public function testMultipleComponents(): void
    {
        $factory = new AmisFactory();
        
        $button = $factory->Button(['label' => 'Click me']);
        $container = $factory->Container();
        $page = $factory->Page();
        
        assert($button->toArray()['type'] === 'button', 'Button type should be correct');
        assert($container->toArray()['type'] === 'container', 'Container type should be correct');
        assert($page->toArray()['type'] === 'page', 'Page type should be correct');
        
        echo "✓ Multiple components creation works\n";
    }
    
    public function runTests(): void
    {
        echo "Running Amis Factory Tests...\n\n";
        
        try {
            $this->testFactoryCreatesPageInstance();
            $this->testHelperFunction();
            $this->testChainedCalls();
            $this->testMultipleComponents();
            
            echo "\n✅ All tests passed!\n";
        } catch (\Throwable $e) {
            echo "\n❌ Test failed: " . $e->getMessage() . "\n";
            echo "File: " . $e->getFile() . "\n";
            echo "Line: " . $e->getLine() . "\n";
        }
    }
}

// 如果直接运行此文件，执行测试
if (basename(__FILE__) === basename($_SERVER['SCRIPT_NAME'])) {
    require_once __DIR__ . '/../vendor/autoload.php';
    
    $test = new AmisFactoryTest();
    $test->runTests();
}
