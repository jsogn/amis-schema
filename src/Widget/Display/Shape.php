<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Shape 形状
 * 
 * 形状组件，用于展示各种几何图形
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/shape
 *
 * @method $this shapeType(string $value = '') 图形类型，如：rect、circle、triangle、polygon、line、arrow、star 等
 * @method $this color(string $value = '') 填充颜色，支持十六进制颜色值
 * @method $this width(int $value = 200) 图形宽度（像素）
 * @method $this height(int $value = 200) 图形高度（像素）
 * @method $this radius(int $value = 0) 圆角大小，负数表示内弧
 * @method $this borderColor(string $value = '') 边框颜色
 * @method $this borderWidth(int $value = 0) 边框宽度（像素）
 * @method $this borderStyle(string $value = 'solid') 边框样式：solid、dashed、dotted
 * @method $this path(string $value = '') 自定义 SVG 路径
 * 
 * @version 2.6.1 支持事件监听功能
 */
class Shape extends Widget
{
    protected string $type = 'shape';
}
