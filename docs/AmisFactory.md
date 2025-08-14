# AmisFactory 工厂类使用文档

AmisFactory 是一个强大的工厂类，提供了便捷的方法来创建所有 Amis Schema 组件。

## 基本用法

### 1. 直接实例化

```php
use AmisSchema\AmisFactory;

$factory = new AmisFactory();
$page = $factory->Page(['title' => '我的页面']);
```

### 2. 使用全局函数（推荐）

```php
// 使用全局 amis() 函数
$page = amis()->Page(['title' => '我的页面']);
```

## 组件分类

工厂类按功能将组件分为以下几类：

### Display 显示组件 (42个)
- `BarCode()` - 条形码
- `Calendar()` - 日历
- `Card()` - 卡片
- `Cards()` - 卡片列表
- `Carousel()` - 轮播图
- `Chart()` - 图表
- `Code()` - 代码显示
- `Color()` - 颜色显示
- `CRUD()` - 增删改查
- `Date()` - 日期显示
- `Each()` - 遍历
- `GridNav()` - 宫格导航
- `Html()` - HTML
- `Icon()` - 图标
- `Iframe()` - 嵌入页面
- `Image()` - 图片
- `Images()` - 图片集
- `Json()` - JSON显示
- `Link()` - 链接
- `ListDisplay()` - 列表
- `Log()` - 日志
- `Mapping()` - 映射
- `Markdown()` - Markdown
- `Number()` - 数字显示
- `OfficeViewer()` - Office文档预览
- `PDFViewer()` - PDF预览
- `Progress()` - 进度条
- `Property()` - 属性表
- `QRCode()` - 二维码
- `Remark()` - 备注
- `SearchBox()` - 搜索框
- `Shape()` - 形状
- `Sparkline()` - 迷你图
- `Status()` - 状态
- `Steps()` - 步骤条
- `Table()` - 表格
- `Table2()` - 表格2
- `TableView()` - 表格视图
- `Tag()` - 标签
- `Timeline()` - 时间轴
- `Tpl()` - 模板
- `Video()` - 视频

### Input 输入组件 (71个)
- `ButtonGroupSelect()` - 按钮组选择器
- `ButtonToolbar()` - 按钮工具栏
- `ChainedSelect()` - 链式选择器
- `ChartRadios()` - 图表单选框
- `Checkbox()` - 复选框
- `Checkboxes()` - 复选框组
- `Combo()` - 组合输入
- `ConditionBuilder()` - 条件构造器
- `Control()` - 表单项包装
- `DiffEditor()` - 差异编辑器
- `Editor()` - 编辑器
- `FieldSet()` - 字段集
- `Form()` - 表单
- `FormItem()` - 表单项
- `Formula()` - 公式
- `Group()` - 表单组
- `Hidden()` - 隐藏字段
- `InputArray()` - 数组输入
- `InputCity()` - 城市选择器
- `InputColor()` - 颜色选择器
- `InputDate()` - 日期选择器
- `InputDateRange()` - 日期范围选择器
- `InputDatetime()` - 日期时间选择器
- `InputDatetimeRange()` - 日期时间范围选择器
- `InputExcel()` - Excel导入
- `InputFile()` - 文件上传
- `InputFormula()` - 公式编辑器
- `InputGroup()` - 输入组
- `InputImage()` - 图片上传
- `InputKV()` - 键值对编辑器
- `InputKVS()` - 键值对集合编辑器
- `InputMonth()` - 月份选择器
- `InputMonthRange()` - 月份范围选择器
- `InputNumber()` - 数字输入
- `InputPassword()` - 密码输入
- `InputQuarter()` - 季度选择器
- `InputQuarterRange()` - 季度范围选择器
- `InputRange()` - 滑块
- `InputRating()` - 评分
- `InputRepeat()` - 重复频率选择器
- `InputRichText()` - 富文本编辑器
- `InputSignature()` - 签名
- `InputSubForm()` - 子表单
- `InputTable()` - 表格编辑
- `InputTag()` - 标签选择器
- `InputText()` - 文本框
- `InputTime()` - 时间选择器
- `InputTimeRange()` - 时间范围选择器
- `InputTree()` - 树型选择器
- `InputVerificationCode()` - 验证码输入
- `InputYear()` - 年份选择器
- `InputYearRange()` - 年份范围选择器
- `JsonSchema()` - JSON模式编辑器
- `JsonSchemaEditor()` - JSON模式可视化编辑器
- `ListSelect()` - 列表选择器
- `LocationPicker()` - 地理位置选择器
- `MatrixCheckboxes()` - 矩阵复选框
- `NestedSelect()` - 级联选择器
- `Options()` - 选项表单项
- `Picker()` - 列表选择器
- `Radio()` - 单选框
- `Radios()` - 单选框组
- `Select()` - 下拉选择器
- `StaticControl()` - 静态展示
- `SwitchControl()` - 开关
- `TabsTransfer()` - 组合穿梭器
- `TabsTransferPicker()` - 组合穿梭选择器
- `Textarea()` - 多行文本框
- `Transfer()` - 穿梭器
- `TransferPicker()` - 穿梭选择器
- `TreeSelect()` - 树型下拉选择器
- `UUID()` - 隐藏字段

### Layout 布局组件 (14个)
- `Collapse()` - 折叠面板
- `Container()` - 容器
- `Divider()` - 分割线
- `Flex()` - 弹性布局
- `Grid()` - 网格布局
- `Grid2D()` - 二维网格布局
- `HBox()` - 水平布局
- `Page()` - 页面
- `Pagination()` - 分页
- `PaginationWrapper()` - 分页包装
- `Panel()` - 面板
- `Portlet()` - 门户
- `Tabs()` - 选项卡
- `Wrapper()` - 包装器

### Function 功能组件 (11个)
- `Action()` - 行为按钮
- `AnchorNav()` - 锚点导航
- `App()` - 应用
- `Breadcrumb()` - 面包屑
- `Button()` - 按钮
- `ButtonGroup()` - 按钮组
- `Custom()` - 自定义
- `DropDownButton()` - 下拉按钮
- `Nav()` - 导航
- `Service()` - 服务
- `TooltipWrapper()` - 文字提示

### Feedback 反馈组件 (5个)
- `Alert()` - 警告提示
- `Dialog()` - 对话框
- `Drawer()` - 抽屉
- `Spinner()` - 加载
- `Toast()` - 轻提示

### Extra 扩展组件 (8个)
- `Amis()` - 页面
- `AmisRenderer()` - Amis渲染器
- `Audio()` - 音频
- `Avatar()` - 头像
- `Badge()` - 徽标
- `Tasks()` - 任务
- `WebComponent()` - Web组件
- `Wizard()` - 向导

## 完整示例

```php
<?php
require_once 'vendor/autoload.php';

// 创建一个完整的页面
$schema = amis()->Page([
    'title' => '用户管理',
    'subTitle' => '系统用户管理页面'
])->body([
    // 搜索表单
    amis()->Form([
        'title' => '搜索条件',
        'mode' => 'horizontal'
    ])->body([
        amis()->InputText(['name' => 'keywords', 'label' => '关键字']),
        amis()->Select(['name' => 'status', 'label' => '状态', 'options' => [
            ['label' => '启用', 'value' => 1],
            ['label' => '禁用', 'value' => 0]
        ]]),
        amis()->Button(['label' => '搜索', 'type' => 'submit'])
    ]),
    
    // 用户列表
    amis()->CRUD([
        'api' => '/api/users',
        'headerToolbar' => [
            amis()->Button(['label' => '新增用户', 'type' => 'button'])
        ]
    ])->columns([
        ['name' => 'id', 'label' => 'ID'],
        ['name' => 'username', 'label' => '用户名'],
        ['name' => 'email', 'label' => '邮箱'],
        ['name' => 'status', 'label' => '状态', 'type' => 'mapping', 'map' => [
            '1' => '<span class="label label-success">启用</span>',
            '0' => '<span class="label label-danger">禁用</span>'
        ]],
        [
            'type' => 'operation',
            'label' => '操作',
            'buttons' => [
                amis()->Button(['label' => '编辑', 'type' => 'button']),
                amis()->Button(['label' => '删除', 'type' => 'button', 'level' => 'danger'])
            ]
        ]
    ])
]);

// 输出 JSON
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
```

## 链式调用

工厂类创建的组件支持链式调用：

```php
$form = amis()->Form()
    ->title('用户表单')
    ->mode('horizontal')
    ->body([
        amis()->InputText()->name('username')->label('用户名')->required(true),
        amis()->InputPassword()->name('password')->label('密码')->required(true),
        amis()->InputEmail()->name('email')->label('邮箱')
    ]);
```

## 注意事项

1. 所有组件方法都接受一个可选的 `$attribute` 数组参数
2. 方法名与组件类名相同，除了 `ListWidget` 使用 `ListDisplay()` 方法（避免与PHP关键字冲突）
3. 支持通过全局 `amis()` 函数快速访问工厂实例
4. 所有组件都支持链式调用和数组配置两种方式
