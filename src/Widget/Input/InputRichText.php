<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * InputRichText 富文本编辑器组件
 *
 * 富文本编辑器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-rich-text
 *
 * @method $this saveAsUbb(bool $value) 设置是否保存为 ubb 格式
 * @method $this receiver(string|array|API $value) 设置默认的图片保存 API
 * @method $this videoReceiver(string|array|API $value) 设置默认的视频保存 API，仅支持 froala 编辑器
 * @method $this fileField(string $value) 设置上传文件时的字段名
 * @method $this options(array $value) 设置 tinymce 或 froala 的配置选项
 * @method $this buttons(string[] $value) 设置 froala 专用按钮配置，配置显示的按钮，tinymce 可以通过 options 设置 toolbar 字符串
 */
class InputRichText extends FormItem
{
    protected string $type = 'input-rich-text';
}
