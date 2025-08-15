<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeWidgetTrait;

/**
 * InputTime 时间选择器
 *
 * 时间选择器，用于选择时间
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-time
 */
class InputTime extends FormItem
{
    use InputTimeWidgetTrait;

    protected string $type = 'input-time';

}
