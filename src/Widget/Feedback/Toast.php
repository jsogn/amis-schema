<?php

namespace Slowlyo\AmisSchema\Widget\Feedback;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Toast 轻提示
 *
 * @method self type(string $value) 指定为 Toast 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self level(string $value) 展示图标，可选值: info、success、error、warning
 * @method self position(string $value) 展示位置，可选值: top-left、top-center、top-right、bottom-left、bottom-center、bottom-right
 * @method self closeButton(bool $value) 是否展示关闭按钮
 * @method self showIcon(bool $value) 是否展示图标
 * @method self timeout(int $value) 持续时间
 * @method self title(string $value) 标题
 * @method self body($value) 内容
 * @method self onEvent($value) 事件
 */
class Toast extends Widget
{
    protected string $type = 'toast';
}
