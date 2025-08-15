<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Icon 图标
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/icon
 *
 * @method $this type(string $value = 'icon') 指定组件类型，默认 'icon'
 * @method $this icon(string $value = '') icon 名称，支持 fontawesome v4 或通过 registerIcon 注册的 icon、或使用 url，默认 ''
 * @method $this vendor(string $value = 'fa') icon 类型，默认为 fa，表示 fontawesome v4。也支持 iconfont，如果是 fontawesome v5 以上版本或者其他框架可以设置为空字符串，默认 'fa'
 */
class Icon extends Widget
{
    protected string $type = 'icon';
}