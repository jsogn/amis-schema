<?php

namespace Slowlyo\AmisSchema\Widget\Feedback;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Drawer 抽屉
 *
 * @method self type(string $value) 指定为 Drawer 渲染器
 * @method self title($value) 弹出层标题
 * @method self body($value) 往 Drawer 内容区加内容
 * @method self size(string $value) 指定 Drawer 大小，支持: xs、sm、md、lg、xl
 * @method self bodyClassName(string $value) Drawer body 区域的样式类名
 * @method self closeOnEsc(bool $value) 是否支持按 Esc 关闭 Drawer
 * @method self closeOnOutside(bool $value) 是否支持点其它区域关闭 Drawer
 * @method self overlay(bool $value) 是否显示蒙层
 * @method self resizable(bool $value) 是否可拖拽调整大小
 * @method self position(string $value) 抽屉的位置 top、right、bottom、left
 * @method self className(string $value) 外层CSS类名
 * @method self headerClassName(string $value) 头部区域的样式类名
 * @method self footerClassName(string $value) 底部区域的样式类名
 * @method self actions(array $value) 可以不设置，默认只有【确认】和【取消】两个按钮
 * @method self data($value) 支持数据映射
 * @method self width($value) 容器的宽度，在 position 为 left 或 right 时生效
 * @method self height($value) 容器的高度，在 position 为 top 或 bottom 时生效
 * @method self onEvent($value) 事件
 */
class Drawer extends Widget
{
    protected string $type = 'drawer';
}
