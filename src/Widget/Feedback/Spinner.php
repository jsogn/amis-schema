<?php

namespace Jiangwang\AmisSchema\Widget\Feedback;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Spinner 加载中
 *
 * @method $this type(string $value) 指定为 Spinner 渲染器
 * @method $this className(string $value) 外层CSS类名
 * @method $this size(string $value) 大小 sm、lg
 * @method $this icon(string $value) 自定义图标
 * @method $this tip(string $value) 自定义文案
 * @method $this tipPlacement(string $value) 文案位置 top、right、bottom、left
 * @method $this delay(int $value) 延迟显示
 * @method $this overlay(bool $value) 是否显示遮罩
 * @method $this onEvent($value) 事件
 */
class Spinner extends Widget
{
    protected string $type = 'spinner';
}
