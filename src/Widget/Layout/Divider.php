<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Layout;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Divider 组件，AMis 分割线。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/divider
 *
 * @method $this className(string $value) 外层 Dom 的类名。
 * @method $this lineStyle(string $value) 分割线的样式，支持 dashed 和 solid。
 * @method $this direction(string $value) 分割线的方向，支持 horizontal 和 vertical。
 * @method $this color(string $value) 分割线的颜色。
 * @method $this rotate(int|float $value) 分割线的旋转角度
 * @method $this title(Widget|string|Widget[] $value) 分割线的标题。
 * @method $this titleClassName(string $value) 分割线的标题类名。
 * @method $this titlePosition(string $value) 分割线的标题位置，支持 left、center 和 right。
 */
class Divider extends Widget
{
    protected string $type = 'divider';
}