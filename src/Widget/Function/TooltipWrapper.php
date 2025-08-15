<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;

/**
 * 文字提示容器组件
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/tooltip
 *
 * @method $this title(string $title = '') 文字提示标题
 * @method $this content(string $content = '') 文字提示内容, 兼容之前的 tooltip 属性
 * @method $this placement(string $placement = 'top') 文字提示浮层出现位置，可选值："top" | "left" | "right" | "bottom"
 * @method $this tooltipTheme(string $tooltipTheme = 'light') 主题样式，可选值："light" | "dark"
 * @method $this offset(array $offset = [0, 0]) 文字提示浮层位置相对偏移量，单位 px
 * @method $this showArrow(bool $showArrow = true) 是否展示浮层指向箭头
 * @method $this enterable(bool $enterable = true) 是否鼠标可以移入到浮层中
 * @method $this disabled(bool $disabled = false) 是否禁用浮层提示
 * @method $this trigger(string|array $trigger = 'hover') 浮层触发方式，支持数组写法["hover", "click"]，可选值："hover" | "click" | "focus"
 * @method $this mouseEnterDelay(int $mouseEnterDelay = 0) 浮层延迟展示时间，单位 ms
 * @method $this mouseLeaveDelay(int $mouseLeaveDelay = 300) 浮层延迟隐藏时间，单位 ms
 * @method $this rootClose(bool $rootClose = true) 是否点击非内容区域关闭提示
 * @method $this inline(bool $inline = false) 内容区是否内联显示
 * @method $this wrapperComponent(string $wrapperComponent = 'div') 容器标签名，可选值："div" | "span"
 * @method $this body(array|Widget|Widget[] $body) 内容容器
 * @method $this tooltipStyle(string|array $tooltipStyle) 浮层自定义样式
 * @method $this tooltipClassName(string $tooltipClassName) 文字提示浮层类名
 * @method $this tooltipArrowClassName(string $tooltipArrowClassName) 箭头类名
 */
class TooltipWrapper extends Widget
{
    protected string $type = 'tooltip-wrapper';
}
