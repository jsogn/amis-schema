<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Link 链接
 *
 * 链接展示组件
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/link
 *
 * @method $this type(string $value = 'link') 如果在 Table、Card 和 List 中，为"link"；在 Form 中用作静态展示，为"static-link"，默认 'link'
 * @method $this body(string $value = '') 标签内文本，默认 ''
 * @method $this href(string $value = '') 链接地址，默认 ''
 * @method $this blank(bool $value = false) 是否在新标签页打开，默认 false
 * @method $this htmlTarget(string $value = '') a 标签的 target，优先于 blank 属性，默认 ''
 * @method $this title(string $value = '') a 标签的 title，默认 ''
 * @method $this disabled(bool $value = false) 禁用超链接，默认 false
 * @method $this icon(string $value = '') 超链接图标，以加强显示，默认 ''
 * @method $this rightIcon(string $value = '') 右侧图标，默认 ''
 */
class Link extends Widget
{
    protected string $type = 'link';
}
