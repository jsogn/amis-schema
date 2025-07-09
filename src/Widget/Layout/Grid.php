<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Layout;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Grid 组件，AMis 栅格布局渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/grid
 *
 * @method $this className(string $value) 外层 Dom 的类名。
 * @method $this gap(string $value) 水平间距，支持: xs、sm、base、none、md、lg。
 * @method $this valign(string $value) 垂直对齐方式，支持: top、middle、bottom、between。
 * @method $this align(string $value) 水平对齐方式，支持: left、right、between、center。
 * @method $this columns(array|Widget[] $value) 列集合
 */
class Grid extends Widget
{
    protected string $type = 'grid';
}