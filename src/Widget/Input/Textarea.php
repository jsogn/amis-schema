<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * Textarea 多行文本输入框组件
 * 
 * 用于输入多行文本内容
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/textarea
 *
 * @method $this minRows(int $value = 3) 设置最小行数
 * @method $this maxRows(int $value = 20) 设置最大行数
 * @method $this trimContents(bool $value = true) 设置是否去除首尾空白文本
 * @method $this showCounter(bool $value = false) 设置是否显示计数器
 * @method $this maxLength(int $value) 设置限制最大字数
 * @method $this clearable(bool $value = false) 设置是否可清除
 * @method $this resetValue(string $value = "") 设置清除后设置此配置项给定的值
 */
class Textarea extends FormItem
{
    protected string $type = 'textarea';
}
