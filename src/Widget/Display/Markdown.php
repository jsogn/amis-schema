<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Markdown 渲染
 * 
 * Markdown渲染组件
 *
 * @method self type(string $type) 指定为 Markdown 渲染器
 * @method self name(string $name) 名称
 * @method self value(string $value) 静态值
 * @method self className(string $className) 类名
 * @method self src(string|array $src) 外部地址
 */
class Markdown extends Widget
{
    protected string $type = 'markdown';
}
