<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;
use AmisSchema\Definition\JsFunction;

/**
 * Iframe 组件，用于渲染 iframe。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/iframe
 *
 * @method $this src(string $src) Iframe 源地址。
 * @method $this url(string $url) Iframe 源地址，同 src。
 * @method $this height(string $height) 高度。
 * @method $this width(string $width) 宽度。
 * @method $this className(string $className) CSS 类名。
 * @method $this title(string $title) Iframe 的标题。
 * @method $this name(string $name) Iframe 名称。
 * @method $this sandbox(string $sandbox) 是否启用 sandbox。
 * @method $this seamless(bool $seamless) 是否启用 seamless。
 * @method $this referrerPolicy(string $referrerPolicy) 引用策略。
 * @method $this onMessage(JsFunction $onMessage) 消息回调。
 */
class Iframe extends Widget
{
    protected string $type = 'iframe';
}
