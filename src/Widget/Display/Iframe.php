<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * iFrame 组件，用于内嵌外部站点
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/iframe
 *
 * @method $this type(string $value = 'iframe') 指定为 iFrame 渲染器，默认 'iframe'
 * @method $this src(string $value = '') iframe 地址，支持动态数据和 base64 格式，默认 ''
 * @method $this frameBorder(array $value = []) frameBorder 配置，默认 []
 * @method $this allow(string $value = '') allow 配置，默认 ''
 * @method $this sandbox(string $value = '') sandbox 配置，默认 ''
 * @method $this referrerpolicy(string $value = '') referrerpolicy 配置，默认 ''
 * @method $this name(string $value = '') iframe 名称，默认 ''
 * @method $this height(string|int $value = '100%') iframe 高度，默认 '100%'
 * @method $this width(string|int $value = '100%') iframe 宽度，默认 '100%'
 * @method $this events(array $value = []) 事件配置，用于 iframe 向 amis 通信，默认 []
 */
class Iframe extends Widget
{
    protected string $type = 'iframe';
}
