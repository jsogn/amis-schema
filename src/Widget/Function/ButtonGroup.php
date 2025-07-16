<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;

/**
 * ButtonGroup 组件，AMis 按钮组渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/button-group
 *
 * @method $this vertical(bool $value = false) 是否使用垂直模式
 * @method $this tiled(bool $value = false) 是否使用平铺模式
 * @method $this btnLevel(string $value = 'default') 按钮样式
 * @method $this btnActiveLevel(string $value = 'default') 选中按钮样式
 * @method $this buttons(array|Action[] $value) 按钮配置数组
 */
class ButtonGroup extends Widget
{
    protected string $type = 'button-group';
}