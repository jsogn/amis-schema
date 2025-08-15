<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * Divider 组件，AMis 分割线。
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/divider
 *
 * @method $this lineStyle(string $value = 'solid') 分割线的样式，支持 dashed 和 solid
 * @method $this direction(string $value = 'horizontal') 分割线的方向，支持 horizontal 和 vertical
 * @method $this color(string $value = '') 分割线的颜色
 * @method $this rotate(int|float $value = 0) 分割线的旋转角度
 * @method $this title(Widget|string|Widget[] $value = '') 分割线的标题
 * @method $this titleClassName(string $value = '') 分割线的标题类名
 * @method $this titlePosition(string $value = 'center') 分割线的标题位置，支持 left、center 和 right
 */
class Divider extends Widget
{
    protected string $type = 'divider';
}