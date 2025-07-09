<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Switch 开关组件
 * 
 * 开关控件
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/switch
 *
 * @method $this option(string $value) 设置选项说明
 * @method $this onText(string $value) 设置开启时开关的文本，支持模板
 * @method $this offText(string $value) 设置关闭时开关的文本，支持模板
 * @method $this trueValue(mixed $value) 设置标识真值，默认为 true
 * @method $this falseValue(mixed $value) 设置标识假值，默认为 false
 * @method $this size(string $value) 设置开关大小，支持 sm 和 md，默认为 md
 * @method $this loading(bool $value) 设置是否处于加载状态，默认为 false
 */
class SwitchControl extends Widget
{
    protected string $type = 'switch';
}
