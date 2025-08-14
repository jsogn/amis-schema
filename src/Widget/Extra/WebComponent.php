<?php

declare(strict_types=1);

namespace AmisSchema\Widget\Extra;

use AmisSchema\Schema;
use AmisSchema\Widget\Widget;

/**
 * Web Component
 * 
 * 专门用来渲染 web component 的组件，可以通过这种方式来扩展 amis 组件
 *
 * @method $this tag(string $value = '') 具体使用的 web-component 标签
 * @method $this props(array $value = []) 标签上的属性，props 里的值支持变量替换
 * @method $this body(Schema|array $value = null) 子节点
 */
class WebComponent extends Widget
{
    protected string $type = 'web-component';
}
