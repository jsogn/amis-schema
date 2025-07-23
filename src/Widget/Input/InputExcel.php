<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputExcel Excel 解析组件
 *
 * Excel文件上传和解析
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-excel
 *
 * @method $this allSheets(bool $allSheets = false) 设置是否解析所有 sheet
 * @method $this parseMode(string $parseMode = 'object') 设置解析模式，支持 array、object
 * @method $this includeEmpty(bool $includeEmpty = true) 设置是否包含空内容
 * @method $this plainText(bool $plainText = true) 设置是否解析为纯文本
 * @method $this multiple(bool $multiple) 解析多个文件
 * @method $this maxLength(int $maxLength) 解析文件最大数
 */
class InputExcel extends FormItem
{
    protected string $type = 'input-excel';
}
