<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Tag 标签
 *
 * @method self type(string $value) 指定为 tag 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self label(string $value) 标签内容
 * @method self color(string $value) 标签颜色
 * @method self icon(string $value) 图标
 * @method self closable(bool $value) 是否展示关闭按钮
 * @method self style($value) 自定义样式
 * @method self displayMode(string $value) 设置标签的展示模式
 * @method self onEvent($value) 事件
 */
class Tag extends Widget
{
    protected string $type = 'tag';
}
