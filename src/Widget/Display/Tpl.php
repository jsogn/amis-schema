<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Tpl 模板
 *
 * @method self type(string $value) 指定为 tpl 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self tpl(string $value) 模板
 * @method self showNativeTitle(bool $value) 是否设置外层 DOM 节点的 title 属性为文本内容
 * @method self onEvent($value) 事件
 */
class Tpl extends Widget
{
    protected string $type = 'tpl';
}
