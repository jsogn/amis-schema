<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * InputText 文本输入框组件
 *
 * 用于输入文本内容，支持各种文本输入场景
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-text
 *
 * @method $this options(string[]|array $value) 设置选项组
 * @method $this source(string|API $value) 设置动态选项组
 * @method $this autoComplete(string|API $value) 设置自动补全
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this trimContents(bool $value) 设置是否去除首尾空白文本
 * @method $this clearValueOnEmpty(bool $value) 设置文本内容为空时去掉这个值
 * @method $this creatable(bool $value) 设置是否可以创建，默认为可以
 * @method $this clearable(bool $value) 设置是否可清除
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 * @method $this prefix(string $value) 设置前缀
 * @method $this suffix(string $value) 设置后缀
 * @method $this showCounter(bool $value) 设置是否显示计数器
 * @method $this minLength(int $value) 设置限制最小字数
 * @method $this maxLength(int $value) 设置限制最大字数
 * @method $this borderMode(string $value) 设置输入框边框模式，可选值：'full'、'half'、'none'
 * @method $this inputControlClassName(string $value) 设置 control 节点的 CSS 类名
 * @method $this nativeInputClassName(string $value) 设置原生 input 标签的 CSS 类名
 * @method $this nativeAutoComplete(string $value) 设置原生 input 标签的 autoComplete 属性
 */
class InputText extends FormItem
{
    protected string $type = 'input-text';

    /**
     * 输入框附加组件，比如附带一个提示文字，或者附带一个提交按钮。
     * @param array{
     *     type: 'text'|'button'|'submit',
     *     label: string,
     *     position: string,
     * } $value
     * @return self
     */
    public function addOn(array $value): self
    {
        return $this->__call(__METHOD__, $value);
    }

    /**
     * 设置自动转换值
     * @param array{
     *     lowerCase: bool,
     *     upperCase: bool
     * } $value
     * @return self
     */
    public function transform(array $value): self
    {
        return $this->__call(__METHOD__, $value);
    }
}
