<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Carousel 轮播图
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/carousel
 *
 * @method $this type(string $value = 'carousel') 指定为 carousel 渲染器，默认 'carousel'
 * @method $this itemSchema(array $value = []) 自定义schema来展示数据，默认 []
 * @method $this auto(bool $value = true) 是否自动轮播，默认 true
 * @method $this interval(string $value = '5s') 切换动画间隔，默认 '5s'
 * @method $this duration(int $value = 500) 切换动画时长（ms），默认 500
 * @method $this width(string $value = 'auto') 宽度，默认 'auto'
 * @method $this height(string $value = '200px') 高度，默认 '200px'
 * @method $this controls(array $value = ['dots', 'arrows']) 显示左右箭头、底部圆点索引，默认 ['dots', 'arrows']
 * @method $this controlsTheme(string $value = 'light') 左右箭头、底部圆点索引颜色，默认 'light'
 * @method $this animation(string $value = 'fade') 切换动画效果，默认 'fade'
 * @method $this thumbMode(string $value = 'cover') 图片默认缩放模式，默认 'cover'
 * @method $this multiple(array $value = ['count' => 1]) 多图展示，默认 ['count' => 1]
 * @method $this alwaysShowArrow(bool $value = false) 是否一直显示箭头，默认 false
 * @method $this icons(array $value = []) 自定义箭头图标，默认 []
 * @method $this options(array|\AmisSchema\Definition\CarouselOptions $value) Carousel 轮播图选项配置
 */
class Carousel extends Widget
{
    protected string $type = 'carousel';
}
