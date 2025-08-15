<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Html HTML 渲染器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/html
 *
 * @method $this type(string $value = 'html') 指定为 html 渲染器，默认 'html'
 * @method $this html(string $value = '') html 代码，默认 ''
 */
class Html extends Widget
{
    protected string $type = 'html';
}
