<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Link 链接
 *
 * @method self type(string $value) 指定为 link 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self body($value) 标签内容
 * @method self href(string $value) 链接地址
 * @method self blank(bool $value) 是否在新标签页打开
 * @method self htmlTarget(string $value) a 标签的 target 属性
 * @method self title(string $value) a 标签的 title 属性
 * @method self disabled(bool $value) 是否禁用
 * @method self icon(string $value) 超链接图标，以加强显示
 * @method self rightIcon(string $value) 右侧图标
 * @method self onEvent($value) 事件
 */
class Link extends Widget
{
    protected string $type = 'link';
}
