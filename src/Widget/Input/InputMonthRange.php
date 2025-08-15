<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeRangeWidgetTrait;

/**
 * InputMonthRange 月份范围选择器
 *
 * 月份范围选择器，支持选择月份范围
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-month-range
 *
 * @method $this format(string $value = 'X') 设置日期选择器值格式，默认为 "X"
 * @method $this inputFormat(string $value = 'YYYY-DD') 设置日期选择器显示格式，默认为 "YYYY-DD"
 */
class InputMonthRange extends FormItem
{
    use InputTimeRangeWidgetTrait;

    protected string $type = 'input-month-range';
}
