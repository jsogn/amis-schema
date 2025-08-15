<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * Tabs 组件，AMis 选项卡渲染器。
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/tabs
 *
 * @method $this defaultKey(string|int $value = '') 组件初始化时激活的选项卡，hash 值或索引值，支持使用表达式
 * @method $this activeKey(string|int $value = '') 激活的选项卡，hash 值或索引值，支持使用表达式，可响应上下文数据变化
 * @method $this linksClassName(string $value = '') Tabs 标题区的类名
 * @method $this contentClassName(string $value = '') Tabs 内容区的类名
 * @method $this tabsMode(string $value = '') 展示模式，取值可以是 line、card、radio、vertical、chrome、simple、strong、tiled、sidebar
 * @method $this tabs(array $value = []) tabs 内容
 * @method $this source(string $value = '') tabs 关联数据，关联后可以重复生成选项卡
 * @method $this toolbar(array|Widget|Widget[]|string $value = '') tabs 中的工具栏
 * @method $this toolbarClassName(string $value = '') tabs 中工具栏的类名
 * @method $this mountOnEnter(bool $value = true) 只有在点中 tab 的时候才渲染
 * @method $this unmountOnExit(bool $value = false) 切换 tab 的时候销毁
 * @method $this addable(bool $value = false) 是否支持新增
 * @method $this addBtnText(string $value = '增加') 新增按钮文案
 * @method $this closable(bool $value = false) 是否支持删除
 * @method $this draggable(bool $value = false) 是否支持拖拽
 * @method $this showTip(bool $value = false) 是否支持提示
 * @method $this showTipClassName(string $value = '') 提示的类
 * @method $this editable(bool $value = false) 是否可编辑标签名
 * @method $this scrollable(bool $value = true) 是否导航支持内容溢出滚动（属性废弃）
 * @method $this sidePosition(string $value = 'left') sidebar 模式下，标签栏位置
 * @method $this collapseOnExceed(int $value = 0) 当 tabs 超出多少个时开始折叠
 * @method $this collapseBtnLabel(string $value = 'more') 用来设置折叠按钮的文字
 * @method $this swipeable(bool $value = false) 是否开启手势滑动切换（移动端生效）
 */
class Tabs extends Widget
{
    protected string $type = 'tabs';
}