<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputRange 滑块组件
 * 
 * 滑块输入控件
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-range
 *
 * @method $this min(int $value) 设置最小值
 * @method $this max(int $value) 设置最大值
 * @method $this step(int $value) 设置步长
 * @method $this showSteps(bool $value) 设置是否显示步长
 * @method $this parts(int $value) 设置分段数量，默认为1，即不分段
 * @method $this marks(array $value) 设置刻度标记
 * @method $this tooltipVisible(bool $value) 设置是否显示滑块标签
 * @method $this tooltipPlacement(string $value) 设置滑块标签的位置，默认bottom，可选top、bottom、left、right
 * @method $this multiple(bool $value) 设置支持选择范围
 * @method $this joinValues(bool $value) 设置默认为 true，选择的 value 会通过 delimiter 连接起来，否则直接将以{min: 1, max: 100}的形式提交
 * @method $this delimiter(string $value) 设置分隔符，默认为 ,
 * @method $this unit(string $value) 设置单位
 * @method $this clearable(bool $value) 设置是否可清除
 * @method $this showInput(bool $value) 设置是否显示输入框
 * @method $this className(string $value) 设置外层dom的类名
 * @method $this inputClassName(string $value) 设置输入框的类名
 * @method $this showInputUnit(bool $value) 设置是否显示输入框单位
 */
class InputRange extends Widget
{
    protected string $type = 'input-range';
}
