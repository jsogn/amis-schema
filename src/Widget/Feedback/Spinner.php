<?php

namespace Slowlyo\AmisSchema\Widget\Feedback;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Spinner 加载中
 *
 * @method self type(string $value) 指定为 Spinner 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self size(string $value) 大小 sm、lg
 * @method self icon(string $value) 自定义图标
 * @method self tip(string $value) 自定义文案
 * @method self tipPlacement(string $value) 文案位置 top、right、bottom、left
 * @method self delay(int $value) 延迟显示
 * @method self overlay(bool $value) 是否显示遮罩
 * @method self onEvent($value) 事件
 */
class Spinner extends Widget
{
    protected string $type = 'spinner';
}
