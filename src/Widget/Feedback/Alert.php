<?php

namespace AmisSchema\Widget\Feedback;

use AmisSchema\Widget\Widget;

/**
 * Alert 提示
 *
 * 用来做文字特殊提示，分为四类：提示类、成功类、警告类和危险类
 *
 * @method $this title(string $value = '') 提示标题
 * @method $this body(array|Widget|Widget[] $value = '') 显示内容，支持 SchemaNode
 * @method $this level(string $value = 'info') 级别：info、success、warning、danger
 * @method $this showCloseButton(bool $value = false) 是否显示关闭按钮
 * @method $this closeButtonClassName(string $value = '') 关闭按钮的 CSS 类名
 * @method $this showIcon(bool $value = false) 是否显示图标
 * @method $this icon(string $value = '') 自定义图标，为空时根据 level 自动选择
 * @method $this iconClassName(string $value = '') 图标的 CSS 类名
 * @method $this actions(array $value = []) 操作区域配置
 *
 * @version 1.6.4 level、icon、showIcon 支持表达式
 * @version 3.6.0 支持 actions 操作区域
 */
class Alert extends Widget
{
    protected string $type = 'alert';
}
