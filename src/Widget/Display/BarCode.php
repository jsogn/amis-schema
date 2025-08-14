<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * BarCode 条形码
 * 
 * 条形码生成组件，基于 JsBarcode 库实现
 *
 * @method $this value(string $value = '') 显示的条形码值，支持模板变量
 * @method $this name(string $value = '') 在其他组件中用作变量映射
 */
class BarCode extends Widget
{
    protected string $type = 'barcode';

    /**
     * 设置条形码配置选项
     * 
     * @param array{
     *     format?: string,
     *     width?: int,
     *     height?: int,
     *     displayValue?: bool,
     *     fontSize?: int,
     *     margin?: int,
     *     marginTop?: int,
     *     marginBottom?: int,
     *     marginLeft?: int,
     *     marginRight?: int,
     *     background?: string,
     *     lineColor?: string,
     *     textAlign?: string,
     *     textPosition?: string,
     *     textMargin?: int,
     *     font?: string,
     *     fontOptions?: string,
     *     valid?: callable
     * } $value 条形码配置参数，详细配置请参考 JsBarcode 文档
     * @return $this
     */
    public function options(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
