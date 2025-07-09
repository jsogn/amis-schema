<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputColor 颜色选择器组件
 * 
 * 颜色选择器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-color
 *
 * @method $this format(string $value) 设置请选择 hex、hls、rgb或者rgba
 * @method $this presetColors(array $value) 设置选择器底部的默认颜色，数组内为字符串或者对象格式
 * @method $this allowCustomColor(bool $value) 设置为false时只能选择颜色，使用 presetColors 设定颜色选择范围
 * @method $this clearable(bool $value) 设置是否显示清除按钮
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 */
class InputColor extends Widget
{
    protected string $type = 'input-color';
}
