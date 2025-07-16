<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputNumber 数字输入框组件
 * 
 * 用于输入数字，支持精度、范围等配置
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-number
 *
 * @method $this min(string|int $value) 设置最小值
 * @method $this max(string|int $value) 设置最大值
 * @method $this step(int|float $value) 设置步长
 * @method $this precision(int $value) 设置精度，即小数点后几位，支持 0 和正整数
 * @method $this showSteps(bool $value) 设置是否显示上下点击按钮，默认为 true
 * @method $this readOnly(bool $value) 设置只读，默认为 false
 * @method $this prefix(string $value) 设置前缀
 * @method $this suffix(string $value) 设置后缀
 * @method $this unitOptions(array $value) 设置单位选项
 * @method $this kilobitSeparator(bool $value) 设置千分分隔，默认为 false
 * @method $this keyboard(bool $value) 设置键盘事件（方向上下），默认为 true
 * @method $this big(bool $value) 设置是否使用大数，默认为 false
 * @method $this displayMode(string $value) 设置样式类型，可选值：'base'、'enhance'，默认为 'base'
 * @method $this borderMode(string $value) 设置边框模式，可选值：'full'、'half'、'none'，默认为 'full'
 * @method $this resetValue(string|int $value) 设置清空输入内容时，组件值将设置为 resetValue
 * @method $this clearValueOnEmpty(bool $value) 设置内容为空时从数据域中删除该表单项对应的值，默认为 false
 */
class InputNumber extends Widget
{
    protected string $type = 'input-number';
}
