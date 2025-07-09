<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Picker 列表选择器组件
 * 
 * 列表选择器，在功能上和 Select 类似，但它能显示更复杂的信息
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/picker
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this autoFill(array $value) 设置自动填充
 * @method $this modalMode(string $value) 设置设置 dialog 或者 drawer，用来配置弹出方式。默认为 dialog
 * @method $this pickerSchema(array $value) 设置即用 List 类型的渲染，来展示列表信息。更多配置参考 CRUD
 * @method $this embed(bool $value) 设置是否使用内嵌模式
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this modalTitle(string $value) 设置设置弹框的标题
 * @method $this modalSize(string $value) 设置弹窗大小，当 modalMode 为 dialog 时有用
 * @method $this btnLabel(string $value) 设置设置按钮标题
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 * @method $this placeholder(string $value) 设置占位符
 * @method $this clearable(bool $value) 设置是否可清空
 */
class Picker extends Widget
{
    protected string $type = 'picker';
}
