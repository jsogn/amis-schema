<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * 下拉菜单按钮组件
 * @link https://baidu.github.io/amis/zh-CN/components/dropdown-button
 *
 * @method $this label(string $label) 按钮文本
 * @method $this className(string $className) 外层 CSS 类名
 * @method $this btnClassName(string $btnClassName) 按钮 CSS 类名
 * @method $this menuClassName(string $menuClassName) 下拉菜单 CSS 类名
 * @method $this block(bool $block) 块状样式
 * @method $this size(string $size) 尺寸，支持'xs'、'sm'、'md'、'lg'
 * @method $this align(string $align) 位置，可选'left'或'right'
 * @method $this buttons(Button[] $buttons) 配置下拉按钮
 * @method $this iconOnly(bool $iconOnly) 只显示 icon
 * @method $this defaultIsOpened(bool $defaultIsOpened) 默认是否打开
 * @method $this closeOnOutside(bool $closeOnOutside) 点击外侧区域是否收起，默认值: true
 * @method $this closeOnClick(bool $closeOnClick) 点击按钮后自动关闭下拉菜单，默认值: false
 * @method $this trigger(string $trigger) 触发方式，可选值："click" | "hover"，默认值: "click"
 * @method $this hideCaret(bool $hideCaret) 隐藏下拉图标，默认值: false
 */
class DropDownButton extends Widget
{
    protected string $type = 'dropdown-button';
}