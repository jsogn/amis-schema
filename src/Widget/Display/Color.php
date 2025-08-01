<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Color 颜色
 *
 * @method $this type(string $value = 'color') 指定为 color 渲染器，在 Table、Card 和 List 中为 "color"；在 Form 中用作静态展示为 "static-color"，默认 'color'
 * @method $this value(string $value = '') 显示的颜色值，默认 ''
 * @method $this name(string $value = '') 在其他组件中，时，用作变量映射，默认 ''
 * @method $this defaultColor(string $value = '') 默认颜色值，默认 ''
 * @method $this showValue(bool $value = true) 是否显示右边的颜色值，默认 true
 * @method $this popOverContainerSelector(string $value = '') 弹层挂载位置选择器，会通过 querySelector 获取，默认 ''
 */
class Color extends Widget
{
    protected string $type = 'color';
}
