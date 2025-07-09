<?php

namespace Slowlyo\AmisSchema\Widget\Feedback;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Alert 提示
 *
 * @method self type(string $value) 指定为 Alert 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self level(string $value) 级别，可以是：info、success、warning 或者 danger
 * @method self body($value) 显示内容
 * @method self title(string $value) 标题
 * @method self showCloseButton(bool $value) 是否显示关闭按钮
 * @method self closeButtonClassName(string $value) 关闭按钮CSS类名
 * @method self showIcon(bool $value) 是否显示图标
 * @method self icon(string $value) 自定义图标
 * @method self iconClassName(string $value) 图标CSS类名
 * @method self onEvent($value) 事件
 */
class Alert extends Widget
{
    protected string $type = 'alert';
}
