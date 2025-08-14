<?php
declare(strict_types=1);

namespace AmisSchema;

/**
 * Amis 组件工厂类
 * 
 * 提供静态方法来创建各种 Amis 组件
 * 自动生成时间: 2025-08-14 19:14:35
 * 组件总数: 152
 */
class AmisFactory
{

    // ==================== Display 组件 ====================

    /**
     * 创建 BarCode 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\BarCode
     */
    public static function BarCode(array $attributes = []): \AmisSchema\Widget\Display\BarCode
    {
        return \AmisSchema\Widget\Display\BarCode::make($attributes);
    }

    /**
     * 创建 CRUD 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\CRUD
     */
    public static function CRUD(array $attributes = []): \AmisSchema\Widget\Display\CRUD
    {
        return \AmisSchema\Widget\Display\CRUD::make($attributes);
    }

    /**
     * 创建 Calendar 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Calendar
     */
    public static function Calendar(array $attributes = []): \AmisSchema\Widget\Display\Calendar
    {
        return \AmisSchema\Widget\Display\Calendar::make($attributes);
    }

    /**
     * 创建 Card 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Card
     */
    public static function Card(array $attributes = []): \AmisSchema\Widget\Display\Card
    {
        return \AmisSchema\Widget\Display\Card::make($attributes);
    }

    /**
     * 创建 Cards 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Cards
     */
    public static function Cards(array $attributes = []): \AmisSchema\Widget\Display\Cards
    {
        return \AmisSchema\Widget\Display\Cards::make($attributes);
    }

    /**
     * 创建 Carousel 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Carousel
     */
    public static function Carousel(array $attributes = []): \AmisSchema\Widget\Display\Carousel
    {
        return \AmisSchema\Widget\Display\Carousel::make($attributes);
    }

    /**
     * 创建 Chart 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Chart
     */
    public static function Chart(array $attributes = []): \AmisSchema\Widget\Display\Chart
    {
        return \AmisSchema\Widget\Display\Chart::make($attributes);
    }

    /**
     * 创建 Code 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Code
     */
    public static function Code(array $attributes = []): \AmisSchema\Widget\Display\Code
    {
        return \AmisSchema\Widget\Display\Code::make($attributes);
    }

    /**
     * 创建 Color 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Color
     */
    public static function Color(array $attributes = []): \AmisSchema\Widget\Display\Color
    {
        return \AmisSchema\Widget\Display\Color::make($attributes);
    }

    /**
     * 创建 Date 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Date
     */
    public static function Date(array $attributes = []): \AmisSchema\Widget\Display\Date
    {
        return \AmisSchema\Widget\Display\Date::make($attributes);
    }

    /**
     * 创建 Each 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Each
     */
    public static function Each(array $attributes = []): \AmisSchema\Widget\Display\Each
    {
        return \AmisSchema\Widget\Display\Each::make($attributes);
    }

    /**
     * 创建 GridNav 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\GridNav
     */
    public static function GridNav(array $attributes = []): \AmisSchema\Widget\Display\GridNav
    {
        return \AmisSchema\Widget\Display\GridNav::make($attributes);
    }

    /**
     * 创建 Html 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Html
     */
    public static function Html(array $attributes = []): \AmisSchema\Widget\Display\Html
    {
        return \AmisSchema\Widget\Display\Html::make($attributes);
    }

    /**
     * 创建 Icon 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Icon
     */
    public static function Icon(array $attributes = []): \AmisSchema\Widget\Display\Icon
    {
        return \AmisSchema\Widget\Display\Icon::make($attributes);
    }

    /**
     * 创建 Iframe 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Iframe
     */
    public static function Iframe(array $attributes = []): \AmisSchema\Widget\Display\Iframe
    {
        return \AmisSchema\Widget\Display\Iframe::make($attributes);
    }

    /**
     * 创建 Image 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Image
     */
    public static function Image(array $attributes = []): \AmisSchema\Widget\Display\Image
    {
        return \AmisSchema\Widget\Display\Image::make($attributes);
    }

    /**
     * 创建 Images 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Images
     */
    public static function Images(array $attributes = []): \AmisSchema\Widget\Display\Images
    {
        return \AmisSchema\Widget\Display\Images::make($attributes);
    }

    /**
     * 创建 Json 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Json
     */
    public static function Json(array $attributes = []): \AmisSchema\Widget\Display\Json
    {
        return \AmisSchema\Widget\Display\Json::make($attributes);
    }

    /**
     * 创建 Link 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Link
     */
    public static function Link(array $attributes = []): \AmisSchema\Widget\Display\Link
    {
        return \AmisSchema\Widget\Display\Link::make($attributes);
    }

    /**
     * 创建 ListWidget 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\ListWidget
     */
    public static function List(array $attributes = []): \AmisSchema\Widget\Display\ListWidget
    {
        return \AmisSchema\Widget\Display\ListWidget::make($attributes);
    }

    /**
     * 创建 Log 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Log
     */
    public static function Log(array $attributes = []): \AmisSchema\Widget\Display\Log
    {
        return \AmisSchema\Widget\Display\Log::make($attributes);
    }

    /**
     * 创建 Mapping 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Mapping
     */
    public static function Mapping(array $attributes = []): \AmisSchema\Widget\Display\Mapping
    {
        return \AmisSchema\Widget\Display\Mapping::make($attributes);
    }

    /**
     * 创建 Markdown 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Markdown
     */
    public static function Markdown(array $attributes = []): \AmisSchema\Widget\Display\Markdown
    {
        return \AmisSchema\Widget\Display\Markdown::make($attributes);
    }

    /**
     * 创建 Number 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Number
     */
    public static function Number(array $attributes = []): \AmisSchema\Widget\Display\Number
    {
        return \AmisSchema\Widget\Display\Number::make($attributes);
    }

    /**
     * 创建 OfficeViewer 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\OfficeViewer
     */
    public static function OfficeViewer(array $attributes = []): \AmisSchema\Widget\Display\OfficeViewer
    {
        return \AmisSchema\Widget\Display\OfficeViewer::make($attributes);
    }

    /**
     * 创建 PDFViewer 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\PDFViewer
     */
    public static function PDFViewer(array $attributes = []): \AmisSchema\Widget\Display\PDFViewer
    {
        return \AmisSchema\Widget\Display\PDFViewer::make($attributes);
    }

    /**
     * 创建 Progress 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Progress
     */
    public static function Progress(array $attributes = []): \AmisSchema\Widget\Display\Progress
    {
        return \AmisSchema\Widget\Display\Progress::make($attributes);
    }

    /**
     * 创建 Property 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Property
     */
    public static function Property(array $attributes = []): \AmisSchema\Widget\Display\Property
    {
        return \AmisSchema\Widget\Display\Property::make($attributes);
    }

    /**
     * 创建 QRCode 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\QRCode
     */
    public static function QRCode(array $attributes = []): \AmisSchema\Widget\Display\QRCode
    {
        return \AmisSchema\Widget\Display\QRCode::make($attributes);
    }

    /**
     * 创建 Remark 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Remark
     */
    public static function Remark(array $attributes = []): \AmisSchema\Widget\Display\Remark
    {
        return \AmisSchema\Widget\Display\Remark::make($attributes);
    }

    /**
     * 创建 SearchBox 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\SearchBox
     */
    public static function SearchBox(array $attributes = []): \AmisSchema\Widget\Display\SearchBox
    {
        return \AmisSchema\Widget\Display\SearchBox::make($attributes);
    }

    /**
     * 创建 Shape 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Shape
     */
    public static function Shape(array $attributes = []): \AmisSchema\Widget\Display\Shape
    {
        return \AmisSchema\Widget\Display\Shape::make($attributes);
    }

    /**
     * 创建 Sparkline 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Sparkline
     */
    public static function Sparkline(array $attributes = []): \AmisSchema\Widget\Display\Sparkline
    {
        return \AmisSchema\Widget\Display\Sparkline::make($attributes);
    }

    /**
     * 创建 Status 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Status
     */
    public static function Status(array $attributes = []): \AmisSchema\Widget\Display\Status
    {
        return \AmisSchema\Widget\Display\Status::make($attributes);
    }

    /**
     * 创建 Steps 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Steps
     */
    public static function Steps(array $attributes = []): \AmisSchema\Widget\Display\Steps
    {
        return \AmisSchema\Widget\Display\Steps::make($attributes);
    }

    /**
     * 创建 Table 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Table
     */
    public static function Table(array $attributes = []): \AmisSchema\Widget\Display\Table
    {
        return \AmisSchema\Widget\Display\Table::make($attributes);
    }

    /**
     * 创建 Table2 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Table2
     */
    public static function Table2(array $attributes = []): \AmisSchema\Widget\Display\Table2
    {
        return \AmisSchema\Widget\Display\Table2::make($attributes);
    }

    /**
     * 创建 TableView 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\TableView
     */
    public static function TableView(array $attributes = []): \AmisSchema\Widget\Display\TableView
    {
        return \AmisSchema\Widget\Display\TableView::make($attributes);
    }

    /**
     * 创建 Tag 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Tag
     */
    public static function Tag(array $attributes = []): \AmisSchema\Widget\Display\Tag
    {
        return \AmisSchema\Widget\Display\Tag::make($attributes);
    }

    /**
     * 创建 Timeline 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Timeline
     */
    public static function Timeline(array $attributes = []): \AmisSchema\Widget\Display\Timeline
    {
        return \AmisSchema\Widget\Display\Timeline::make($attributes);
    }

    /**
     * 创建 Tpl 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Tpl
     */
    public static function Tpl(array $attributes = []): \AmisSchema\Widget\Display\Tpl
    {
        return \AmisSchema\Widget\Display\Tpl::make($attributes);
    }

    /**
     * 创建 Video 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Display\Video
     */
    public static function Video(array $attributes = []): \AmisSchema\Widget\Display\Video
    {
        return \AmisSchema\Widget\Display\Video::make($attributes);
    }


    // ==================== Input 组件 ====================

    /**
     * 创建 ButtonGroupSelect 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\ButtonGroupSelect
     */
    public static function ButtonGroupSelect(array $attributes = []): \AmisSchema\Widget\Input\ButtonGroupSelect
    {
        return \AmisSchema\Widget\Input\ButtonGroupSelect::make($attributes);
    }

    /**
     * 创建 ButtonToolbar 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\ButtonToolbar
     */
    public static function ButtonToolbar(array $attributes = []): \AmisSchema\Widget\Input\ButtonToolbar
    {
        return \AmisSchema\Widget\Input\ButtonToolbar::make($attributes);
    }

    /**
     * 创建 ChainedSelect 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\ChainedSelect
     */
    public static function ChainedSelect(array $attributes = []): \AmisSchema\Widget\Input\ChainedSelect
    {
        return \AmisSchema\Widget\Input\ChainedSelect::make($attributes);
    }

    /**
     * 创建 ChartRadios 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\ChartRadios
     */
    public static function ChartRadios(array $attributes = []): \AmisSchema\Widget\Input\ChartRadios
    {
        return \AmisSchema\Widget\Input\ChartRadios::make($attributes);
    }

    /**
     * 创建 Checkbox 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Checkbox
     */
    public static function Checkbox(array $attributes = []): \AmisSchema\Widget\Input\Checkbox
    {
        return \AmisSchema\Widget\Input\Checkbox::make($attributes);
    }

    /**
     * 创建 Checkboxes 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Checkboxes
     */
    public static function Checkboxes(array $attributes = []): \AmisSchema\Widget\Input\Checkboxes
    {
        return \AmisSchema\Widget\Input\Checkboxes::make($attributes);
    }

    /**
     * 创建 Combo 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Combo
     */
    public static function Combo(array $attributes = []): \AmisSchema\Widget\Input\Combo
    {
        return \AmisSchema\Widget\Input\Combo::make($attributes);
    }

    /**
     * 创建 ConditionBuilder 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\ConditionBuilder
     */
    public static function ConditionBuilder(array $attributes = []): \AmisSchema\Widget\Input\ConditionBuilder
    {
        return \AmisSchema\Widget\Input\ConditionBuilder::make($attributes);
    }

    /**
     * 创建 Control 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Control
     */
    public static function Control(array $attributes = []): \AmisSchema\Widget\Input\Control
    {
        return \AmisSchema\Widget\Input\Control::make($attributes);
    }

    /**
     * 创建 DiffEditor 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\DiffEditor
     */
    public static function DiffEditor(array $attributes = []): \AmisSchema\Widget\Input\DiffEditor
    {
        return \AmisSchema\Widget\Input\DiffEditor::make($attributes);
    }

    /**
     * 创建 Editor 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Editor
     */
    public static function Editor(array $attributes = []): \AmisSchema\Widget\Input\Editor
    {
        return \AmisSchema\Widget\Input\Editor::make($attributes);
    }

    /**
     * 创建 FieldSet 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\FieldSet
     */
    public static function FieldSet(array $attributes = []): \AmisSchema\Widget\Input\FieldSet
    {
        return \AmisSchema\Widget\Input\FieldSet::make($attributes);
    }

    /**
     * 创建 Form 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Form
     */
    public static function Form(array $attributes = []): \AmisSchema\Widget\Input\Form
    {
        return \AmisSchema\Widget\Input\Form::make($attributes);
    }

    /**
     * 创建 FormItem 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\FormItem
     */
    public static function FormItem(array $attributes = []): \AmisSchema\Widget\Input\FormItem
    {
        return \AmisSchema\Widget\Input\FormItem::make($attributes);
    }

    /**
     * 创建 Formula 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Formula
     */
    public static function Formula(array $attributes = []): \AmisSchema\Widget\Input\Formula
    {
        return \AmisSchema\Widget\Input\Formula::make($attributes);
    }

    /**
     * 创建 Group 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Group
     */
    public static function Group(array $attributes = []): \AmisSchema\Widget\Input\Group
    {
        return \AmisSchema\Widget\Input\Group::make($attributes);
    }

    /**
     * 创建 Hidden 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Hidden
     */
    public static function Hidden(array $attributes = []): \AmisSchema\Widget\Input\Hidden
    {
        return \AmisSchema\Widget\Input\Hidden::make($attributes);
    }

    /**
     * 创建 InputArray 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputArray
     */
    public static function InputArray(array $attributes = []): \AmisSchema\Widget\Input\InputArray
    {
        return \AmisSchema\Widget\Input\InputArray::make($attributes);
    }

    /**
     * 创建 InputCity 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputCity
     */
    public static function InputCity(array $attributes = []): \AmisSchema\Widget\Input\InputCity
    {
        return \AmisSchema\Widget\Input\InputCity::make($attributes);
    }

    /**
     * 创建 InputColor 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputColor
     */
    public static function InputColor(array $attributes = []): \AmisSchema\Widget\Input\InputColor
    {
        return \AmisSchema\Widget\Input\InputColor::make($attributes);
    }

    /**
     * 创建 InputDate 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputDate
     */
    public static function InputDate(array $attributes = []): \AmisSchema\Widget\Input\InputDate
    {
        return \AmisSchema\Widget\Input\InputDate::make($attributes);
    }

    /**
     * 创建 InputDateRange 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputDateRange
     */
    public static function InputDateRange(array $attributes = []): \AmisSchema\Widget\Input\InputDateRange
    {
        return \AmisSchema\Widget\Input\InputDateRange::make($attributes);
    }

    /**
     * 创建 InputDatetime 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputDatetime
     */
    public static function InputDatetime(array $attributes = []): \AmisSchema\Widget\Input\InputDatetime
    {
        return \AmisSchema\Widget\Input\InputDatetime::make($attributes);
    }

    /**
     * 创建 InputDatetimeRange 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputDatetimeRange
     */
    public static function InputDatetimeRange(array $attributes = []): \AmisSchema\Widget\Input\InputDatetimeRange
    {
        return \AmisSchema\Widget\Input\InputDatetimeRange::make($attributes);
    }

    /**
     * 创建 InputExcel 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputExcel
     */
    public static function InputExcel(array $attributes = []): \AmisSchema\Widget\Input\InputExcel
    {
        return \AmisSchema\Widget\Input\InputExcel::make($attributes);
    }

    /**
     * 创建 InputFile 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputFile
     */
    public static function InputFile(array $attributes = []): \AmisSchema\Widget\Input\InputFile
    {
        return \AmisSchema\Widget\Input\InputFile::make($attributes);
    }

    /**
     * 创建 InputFormula 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputFormula
     */
    public static function InputFormula(array $attributes = []): \AmisSchema\Widget\Input\InputFormula
    {
        return \AmisSchema\Widget\Input\InputFormula::make($attributes);
    }

    /**
     * 创建 InputGroup 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputGroup
     */
    public static function InputGroup(array $attributes = []): \AmisSchema\Widget\Input\InputGroup
    {
        return \AmisSchema\Widget\Input\InputGroup::make($attributes);
    }

    /**
     * 创建 InputImage 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputImage
     */
    public static function InputImage(array $attributes = []): \AmisSchema\Widget\Input\InputImage
    {
        return \AmisSchema\Widget\Input\InputImage::make($attributes);
    }

    /**
     * 创建 InputKV 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputKV
     */
    public static function InputKV(array $attributes = []): \AmisSchema\Widget\Input\InputKV
    {
        return \AmisSchema\Widget\Input\InputKV::make($attributes);
    }

    /**
     * 创建 InputKVS 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputKVS
     */
    public static function InputKVS(array $attributes = []): \AmisSchema\Widget\Input\InputKVS
    {
        return \AmisSchema\Widget\Input\InputKVS::make($attributes);
    }

    /**
     * 创建 InputMonth 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputMonth
     */
    public static function InputMonth(array $attributes = []): \AmisSchema\Widget\Input\InputMonth
    {
        return \AmisSchema\Widget\Input\InputMonth::make($attributes);
    }

    /**
     * 创建 InputMonthRange 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputMonthRange
     */
    public static function InputMonthRange(array $attributes = []): \AmisSchema\Widget\Input\InputMonthRange
    {
        return \AmisSchema\Widget\Input\InputMonthRange::make($attributes);
    }

    /**
     * 创建 InputNumber 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputNumber
     */
    public static function InputNumber(array $attributes = []): \AmisSchema\Widget\Input\InputNumber
    {
        return \AmisSchema\Widget\Input\InputNumber::make($attributes);
    }

    /**
     * 创建 InputPassword 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputPassword
     */
    public static function InputPassword(array $attributes = []): \AmisSchema\Widget\Input\InputPassword
    {
        return \AmisSchema\Widget\Input\InputPassword::make($attributes);
    }

    /**
     * 创建 InputQuarter 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputQuarter
     */
    public static function InputQuarter(array $attributes = []): \AmisSchema\Widget\Input\InputQuarter
    {
        return \AmisSchema\Widget\Input\InputQuarter::make($attributes);
    }

    /**
     * 创建 InputQuarterRange 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputQuarterRange
     */
    public static function InputQuarterRange(array $attributes = []): \AmisSchema\Widget\Input\InputQuarterRange
    {
        return \AmisSchema\Widget\Input\InputQuarterRange::make($attributes);
    }

    /**
     * 创建 InputRange 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputRange
     */
    public static function InputRange(array $attributes = []): \AmisSchema\Widget\Input\InputRange
    {
        return \AmisSchema\Widget\Input\InputRange::make($attributes);
    }

    /**
     * 创建 InputRating 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputRating
     */
    public static function InputRating(array $attributes = []): \AmisSchema\Widget\Input\InputRating
    {
        return \AmisSchema\Widget\Input\InputRating::make($attributes);
    }

    /**
     * 创建 InputRepeat 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputRepeat
     */
    public static function InputRepeat(array $attributes = []): \AmisSchema\Widget\Input\InputRepeat
    {
        return \AmisSchema\Widget\Input\InputRepeat::make($attributes);
    }

    /**
     * 创建 InputRichText 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputRichText
     */
    public static function InputRichText(array $attributes = []): \AmisSchema\Widget\Input\InputRichText
    {
        return \AmisSchema\Widget\Input\InputRichText::make($attributes);
    }

    /**
     * 创建 InputSignature 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputSignature
     */
    public static function InputSignature(array $attributes = []): \AmisSchema\Widget\Input\InputSignature
    {
        return \AmisSchema\Widget\Input\InputSignature::make($attributes);
    }

    /**
     * 创建 InputSubForm 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputSubForm
     */
    public static function InputSubForm(array $attributes = []): \AmisSchema\Widget\Input\InputSubForm
    {
        return \AmisSchema\Widget\Input\InputSubForm::make($attributes);
    }

    /**
     * 创建 InputTable 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputTable
     */
    public static function InputTable(array $attributes = []): \AmisSchema\Widget\Input\InputTable
    {
        return \AmisSchema\Widget\Input\InputTable::make($attributes);
    }

    /**
     * 创建 InputTag 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputTag
     */
    public static function InputTag(array $attributes = []): \AmisSchema\Widget\Input\InputTag
    {
        return \AmisSchema\Widget\Input\InputTag::make($attributes);
    }

    /**
     * 创建 InputText 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputText
     */
    public static function InputText(array $attributes = []): \AmisSchema\Widget\Input\InputText
    {
        return \AmisSchema\Widget\Input\InputText::make($attributes);
    }

    /**
     * 创建 InputTime 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputTime
     */
    public static function InputTime(array $attributes = []): \AmisSchema\Widget\Input\InputTime
    {
        return \AmisSchema\Widget\Input\InputTime::make($attributes);
    }

    /**
     * 创建 InputTimeRange 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputTimeRange
     */
    public static function InputTimeRange(array $attributes = []): \AmisSchema\Widget\Input\InputTimeRange
    {
        return \AmisSchema\Widget\Input\InputTimeRange::make($attributes);
    }

    /**
     * 创建 InputTree 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputTree
     */
    public static function InputTree(array $attributes = []): \AmisSchema\Widget\Input\InputTree
    {
        return \AmisSchema\Widget\Input\InputTree::make($attributes);
    }

    /**
     * 创建 InputVerificationCode 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputVerificationCode
     */
    public static function InputVerificationCode(array $attributes = []): \AmisSchema\Widget\Input\InputVerificationCode
    {
        return \AmisSchema\Widget\Input\InputVerificationCode::make($attributes);
    }

    /**
     * 创建 InputYear 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputYear
     */
    public static function InputYear(array $attributes = []): \AmisSchema\Widget\Input\InputYear
    {
        return \AmisSchema\Widget\Input\InputYear::make($attributes);
    }

    /**
     * 创建 InputYearRange 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\InputYearRange
     */
    public static function InputYearRange(array $attributes = []): \AmisSchema\Widget\Input\InputYearRange
    {
        return \AmisSchema\Widget\Input\InputYearRange::make($attributes);
    }

    /**
     * 创建 JsonSchema 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\JsonSchema
     */
    public static function JsonSchema(array $attributes = []): \AmisSchema\Widget\Input\JsonSchema
    {
        return \AmisSchema\Widget\Input\JsonSchema::make($attributes);
    }

    /**
     * 创建 JsonSchemaEditor 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\JsonSchemaEditor
     */
    public static function JsonSchemaEditor(array $attributes = []): \AmisSchema\Widget\Input\JsonSchemaEditor
    {
        return \AmisSchema\Widget\Input\JsonSchemaEditor::make($attributes);
    }

    /**
     * 创建 ListSelect 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\ListSelect
     */
    public static function ListSelect(array $attributes = []): \AmisSchema\Widget\Input\ListSelect
    {
        return \AmisSchema\Widget\Input\ListSelect::make($attributes);
    }

    /**
     * 创建 LocationPicker 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\LocationPicker
     */
    public static function LocationPicker(array $attributes = []): \AmisSchema\Widget\Input\LocationPicker
    {
        return \AmisSchema\Widget\Input\LocationPicker::make($attributes);
    }

    /**
     * 创建 MatrixCheckboxes 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\MatrixCheckboxes
     */
    public static function MatrixCheckboxes(array $attributes = []): \AmisSchema\Widget\Input\MatrixCheckboxes
    {
        return \AmisSchema\Widget\Input\MatrixCheckboxes::make($attributes);
    }

    /**
     * 创建 NestedSelect 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\NestedSelect
     */
    public static function NestedSelect(array $attributes = []): \AmisSchema\Widget\Input\NestedSelect
    {
        return \AmisSchema\Widget\Input\NestedSelect::make($attributes);
    }

    /**
     * 创建 Options 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Options
     */
    public static function Options(array $attributes = []): \AmisSchema\Widget\Input\Options
    {
        return \AmisSchema\Widget\Input\Options::make($attributes);
    }

    /**
     * 创建 Picker 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Picker
     */
    public static function Picker(array $attributes = []): \AmisSchema\Widget\Input\Picker
    {
        return \AmisSchema\Widget\Input\Picker::make($attributes);
    }

    /**
     * 创建 Radio 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Radio
     */
    public static function Radio(array $attributes = []): \AmisSchema\Widget\Input\Radio
    {
        return \AmisSchema\Widget\Input\Radio::make($attributes);
    }

    /**
     * 创建 Radios 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Radios
     */
    public static function Radios(array $attributes = []): \AmisSchema\Widget\Input\Radios
    {
        return \AmisSchema\Widget\Input\Radios::make($attributes);
    }

    /**
     * 创建 Select 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Select
     */
    public static function Select(array $attributes = []): \AmisSchema\Widget\Input\Select
    {
        return \AmisSchema\Widget\Input\Select::make($attributes);
    }

    /**
     * 创建 StaticWidget 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\StaticWidget
     */
    public static function Static(array $attributes = []): \AmisSchema\Widget\Input\StaticWidget
    {
        return \AmisSchema\Widget\Input\StaticWidget::make($attributes);
    }

    /**
     * 创建 SwitchWidget 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\SwitchWidget
     */
    public static function Switch(array $attributes = []): \AmisSchema\Widget\Input\SwitchWidget
    {
        return \AmisSchema\Widget\Input\SwitchWidget::make($attributes);
    }

    /**
     * 创建 TabsTransfer 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\TabsTransfer
     */
    public static function TabsTransfer(array $attributes = []): \AmisSchema\Widget\Input\TabsTransfer
    {
        return \AmisSchema\Widget\Input\TabsTransfer::make($attributes);
    }

    /**
     * 创建 TabsTransferPicker 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\TabsTransferPicker
     */
    public static function TabsTransferPicker(array $attributes = []): \AmisSchema\Widget\Input\TabsTransferPicker
    {
        return \AmisSchema\Widget\Input\TabsTransferPicker::make($attributes);
    }

    /**
     * 创建 Textarea 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Textarea
     */
    public static function Textarea(array $attributes = []): \AmisSchema\Widget\Input\Textarea
    {
        return \AmisSchema\Widget\Input\Textarea::make($attributes);
    }

    /**
     * 创建 Transfer 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\Transfer
     */
    public static function Transfer(array $attributes = []): \AmisSchema\Widget\Input\Transfer
    {
        return \AmisSchema\Widget\Input\Transfer::make($attributes);
    }

    /**
     * 创建 TransferPicker 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\TransferPicker
     */
    public static function TransferPicker(array $attributes = []): \AmisSchema\Widget\Input\TransferPicker
    {
        return \AmisSchema\Widget\Input\TransferPicker::make($attributes);
    }

    /**
     * 创建 TreeSelect 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\TreeSelect
     */
    public static function TreeSelect(array $attributes = []): \AmisSchema\Widget\Input\TreeSelect
    {
        return \AmisSchema\Widget\Input\TreeSelect::make($attributes);
    }

    /**
     * 创建 UUID 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Input\UUID
     */
    public static function UUID(array $attributes = []): \AmisSchema\Widget\Input\UUID
    {
        return \AmisSchema\Widget\Input\UUID::make($attributes);
    }


    // ==================== Layout 组件 ====================

    /**
     * 创建 Collapse 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Collapse
     */
    public static function Collapse(array $attributes = []): \AmisSchema\Widget\Layout\Collapse
    {
        return \AmisSchema\Widget\Layout\Collapse::make($attributes);
    }

    /**
     * 创建 Container 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Container
     */
    public static function Container(array $attributes = []): \AmisSchema\Widget\Layout\Container
    {
        return \AmisSchema\Widget\Layout\Container::make($attributes);
    }

    /**
     * 创建 Divider 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Divider
     */
    public static function Divider(array $attributes = []): \AmisSchema\Widget\Layout\Divider
    {
        return \AmisSchema\Widget\Layout\Divider::make($attributes);
    }

    /**
     * 创建 Flex 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Flex
     */
    public static function Flex(array $attributes = []): \AmisSchema\Widget\Layout\Flex
    {
        return \AmisSchema\Widget\Layout\Flex::make($attributes);
    }

    /**
     * 创建 Grid 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Grid
     */
    public static function Grid(array $attributes = []): \AmisSchema\Widget\Layout\Grid
    {
        return \AmisSchema\Widget\Layout\Grid::make($attributes);
    }

    /**
     * 创建 Grid2D 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Grid2D
     */
    public static function Grid2D(array $attributes = []): \AmisSchema\Widget\Layout\Grid2D
    {
        return \AmisSchema\Widget\Layout\Grid2D::make($attributes);
    }

    /**
     * 创建 HBox 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\HBox
     */
    public static function HBox(array $attributes = []): \AmisSchema\Widget\Layout\HBox
    {
        return \AmisSchema\Widget\Layout\HBox::make($attributes);
    }

    /**
     * 创建 Page 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Page
     */
    public static function Page(array $attributes = []): \AmisSchema\Widget\Layout\Page
    {
        return \AmisSchema\Widget\Layout\Page::make($attributes);
    }

    /**
     * 创建 Pagination 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Pagination
     */
    public static function Pagination(array $attributes = []): \AmisSchema\Widget\Layout\Pagination
    {
        return \AmisSchema\Widget\Layout\Pagination::make($attributes);
    }

    /**
     * 创建 PaginationWrapper 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\PaginationWrapper
     */
    public static function PaginationWrapper(array $attributes = []): \AmisSchema\Widget\Layout\PaginationWrapper
    {
        return \AmisSchema\Widget\Layout\PaginationWrapper::make($attributes);
    }

    /**
     * 创建 Panel 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Panel
     */
    public static function Panel(array $attributes = []): \AmisSchema\Widget\Layout\Panel
    {
        return \AmisSchema\Widget\Layout\Panel::make($attributes);
    }

    /**
     * 创建 Portlet 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Portlet
     */
    public static function Portlet(array $attributes = []): \AmisSchema\Widget\Layout\Portlet
    {
        return \AmisSchema\Widget\Layout\Portlet::make($attributes);
    }

    /**
     * 创建 Tabs 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Tabs
     */
    public static function Tabs(array $attributes = []): \AmisSchema\Widget\Layout\Tabs
    {
        return \AmisSchema\Widget\Layout\Tabs::make($attributes);
    }

    /**
     * 创建 Wrapper 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Layout\Wrapper
     */
    public static function Wrapper(array $attributes = []): \AmisSchema\Widget\Layout\Wrapper
    {
        return \AmisSchema\Widget\Layout\Wrapper::make($attributes);
    }


    // ==================== Function 组件 ====================

    /**
     * 创建 Action 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\Action
     */
    public static function Action(array $attributes = []): \AmisSchema\Widget\Function\Action
    {
        return \AmisSchema\Widget\Function\Action::make($attributes);
    }

    /**
     * 创建 AnchorNav 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\AnchorNav
     */
    public static function AnchorNav(array $attributes = []): \AmisSchema\Widget\Function\AnchorNav
    {
        return \AmisSchema\Widget\Function\AnchorNav::make($attributes);
    }

    /**
     * 创建 App 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\App
     */
    public static function App(array $attributes = []): \AmisSchema\Widget\Function\App
    {
        return \AmisSchema\Widget\Function\App::make($attributes);
    }

    /**
     * 创建 Breadcrumb 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\Breadcrumb
     */
    public static function Breadcrumb(array $attributes = []): \AmisSchema\Widget\Function\Breadcrumb
    {
        return \AmisSchema\Widget\Function\Breadcrumb::make($attributes);
    }

    /**
     * 创建 Button 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\Button
     */
    public static function Button(array $attributes = []): \AmisSchema\Widget\Function\Button
    {
        return \AmisSchema\Widget\Function\Button::make($attributes);
    }

    /**
     * 创建 ButtonGroup 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\ButtonGroup
     */
    public static function ButtonGroup(array $attributes = []): \AmisSchema\Widget\Function\ButtonGroup
    {
        return \AmisSchema\Widget\Function\ButtonGroup::make($attributes);
    }

    /**
     * 创建 Custom 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\Custom
     */
    public static function Custom(array $attributes = []): \AmisSchema\Widget\Function\Custom
    {
        return \AmisSchema\Widget\Function\Custom::make($attributes);
    }

    /**
     * 创建 DropDownButton 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\DropDownButton
     */
    public static function DropDownButton(array $attributes = []): \AmisSchema\Widget\Function\DropDownButton
    {
        return \AmisSchema\Widget\Function\DropDownButton::make($attributes);
    }

    /**
     * 创建 Nav 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\Nav
     */
    public static function Nav(array $attributes = []): \AmisSchema\Widget\Function\Nav
    {
        return \AmisSchema\Widget\Function\Nav::make($attributes);
    }

    /**
     * 创建 Service 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\Service
     */
    public static function Service(array $attributes = []): \AmisSchema\Widget\Function\Service
    {
        return \AmisSchema\Widget\Function\Service::make($attributes);
    }

    /**
     * 创建 TooltipWrapper 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Function\TooltipWrapper
     */
    public static function TooltipWrapper(array $attributes = []): \AmisSchema\Widget\Function\TooltipWrapper
    {
        return \AmisSchema\Widget\Function\TooltipWrapper::make($attributes);
    }


    // ==================== Feedback 组件 ====================

    /**
     * 创建 Alert 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Feedback\Alert
     */
    public static function Alert(array $attributes = []): \AmisSchema\Widget\Feedback\Alert
    {
        return \AmisSchema\Widget\Feedback\Alert::make($attributes);
    }

    /**
     * 创建 Dialog 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Feedback\Dialog
     */
    public static function Dialog(array $attributes = []): \AmisSchema\Widget\Feedback\Dialog
    {
        return \AmisSchema\Widget\Feedback\Dialog::make($attributes);
    }

    /**
     * 创建 Drawer 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Feedback\Drawer
     */
    public static function Drawer(array $attributes = []): \AmisSchema\Widget\Feedback\Drawer
    {
        return \AmisSchema\Widget\Feedback\Drawer::make($attributes);
    }

    /**
     * 创建 Spinner 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Feedback\Spinner
     */
    public static function Spinner(array $attributes = []): \AmisSchema\Widget\Feedback\Spinner
    {
        return \AmisSchema\Widget\Feedback\Spinner::make($attributes);
    }

    /**
     * 创建 Toast 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Feedback\Toast
     */
    public static function Toast(array $attributes = []): \AmisSchema\Widget\Feedback\Toast
    {
        return \AmisSchema\Widget\Feedback\Toast::make($attributes);
    }


    // ==================== Extra 组件 ====================

    /**
     * 创建 Amis 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Extra\Amis
     */
    public static function Amis(array $attributes = []): \AmisSchema\Widget\Extra\Amis
    {
        return \AmisSchema\Widget\Extra\Amis::make($attributes);
    }

    /**
     * 创建 AmisRenderer 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Extra\AmisRenderer
     */
    public static function AmisRenderer(array $attributes = []): \AmisSchema\Widget\Extra\AmisRenderer
    {
        return \AmisSchema\Widget\Extra\AmisRenderer::make($attributes);
    }

    /**
     * 创建 Audio 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Extra\Audio
     */
    public static function Audio(array $attributes = []): \AmisSchema\Widget\Extra\Audio
    {
        return \AmisSchema\Widget\Extra\Audio::make($attributes);
    }

    /**
     * 创建 Avatar 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Extra\Avatar
     */
    public static function Avatar(array $attributes = []): \AmisSchema\Widget\Extra\Avatar
    {
        return \AmisSchema\Widget\Extra\Avatar::make($attributes);
    }

    /**
     * 创建 Badge 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Extra\Badge
     */
    public static function Badge(array $attributes = []): \AmisSchema\Widget\Extra\Badge
    {
        return \AmisSchema\Widget\Extra\Badge::make($attributes);
    }

    /**
     * 创建 Tasks 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Extra\Tasks
     */
    public static function Tasks(array $attributes = []): \AmisSchema\Widget\Extra\Tasks
    {
        return \AmisSchema\Widget\Extra\Tasks::make($attributes);
    }

    /**
     * 创建 WebComponent 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Extra\WebComponent
     */
    public static function WebComponent(array $attributes = []): \AmisSchema\Widget\Extra\WebComponent
    {
        return \AmisSchema\Widget\Extra\WebComponent::make($attributes);
    }

    /**
     * 创建 Wizard 组件
     * 
     * @param array $attributes 组件属性
     * @return \AmisSchema\Widget\Extra\Wizard
     */
    public static function Wizard(array $attributes = []): \AmisSchema\Widget\Extra\Wizard
    {
        return \AmisSchema\Widget\Extra\Wizard::make($attributes);
    }

}
