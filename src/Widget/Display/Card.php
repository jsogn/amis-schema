<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Card 卡片
 *
 * @method self type(string $value) 指定为 Card 渲染器
 * @method self className(string $value) 外层 Dom 的类名
 * @method self href($value) 外部链接
 * @method self header($value) Card 头部内容设置
 * @method self body(array $value) 内容容器
 * @method self bodyClassName(string $value) 内容区域类名
 * @method self actions(array $value) 配置按钮集合
 * @method self actionsCount(int $value) 按钮集合每行个数
 * @method self itemAction($value) 点击卡片的行为
 * @method self media($value) Card 多媒体部内容设置
 * @method self secondary($value) 次要说明
 * @method self toolbar(array $value) 工具栏按钮
 * @method self dragging(bool $value) 是否显示拖拽图标
 * @method self selectable(bool $value) 卡片是否可选
 * @method self checkable(bool $value) 卡片选择按钮是否禁用
 * @method self selected(bool $value) 卡片选择按钮是否选中
 * @method self hideCheckToggler(bool $value) 卡片选择按钮是否隐藏
 * @method self multiple(bool $value) 卡片是否为多选
 * @method self useCardLabel(bool $value) 卡片内容区的表单项 label 是否使用 Card 内部的样式
 * @method self onEvent($value) 事件
 */
class Card extends Widget
{
    protected string $type = 'card';
}
