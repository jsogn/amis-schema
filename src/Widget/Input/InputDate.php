<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeTrait;

/**
 * InputDate 日期选择器
 *
 * 日期选择器，支持年、月、日选择，支持多种显示格式和值格式
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-date
 */
class InputDate extends FormItem
{
    use InputTimeTrait;

    protected string $type = 'input-date';
}
