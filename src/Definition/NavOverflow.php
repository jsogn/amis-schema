<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Definition;

use Jiangwang\AmisSchema\Schema;

/**
 * @method $this enable(bool $enable) 是否开启响应式收纳
 * @method $this overflowLabel(string|array $overflowLabel) 菜单触发按钮的文字
 * @method $this overflowIndicator(string $overflowIndicator) 菜单触发按钮的图标，默认 fa fa-ellipsis
 * @method $this maxVisibleCount(int $maxVisibleCount) 开启响应式收纳后导航最大可显示数量
 * @method $this wrapperComponent(string $wrapperComponent) 包裹导航的外层标签名
 * @method $this style(array $style) 自定义样式
 * @method $this overflowClassName(string $overflowClassName) 菜单按钮 CSS 类名
 * @method $this overflowPopoverClassName(string $overflowPopoverClassName) Popover 浮层 CSS 类名
 * @method $this mode(string $mode) 导航超长时使用滚动模式还是浮层收纳模式，swipe 或 popup
 *
 * @property bool $enable 是否开启响应式收纳
 * @property string|array $overflowLabel 菜单触发按钮的文字
 * @property string $overflowIndicator 菜单触发按钮的图标，默认 fa fa-ellipsis
 * @property int $maxVisibleCount 开启响应式收纳后导航最大可显示数量
 * @property string $wrapperComponent 包裹导航的外层标签名
 * @property array $style 自定义样式
 * @property string $overflowClassName 菜单按钮 CSS 类名
 * @property string $overflowPopoverClassName Popover 浮层 CSS 类名
 * @property string $mode 导航超长时使用滚动模式还是浮层收纳模式，swipe 或 popup
 */
class NavOverflow extends Schema
{

}