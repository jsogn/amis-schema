# Amis Schema PHP SDK

一个用于构建 Amis JSON Schema 的 PHP SDK，提供了面向对象的组件创建方式和便捷的工厂函数。

## 安装

通过 Composer 安装：

```bash
composer require jiangwang/amis-schema
```

## 快速开始

### 使用工厂助手函数（推荐）

```php
<?php
require_once 'vendor/autoload.php';

// 创建一个完整的页面
$page = amis()->Page()
    ->title('用户管理')
    ->subTitle('管理系统用户信息')
    ->body([
        amis()->Container()->body([
            amis()->Button()
                ->label('新增用户')
                ->level('primary')
                ->actionType('dialog'),
            
            amis()->Panel()
                ->title('用户列表')
                ->body([
                    amis()->Form()->body([
                        amis()->FormItem()
                            ->type('input-text')
                            ->label('用户名')
                            ->name('username'),
                        
                        amis()->FormItem()
                            ->type('input-email')
                            ->label('邮箱')
                            ->name('email'),
                    ]),
                ])
        ])
    ]);

// 输出 JSON
echo $page->toJson();
```

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

## 可用组件

### 布局组件 (Layout)

- `amis()->Page()` - 页面组件
- `amis()->Container()` - 容器组件
- `amis()->Panel()` - 面板组件
- `amis()->Wrapper()` - 包装器组件
- `amis()->Flex()` - 弹性布局组件
- `amis()->Grid()` - 网格布局组件
- `amis()->Grid2D()` - 二维网格布局组件
- `amis()->HBox()` - 水平布局组件
- `amis()->Tabs()` - 标签页组件
- `amis()->Collapse()` - 折叠面板组件
- `amis()->Divider()` - 分割线组件
- `amis()->Portlet()` - 门户组件
- `amis()->Pagination()` - 分页组件
- `amis()->PaginationWrapper()` - 分页包装器组件

### 功能组件 (Function)

- `amis()->Button()` - 按钮组件
- `amis()->Action()` - 行为按钮组件
- `amis()->ButtonGroup()` - 按钮组组件
- `amis()->DropDownButton()` - 下拉按钮组件
- `amis()->Nav()` - 导航组件
- `amis()->AnchorNav()` - 锚点导航组件
- `amis()->Breadcrumb()` - 面包屑组件
- `amis()->App()` - 应用组件
- `amis()->Service()` - 服务组件
- `amis()->Custom()` - 自定义组件
- `amis()->TooltipWrapper()` - 提示框包装器组件

### 表单组件 (Input)

- `amis()->Form()` - 表单组件
- `amis()->FormItem()` - 表单项组件

### 显示组件 (Display)

- `amis()->Icon()` - 图标组件
- `amis()->Remark()` - 备注组件

### 额外组件 (Extra)

- `amis()->Badge()` - 徽标组件

## 特性

- **链式调用**：所有组件都支持链式调用，让代码更简洁
- **类型安全**：基于 PHP 8.2+ 的严格类型
- **智能补全**：通过 PHPDoc 注释提供 IDE 智能补全
- **灵活配置**：支持数组和对象两种初始化方式
- **JSON 输出**：直接转换为 Amis 所需的 JSON 格式

## 使用示例

### 创建复杂的表单页面

```php
$formPage = amis()->Page()
    ->title('用户注册')
    ->body([
        amis()->Form()
            ->api('POST /api/users')
            ->body([
                amis()->FormItem()
                    ->type('input-text')
                    ->name('username')
                    ->label('用户名')
                    ->required(true)
                    ->validations([
                        'minLength' => 3,
                        'maxLength' => 20
                    ]),
                
                amis()->FormItem()
                    ->type('input-email')
                    ->name('email')
                    ->label('邮箱')
                    ->required(true),
                
                amis()->FormItem()
                    ->type('input-password')
                    ->name('password')
                    ->label('密码')
                    ->required(true),
                
                amis()->ButtonGroup()->buttons([
                    amis()->Button()
                        ->label('提交')
                        ->type('submit')
                        ->level('primary'),
                    
                    amis()->Button()
                        ->label('重置')
                        ->type('reset')
                ])
            ])
    ]);

echo $formPage->toJson();
```

### 创建带导航的应用

```php
$app = amis()->App()
    ->brandName('我的应用')
    ->logo('https://example.com/logo.png')
    ->header(
        amis()->Nav()
            ->stacked(false)
            ->links([
                ['label' => '首页', 'to' => '/'],
                ['label' => '用户', 'to' => '/users'],
                ['label' => '设置', 'to' => '/settings']
            ])
    )
    ->pages([
        [
            'url' => '/',
            'schema' => amis()->Page()
                ->title('欢迎页面')
                ->body('欢迎使用我的应用！')
        ],
        [
            'url' => '/users',
            'schema' => amis()->Page()
                ->title('用户管理')
                ->body('用户列表内容...')
        ]
    ]);

echo $app->toJson();
```

## 开发

### 运行测试

```bash
php tests/AmisFactoryTest.php
```

### 代码格式化

```bash
composer run cs-fix
```

### 静态分析

```bash
composer run analyse
```

## 许可证

MIT License

## 贡献

欢迎提交 Pull Request 和 Issue！
