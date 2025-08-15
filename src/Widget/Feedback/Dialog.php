<?php

namespace AmisSchema\Widget\Feedback;

use AmisSchema\Widget\Widget;

/**
 * Dialog 对话框
 *
 * Dialog 弹框主要由 Action 触发，主要展示一个对话框以供用户操作
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/dialog
 *
 * @method $this title(string|Widget $value = '') 弹出层标题，支持 SchemaNode
 * @method $this body(array|Widget|Widget[] $value = '') 往 Dialog 内容区加内容，支持 SchemaNode
 * @method $this size(string $value = '') 指定 dialog 大小：xs、sm、md、lg、xl、full
 * @method $this bodyClassName(string $value = 'modal-body') Dialog body 区域的样式类名
 * @method $this closeOnEsc(bool $value = false) 是否支持按 Esc 关闭 Dialog
 * @method $this closeOnOutside(bool $value = false) 是否支持点击其它区域关闭 Dialog
 * @method $this showCloseButton(bool $value = true) 是否显示右上角的关闭按钮
 * @method $this showErrorMsg(bool $value = true) 是否在弹框左下角显示报错信息
 * @method $this showLoading(bool $value = true) 是否在弹框左下角显示 loading 动画
 * @method $this disabled(bool $value = false) 如果设置此属性，则该 Dialog 只读没有提交操作
 * @method $this actions(array $value = []) 自定义按钮配置，默认为【确认】和【取消】
 * @method $this data(array $value = null) 支持数据映射，如果不设定将默认继承触发按钮的上下文数据
 * @method $this width(int|string $value) 容器的宽度
 * @method $this height(int|string $value) 容器的高度
 * @method $this headerClassName(string $value = '') 头部区域的样式类名
 * @method $this bodyStyle(string $value) Dialog body 区域的样式
 * @method $this draggable(bool $value = false) 是否可拖拽
 * @method $this position(string $value) 决定弹框的位置
 * @method $this resizable(bool $value = false) 是否可调整大小
 * @method $this overlay(bool $value = true) 是否显示蒙层
 * @method $this name(string $value = '') 弹框名称，用于动作控制
 */
class Dialog extends Widget
{
    protected string $type = 'dialog';
}
