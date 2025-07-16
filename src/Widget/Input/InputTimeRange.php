<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeRangeTrait;

/**
 * InputTimeRange 时间范围选择器
 *
 * 时间范围选择器，用于选择时间范围
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-time-range
 */
class InputTimeRange extends FormItem
{
    use InputTimeRangeTrait;

    protected string $type = 'input-time-range';
}
