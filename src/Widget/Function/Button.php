<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Button 组件，AMis 按钮渲染器。
 * 
 * 注意：button 实际上是 action 的别名，更多用法见 action。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/button
 *
 * @method $this className(string $value) 指定添加 button 类名。
 * @method $this url(string $value) 点击跳转的地址，指定此属性 button 的行为和 a 链接一致。
 * @method $this size(string $value) 设置按钮大小，可选值：'xs'、'sm'、'md'、'lg'。
 * @method $this actionType(string $value) 设置按钮类型，可选值：'button'、'reset'、'submit'、'clear'、'url'。
 * @method $this level(string $value) 设置按钮样式，可选值：'link'、'primary'、'enhance'、'secondary'、'info'、'success'、'warning'、'danger'、'light'、'dark'、'default'。
 * @method $this tooltip(string|array $value) 气泡提示内容。
 * @method $this tooltipPlacement(string $value) 气泡框位置，可选值：'top'、'right'、'bottom'、'left'。
 * @method $this tooltipTrigger(string $value) 触发 tooltip，可选值：'hover'、'focus'。
 * @method $this disabled(bool $value) 按钮失效状态。
 * @method $this disabledTip(string|array $value) 按钮失效状态下的提示。
 * @method $this block(bool $value) 将按钮宽度调整为其父宽度的选项。
 * @method $this loading(bool $value) 显示按钮 loading 效果。
 * @method $this loadingOn(string $value) 显示按钮 loading 表达式。
 */
class Button extends Widget
{
    protected string $type = 'button';
}