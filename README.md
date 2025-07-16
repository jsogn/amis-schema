# Amis Schema PHP SDK

一个用于构建 Amis JSON Schema 的 PHP SDK，提供了面向对象的组件创建方式和便捷的工厂函数。

## 安装

通过 Composer 安装：

```bash
composer require jiangwang/amis-schema
```

## 快速开始

### 使用静态方法

```php
use Jiangwang\AmisSchema\Widget\Layout\Page;
use Jiangwang\AmisSchema\Widget\Function\Button;

$page = Page::make()
    ->title('我的页面')
    ->body([
        Button::make(['label' => '点击我'])
    ]);

echo $page->toJson();
```

## 特性

- **链式调用**：所有组件都支持链式调用，让代码更简洁
- **类型安全**：基于 PHP 8.2+ 的严格类型
- **智能补全**：通过 PHPDoc 注释提供 IDE 智能补全
- **灵活配置**：支持数组和对象两种初始化方式
- **JSON 输出**：直接转换为 Amis 所需的 JSON 格式

## 许可证

MIT License

## 贡献

欢迎提交 Pull Request 和 Issue！
