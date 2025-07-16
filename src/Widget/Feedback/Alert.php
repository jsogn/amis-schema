<?php

namespace Jiangwang\AmisSchema\Widget\Feedback;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Alert 提示
 *
 * @method $this type(string $value) 指定为 Alert 渲染器
 * @method $this className(string $value) 外层CSS类名
 * @method $this level(string $value) 级别，可以是：info、success、warning 或者 danger
 * @method $this body($value) 显示内容
 * @method $this title(string $value) 标题
 * @method $this showCloseButton(bool $value) 是否显示关闭按钮
 * @method $this closeButtonClassName(string $value) 关闭按钮CSS类名
 * @method $this showIcon(bool $value) 是否显示图标
 * @method $this icon(string $value) 自定义图标
 * @method $this iconClassName(string $value) 图标CSS类名
 */
class Alert extends Widget
{
    protected string $type = 'alert';
}
