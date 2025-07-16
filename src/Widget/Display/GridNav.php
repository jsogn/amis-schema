<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * GridNav 宫格导航
 * 
 * 宫格菜单导航，不支持配置初始化接口初始化数据域
 *
 * @method self type(string $type) 指定为 GridNav 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self itemClassName(string $itemClassName) 列表项 css 类名
 * @method self contentClassName(string $contentClassName) 列表项内容 css 类名
 * @method self value(array $value) 图片数组
 * @method self source(string $source) 数据源
 * @method self square(bool $square) 是否将列表项固定为正方形
 * @method self center(bool $center) 是否将列表项内容居中显示，默认为 true
 * @method self border(bool $border) 是否显示列表项边框，默认为 true
 * @method self gutter(int $gutter) 列表项之间的间距，默认单位为px
 * @method self reverse(bool $reverse) 是否调换图标和文本的位置
 * @method self iconRatio(int $iconRatio) 图标宽度占比，单位%，默认为 60
 * @method self direction(string $direction) 列表项内容排列的方向，可选值为 horizontal 、vertical，默认为 "vertical"
 * @method self columnNum(int $columnNum) 列数，默认为 4
 */
class GridNav extends Widget
{
    protected string $type = 'grid-nav';
}
