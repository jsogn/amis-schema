<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeRangeWidgetTrait;
use AmisSchema\Widget\Widget;

/**
 * InputYearRange 年份范围选择器组件
 *
 * 年份范围选择器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-year-range
 *
 * @method $this format(string $value) 设置年份选择器值格式，更多格式类型请参考 moment
 * @method $this inputFormat(string $value) 设置年份选择器显示格式，即时间戳格式，更多格式类型请参考 moment
 * @method $this displayFormat(string $value) 设置年份选择器显示格式，更多格式类型请参考 moment
 * @method $this placeholder(string $value) 设置占位文本
 * @method $this startPlaceholder(string $value) 设置开始年份占位文本
 * @method $this endPlaceholder(string $value) 设置结束年份占位文本
 * @method $this minDate(string $value) 设置限制最小年份
 * @method $this maxDate(string $value) 设置限制最大年份
 * @method $this minDuration(string $value) 设置限制最小跨度，如：2years
 * @method $this maxDuration(string $value) 设置限制最大跨度，如：10years
 * @method $this clearable(bool $value) 设置是否可清除
 * @method $this embed(bool $value) 设置是否内联模式
 * @method $this animation(bool $value) 设置是否启用游标动画，默认开启
 * @method $this extraName(string $value) 设置范围内的结束年份的字段名
 * @method $this popOverContainerSelector(string $value) 设置弹层挂载位置参考，主要用于确保弹层菜单不会被其他元素遮挡
 */
class InputYearRange extends Widget
{
    use InputTimeRangeWidgetTrait;

    protected string $type = 'input-year-range';
}
