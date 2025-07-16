<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;
use AmisSchema\Definition\AnchorNavLink;

/**
 * 锚点导航容器组件
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/anchor-nav
 *
 * @method $this className(string $className) 外层 Dom 的类名
 * @method $this linkClassName(string $linkClassName) 导航 Dom 的类名
 * @method $this sectionClassName(string $sectionClassName) 锚点区域 Dom 的类名
 * @method $this links(AnchorNavLink[] $links) links 内容
 * @method $this direction(string $direction) 可以配置导航水平展示还是垂直展示。对应的配置项分别是：vertical、horizontal，默认值: "vertical"
 * @method $this active(string $active) 需要定位的区域
 */
class AnchorNav extends Widget
{
    protected string $type = 'anchor-nav';
}