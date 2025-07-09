<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * ChainedSelect 链式下拉框组件
 * 
 * 无限级链式下拉选择器，支持从 source 拉取数据
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/chain-select
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this searchable(bool $value) 设置是否可搜索，默认为 false
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this autoFill(array $value) 设置自动填充
 */
class ChainedSelect extends Widget
{
    protected string $type = 'chained-select';
}
