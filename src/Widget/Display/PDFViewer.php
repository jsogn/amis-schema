<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * PDFViewer PDF查看器
 * 
 * 用于渲染PDF文档
 *
 * @method self type(string $type) 指定为 PDFViewer 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self src(string|array $src) PDF文档地址
 * @method self name(string $name) 在其他组件中，时，用作变量映射
 * @method self width(string|int $width) 宽度
 * @method self height(string|int $height) 高度
 */
class PDFViewer extends Widget
{
    protected string $type = 'pdf-viewer';
}
