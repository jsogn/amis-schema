<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputDatetimeRange 日期时间范围选择器组件
 * 
 * 日期时间范围选择器，可以用来实现日期时间范围的选择功能
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-datetime-range
 *
 * @method $this format(string $value) 设置日期时间选择器值格式，更多格式类型请参考 moment
 * @method $this inputFormat(string $value) 设置日期时间选择器显示格式，即时间戳格式，更多格式类型请参考 moment
 * @method $this displayFormat(string $value) 设置日期时间选择器显示格式，更多格式类型请参考 moment
 * @method $this placeholder(string $value) 设置占位文本
 * @method $this startPlaceholder(string $value) 设置开始时间占位文本
 * @method $this endPlaceholder(string $value) 设置结束时间占位文本
 * @method $this shortcuts(array $value) 设置日期时间快捷键
 * @method $this minDate(string $value) 设置限制最小日期时间
 * @method $this maxDate(string $value) 设置限制最大日期时间
 * @method $this minDuration(string $value) 设置限制最小跨度，如：2days
 * @method $this maxDuration(string $value) 设置限制最大跨度，如：1year
 * @method $this utc(bool $value) 设置保存 UTC 值
 * @method $this clearable(bool $value) 设置是否可清除
 * @method $this embed(bool $value) 设置是否内联模式
 * @method $this animation(bool $value) 设置是否启用游标动画，默认开启
 * @method $this extraName(string $value) 设置范围内的结束时间的字段名
 * @method $this timeConstraints(array $value) 设置时间约束，用来约束时间的选择
 * @method $this transform(array $value) 设置日期数据处理函数，用来处理选择日期之后的的值，返回新的值用来提交
 * @method $this popOverContainerSelector(string $value) 设置弹层挂载位置参考，主要用于确保弹层菜单不会被其他元素遮挡
 */
class InputDatetimeRange extends Widget
{
    protected string $type = 'input-datetime-range';
}
