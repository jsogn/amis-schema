<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * @method $this enable(bool $value) 是否开启响应式收纳
 * @method $this overflowLabel(string|array $value) 菜单触发按钮的文字
 * @method $this overflowIndicator(string $value) 菜单触发按钮的图标
 * @method $this maxVisibleCount(int $value) 开启响应式收纳后导航最大可显示数量
 * @method $this wrapperComponent(string $value) 包裹导航的外层标签名
 * @method $this style(array $value) 自定义样式
 * @method $this overflowClassName(string $value) 菜单按钮 CSS 类名
 * @method $this overflowPopoverClassName(string $value) Popover 浮层 CSS 类名
 * @method $this mode(string $value) 导航超长时使用滚动模式还是浮层收纳模式，swipe 或 popup
 */
class NavOverflow extends Schema
{

}