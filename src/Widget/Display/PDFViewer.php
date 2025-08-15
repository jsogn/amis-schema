<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * PDFViewer PDF查看器
 *
 * 用于渲染PDF文档，支持文件上传预览功能
 *
 * @method $this src(string|array|API $value = '') PDF文档地址，默认 ''
 * @method $this width(int $value = null) 宽度，默认 null
 * @method $this height(int $value = null) 高度，默认 null
 * @method $this background(string $value = '#fff') PDF背景色，默认 '#fff'
 * @method $this name(string $value = '') 变量映射名称，配合文件上传使用，默认 ''
 */
class PDFViewer extends Widget
{
    protected string $type = 'pdf-viewer';
}
