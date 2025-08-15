<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Breadcrumb 面包屑
 *
 * 用于展示页面层级关系，帮助用户快速定位和导航
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/breadcrumb
 *
 * @method $this itemClassName(string $itemClassName) 导航项类名
 * @method $this separatorClassName(string $separatorClassName) 分割符类名
 * @method $this dropdownClassName(string $dropdownClassName) 下拉菜单类名
 * @method $this dropdownItemClassName(string $dropdownItemClassName) 下拉菜单项类名
 * @method $this separator(string $separator) 分隔符
 * @method $this labelMaxLength(int $labelMaxLength = 16) 最大展示长度
 * @method $this tooltipPosition(string $tooltipPosition = 'top') 浮窗提示位置
 * @method $this source(string|array|API $source) 动态数据
 * @method $this items(\AmisSchema\Definition\BreadcrumbItem $value) Breadcrumb 面包屑项配置
 */
class Breadcrumb extends Widget
{
    protected string $type = 'breadcrumb';
}