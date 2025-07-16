<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * NestedSelect 级联选择器组件
 * 
 * 适合选择具有级联关系的选项
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/nestedselect
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this cascade(bool $value) 设置设置 true时，当选中父节点时不自动选择子节点
 * @method $this withChildren(bool $value) 设置设置 true时，选中父节点时，值里面将包含子节点
 * @method $this onlyChildren(bool $value) 设置设置true时，只允许选择叶子节点
 * @method $this searchable(bool $value) 设置是否可搜索，默认为 false
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this hideNodePathLabel(bool $value) 设置是否隐藏选择框中已选择节点的祖先节点文本信息
 * @method $this onlyLeaf(bool $value) 设置只允许选择叶子节点
 * @method $this clearable(bool $value) 设置是否支持清空
 * @method $this placeholder(string $value) 设置占位符
 * @method $this autoFill(array $value) 设置自动填充
 */
class NestedSelect extends Widget
{
    protected string $type = 'nested-select';
}
