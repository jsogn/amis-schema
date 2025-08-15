<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Number 数字展示
 *
 * 用于展示数字，支持千分位、精度控制、百分比、前后缀等功能
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/number
 *
 * @method $this value(string|int|float $value = '') 数值，默认 ''
 * @method $this name(string $value = '') 变量映射名称，默认 ''
 * @method $this placeholder(string $value = '-') 占位内容，默认 '-'
 * @method $this kilobitSeparator(bool $value = true) 是否千分位展示，默认 true
 * @method $this precision(int $value = null) 小数点位数，默认 null
 * @method $this percent(bool|int $value = false) 百分比展示，为数字时控制百分比小数位数，默认 false
 * @method $this prefix(string $value = '') 前缀，默认 ''
 * @method $this affix(string $value = '') 后缀，默认 ''
 */
class Number extends Widget
{
    protected string $type = 'number';
}
