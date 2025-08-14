<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * OfficeViewer Office文档查看器
 *
 * 用于渲染Office文档(since 2.9.0)，Word支持docx格式，Excel支持xlsx/csv/tsv格式(since 6.3.0)
 *
 * @method $this src(string|API|array $value = '') 文档地址，默认 ''
 * @method $this loading(bool $value = false) 是否显示loading图标，默认 false
 * @method $this enableVar(bool $value = true) 是否开启变量替换功能，默认 true
 * @method $this wordOptions(array $value = []) Word渲染配置选项，默认 []
 * @method $this excelOptions(array $value = []) Excel渲染配置选项(since 6.3.0)，默认 []
 */
class OfficeViewer extends Widget
{
    protected string $type = 'office-viewer';
}
