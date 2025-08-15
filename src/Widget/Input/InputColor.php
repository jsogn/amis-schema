<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputColor 颜色选择器组件
 *
 * 颜色选择器，支持多种颜色格式
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-color
 *
 * @method $this format(string $value = 'hex') 设置颜色格式，支持 hex、hexa、hls、rgb、rgba
 * @method $this allowCustomColor(bool $value = true) 设置是否允许自定义颜色，为 false 时只能选择颜色
 * @method $this clearable(bool $value = false) 设置是否显示清除按钮
 * @method $this resetValue(string $value = '') 设置清除后表单项值调整成该值
 * @method $this presetColors(array|string[]|\AmisSchema\Definition\InputColorPresetColor[] $value) InputColor 颜色选择器预设颜色配置
 */
class InputColor extends Options
{
    protected string $type = 'input-color';
}
