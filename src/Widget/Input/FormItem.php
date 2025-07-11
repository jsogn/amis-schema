<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Definition\API;
use Jiangwang\AmisSchema\Widget\Display\Remark;
use Jiangwang\AmisSchema\Widget\Widget;

/**
 * FormItem 表单项组件。
 *
 * 表单项是组成一个表单的基本单位，它具有的一些特性会帮助我们更好地实现表单操作。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/formitem
 *
 * @method $this type(string $value) 设置指定表单项类型。
 * @method $this className(string $value) 设置表单最外层类名。
 * @method $this inputClassName(string $value) 设置表单控制器类名。
 * @method $this labelClassName(string $value) 设置 label 类名。
 * @method $this name(string $value) 设置字段名，指定该表单项提交时的 key。
 * @method $this label(string|false $value) 设置表单项标签。
 * @method $this labelAlign(string $value) 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @method $this labelWidth(int|string $value) 设置表单项标签宽度。
 * @method $this description(string $value) 设置表单项描述。
 * @method $this placeholder(string $value) 设置表单项占位符。
 * @method $this inline(bool $value) 设置是否为内联模式。
 * @method $this submitOnChange(bool $value) 设置是否该表单项值发生变化时就提交当前表单。
 * @method $this disabled(bool $value) 设置当前表单项是否为禁用状态。
 * @method $this disabledOn(string $value) 设置当前表单项是否禁用的条件。
 * @method $this readOnly(bool $value) 设置当前表单项是否为只读状态。
 * @method $this readOnlyOn(string $value) 设置当前表单项是否只读的条件。
 * @method $this required(bool $value) 设置是否为必填项。
 * @method $this requiredOn(string $value) 设置通过表达式来配置当前表单项是否为必填。
 * @method $this validations(string|array $value) 设置表单项值格式验证。
 * @method $this validationErrors(array $value) 设置表单项值验证失败时的错误信息。
 * @method $this validateApi(string|API $value) 设置表单校验接口。
 * @method $this clearValueOnHidden(bool $value) 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @method $this autoFocus(bool $value) 设置是否自动获取焦点。
 * @method $this size(string $value) 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @method $this mode(string $value) 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @method $this horizontal(array $value) 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @method $this hint(string $value) 设置输入提示，聚焦的时候显示。
 * @method $this remark(string|array $value) 设置显示一个小图标, hover 查看提示内容。
 * @method $this labelRemark(string|Remark $value) 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @method $this inputGroupClassName(string $value) 设置输入框容器 css 类名。
 * @method $this value(mixed $value) 设置默认值。
 * @method $this defaultValue(mixed $value) 设置默认值。
 * @method $this showErrorMsg(bool $value) 设置是否显示验证错误信息。
 * @method $this visibleOn(string $value) 设置当前表单项是否显示的条件。
 * @method $this hidden(bool $value) 设置当前表单项是否隐藏。
 * @method $this hiddenOn(string $value) 设置当前表单项是否隐藏的条件。
 * @method $this row(int $value) 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @method $this static (bool $value) 设置是否静态展示。
 * @method $this staticOn(string $value) 设置是否静态展示表达式。
 * @method $this staticPlaceholder(string $value) 设置静态展示时的占位符。
 * @method $this strictMode(bool $value) 设置是否严格模式，false 可及时获取所有表单数据。
 * @method $this visible(bool $value) 设置当前表单项是否可见。
 * @method $this autoFill(Widget|Widget[]|string $value) 设置数据录入配置，自动填充或参照录入。
 * @method $this staticClassName(string $value) 设置静态展示时的类名。
 * @method $this staticLabelClassName(string $value) 设置静态展示时的 Label 的类名。
 * @method $this staticInputClassName(string $value) 设置静态展示时的 value 的类名。
 * @method $this staticSchema(Widget|Widget[]|string $value) 设置自定义静态展示方式。
 * @method $this validateOnChange(bool $value) 设置表单项值发生变化时就校验。
 * @method $this columnClassName(string $value) 列的类名，可以用它配置列宽度。默认平均分配。
 * @method $this unique(bool $value) 设置当前列值是否唯一，即不允许重复选择。
 */
class FormItem extends Widget
{
    protected string $type = 'input-text';
}