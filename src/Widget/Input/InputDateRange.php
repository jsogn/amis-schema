<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeRangeWidgetTrait;

/**
 * InputDateRange 日期范围选择器
 *
 * 日期范围选择器，支持选择日期范围
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-date-range
 */
class InputDateRange extends FormItem
{
    use InputTimeRangeWidgetTrait;

    protected string $type = 'input-date-range';
}
