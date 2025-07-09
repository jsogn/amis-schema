<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Definition;

use Jiangwang\AmisSchema\Schema;

/**
 * 导航链接
 * @method $this label(string $label) 名称
 * @method $this to(string $to) 链接地址
 * @method $this target(string $target) 链接关系
 * @method $this icon(string $icon) 图标
 * @method $this children(array $children) 子链接
 * @method $this unfolded(bool $unfolded) 初始是否展开
 * @method $this active(bool $active) 是否高亮
 * @method $this activeOn(string $activeOn) 是否高亮的条件，留空将自动分析链接地址
 * @method $this defer(bool $defer) 标记是否为懒加载项
 * @method $this deferApi(API $deferApi) 懒加载接口，配置优先级更高
 * @method $this disabled(bool $disabled) 是否禁用
 * @method $this disabledTip(string $disabledTip) 禁用提示信息
 * @method $this className(string $className) 菜单项自定义样式
 * @method $this mode(string $mode) 菜单项模式，分组模式：group、分割线：divider
 * @method $this overflow(NavOverflow $overflow) 导航项响应式收纳配置
 *
 * @property string $label 名称
 * @property string $to 链接地址
 * @property string $target 链接关系
 * @property string $icon 图标
 * @property array $children 子链接
 * @property bool $unfolded 初始是否展开
 * @property bool $active 是否高亮
 * @property string $activeOn 是否高亮的条件，留空将自动分析链接地址
 * @property bool $defer 标记是否为懒加载项
 * @property API $deferApi 懒加载接口，配置优先级更高
 * @property bool $disabled 是否禁用
 * @property string $disabledTip 禁用提示信息
 * @property string $className 菜单项自定义样��
 * @property string $mode 菜单项模式，分组模式：group、分割线：divider
 * @property NavOverflow $overflow 导航项响应式收纳配置
 */
class NavLink extends Schema
{

}