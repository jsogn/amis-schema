<?php

declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Layout;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Grid2D 组件，AMis Grid 2D 布局渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/grid-2d
 *
 * @method $this gridClassName(string $value) 外层 Dom 的类名。
 * @method $this gap(int|string $value) 格子间距，包括水平和垂直。
 * @method $this cols(int $value) 格子水平划分为几个区域。
 * @method $this rowHeight(int $value) 每个格子默认垂直高度。
 * @method $this rowGap(int|string $value) 格子垂直间距。
 * @method $this grids(array|Widget[] $value) 格子集合。
 */
class Grid2D extends Widget
{
    protected string $type = 'grid-2d';
}
