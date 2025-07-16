<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;

/**
 * ButtonGroup 组件，AMis 按钮组渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/button-group
 *
 * @method $this vertical(bool $value) 是否使用垂直模式。
 * @method $this tiled(bool $value) 是否使用平铺模式。
 * @method $this btnLevel(string $value) 按钮样式，可选值：'link'、'primary'、'secondary'、'info'、'success'、'warning'、'danger'、'light'、'dark'、'default'。
 * @method $this btnActiveLevel(string $value) 选中按钮样式，可选值：'link'、'primary'、'secondary'、'info'、'success'、'warning'、'danger'、'light'、'dark'、'default'。
 * @method $this buttons(Action[] $value) 按钮配置数组。
 * @method $this className(string $value) 外层 Dom 的类名。
 */
class ButtonGroup extends Widget
{
    protected string $type = 'button-group';
}