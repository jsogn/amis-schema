<?php

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * WebComponent Web组件
 * 
 * 自定义Web组件
 *
 * @method self type(string $type) 指定为 WebComponent 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self tag(string $tag) 标签名
 * @method self props(array $props) 属性对象
 * @method self body(Widget|Widget[]|string|array $body) 子内容
 */
class WebComponent extends Widget
{
    protected string $type = 'web-component';
}
