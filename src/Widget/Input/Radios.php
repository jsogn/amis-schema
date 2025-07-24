<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * Radios 单选框组件
 * 
 * 通过 options 配置选项，单选
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/radios
 *
 * @method $this columnsCount(int $value) 设置选项按几列来排列，默认为一列
 */
class Radios extends Options
{
    protected string $type = 'radios';
}
