<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Color 颜色
 *
 * @method self type(string $value) 指定为 color 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self value(string $value) 显示的颜色值
 * @method self name(string $value) 在其他组件中，时，用作变量映射
 * @method self defaultColor(string $value) 默认颜色值
 * @method self showValue(bool $value) 是否显示颜色值
 * @method self onEvent($value) 事件
 */
class Color extends Widget
{
    protected string $type = 'color';
}
