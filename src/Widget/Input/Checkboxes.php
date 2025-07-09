<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Checkboxes 复选框组件
 * 
 * 通过 options 配置选项，可多选
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/checkboxes
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this columnsCount(int $value) 设置选项按几列来排列，默认为一列
 * @method $this checkAll(bool $value) 设置是否支持全选，默认为 false
 * @method $this defaultCheckAll(bool $value) 设置默认是否全选，默认为 false
 * @method $this creatable(bool $value) 设置新增选项，默认为 false
 * @method $this createBtnLabel(string $value) 设置新增选项按钮名称，默认为 "新增选项"
 * @method $this addControls(array $value) 设置新增选项表单项
 * @method $this addApi(string|array $value) 设置新增选项接口
 * @method $this editable(bool $value) 设置编辑选项，默认为 false
 * @method $this editControls(array $value) 设置编辑选项表单项
 * @method $this editApi(string|array $value) 设置编辑选项接口
 * @method $this removable(bool $value) 设置删除选项，默认为 false
 * @method $this deleteApi(string|array $value) 设置删除选项接口
 * @method $this optionType(string $value) 设置设置 option 类型，支持 default、button
 */
class Checkboxes extends Widget
{
    protected string $type = 'checkboxes';
}
