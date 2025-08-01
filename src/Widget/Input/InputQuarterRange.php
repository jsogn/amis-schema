<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeRangeWidgetTrait;

/**
 * InputQuarterRange 季度范围选择器组件
 *
 * 季度范围选择器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-quarter-range
 */
class InputQuarterRange extends FormItem
{
    use InputTimeRangeWidgetTrait;

    protected string $type = 'input-quarter-range';
}
