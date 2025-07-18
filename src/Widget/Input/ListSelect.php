<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * ListSelect 选择器组件
 * 
 * 可以用来展示选择的内容
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/list-select
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this autoFill(array $value) 设置自动填充
 * @method $this listClassName(string $value) 设置支持配置 list div 的 css 类名
 * @method $this itemClassName(string $value) 设置支持配置选项 div 的 css 类名
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this clearable(bool $value) 设置是否可清空
 * @method $this placeholder(string $value) 设置占位符
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 * @method $this imageClassName(string $value) 设置支持配置图片的 css 类名
 * @method $this submitOnDBClick(bool $value) 设置设置双击选项后立即提交表单
 */
class ListSelect extends Widget
{
    protected string $type = 'list-select';
}
