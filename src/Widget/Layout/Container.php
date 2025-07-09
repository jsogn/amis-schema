<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Layout;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Container 组件，AMis 容器。
 *
 * Container 是一种容器组件，它可以渲染其他 amis 组件。
 * 注意 Container 组件因为历史原因多了一层 div，推荐使用 wrapper 来作为容器。
 * @link https://baidu.github.io/amis/zh-CN/components/container
 *
 * @method $this className(string $value) 设置外层 Dom 的类名。
 * @method $this bodyClassName(string $value) 设置容器内容区的类名。
 * @method $this wrapperComponent(string $value) 设置容器标签名。
 * @method $this style(array $value) 设置自定义样式。
 * @method $this body(Widget|string|Widget[] $value) 设置容器内容。
 */
class Container extends Widget
{
    protected string $type = 'container';
}