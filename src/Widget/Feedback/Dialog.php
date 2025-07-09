<?php

namespace Slowlyo\AmisSchema\Widget\Feedback;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Dialog 对话框
 *
 * @method self type(string $value) 指定为 Dialog 渲染器
 * @method self title($value) 弹出层标题
 * @method self body($value) 往 Dialog 内容区加内容
 * @method self size(string $value) 指定 dialog 大小，支持: xs、sm、md、lg、xl、full
 * @method self bodyClassName(string $value) Dialog body 区域的样式类名
 * @method self closeOnEsc(bool $value) 是否支持按 Esc 关闭 Dialog
 * @method self closeOnOutside(bool $value) 是否支持点其它区域关闭 Dialog
 * @method self showCloseButton(bool $value) 是否显示关闭按钮
 * @method self showErrorMsg(bool $value) 是否显示错误信息
 * @method self showLoading(bool $value) 是否显示 loading 状态
 * @method self overlay(bool $value) 是否显示蒙层
 * @method self width($value) 容器的宽度，在确认框模式下，宽度会关联高度一起调整
 * @method self height($value) 容器的高度
 * @method self actions(array $value) 可以不设置，默认只有【确认】和【取消】两个按钮
 * @method self data($value) 支持数据映射，如果不设定将默认将触发按钮的上下文中继承数据
 * @method self className(string $value) 外层CSS类名
 * @method self headerClassName(string $value) 头部区域的样式类名
 * @method self bodyStyle($value) Dialog body 区域的样式
 * @method self draggable(bool $value) 是否可拖拽
 * @method self position($value) 决定弹框的位置
 * @method self resizable(bool $value) 是否可调整大小
 * @method self onEvent($value) 事件
 */
class Dialog extends Widget
{
    protected string $type = 'dialog';
}
