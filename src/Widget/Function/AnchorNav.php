<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;

/**
 * 锚点导航容器组件
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/anchor-nav
 *
 * @method $this linkClassName(string $linkClassName) 导航 Dom 的类名
 * @method $this sectionClassName(string $sectionClassName) 锚点区域 Dom 的类名
 * @method $this direction(string $direction = 'vertical') 可以配置导航水平展示还是垂直展示。对应的配置项分别是：vertical、horizontal
 * @method $this active(string $active) 需要定位的区域
 */
class AnchorNav extends Widget
{
    protected string $type = 'anchor-nav';

    /**
     * links 内容
     * @param array|array<array{
     *     title: string,
     *     href: string,
     *     body: array<Widget|array>,
     *     className: string
     * }> $value
     * @return self
     */
    public function links(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}