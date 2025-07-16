<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * Wrapper 组件，AMis 容器渲染器。
 *
 * Wrapper 是一种容器组件，用于包裹内容。
 * @link https://baidu.github.io/amis/zh-CN/components/wrapper
 *
 * @method $this className(string $value) 设置外层 Dom 的类名。
 * @method $this size(string $value) 设置尺寸，支持: xs、sm、md 和 lg。
 * @method $this style(array|string $value) 设置自定义样式。
 * @method $this body(Widget|string|Widget[] $value) 设置内容容器。
 */
class Wrapper extends Widget
{
    protected string $type = 'wrapper';
}