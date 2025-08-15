<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputFormula 公式编辑器
 *
 * 公式编辑器，用来输入公式，基于 formula.js 实现
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-formula
 *
 * @method $this title(string $value = '公式编辑器') 弹框标题，默认为 '公式编辑器'
 * @method $this header(string $value) 编辑器 header 标题，如果不设置，默认使用表单项label字段
 * @method $this evalMode(bool $value = true) 表达式模式 或者 模板模式，默认为 true
 * @method $this variableMode(string $value = 'list') 变量展示模式，可配置成 tabs 或者 tree，默认为 'list'
 * @method $this functions(array $value) 可用函数，默认就是 amis-formula 里面定义的函数
 * @method $this inputMode(string $value) 控件的展示模式，可选值：button、input-button、input-group
 * @method $this icon(string $value) 按钮图标，例如 fa fa-list
 * @method $this btnLabel(string $value = '公示编辑') 按钮文本，inputMode为button时生效，默认为 '公示编辑'
 * @method $this level(string $value = 'default') 按钮样式，默认为 'default'
 * @method $this allowInput(bool $value) 输入框是否可输入
 * @method $this btnSize(string $value) 按钮大小，可选值：xs、sm、md、lg
 * @method $this borderMode(string $value) 输入框边框模式，可选值：full、half、none
 * @method $this variableClassName(string $value) 变量面板 CSS 样式类名
 * @method $this functionClassName(string $value) 函数面板 CSS 样式类名
 * @method $this mixedMode(bool $value) 是否启用混合模式，支持输入文本和输入公式
 * @method $this variables(array|\AmisSchema\Definition\InputFormulaVariable[] $value) InputFormula 公式编辑器变量配置
 */
class InputFormula extends FormItem
{
    protected string $type = 'input-formula';
}
