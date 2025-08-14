# Amis Schema PHP SDK

一个用于构建 Amis JSON Schema 的 PHP SDK。

## 安装

通过 Composer 安装：

```bash
composer require jiangwang/amis-schema
```

## 快速开始

### 方式一：使用工厂类（推荐）

```php
// 使用全局函数和链式调用
$page = amis()->Page()
    ->title('用户管理')
    ->subTitle('系统用户管理页面')
    ->body([
        amis()->Form()->body([
            amis()->InputText()->name('username')->label('用户名'),
            amis()->Button()->label('提交')->type('submit')
        ])
    ]);
```

### 方式二：使用静态方法

```php
use AmisSchema\Widget\Layout\Page;
use AmisSchema\Widget\Function\Button;

$page = Page::make()
    ->title('我的页面')
    ->body([
        Button::make()->label('点击我')
    ]);
```

### 使用工厂类

```php
// 直接实例化
$factory = new AmisFactory();
$page = $factory->Page()->title('我的页面');

// 使用全局函数（推荐）
$page = amis()->Page()->title('我的页面');
```

### 完整示例

```php
$userPage = amis()->Page()
    ->title('用户管理')
    ->body([
        amis()->Form()
            ->title('搜索条件')
            ->body([
                amis()->InputText()
                    ->name('keywords')
                    ->label('关键字'),
                amis()->Select()
                    ->name('status')
                    ->label('状态')
                    ->options([
                        ['label' => '启用', 'value' => 1],
                        ['label' => '禁用', 'value' => 0]
                    ]),
                amis()->Button()
                    ->label('搜索')
                    ->type('submit')
            ]),
    ]);
```

## 特性

- **链式调用**：所有组件都支持链式调用，让代码更简洁
- **类型安全**：基于 PHP 8.2+ 的严格类型
- **智能补全**：通过 PHPDoc 注释提供 IDE 智能补全
- **灵活配置**：支持数组和对象两种初始化方式
- **JSON 输出**：直接转换为 Amis 所需的 JSON 格式
- **工厂模式**：提供便捷的工厂类快速创建组件

## 许可证

MIT License

## 贡献

欢迎提交 Pull Request 和 Issue！
