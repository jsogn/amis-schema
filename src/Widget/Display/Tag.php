<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Tag 标签
 * 
 * 用于标记和选择的标签组件，支持多种展示模式和颜色主题
 *
 * @method $this displayMode(string $value = 'normal') 展现模式，可选：normal、rounded、status
 * @method $this color(string $value = '') 颜色主题，支持预设主题或自定义色值
 * @method $this label(string $value = '') 标签内容
 * @method $this icon(string $value = '') status 模式下的前置图标
 * @method $this closable(bool $value = false) 是否展示关闭按钮
 * 
 * @version 2.6.1 支持 click、mouseenter、mouseleave、close 事件
 */
class Tag extends Widget
{
    protected string $type = 'tag';
}
