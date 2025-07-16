<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Definition\BreadcrumbItem;
use AmisSchema\Widget\Widget;

/**
 * Breadcrumb 面包屑
 *
 * 用于展示页面层级关系，帮助用户快速定位和导航
 *
 * @link https://baidu.github.io/amis/zh-CN/components/breadcrumb
 *
 * @method $this className(string $className) 外层类名
 * @method $this itemClassName(string $itemClassName) 导航项类名
 * @method $this separatorClassName(string $separatorClassName) 分割符类名
 * @method $this dropdownClassName(string $dropdownClassName) 下拉菜单类名
 * @method $this dropdownItemClassName(string $dropdownItemClassName) 下拉菜单项类名
 * @method $this separator(string $separator) 分隔符
 * @method $this labelMaxLength(int $labelMaxLength) 最大展示长度，默认 16
 * @method $this tooltipPosition(string $tooltipPosition) 浮窗提示位置，可选：top、bottom、left、right，默认 top
 * @method $this source(string $source) 动态数据
 * @method $this items(BreadcrumbItem[] $items) 面包屑项数组，每个项包含 label、href、icon、dropdown 属性
 */
class Breadcrumb extends Widget
{
    protected string $type = 'breadcrumb';
}