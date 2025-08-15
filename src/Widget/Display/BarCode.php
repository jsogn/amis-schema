<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * BarCode 条形码
 *
 * 条形码生成组件，基于 JsBarcode 库实现
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/barcode
 *
 * @method $this value(string $value = '') 显示的条形码值，支持模板变量
 * @method $this name(string $value = '') 在其他组件中用作变量映射
 * @method $this options(array|\AmisSchema\Definition\BarCodeOptions $value) BarCode 条形码选项配置
 */
class BarCode extends Widget
{
    protected string $type = 'barcode';
}
