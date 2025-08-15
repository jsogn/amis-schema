<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\OptionsWidgetTrait;

/**
 * InputText 文本输入框组件
 *
 * 用于输入文本内容，支持各种文本输入场景
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-text
 *
 * @method $this trimContents(bool $value) 设置是否去除首尾空白文本
 * @method $this clearValueOnEmpty(bool $value) 设置文本内容为空时去掉这个值
 * @method $this clearable(bool $value) 设置是否可清除
 * @method $this resetValue(string $value = "") 设置清除后设置此配置项给定的值
 * @method $this prefix(string $value = "") 设置前缀
 * @method $this suffix(string $value = "") 设置后缀
 * @method $this showCounter(bool $value) 设置是否显示计数器
 * @method $this minLength(int $value) 设置限制最小字数
 * @method $this maxLength(int $value) 设置限制最大字数
 * @method $this borderMode(string $value = "full") 设置输入框边框模式，全边框，还是半边框，或者没边框
 * @method $this inputControlClassName(string $value) 设置 control 节点的 CSS 类名
 * @method $this nativeInputClassName(string $value) 设置原生 input 标签的 CSS 类名
 * @method $this nativeAutoComplete(string $value = "off") 设置原生 input 标签的 autoComplete 属性
 * @method $this addOn(array|\AmisSchema\Definition\InputTextAddOn $value) InputText 文本输入框附加组件配置
 * @method $this transform(array|\AmisSchema\Definition\InputTextTransform $value) 设置自动转换值
 */
class InputText extends FormItem
{
    use OptionsWidgetTrait;

    protected string $type = 'input-text';
}
