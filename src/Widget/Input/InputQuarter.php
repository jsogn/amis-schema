<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\InputTimeTrait;

/**
 * InputQuarter 季度选择器组件
 *
 * 季度选择器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-quarter
 */
class InputQuarter extends FormItem
{
    use InputTimeTrait;

    protected string $type = 'input-quarter';
}