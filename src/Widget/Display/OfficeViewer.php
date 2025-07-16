<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * OfficeViewer Office文档查看器
 * 
 * 用于渲染Office文档（Word、Excel等）
 *
 * @method self type(string $type) 指定为 OfficeViewer 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self src(string|array $src) 文档地址
 * @method self name(string $name) 在其他组件中，时，用作变量映射
 */
class OfficeViewer extends Widget
{
    protected string $type = 'office-viewer';
}
