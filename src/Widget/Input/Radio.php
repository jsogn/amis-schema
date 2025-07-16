<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * Radio 单选框组件
 * 
 * 用于实现单选功能
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/radio
 *
 * @method $this option(string $value) 设置选项说明
 * @method $this trueValue(mixed $value) 设置标识真值，默认为 true
 * @method $this falseValue(mixed $value) 设置标识假值，默认为 false
 */
class Radio extends Widget
{
    protected string $type = 'radio';
}
