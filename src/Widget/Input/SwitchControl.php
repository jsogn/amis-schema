<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * Switch 开关组件
 *
 * 开关控件
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/switch
 *
 * @method $this option(string $value) 设置选项说明
 * @method $this onText(string|array|Widget $value) 设置开启时开关显示的内容，3.6.0支持 Schema
 * @method $this offText(string|array|Widget $value) 设置关闭时开关显示的内容，3.6.0支持 Schema
 * @method $this trueValue(bool|string|int $value = true) 设置标识真值，默认为 true
 * @method $this falseValue(bool|string|int $value = false) 设置标识假值，默认为 false
 * @method $this size(string $value = 'md') 设置开关大小，默认为 md
 * @method $this loading(bool $value = false) 设置是否处于加载状态，默认为 false
 */
class SwitchControl extends FormItem
{
    protected string $type = 'switch';
}
