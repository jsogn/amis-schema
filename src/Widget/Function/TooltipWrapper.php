<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * 文字提示容器组件
 * @link https://baidu.github.io/amis/zh-CN/components/tooltip
 *
 * @method $this title(string $title) 文字提示标题
 * @method $this content(string $content) 文字提示内容, 兼容之前的 tooltip 属性
 * @method $this placement(string $placement) 文字提示浮层出现位置，可选值："top" | "left" | "right" | "bottom"，默认值: "top"
 * @method $this tooltipTheme(string $tooltipTheme) 主题样式，可选值："light" | "dark"，默认值: "light"
 * @method $this offset(array $offset) 文字提示浮层位置相对偏移量，单位 px，默认值: [0, 0]
 * @method $this showArrow(bool $showArrow) 是否展示浮层指向箭头，默认值: true
 * @method $this enterable(bool $enterable) 是否鼠标可以移入到浮层中，默认值: true
 * @method $this disabled(bool $disabled) 是否禁用浮层提示，默认值: false
 * @method $this trigger(string|array $trigger) 浮层触发方式，支持数组写法["hover", "click"]，可选值："hover" | "click" | "focus"，默认值: "hover"
 * @method $this mouseEnterDelay(int $mouseEnterDelay) 浮层延迟展示时间，单位 ms，默认值: 0
 * @method $this mouseLeaveDelay(int $mouseLeaveDelay) 浮层延迟隐藏时间，单位 ms，默认值: 300
 * @method $this rootClose(bool $rootClose) 是否点击非内容区域关闭提示，默认值: true
 * @method $this inline(bool $inline) 内容区是否内联显示，默认值: false
 * @method $this wrapperComponent(string $wrapperComponent) 容器标签名，可选值："div" | "span"
 * @method $this body(mixed $body) 内容容器
 * @method $this style(mixed $style) 内容区自定义样式
 * @method $this tooltipStyle(mixed $tooltipStyle) 浮层自定义样式
 * @method $this className(string $className) 内容区类名
 * @method $this tooltipClassName(string $tooltipClassName) 文字提示浮层类名
 * @method $this tooltipArrowClassName(string $tooltipArrowClassName) 箭头类名
 */
class TooltipWrapper extends Widget
{
    protected string $type = 'tooltip-wrapper';
}
