<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Definition\API;
use AmisSchema\Definition\NavLink;
use AmisSchema\Definition\NavOverflow;
use AmisSchema\Definition\NavSearchConfig;
use AmisSchema\Widget\Display\Icon;
use AmisSchema\Widget\Extra\Badge;
use AmisSchema\Widget\Widget;

/**
 * Nav 导航
 *
 * 用于展示链接导航，支持多层级、动态加载、响应式收纳等功能
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/nav
 *
 * @method $this mode(string $mode = 'inline') 导航模式，可选：inline、float、panel
 * @method $this collapsed(bool $collapsed) 控制导航是否缩起
 * @method $this indentSize(int $indentSize = 16) 层级缩进值，仅内联模式下生效
 * @method $this level(int $level) 控制导航最大展示层级数
 * @method $this defaultOpenLevel(int $defaultOpenLevel) 控制导航最大默认展开层级
 * @method $this popupClassName(string $popupClassName) 当为悬浮模式时，可自定义悬浮层样式
 * @method $this expandIcon(string|Icon $expandIcon) 自定义展开按钮
 * @method $this expandPosition(string $expandPosition) 展开按钮位置，可选：before、after，默认 before
 * @method $this stacked(bool $stacked = true) 设置成 false 可以以 tabs 的形式展示
 * @method $this accordion(bool $accordion) 是否开启手风琴模式
 * @method $this source(string|array|API $source) 可以通过变量或 API 接口动态创建导航
 * @method $this deferApi(string|array|API $deferApi) 用来延时加载选项详情的接口，可以不配置，不配置公用 source 接口
 * @method $this itemActions(array|Widget[] $itemActions) 更多操作相关配置
 * @method $this draggable(bool $draggable) 是否支持拖拽排序
 * @method $this dragOnSameLevel(bool $dragOnSameLevel) 仅允许同层级内拖拽
 * @method $this saveOrderApi(string|array|API $saveOrderApi) 保存排序的 api
 * @method $this itemBadge(Badge $itemBadge) 角标
 * @method $this links(array|NavLink[] $links) 链接集合
 * @method $this overflow(array|NavOverflow $overflow) 响应式收纳配置
 * @method $this searchable(bool $searchable = false) 是否开启搜索
 * @method $this searchConfig(array|NavSearchConfig $searchConfig) 搜索配置
 */
class Nav extends Widget
{
    protected string $type = 'nav';
}