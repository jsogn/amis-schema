<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputExcel Excel 解析组件
 * 
 * Excel文件上传和解析
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-excel
 *
 * @method $this allSheets(bool $value) 设置是否解析所有 sheet，默认只解析第一个
 * @method $this parseMode(string $value) 设置解析模式，支持 array、object
 * @method $this includeEmpty(bool $value) 设置是否包含空内容，默认为 true
 * @method $this plainText(bool $value) 设置是否解析为纯文本
 * @method $this placeholder(string $value) 设置占位符
 * @method $this autoFill(array $value) 设置上传成功后的自动填充
 */
class InputExcel extends Widget
{
    protected string $type = 'input-excel';
}
