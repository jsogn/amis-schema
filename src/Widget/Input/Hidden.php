<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Hidden 隐藏字段组件
 * 
 * 隐藏字段类型
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/hidden
 *
 * @method $this value(mixed $value) 设置表单项值
 */
class Hidden extends Widget
{
    protected string $type = 'hidden';
}
