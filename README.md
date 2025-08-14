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
// 使用全局函数
$page = amis()->Page([
    'title' => '用户管理',
    'subTitle' => '系统用户管理页面'
])->body([
    amis()->Form()->body([
        amis()->InputText(['name' => 'username', 'label' => '用户名']),
        amis()->Button(['label' => '提交', 'type' => 'submit'])
    ])
]);

echo json_encode($page, JSON_UNESCAPED_UNICODE);
```

### 方式二：使用静态方法

```php
use AmisSchema\Widget\Layout\Page;
use AmisSchema\Widget\Function\Button;

$page = Page::make()
    ->title('我的页面')
    ->body([
        Button::make(['label' => '点击我'])
    ]);

echo $page->toJson();
```

## 工厂类

`AmisFactory` 工厂类提供了便捷的方法来创建所有 Amis 组件，包含 **151个组件**：

- **Display 显示组件** (42个)：`BarCode()`, `Calendar()`, `Chart()`, `Table()`, `Image()` 等
- **Input 输入组件** (71个)：`InputText()`, `Select()`, `Form()`, `Checkbox()` 等  
- **Layout 布局组件** (14个)：`Page()`, `Container()`, `Grid()`, `Flex()` 等
- **Function 功能组件** (11个)：`Button()`, `Nav()`, `Action()`, `Service()` 等
- **Feedback 反馈组件** (5个)：`Dialog()`, `Alert()`, `Toast()`, `Drawer()` 等
- **Extra 扩展组件** (8个)：`Audio()`, `Video()`, `Avatar()`, `Badge()` 等

### 使用工厂类

```php
// 直接实例化
$factory = new AmisFactory();
$page = $factory->Page(['title' => '我的页面']);

// 使用全局函数（推荐）
$page = amis()->Page(['title' => '我的页面']);
```

### 完整示例

```php
// 构建一个完整的用户管理页面
$userPage = amis()->Page(['title' => '用户管理'])->body([
    // 搜索表单
    amis()->Form(['title' => '搜索条件'])->body([
        amis()->InputText(['name' => 'keywords', 'label' => '关键字']),
        amis()->Select(['name' => 'status', 'label' => '状态', 'options' => [
            ['label' => '启用', 'value' => 1],
            ['label' => '禁用', 'value' => 0]
        ]]),
        amis()->Button(['label' => '搜索', 'type' => 'submit'])
    ]),
    
    // 数据表格
    amis()->CRUD(['api' => '/api/users'])->columns([
        ['name' => 'id', 'label' => 'ID'],
        ['name' => 'username', 'label' => '用户名'],
        ['name' => 'email', 'label' => '邮箱'],
        [
            'type' => 'operation',
            'label' => '操作',
            'buttons' => [
                amis()->Button(['label' => '编辑']),
                amis()->Button(['label' => '删除', 'level' => 'danger'])
            ]
        ]
    ])
]);

echo json_encode($userPage, JSON_UNESCAPED_UNICODE);
```

查看更多示例：
- [工厂类测试](examples/factory_test.php)
- [用户管理页面](examples/user_management.php)
- [工厂类文档](docs/AmisFactory.md)

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
