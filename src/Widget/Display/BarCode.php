<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * BarCode 条形码
 * 
 * 条形码生成组件
 *
 * @method self type(string $type) 指定为 BarCode 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self value(string $value) 显示的条形码值
 * @method self name(string $name) 在其他组件中，时，用作变量映射
 * @method self options(array $options) 条形码配置选项
 */
class BarCode extends Widget
{
    protected string $type = 'barcode';
}
