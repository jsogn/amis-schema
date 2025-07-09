<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Remark 标记
 * 
 * 用于展示提示文本，和表单项中的 remark 属性类型。
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/remark
 *
 * @method self type(string $type) 指定为 Remark 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self content(string $content) 提示文本
 * @method self placement(string $placement) 弹出位置
 * @method self trigger(string $trigger) 触发条件，默认 ['hover', 'focus']
 * @method self icon(string $icon) 图标，默认 fa fa-question-circle
 * @method self shape(string $shape) 图标形状，可选 circle、square
 */
class Remark extends Widget
{
    protected string $type = 'remark';
}