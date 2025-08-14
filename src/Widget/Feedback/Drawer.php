<?php

namespace AmisSchema\Widget\Feedback;

use AmisSchema\Widget\Widget;

/**
 * Drawer 抽屉
 *
 * 抽屉组件，从屏幕边缘滑出的浮层面板
 *
 * @method $this title(string|Widget $value = '') 弹出层标题，支持 SchemaNode
 * @method $this body(array|Widget|Widget[] $value = '') 往 Drawer 内容区加内容，支持 SchemaNode
 * @method $this size(string $value = '') 指定 Drawer 大小：xs、sm、md、lg、xl
 * @method $this position(string $value = 'right') 指定 Drawer 方向：left、right、top、bottom
 * @method $this headerClassName(string $value = '') Drawer 头部区域的样式类名
 * @method $this bodyClassName(string $value = 'modal-body') Drawer body 区域的样式类名
 * @method $this footerClassName(string $value = '') Drawer 页脚区域的样式类名
 * @method $this showCloseButton(bool $value = true) 是否展示关闭按钮，当值为 false 时，默认开启 closeOnOutside
 * @method $this closeOnEsc(bool $value = false) 是否支持按 Esc 关闭 Drawer
 * @method $this closeOnOutside(bool $value = false) 点击内容区外是否关闭 Drawer
 * @method $this overlay(bool $value = true) 是否显示蒙层
 * @method $this resizable(bool $value = false) 是否可通过拖拽改变 Drawer 大小
 * @method $this width(string|int $value = '500px') 容器的宽度，在 position 为 left 或 right 时生效
 * @method $this height(string|int $value = '500px') 容器的高度，在 position 为 top 或 bottom 时生效
 * @method $this actions(array $value = []) 自定义按钮配置，默认为【确认】和【取消】
 * @method $this data(array $value = null) 支持数据映射，如果不设定将默认继承触发按钮的上下文数据
 * @method $this name(string $value = '') 抽屉名称，用于动作控制
 *
 * @version 3.3.0 表单支持 close: false 配置
 */
class Drawer extends Widget
{
    protected string $type = 'drawer';
}
