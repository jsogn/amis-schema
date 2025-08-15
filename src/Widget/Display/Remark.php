<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Remark 标记
 * 
 * 用于展示提示文本，和表单项中的 remark 属性类型
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/remark
 *
 * @method $this content(string $value = '') 提示文本，支持模板变量
 * @method $this placement(string $value = '') 弹出位置
 * @method $this trigger(array|string $value = ['hover', 'focus']) 触发条件
 * @method $this icon(string $value = 'fa fa-question-circle') 图标
 * @method $this shape(string $value = 'circle') 图标形状，可选 circle、square
 */
class Remark extends Widget
{
    protected string $type = 'remark';
}