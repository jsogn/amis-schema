<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Html HTML 渲染器
 *
 * @method self type(string $value) 指定为 html 渲染器
 * @method self html(string $value) html 代码
 * @method self onEvent($value) 事件
 */
class Html extends Widget
{
    protected string $type = 'html';
}
