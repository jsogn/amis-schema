<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Function\Action;
use AmisSchema\Widget\Widget;

/**
 * Panel 组件，AMis 面板渲染器。
 * 
 * 可以把相关信息以面板的形式展示到一块。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/panel
 *
 * @method $this className(string $value) 外层 Dom 的类名。
 * @method $this headerClassName(string $value) header 区域的类名。
 * @method $this footerClassName(string $value) footer 区域的类名。
 * @method $this actionsClassName(string $value) actions 区域的类名。
 * @method $this bodyClassName(string $value) body 区域的类名。
 * @method $this title(Widget|string $value) 标题。
 * @method $this header(Widget|Widget[]|string $value) 头部容器。
 * @method $this body(Widget|Widget[]|string $value) 内容容器。
 * @method $this footer(Widget|Widget[]|string $value) 底部容器。
 * @method $this affixFooter(bool $value) 是否固定底部容器。
 * @method $this actions(Action[] $value) 按钮区域。
 */
class Panel extends Widget
{
    protected string $type = 'panel';
}