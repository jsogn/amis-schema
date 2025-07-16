<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * Portlet 组件，AMis 门户栏目渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/portlet
 *
 * @method $this tabsClassName(string $value = '') Tabs Dom 的类名
 * @method $this contentClassName(string $value = '') Tabs content Dom 的类名
 * @method $this tabs(array $value = []) tabs 内容
 * @method $this source(array $value = []) tabs 关联数据，关联后可以重复生成选项卡
 * @method $this toolbar(array|Widget|Widget[]|string $value = '') tabs 中的工具栏，不随 tab 切换而变化
 * @method $this description(string $value = '') 标题右侧信息
 * @method $this hideHeader(bool $value = false) 隐藏头部
 * @method $this divider(bool $value = false) 去掉分隔线
 * @method $this mountOnEnter(bool $value = false) 只有在点中 tab 的时候才渲染
 * @method $this unmountOnExit(bool $value = false) 切换 tab 的时候销毁
 * @method $this scrollable(bool $value = false) 是否导航支持内容溢出滚动
 */
class Portlet extends Widget
{
    protected string $type = 'portlet';
}