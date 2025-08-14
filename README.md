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

### 方式三：Flutter 风格的函数调用（推荐）

```php
// 使用 Flutter 风格的全局函数，参数更直观
$page = AmisPage(
    title: '用户管理',
    body: [
        AmisForm(
            title: '搜索条件',
            body: [
                AmisInputText(
                    name: 'keywords',
                    label: '关键字',
                    placeholder: '请输入关键字'
                ),
                AmisSelect(
                    name: 'status',
                    label: '状态',
                    options: [
                        ['label' => '启用', 'value' => 1],
                        ['label' => '禁用', 'value' => 0]
                    ]
                ),
                AmisButton(
                    label: '搜索',
                    actionType: 'submit',
                    level: 'primary'
                )
            ]
        )
    ]
);
```

## 三种调用方式对比

| 特性 | 工厂类调用 | 静态方法调用 | Flutter 风格调用 |
|------|------------|--------------|------------------|
| **代码风格** | 链式调用 | 链式调用 | 函数式调用 |
| **参数传递** | 方法调用 | 方法调用 | 命名参数 |
| **可读性** | 良好 | 良好 | 优秀 |
| **IDE 支持** | 完整 | 完整 | 完整 |
| **性能** | 高 | 高 | 高 |
| **推荐度** | ⭐⭐⭐⭐ | ⭐⭐⭐ | ⭐⭐⭐⭐⭐ |

### 选择建议

- **Flutter 风格调用**：推荐使用，参数清晰直观，特别适合复杂组件配置
- **工厂类调用**：适合喜欢链式调用的开发者，代码简洁
- **静态方法调用**：适合习惯传统 OOP 风格的开发者

## 许可证

MIT License

## 贡献

欢迎提交 Pull Request 和 Issue！
