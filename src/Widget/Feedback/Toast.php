<?php

namespace AmisSchema\Widget\Feedback;

use AmisSchema\Widget\Widget;

/**
 * Toast 轻提示
 *
 * @method $this type(string $value) 指定为 Toast 渲染器
 * @method $this className(string $value) 外层CSS类名
 * @method $this level(string $value) 展示图标，可选值: info、success、error、warning
 * @method $this position(string $value) 展示位置，可选值: top-left、top-center、top-right、bottom-left、bottom-center、bottom-right
 * @method $this closeButton(bool $value) 是否展示关闭按钮
 * @method $this showIcon(bool $value) 是否展示图标
 * @method $this timeout(int $value) 持续时间
 * @method $this title(string $value) 标题
 * @method $this body($value) 内容
 */
class Toast extends Widget
{
    protected string $type = 'toast';
}
