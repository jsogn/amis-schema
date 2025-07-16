<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Sparkline 走势图
 * 
 * 简单的走势图组件
 *
 * @method self type(string $type) 指定为 Sparkline 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self name(string $name) 在其他组件中，时，用作变量映射
 * @method self value(array $value) 走势图数据
 * @method self width(int $width) 宽度
 * @method self height(int $height) 高度
 * @method self clickAction(string|array $clickAction) 点击行为
 */
class Sparkline extends Widget
{
    protected string $type = 'sparkline';
}
