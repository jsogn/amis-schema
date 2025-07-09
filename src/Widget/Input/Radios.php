<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Radios 单选框组件
 * 
 * 通过 options 配置选项，单选
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/radios
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this columnsCount(int $value) 设置选项按几列来排列，默认为一列
 * @method $this inline(bool $value) 设置是否一行显示，默认为 true
 * @method $this selectFirst(bool $value) 设置是否默认选中第一个，默认为 false
 * @method $this autoFill(array $value) 设置自动填充
 */
class Radios extends Widget
{
    protected string $type = 'radios';
}
