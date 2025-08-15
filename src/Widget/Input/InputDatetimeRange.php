<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeRangeWidgetTrait;

/**
 * InputDatetimeRange 日期时间范围选择器
 *
 * 日期时间范围选择器，支持选择日期时间范围
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-datetime-range
 */
class InputDatetimeRange extends FormItem
{
    use InputTimeRangeWidgetTrait;

    protected string $type = 'input-datetime-range';
}
