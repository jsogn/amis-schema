<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * Textarea 多行文本输入框组件
 * 
 * 用于输入多行文本内容
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/textarea
 *
 * @method $this minRows(int $value) 设置最小行数，默认为 3
 * @method $this maxRows(int $value) 设置最大行数，默认为 20
 * @method $this trimContents(bool $value) 设置是否去除首尾空白文本，默认为 true
 * @method $this readOnly(bool $value) 设置是否只读，默认为 false
 * @method $this showCounter(bool $value) 设置是否显示计数器，默认为 false
 * @method $this maxLength(int $value) 设置限制最大字数
 * @method $this clearable(bool $value) 设置是否可清除，默认为 false
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 */
class Textarea extends Widget
{
    protected string $type = 'textarea';
}
