<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * ButtonGroupSelect 按钮点选组件
 * 
 * 一般用来作为选项选择器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/button-group-select
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this autoFill(array $value) 设置自动填充
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this clearable(bool $value) 设置是否可清空
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 * @method $this btnLevel(string $value) 设置按钮样式，支持：link、primary、secondary、info、success、warning、danger、light、dark、default
 * @method $this btnActiveLevel(string $value) 设置选中按钮样式，配置同btnLevel
 */
class ButtonGroupSelect extends Widget
{
    protected string $type = 'button-group-select';
}
