<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Trait\InputTimeTrait;

/**
 * InputTime 时间选择器
 *
 * 时间选择器，用于选择时间
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-time
 */
class InputTime extends FormItem
{
    use InputTimeTrait;

    protected string $type = 'input-time';

}
