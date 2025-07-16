<?php

namespace Jiangwang\AmisSchema\Widget\Feedback;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Dialog 对话框
 *
 * @method $this type(string $value) 指定为 Dialog 渲染器
 * @method $this title($value) 弹出层标题
 * @method $this body($value) 往 Dialog 内容区加内容
 * @method $this size(string $value) 指定 dialog 大小，支持: xs、sm、md、lg、xl、full
 * @method $this bodyClassName(string $value) Dialog body 区域的样式类名
 * @method $this closeOnEsc(bool $value) 是否支持按 Esc 关闭 Dialog
 * @method $this closeOnOutside(bool $value) 是否支持点其它区域关闭 Dialog
 * @method $this showCloseButton(bool $value) 是否显示关闭按钮
 * @method $this showErrorMsg(bool $value) 是否显示错误信息
 * @method $this showLoading(bool $value) 是否显示 loading 状态
 * @method $this overlay(bool $value) 是否显示蒙层
 * @method $this width($value) 容器的宽度，在确认框模式下，宽度会关联高度一起调整
 * @method $this height($value) 容器的高度
 * @method $this actions(array $value) 可以不设置，默认只有【确认】和【取消】两个按钮
 * @method $this data($value) 支持数据映射，如果不设定将默认将触发按钮的上下文中继承数据
 * @method $this className(string $value) 外层CSS类名
 * @method $this headerClassName(string $value) 头部区域的样式类名
 * @method $this bodyStyle($value) Dialog body 区域的样式
 * @method $this draggable(bool $value) 是否可拖拽
 * @method $this position($value) 决定弹框的位置
 * @method $this resizable(bool $value) 是否可调整大小
 */
class Dialog extends Widget
{
    protected string $type = 'dialog';
}
