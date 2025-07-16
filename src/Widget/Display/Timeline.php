<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Timeline 时间轴
 * 
 * 时间轴展示组件
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/timeline
 *
 * @method self type(string $type) 指定为 Timeline 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self items(array $items) 时间轴项配置
 * @method self source(string|array $source) 数据源
 * @method self mode(string $mode) 展示模式，可选值：left、right、alternate
 * @method self reverse(bool $reverse) 是否反向展示
 * @method self labelPosition(string $labelPosition) 标签位置，可选值：left、right
 * @method self color(string $color) 颜色
 */
class Timeline extends Widget
{
    protected string $type = 'timeline';
}
