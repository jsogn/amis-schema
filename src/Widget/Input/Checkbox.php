<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * Checkbox 勾选框组件
 *
 * 勾选框，用于实现勾选、不勾选操作
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/checkbox
 *
 * @method $this option(string $value) 设置选项说明
 * @method $this trueValue(string|int|bool $value=true) 设置标识真值，默认为 true
 * @method $this falseValue(string|int|bool $value=false) 设置标识假值，默认为 false
 * @method $this optionType(string $value='default') 设置设置 option 类型，支持 default、button
 */
class Checkbox extends FormItem
{
    protected string $type = 'checkbox';
}
