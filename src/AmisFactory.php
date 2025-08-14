<?php
declare(strict_types=1);

namespace AmisSchema;

// Display 组件
use AmisSchema\Widget\Display\BarCode;
use AmisSchema\Widget\Display\Calendar;
use AmisSchema\Widget\Display\Card;
use AmisSchema\Widget\Display\Cards;
use AmisSchema\Widget\Display\Carousel;
use AmisSchema\Widget\Display\Chart;
use AmisSchema\Widget\Display\Code;
use AmisSchema\Widget\Display\Color;
use AmisSchema\Widget\Display\CRUD;
use AmisSchema\Widget\Display\Date;
use AmisSchema\Widget\Display\Each;
use AmisSchema\Widget\Display\GridNav;
use AmisSchema\Widget\Display\Html;
use AmisSchema\Widget\Display\Icon;
use AmisSchema\Widget\Display\Iframe;
use AmisSchema\Widget\Display\Image;
use AmisSchema\Widget\Display\Images;
use AmisSchema\Widget\Display\Json;
use AmisSchema\Widget\Display\Link;
use AmisSchema\Widget\Display\ListWidget;
use AmisSchema\Widget\Display\Log;
use AmisSchema\Widget\Display\Mapping;
use AmisSchema\Widget\Display\Markdown;
use AmisSchema\Widget\Display\Number;
use AmisSchema\Widget\Display\OfficeViewer;
use AmisSchema\Widget\Display\PDFViewer;
use AmisSchema\Widget\Display\Progress;
use AmisSchema\Widget\Display\Property;
use AmisSchema\Widget\Display\QRCode;
use AmisSchema\Widget\Display\Remark;
use AmisSchema\Widget\Display\SearchBox;
use AmisSchema\Widget\Display\Shape;
use AmisSchema\Widget\Display\Sparkline;
use AmisSchema\Widget\Display\Status;
use AmisSchema\Widget\Display\Steps;
use AmisSchema\Widget\Display\Table;
use AmisSchema\Widget\Display\Table2;
use AmisSchema\Widget\Display\TableView;
use AmisSchema\Widget\Display\Tag;
use AmisSchema\Widget\Display\Timeline;
use AmisSchema\Widget\Display\Tpl;
use AmisSchema\Widget\Display\Video;

// Extra 组件
use AmisSchema\Widget\Extra\Amis;
use AmisSchema\Widget\Extra\AmisRenderer;
use AmisSchema\Widget\Extra\Audio;
use AmisSchema\Widget\Extra\Avatar;
use AmisSchema\Widget\Extra\Badge;
use AmisSchema\Widget\Extra\Tasks;
use AmisSchema\Widget\Extra\WebComponent;
use AmisSchema\Widget\Extra\Wizard;

// Feedback 组件
use AmisSchema\Widget\Feedback\Alert;
use AmisSchema\Widget\Feedback\Dialog;
use AmisSchema\Widget\Feedback\Drawer;
use AmisSchema\Widget\Feedback\Spinner;
use AmisSchema\Widget\Feedback\Toast;

// Function 组件
use AmisSchema\Widget\Function\Action;
use AmisSchema\Widget\Function\AnchorNav;
use AmisSchema\Widget\Function\App;
use AmisSchema\Widget\Function\Breadcrumb;
use AmisSchema\Widget\Function\Button;
use AmisSchema\Widget\Function\ButtonGroup;
use AmisSchema\Widget\Function\Custom;
use AmisSchema\Widget\Function\DropDownButton;
use AmisSchema\Widget\Function\Nav;
use AmisSchema\Widget\Function\Service;
use AmisSchema\Widget\Function\TooltipWrapper;

// Input 组件
use AmisSchema\Widget\Input\ButtonGroupSelect;
use AmisSchema\Widget\Input\ButtonToolbar;
use AmisSchema\Widget\Input\ChainedSelect;
use AmisSchema\Widget\Input\ChartRadios;
use AmisSchema\Widget\Input\Checkbox;
use AmisSchema\Widget\Input\Checkboxes;
use AmisSchema\Widget\Input\Combo;
use AmisSchema\Widget\Input\ConditionBuilder;
use AmisSchema\Widget\Input\Control;
use AmisSchema\Widget\Input\DiffEditor;
use AmisSchema\Widget\Input\Editor;
use AmisSchema\Widget\Input\FieldSet;
use AmisSchema\Widget\Input\Form;
use AmisSchema\Widget\Input\FormItem;
use AmisSchema\Widget\Input\Formula;
use AmisSchema\Widget\Input\Group;
use AmisSchema\Widget\Input\Hidden;
use AmisSchema\Widget\Input\InputArray;
use AmisSchema\Widget\Input\InputCity;
use AmisSchema\Widget\Input\InputColor;
use AmisSchema\Widget\Input\InputDate;
use AmisSchema\Widget\Input\InputDateRange;
use AmisSchema\Widget\Input\InputDatetime;
use AmisSchema\Widget\Input\InputDatetimeRange;
use AmisSchema\Widget\Input\InputExcel;
use AmisSchema\Widget\Input\InputFile;
use AmisSchema\Widget\Input\InputFormula;
use AmisSchema\Widget\Input\InputGroup;
use AmisSchema\Widget\Input\InputImage;
use AmisSchema\Widget\Input\InputKV;
use AmisSchema\Widget\Input\InputKVS;
use AmisSchema\Widget\Input\InputMonth;
use AmisSchema\Widget\Input\InputMonthRange;
use AmisSchema\Widget\Input\InputNumber;
use AmisSchema\Widget\Input\InputPassword;
use AmisSchema\Widget\Input\InputQuarter;
use AmisSchema\Widget\Input\InputQuarterRange;
use AmisSchema\Widget\Input\InputRange;
use AmisSchema\Widget\Input\InputRating;
use AmisSchema\Widget\Input\InputRepeat;
use AmisSchema\Widget\Input\InputRichText;
use AmisSchema\Widget\Input\InputSignature;
use AmisSchema\Widget\Input\InputSubForm;
use AmisSchema\Widget\Input\InputTable;
use AmisSchema\Widget\Input\InputTag;
use AmisSchema\Widget\Input\InputText;
use AmisSchema\Widget\Input\InputTime;
use AmisSchema\Widget\Input\InputTimeRange;
use AmisSchema\Widget\Input\InputTree;
use AmisSchema\Widget\Input\InputVerificationCode;
use AmisSchema\Widget\Input\InputYear;
use AmisSchema\Widget\Input\InputYearRange;
use AmisSchema\Widget\Input\JsonSchema;
use AmisSchema\Widget\Input\JsonSchemaEditor;
use AmisSchema\Widget\Input\ListSelect;
use AmisSchema\Widget\Input\LocationPicker;
use AmisSchema\Widget\Input\MatrixCheckboxes;
use AmisSchema\Widget\Input\NestedSelect;
use AmisSchema\Widget\Input\Options;
use AmisSchema\Widget\Input\Picker;
use AmisSchema\Widget\Input\Radio;
use AmisSchema\Widget\Input\Radios;
use AmisSchema\Widget\Input\Select;
use AmisSchema\Widget\Input\StaticWidget;
use AmisSchema\Widget\Input\SwitchWidget;
use AmisSchema\Widget\Input\TabsTransfer;
use AmisSchema\Widget\Input\TabsTransferPicker;
use AmisSchema\Widget\Input\Textarea;
use AmisSchema\Widget\Input\Transfer;
use AmisSchema\Widget\Input\TransferPicker;
use AmisSchema\Widget\Input\TreeSelect;
use AmisSchema\Widget\Input\UUID;

// Layout 组件
use AmisSchema\Widget\Layout\Collapse;
use AmisSchema\Widget\Layout\Container;
use AmisSchema\Widget\Layout\Divider;
use AmisSchema\Widget\Layout\Flex;
use AmisSchema\Widget\Layout\Grid;
use AmisSchema\Widget\Layout\Grid2D;
use AmisSchema\Widget\Layout\HBox;
use AmisSchema\Widget\Layout\Page;
use AmisSchema\Widget\Layout\Pagination;
use AmisSchema\Widget\Layout\PaginationWrapper;
use AmisSchema\Widget\Layout\Panel;
use AmisSchema\Widget\Layout\Portlet;
use AmisSchema\Widget\Layout\Tabs;
use AmisSchema\Widget\Layout\Wrapper;

/**
 * Amis Schema 工厂类
 *
 * 提供简洁的组件创建方法，支持链式调用
 */
class AmisFactory
{
    // ======================= Display 显示组件 =======================

    /**
     * 创建 BarCode 条形码组件
     */
    public function BarCode(?array $attribute = []): BarCode
    {
        return BarCode::make($attribute);
    }

    /**
     * 创建 Calendar 日历组件
     */
    public function Calendar(?array $attribute = []): Calendar
    {
        return Calendar::make($attribute);
    }

    /**
     * 创建 Card 卡片组件
     */
    public function Card(?array $attribute = []): Card
    {
        return Card::make($attribute);
    }

    /**
     * 创建 Cards 卡片列表组件
     */
    public function Cards(?array $attribute = []): Cards
    {
        return Cards::make($attribute);
    }

    /**
     * 创建 Carousel 轮播图组件
     */
    public function Carousel(?array $attribute = []): Carousel
    {
        return Carousel::make($attribute);
    }

    /**
     * 创建 Chart 图表组件
     */
    public function Chart(?array $attribute = []): Chart
    {
        return Chart::make($attribute);
    }

    /**
     * 创建 Code 代码显示组件
     */
    public function Code(?array $attribute = []): Code
    {
        return Code::make($attribute);
    }

    /**
     * 创建 Color 颜色显示组件
     */
    public function Color(?array $attribute = []): Color
    {
        return Color::make($attribute);
    }

    /**
     * 创建 CRUD 增删改查组件
     */
    public function CRUD(?array $attribute = []): CRUD
    {
        return CRUD::make($attribute);
    }

    /**
     * 创建 Date 日期显示组件
     */
    public function Date(?array $attribute = []): Date
    {
        return Date::make($attribute);
    }

    /**
     * 创建 Each 遍历组件
     */
    public function Each(?array $attribute = []): Each
    {
        return Each::make($attribute);
    }

    /**
     * 创建 GridNav 宫格导航组件
     */
    public function GridNav(?array $attribute = []): GridNav
    {
        return GridNav::make($attribute);
    }

    /**
     * 创建 Html HTML组件
     */
    public function Html(?array $attribute = []): Html
    {
        return Html::make($attribute);
    }

    /**
     * 创建 Icon 图标组件
     */
    public function Icon(?array $attribute = []): Icon
    {
        return Icon::make($attribute);
    }

    /**
     * 创建 Iframe 嵌入页面组件
     */
    public function Iframe(?array $attribute = []): Iframe
    {
        return Iframe::make($attribute);
    }

    /**
     * 创建 Image 图片组件
     */
    public function Image(?array $attribute = []): Image
    {
        return Image::make($attribute);
    }

    /**
     * 创建 Images 图片集组件
     */
    public function Images(?array $attribute = []): Images
    {
        return Images::make($attribute);
    }

    /**
     * 创建 Json JSON显示组件
     */
    public function Json(?array $attribute = []): Json
    {
        return Json::make($attribute);
    }

    /**
     * 创建 Link 链接组件
     */
    public function Link(?array $attribute = []): Link
    {
        return Link::make($attribute);
    }

    /**
     * 创建 List 列表组件
     */
    public function List(?array $attribute = []): ListWidget
    {
        return ListWidget::make($attribute);
    }

    /**
     * 创建 Log 日志组件
     */
    public function Log(?array $attribute = []): Log
    {
        return Log::make($attribute);
    }

    /**
     * 创建 Mapping 映射组件
     */
    public function Mapping(?array $attribute = []): Mapping
    {
        return Mapping::make($attribute);
    }

    /**
     * 创建 Markdown Markdown组件
     */
    public function Markdown(?array $attribute = []): Markdown
    {
        return Markdown::make($attribute);
    }

    /**
     * 创建 Number 数字显示组件
     */
    public function Number(?array $attribute = []): Number
    {
        return Number::make($attribute);
    }

    /**
     * 创建 OfficeViewer Office文档预览组件
     */
    public function OfficeViewer(?array $attribute = []): OfficeViewer
    {
        return OfficeViewer::make($attribute);
    }

    /**
     * 创建 PDFViewer PDF预览组件
     */
    public function PDFViewer(?array $attribute = []): PDFViewer
    {
        return PDFViewer::make($attribute);
    }

    /**
     * 创建 Progress 进度条组件
     */
    public function Progress(?array $attribute = []): Progress
    {
        return Progress::make($attribute);
    }

    /**
     * 创建 Property 属性表组件
     */
    public function Property(?array $attribute = []): Property
    {
        return Property::make($attribute);
    }

    /**
     * 创建 QRCode 二维码组件
     */
    public function QRCode(?array $attribute = []): QRCode
    {
        return QRCode::make($attribute);
    }

    /**
     * 创建 Remark 备注组件
     */
    public function Remark(?array $attribute = []): Remark
    {
        return Remark::make($attribute);
    }

    /**
     * 创建 SearchBox 搜索框组件
     */
    public function SearchBox(?array $attribute = []): SearchBox
    {
        return SearchBox::make($attribute);
    }

    /**
     * 创建 Shape 形状组件
     */
    public function Shape(?array $attribute = []): Shape
    {
        return Shape::make($attribute);
    }

    /**
     * 创建 Sparkline 迷你图组件
     */
    public function Sparkline(?array $attribute = []): Sparkline
    {
        return Sparkline::make($attribute);
    }

    /**
     * 创建 Status 状态组件
     */
    public function Status(?array $attribute = []): Status
    {
        return Status::make($attribute);
    }

    /**
     * 创建 Steps 步骤条组件
     */
    public function Steps(?array $attribute = []): Steps
    {
        return Steps::make($attribute);
    }

    /**
     * 创建 Table 表格组件
     */
    public function Table(?array $attribute = []): Table
    {
        return Table::make($attribute);
    }

    /**
     * 创建 Table2 表格2组件
     */
    public function Table2(?array $attribute = []): Table2
    {
        return Table2::make($attribute);
    }

    /**
     * 创建 TableView 表格视图组件
     */
    public function TableView(?array $attribute = []): TableView
    {
        return TableView::make($attribute);
    }

    /**
     * 创建 Tag 标签组件
     */
    public function Tag(?array $attribute = []): Tag
    {
        return Tag::make($attribute);
    }

    /**
     * 创建 Timeline 时间轴组件
     */
    public function Timeline(?array $attribute = []): Timeline
    {
        return Timeline::make($attribute);
    }

    /**
     * 创建 Tpl 模板组件
     */
    public function Tpl(?array $attribute = []): Tpl
    {
        return Tpl::make($attribute);
    }

    /**
     * 创建 Video 视频组件
     */
    public function Video(?array $attribute = []): Video
    {
        return Video::make($attribute);
    }

    // ======================= Extra 扩展组件 =======================

    /**
     * 创建 Amis 页面组件
     */
    public function Amis(?array $attribute = []): Amis
    {
        return Amis::make($attribute);
    }

    /**
     * 创建 AmisRenderer Amis渲染器组件
     */
    public function AmisRenderer(?array $attribute = []): AmisRenderer
    {
        return AmisRenderer::make($attribute);
    }

    /**
     * 创建 Audio 音频组件
     */
    public function Audio(?array $attribute = []): Audio
    {
        return Audio::make($attribute);
    }

    /**
     * 创建 Avatar 头像组件
     */
    public function Avatar(?array $attribute = []): Avatar
    {
        return Avatar::make($attribute);
    }

    /**
     * 创建 Badge 徽标组件
     */
    public function Badge(?array $attribute = []): Badge
    {
        return Badge::make($attribute);
    }

    /**
     * 创建 Tasks 任务组件
     */
    public function Tasks(?array $attribute = []): Tasks
    {
        return Tasks::make($attribute);
    }

    /**
     * 创建 WebComponent Web组件
     */
    public function WebComponent(?array $attribute = []): WebComponent
    {
        return WebComponent::make($attribute);
    }

    /**
     * 创建 Wizard 向导组件
     */
    public function Wizard(?array $attribute = []): Wizard
    {
        return Wizard::make($attribute);
    }

    // ======================= Feedback 反馈组件 =======================

    /**
     * 创建 Alert 警告提示组件
     */
    public function Alert(?array $attribute = []): Alert
    {
        return Alert::make($attribute);
    }

    /**
     * 创建 Dialog 对话框组件
     */
    public function Dialog(?array $attribute = []): Dialog
    {
        return Dialog::make($attribute);
    }

    /**
     * 创建 Drawer 抽屉组件
     */
    public function Drawer(?array $attribute = []): Drawer
    {
        return Drawer::make($attribute);
    }

    /**
     * 创建 Spinner 加载组件
     */
    public function Spinner(?array $attribute = []): Spinner
    {
        return Spinner::make($attribute);
    }

    /**
     * 创建 Toast 轻提示组件
     */
    public function Toast(?array $attribute = []): Toast
    {
        return Toast::make($attribute);
    }

    // ======================= Function 功能组件 =======================

    /**
     * 创建 Action 行为按钮组件
     */
    public function Action(?array $attribute = []): Action
    {
        return Action::make($attribute);
    }

    /**
     * 创建 AnchorNav 锚点导航组件
     */
    public function AnchorNav(?array $attribute = []): AnchorNav
    {
        return AnchorNav::make($attribute);
    }

    /**
     * 创建 App 应用组件
     */
    public function App(?array $attribute = []): App
    {
        return App::make($attribute);
    }

    /**
     * 创建 Breadcrumb 面包屑组件
     */
    public function Breadcrumb(?array $attribute = []): Breadcrumb
    {
        return Breadcrumb::make($attribute);
    }

    /**
     * 创建 Button 按钮组件
     */
    public function Button(?array $attribute = []): Button
    {
        return Button::make($attribute);
    }

    /**
     * 创建 ButtonGroup 按钮组组件
     */
    public function ButtonGroup(?array $attribute = []): ButtonGroup
    {
        return ButtonGroup::make($attribute);
    }

    /**
     * 创建 Custom 自定义组件
     */
    public function Custom(?array $attribute = []): Custom
    {
        return Custom::make($attribute);
    }

    /**
     * 创建 DropDownButton 下拉按钮组件
     */
    public function DropDownButton(?array $attribute = []): DropDownButton
    {
        return DropDownButton::make($attribute);
    }

    /**
     * 创建 Nav 导航组件
     */
    public function Nav(?array $attribute = []): Nav
    {
        return Nav::make($attribute);
    }

    /**
     * 创建 Service 服务组件
     */
    public function Service(?array $attribute = []): Service
    {
        return Service::make($attribute);
    }

    /**
     * 创建 TooltipWrapper 文字提示组件
     */
    public function TooltipWrapper(?array $attribute = []): TooltipWrapper
    {
        return TooltipWrapper::make($attribute);
    }

    // ======================= Input 输入组件 =======================

    /**
     * 创建 ButtonGroupSelect 按钮组选择器组件
     */
    public function ButtonGroupSelect(?array $attribute = []): ButtonGroupSelect
    {
        return ButtonGroupSelect::make($attribute);
    }

    /**
     * 创建 ButtonToolbar 按钮工具栏组件
     */
    public function ButtonToolbar(?array $attribute = []): ButtonToolbar
    {
        return ButtonToolbar::make($attribute);
    }

    /**
     * 创建 ChainedSelect 链式选择器组件
     */
    public function ChainedSelect(?array $attribute = []): ChainedSelect
    {
        return ChainedSelect::make($attribute);
    }

    /**
     * 创建 ChartRadios 图表单选框组件
     */
    public function ChartRadios(?array $attribute = []): ChartRadios
    {
        return ChartRadios::make($attribute);
    }

    /**
     * 创建 Checkbox 复选框组件
     */
    public function Checkbox(?array $attribute = []): Checkbox
    {
        return Checkbox::make($attribute);
    }

    /**
     * 创建 Checkboxes 复选框组组件
     */
    public function Checkboxes(?array $attribute = []): Checkboxes
    {
        return Checkboxes::make($attribute);
    }

    /**
     * 创建 Combo 组合输入组件
     */
    public function Combo(?array $attribute = []): Combo
    {
        return Combo::make($attribute);
    }

    /**
     * 创建 ConditionBuilder 条件构造器组件
     */
    public function ConditionBuilder(?array $attribute = []): ConditionBuilder
    {
        return ConditionBuilder::make($attribute);
    }

    /**
     * 创建 Control 表单项包装组件
     */
    public function Control(?array $attribute = []): Control
    {
        return Control::make($attribute);
    }

    /**
     * 创建 DiffEditor 差异编辑器组件
     */
    public function DiffEditor(?array $attribute = []): DiffEditor
    {
        return DiffEditor::make($attribute);
    }

    /**
     * 创建 Editor 编辑器组件
     */
    public function Editor(?array $attribute = []): Editor
    {
        return Editor::make($attribute);
    }

    /**
     * 创建 FieldSet 字段集组件
     */
    public function FieldSet(?array $attribute = []): FieldSet
    {
        return FieldSet::make($attribute);
    }

    /**
     * 创建 Form 表单组件
     */
    public function Form(?array $attribute = []): Form
    {
        return Form::make($attribute);
    }

    /**
     * 创建 FormItem 表单项组件
     */
    public function FormItem(?array $attribute = []): FormItem
    {
        return FormItem::make($attribute);
    }

    /**
     * 创建 Formula 公式组件
     */
    public function Formula(?array $attribute = []): Formula
    {
        return Formula::make($attribute);
    }

    /**
     * 创建 Group 表单组组件
     */
    public function Group(?array $attribute = []): Group
    {
        return Group::make($attribute);
    }

    /**
     * 创建 Hidden 隐藏字段组件
     */
    public function Hidden(?array $attribute = []): Hidden
    {
        return Hidden::make($attribute);
    }

    /**
     * 创建 InputArray 数组输入组件
     */
    public function InputArray(?array $attribute = []): InputArray
    {
        return InputArray::make($attribute);
    }

    /**
     * 创建 InputCity 城市选择器组件
     */
    public function InputCity(?array $attribute = []): InputCity
    {
        return InputCity::make($attribute);
    }

    /**
     * 创建 InputColor 颜色选择器组件
     */
    public function InputColor(?array $attribute = []): InputColor
    {
        return InputColor::make($attribute);
    }

    /**
     * 创建 InputDate 日期选择器组件
     */
    public function InputDate(?array $attribute = []): InputDate
    {
        return InputDate::make($attribute);
    }

    /**
     * 创建 InputDateRange 日期范围选择器组件
     */
    public function InputDateRange(?array $attribute = []): InputDateRange
    {
        return InputDateRange::make($attribute);
    }

    /**
     * 创建 InputDatetime 日期时间选择器组件
     */
    public function InputDatetime(?array $attribute = []): InputDatetime
    {
        return InputDatetime::make($attribute);
    }

    /**
     * 创建 InputDatetimeRange 日期时间范围选择器组件
     */
    public function InputDatetimeRange(?array $attribute = []): InputDatetimeRange
    {
        return InputDatetimeRange::make($attribute);
    }

    /**
     * 创建 InputExcel Excel导入组件
     */
    public function InputExcel(?array $attribute = []): InputExcel
    {
        return InputExcel::make($attribute);
    }

    /**
     * 创建 InputFile 文件上传组件
     */
    public function InputFile(?array $attribute = []): InputFile
    {
        return InputFile::make($attribute);
    }

    /**
     * 创建 InputFormula 公式编辑器组件
     */
    public function InputFormula(?array $attribute = []): InputFormula
    {
        return InputFormula::make($attribute);
    }

    /**
     * 创建 InputGroup 输入组组件
     */
    public function InputGroup(?array $attribute = []): InputGroup
    {
        return InputGroup::make($attribute);
    }

    /**
     * 创建 InputImage 图片上传组件
     */
    public function InputImage(?array $attribute = []): InputImage
    {
        return InputImage::make($attribute);
    }

    /**
     * 创建 InputKV 键值对编辑器组件
     */
    public function InputKV(?array $attribute = []): InputKV
    {
        return InputKV::make($attribute);
    }

    /**
     * 创建 InputKVS 键值对集合编辑器组件
     */
    public function InputKVS(?array $attribute = []): InputKVS
    {
        return InputKVS::make($attribute);
    }

    /**
     * 创建 InputMonth 月份选择器组件
     */
    public function InputMonth(?array $attribute = []): InputMonth
    {
        return InputMonth::make($attribute);
    }

    /**
     * 创建 InputMonthRange 月份范围选择器组件
     */
    public function InputMonthRange(?array $attribute = []): InputMonthRange
    {
        return InputMonthRange::make($attribute);
    }

    /**
     * 创建 InputNumber 数字输入组件
     */
    public function InputNumber(?array $attribute = []): InputNumber
    {
        return InputNumber::make($attribute);
    }

    /**
     * 创建 InputPassword 密码输入组件
     */
    public function InputPassword(?array $attribute = []): InputPassword
    {
        return InputPassword::make($attribute);
    }

    /**
     * 创建 InputQuarter 季度选择器组件
     */
    public function InputQuarter(?array $attribute = []): InputQuarter
    {
        return InputQuarter::make($attribute);
    }

    /**
     * 创建 InputQuarterRange 季度范围选择器组件
     */
    public function InputQuarterRange(?array $attribute = []): InputQuarterRange
    {
        return InputQuarterRange::make($attribute);
    }

    /**
     * 创建 InputRange 滑块组件
     */
    public function InputRange(?array $attribute = []): InputRange
    {
        return InputRange::make($attribute);
    }

    /**
     * 创建 InputRating 评分组件
     */
    public function InputRating(?array $attribute = []): InputRating
    {
        return InputRating::make($attribute);
    }

    /**
     * 创建 InputRepeat 重复频率选择器组件
     */
    public function InputRepeat(?array $attribute = []): InputRepeat
    {
        return InputRepeat::make($attribute);
    }

    /**
     * 创建 InputRichText 富文本编辑器组件
     */
    public function InputRichText(?array $attribute = []): InputRichText
    {
        return InputRichText::make($attribute);
    }

    /**
     * 创建 InputSignature 签名组件
     */
    public function InputSignature(?array $attribute = []): InputSignature
    {
        return InputSignature::make($attribute);
    }

    /**
     * 创建 InputSubForm 子表单组件
     */
    public function InputSubForm(?array $attribute = []): InputSubForm
    {
        return InputSubForm::make($attribute);
    }

    /**
     * 创建 InputTable 表格编辑组件
     */
    public function InputTable(?array $attribute = []): InputTable
    {
        return InputTable::make($attribute);
    }

    /**
     * 创建 InputTag 标签选择器组件
     */
    public function InputTag(?array $attribute = []): InputTag
    {
        return InputTag::make($attribute);
    }

    /**
     * 创建 InputText 文本框组件
     */
    public function InputText(?array $attribute = []): InputText
    {
        return InputText::make($attribute);
    }

    /**
     * 创建 InputTime 时间选择器组件
     */
    public function InputTime(?array $attribute = []): InputTime
    {
        return InputTime::make($attribute);
    }

    /**
     * 创建 InputTimeRange 时间范围选择器组件
     */
    public function InputTimeRange(?array $attribute = []): InputTimeRange
    {
        return InputTimeRange::make($attribute);
    }

    /**
     * 创建 InputTree 树型选择器组件
     */
    public function InputTree(?array $attribute = []): InputTree
    {
        return InputTree::make($attribute);
    }

    /**
     * 创建 InputVerificationCode 验证码输入组件
     */
    public function InputVerificationCode(?array $attribute = []): InputVerificationCode
    {
        return InputVerificationCode::make($attribute);
    }

    /**
     * 创建 InputYear 年份选择器组件
     */
    public function InputYear(?array $attribute = []): InputYear
    {
        return InputYear::make($attribute);
    }

    /**
     * 创建 InputYearRange 年份范围选择器组件
     */
    public function InputYearRange(?array $attribute = []): InputYearRange
    {
        return InputYearRange::make($attribute);
    }

    /**
     * 创建 JsonSchema JSON模式编辑器组件
     */
    public function JsonSchema(?array $attribute = []): JsonSchema
    {
        return JsonSchema::make($attribute);
    }

    /**
     * 创建 JsonSchemaEditor JSON模式可视化编辑器组件
     */
    public function JsonSchemaEditor(?array $attribute = []): JsonSchemaEditor
    {
        return JsonSchemaEditor::make($attribute);
    }

    /**
     * 创建 ListSelect 列表选择器组件
     */
    public function ListSelect(?array $attribute = []): ListSelect
    {
        return ListSelect::make($attribute);
    }

    /**
     * 创建 LocationPicker 地理位置选择器组件
     */
    public function LocationPicker(?array $attribute = []): LocationPicker
    {
        return LocationPicker::make($attribute);
    }

    /**
     * 创建 MatrixCheckboxes 矩阵复选框组件
     */
    public function MatrixCheckboxes(?array $attribute = []): MatrixCheckboxes
    {
        return MatrixCheckboxes::make($attribute);
    }

    /**
     * 创建 NestedSelect 级联选择器组件
     */
    public function NestedSelect(?array $attribute = []): NestedSelect
    {
        return NestedSelect::make($attribute);
    }

    /**
     * 创建 Options 选项表单项组件
     */
    public function Options(?array $attribute = []): Options
    {
        return Options::make($attribute);
    }

    /**
     * 创建 Picker 列表选择器组件
     */
    public function Picker(?array $attribute = []): Picker
    {
        return Picker::make($attribute);
    }

    /**
     * 创建 Radio 单选框组件
     */
    public function Radio(?array $attribute = []): Radio
    {
        return Radio::make($attribute);
    }

    /**
     * 创建 Radios 单选框组组件
     */
    public function Radios(?array $attribute = []): Radios
    {
        return Radios::make($attribute);
    }

    /**
     * 创建 Select 下拉选择器组件
     */
    public function Select(?array $attribute = []): Select
    {
        return Select::make($attribute);
    }

    /**
     * 创建 StaticWidget 静态展示组件
     */
    public function Static(?array $attribute = []): StaticWidget
    {
        return StaticWidget::make($attribute);
    }

    /**
     * 创建 SwitchWidget 开关组件
     */
    public function Switch(?array $attribute = []): SwitchWidget
    {
        return SwitchWidget::make($attribute);
    }

    /**
     * 创建 TabsTransfer 组合穿梭器组件
     */
    public function TabsTransfer(?array $attribute = []): TabsTransfer
    {
        return TabsTransfer::make($attribute);
    }

    /**
     * 创建 TabsTransferPicker 组合穿梭选择器组件
     */
    public function TabsTransferPicker(?array $attribute = []): TabsTransferPicker
    {
        return TabsTransferPicker::make($attribute);
    }

    /**
     * 创建 Textarea 多行文本框组件
     */
    public function Textarea(?array $attribute = []): Textarea
    {
        return Textarea::make($attribute);
    }

    /**
     * 创建 Transfer 穿梭器组件
     */
    public function Transfer(?array $attribute = []): Transfer
    {
        return Transfer::make($attribute);
    }

    /**
     * 创建 TransferPicker 穿梭选择器组件
     */
    public function TransferPicker(?array $attribute = []): TransferPicker
    {
        return TransferPicker::make($attribute);
    }

    /**
     * 创建 TreeSelect 树型下拉选择器组件
     */
    public function TreeSelect(?array $attribute = []): TreeSelect
    {
        return TreeSelect::make($attribute);
    }

    /**
     * 创建 UUID 隐藏字段组件
     */
    public function UUID(?array $attribute = []): UUID
    {
        return UUID::make($attribute);
    }

    // ======================= Layout 布局组件 =======================

    /**
     * 创建 Collapse 折叠面板组件
     */
    public function Collapse(?array $attribute = []): Collapse
    {
        return Collapse::make($attribute);
    }

    /**
     * 创建 Container 容器组件
     */
    public function Container(?array $attribute = []): Container
    {
        return Container::make($attribute);
    }

    /**
     * 创建 Divider 分割线组件
     */
    public function Divider(?array $attribute = []): Divider
    {
        return Divider::make($attribute);
    }

    /**
     * 创建 Flex 弹性布局组件
     */
    public function Flex(?array $attribute = []): Flex
    {
        return Flex::make($attribute);
    }

    /**
     * 创建 Grid 网格布局组件
     */
    public function Grid(?array $attribute = []): Grid
    {
        return Grid::make($attribute);
    }

    /**
     * 创建 Grid2D 二维网格布局组件
     */
    public function Grid2D(?array $attribute = []): Grid2D
    {
        return Grid2D::make($attribute);
    }

    /**
     * 创建 HBox 水平布局组件
     */
    public function HBox(?array $attribute = []): HBox
    {
        return HBox::make($attribute);
    }

    /**
     * 创建 Page 页面组件
     */
    public function Page(?array $attribute = []): Page
    {
        return Page::make($attribute);
    }

    /**
     * 创建 Pagination 分页组件
     */
    public function Pagination(?array $attribute = []): Pagination
    {
        return Pagination::make($attribute);
    }

    /**
     * 创建 PaginationWrapper 分页包装组件
     */
    public function PaginationWrapper(?array $attribute = []): PaginationWrapper
    {
        return PaginationWrapper::make($attribute);
    }

    /**
     * 创建 Panel 面板组件
     */
    public function Panel(?array $attribute = []): Panel
    {
        return Panel::make($attribute);
    }

    /**
     * 创建 Portlet 门户组件
     */
    public function Portlet(?array $attribute = []): Portlet
    {
        return Portlet::make($attribute);
    }

    /**
     * 创建 Tabs 选项卡组件
     */
    public function Tabs(?array $attribute = []): Tabs
    {
        return Tabs::make($attribute);
    }

    /**
     * 创建 Wrapper 包装器组件
     */
    public function Wrapper(?array $attribute = []): Wrapper
    {
        return Wrapper::make($attribute);
    }
}
