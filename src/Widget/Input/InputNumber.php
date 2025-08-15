<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputNumber 数字输入框组件
 *
 * 数字输入框，用于输入数字，支持精度、范围等配置
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-number
 *
 * @method $this min(int|string $value) 最小值
 * @method $this max(int|string $value) 最大值
 * @method $this step(int|float $value) 步长
 * @method $this precision(int $value) 精度，即小数点后几位，支持 0 和正整数
 * @method $this showSteps(bool $value = true) 是否显示上下点击按钮
 * @method $this prefix(string $value) 前缀
 * @method $this suffix(string $value) 后缀
 * @method $this unitOptions(string[] $value) 单位选项
 * @method $this kilobitSeparator(bool $value = false) 千分分隔
 * @method $this keyboard(bool $value = true) 键盘事件（方向上下）
 * @method $this big(bool $value = false) 是否使用大数
 * @method $this displayMode(string $value = "base") 样式类型
 * @method $this borderMode(string $value = "full") 边框模式，全边框，还是半边框，或者没边框
 * @method $this resetValue(int|string $value = "") 清空输入内容时，组件值将设置为 resetValue
 * @method $this clearValueOnEmpty(bool $value = false) 内容为空时从数据域中删除该表单项对应的值
 */
class InputNumber extends FormItem
{
    protected string $type = 'input-number';
}
