<?php

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Function\Action;
use AmisSchema\Widget\Widget;

/**
 * Panel 组件，AMis 面板渲染器。
 *
 * 可以把相关信息以面板的形式展示到一块。
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/panel
 *
 * @method $this className(string $value = 'panel-default') 外层 Dom 的类名
 * @method $this headerClassName(string $value = 'panel-heading') header 区域的类名
 * @method $this footerClassName(string $value = 'panel-footer bg-light lter wrapper') footer 区域的类名
 * @method $this actionsClassName(string $value = 'panel-footer') actions 区域的类名
 * @method $this bodyClassName(string $value = 'panel-body') body 区域的类名
 * @method $this title(array|Widget|string $value = '') 标题
 * @method $this header(array|Widget|Widget[]|string $value = '') 头部容器
 * @method $this body(array|Widget|Widget[]|string $value = '') 内容容器
 * @method $this footer(array|Widget|Widget[]|string $value = '') 底部容器
 * @method $this affixFooter(bool $value = false) 是否固定底部容器
 * @method $this actions(Action[]|array $value = []) 按钮区域
 */
class Panel extends Widget
{
    protected string $type = 'panel';
}