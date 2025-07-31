<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeWidgetTrait;

/**
 * InputMonth 月份选择器
 *
 * 月份选择器，用于选择月份
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-month
 */
class InputMonth extends FormItem
{
    use InputTimeWidgetTrait;

    protected string $type = 'input-month';
}
