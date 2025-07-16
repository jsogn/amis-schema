<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Shape 形状
 * 
 * 形状组件，用于绘制各种形状
 *
 * @method self type(string $type) 指定为 Shape 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self shape(string $shape) 形状类型
 * @method self size(string|int $size) 尺寸
 * @method self color(string $color) 颜色
 * @method self borderColor(string $borderColor) 边框颜色
 * @method self borderWidth(int $borderWidth) 边框宽度
 */
class Shape extends Widget
{
    protected string $type = 'shape';
}
