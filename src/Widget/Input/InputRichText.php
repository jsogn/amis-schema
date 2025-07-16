<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputRichText 富文本编辑器组件
 * 
 * 富文本编辑器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-rich-text
 *
 * @method $this vendor(string $value) 设置使用哪个版本的富文本编辑器，tinymce 或者 froala
 * @method $this receiver(string|array $value) 设置默认的图片保存 API
 * @method $this videoReceiver(string|array $value) 设置默认的视频保存 API
 * @method $this size(string $value) 设置框的大小，可以设置成 md或者lg让输入框变大
 * @method $this buttons(array $value) 设置自定义工具栏，默认为全部
 * @method $this options(array $value) 设置需要参考 tinymce 或 froala 的文档
 * @method $this placeholder(string $value) 设置占位符
 */
class InputRichText extends Widget
{
    protected string $type = 'input-rich-text';
}
