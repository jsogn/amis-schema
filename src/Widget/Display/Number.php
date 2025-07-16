<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Number 数字展示
 * 
 * 用于展示数字
 *
 * @method self type(string $type) 如果在 Table、Card 和 List 中，为"number"；在 Form 中用作静态展示，为"static-number" 或者 input-number 配置 static 属性
 * @method self className(string $className) 外层 CSS 类名
 * @method self value(string|int|float $value) 数值
 * @method self name(string $name) 在其他组件中，时，用作变量映射
 * @method self placeholder(string $placeholder) 占位内容，默认为 "-"
 * @method self kilobitSeparator(bool $kilobitSeparator) 是否千分位展示，默认为 true
 * @method self precision(int $precision) 用来控制小数点位数
 * @method self percent(bool|int $percent) 是否用百分比展示，如果是数字，还可以控制百分比小数点位数
 * @method self prefix(string $prefix) 前缀
 * @method self affix(string $affix) 后缀
 */
class Number extends Widget
{
    protected string $type = 'number';
}
