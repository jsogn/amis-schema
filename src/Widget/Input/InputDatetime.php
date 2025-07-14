<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Trait\InputTimeTrait;

/**
 * InputDatetime 日期时间选择器
 *
 * 日期时间选择器，在日期选择器的基础上增加了时间选择
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-datetime
 */
class InputDatetime extends FormItem
{
    use InputTimeTrait;

    protected string $type = 'input-datetime';
}
