<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * Container 容器
 *
 * Container 是一种容器组件，它可以渲染其他 amis 组件
 * 注意 Container 组件因为历史原因多了一层 div，推荐使用 wrapper 来作为容器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/container
 *
 * @method $this bodyClassName(string $value) 容器内容区的类名
 * @method $this wrapperComponent(string $value = 'div') 容器标签名，默认为 'div'
 * @method $this body(string|array|Widget|Widget[] $value) 内容
 */
class Container extends Widget
{
    protected string $type = 'container';
}