<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Trait\InputTimeRangeTrait;

/**
 * InputDatetimeRange 日期时间范围选择器
 *
 * 日期时间范围选择器，支持选择日期时间范围
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-datetime-range
 */
class InputDatetimeRange extends FormItem
{
    use InputTimeRangeTrait;

    protected string $type = 'input-datetime-range';
}
