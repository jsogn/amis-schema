<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Trait\InputTimeRangeTrait;

/**
 * InputMonthRange 月份范围选择器
 *
 * 月份范围选择器，支持选择月份范围
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-month-range
 *
 * @method $this format(string $value = 'X') 设置日期选择器值格式，默认为 "X"
 * @method $this inputFormat(string $value = 'YYYY-DD') 设置日期选择器显示格式，默认为 "YYYY-DD"
 */
class InputMonthRange extends FormItem
{
    use InputTimeRangeTrait;

    protected string $type = 'input-month-range';
}
