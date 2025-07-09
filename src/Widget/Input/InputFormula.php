<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputFormula 公式编辑器组件
 * 
 * 公式编辑器，一般用来编辑数学公式，基于 formula.js 实现
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-formula
 *
 * @method $this header(string $value) 设置弹出框顶部标题
 * @method $this evalMode(bool $value) 设置是否启用表达式计算，默认为 false
 * @method $this variables(array $value) 设置可用变量
 * @method $this functions(array $value) 设置可以用的函数
 * @method $this variableMode(string $value) 设置变量展现模式，可选值：tabs、tree
 * @method $this inputMode(string $value) 设置输入模式，可选值：button（按钮模式）、input-button（输入框加按钮的模式）
 * @method $this icon(string $value) 设置按钮模式下的按钮图标
 * @method $this btnLabel(string $value) 设置按钮模式下的按钮标题
 * @method $this level(string $value) 设置按钮模式下的按钮级别，同Button
 * @method $this allowInput(bool $value) 设置input-button 模式下是否允许输入，否则只能点击按钮设置
 * @method $this btnSize(string $value) 设置按钮大小
 * @method $this borderMode(string $value) 设置输入框边框模式
 * @method $this placeholder(string $value) 设置输入框占位符
 * @method $this clearable(bool $value) 设置是否可清除
 */
class InputFormula extends Widget
{
    protected string $type = 'input-formula';
}
