<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * HBox 组件，AMis HBox 布局渲染器。
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/hbox
 *
 * @method $this gap(string $value = '') 水平间距，可选值：'xs'、'sm'、'base'、'none'、'md'、'lg'
 * @method $this valign(string $value = '') 垂直对齐方式，可选值：'top'、'middle'、'bottom'、'between'
 * @method $this align(string $value = '') 水平对齐方式，可选值：'left'、'right'、'between'、'center'
 * @method $this columns(array|Widget[] $value = []) 列集合
 */
class HBox extends Widget
{
    protected string $type = 'hbox';
}