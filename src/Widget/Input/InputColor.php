<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputColor 颜色选择器组件
 *
 * 颜色选择器，支持多种颜色格式
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-color
 *
 * @method $this format(string $value = 'hex') 设置颜色格式，支持 hex、hexa、hls、rgb、rgba，默认为 hex
 * @method $this allowCustomColor(bool $value = true) 设置是否允许自定义颜色，为 false 时只能选择颜色，使用 presetColors 设定颜色选择范围，默认为 true
 * @method $this clearable(bool $value = 'label') 设置是否显示清除按钮
 * @method $this resetValue(string $value) 设置清除后表单项值调整成该值，默认为空字符串
 */
class InputColor extends Options
{
    protected string $type = 'input-color';

    /**
     * 设置选择器底部的预设颜色值，数组内为字符串或者对象格式，数组内为空则不显示默认颜色
     * @param array<string|array{color: string, title: string}> $value
     * @return self
     */
    public function presetColors(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
