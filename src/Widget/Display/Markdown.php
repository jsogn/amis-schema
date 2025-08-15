<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Markdown 渲染
 *
 * Markdown 渲染组件(since 1.1.6)，支持静态内容、动态数据、外部文件加载
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/markdown
 *
 * @method $this name(string $value = '') 变量映射名称，默认 ''
 * @method $this value(string $value = '') 静态markdown内容，默认 ''
 * @method $this src(string|array|API $value = '') 外部markdown文件地址(since 1.6.5)，默认 ''
 * @method $this html(bool $value = false) 是否支持html标签(since 1.8.1)，默认 false
 * @method $this linkify(bool $value = true) 是否自动识别链接(since 1.8.1)，默认 true
 * @method $this breaks(bool $value = false) 是否回车就是换行(since 1.8.1)，默认 false
 */
class Markdown extends Widget
{
    protected string $type = 'markdown';
}
