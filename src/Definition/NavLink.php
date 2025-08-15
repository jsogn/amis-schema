<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * 导航链接
 * @method $this label(string $value) 名称
 * @method $this to(string $value) 链接地址
 * @method $this target(string $value) 链接关系
 * @method $this icon(string $value) 图标
 * @method $this children(array $value) 子链接
 * @method $this unfolded(bool $value) 初始是否展开
 * @method $this active(bool $value) 是否高亮
 * @method $this activeOn(string $value) 是否高亮的条件，留空将自动分析链接地址
 * @method $this defer(bool $value) 标记是否为懒加载项
 * @method $this deferApi(string|array|API $value) 懒加载接口，配置优先级更高
 * @method $this disabled(bool $value) 是否禁用
 * @method $this disabledTip(string $value) 禁用提示信息
 * @method $this className(string $value) 菜单项自定义样式
 * @method $this mode(string $value) 菜单项模式，分组模式：group、分割线：divider
 * @method $this overflow(array|NavOverflow $value) 导航项响应式收纳配置
 */
class NavLink extends Schema
{

}