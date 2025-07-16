<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Property 属性表
 * 
 * 属性表展示组件
 *
 * @method self type(string $type) 指定为 Property 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self title(string $title) 标题
 * @method self source(string|array $source) 数据源
 * @method self items(array $items) 属性项配置
 * @method self mode(string $mode) 展示模式，可选值：table、simple
 * @method self separator(string $separator) 分隔符
 * @method self labelStyle(array $labelStyle) 标签样式
 * @method self contentStyle(array $contentStyle) 内容样式
 */
class Property extends Widget
{
    protected string $type = 'property';
}
