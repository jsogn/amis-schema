<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;

/**
 * 下拉菜单按钮组件
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/dropdown-button
 *
 * @method $this label(string $label) 按钮文本
 * @method $this btnClassName(string $btnClassName) 按钮 CSS 类名
 * @method $this menuClassName(string $menuClassName) 下拉菜单 CSS 类名
 * @method $this block(bool $block) 块状样式
 * @method $this size(string $size) 尺寸，支持'xs'、'sm'、'md'、'lg'
 * @method $this align(string $align) 位置，可选'left'或'right'
 * @method $this buttons(array|Button[] $buttons) 配置下拉按钮
 * @method $this iconOnly(bool $iconOnly) 只显示 icon
 * @method $this defaultIsOpened(bool $defaultIsOpened) 默认是否打开
 * @method $this closeOnOutside(bool $closeOnOutside = true) 点击外侧区域是否收起
 * @method $this closeOnClick(bool $closeOnClick = false) 点击按钮后自动关闭下拉菜单
 * @method $this trigger(string $trigger = 'click') 触发方式，可选值："click" | "hover"
 * @method $this hideCaret(bool $hideCaret = false) 隐藏下拉图标
 */
class DropDownButton extends Widget
{
    protected string $type = 'dropdown-button';
}