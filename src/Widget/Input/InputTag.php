<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputTag 标签选择器组件
 * 
 * 标签输入框，配置 options 即可输入标签，也可以使用 source 通过 API 的方式动态拉取选项
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-tag
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this clearable(bool $value) 设置在有值的时候是否显示一个删除图标在右侧
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 * @method $this max(int $value) 设置允许添加的标签的最大数量
 * @method $this maxTagLength(int $value) 设置单个标签的最大文本长度
 * @method $this enableBatchAdd(bool $value) 设置是否开启批量添加模式
 * @method $this separator(string $value) 设置开启批量添加时，输入多个标签的分隔符，支持传入多个符号，默认为英文逗号
 * @method $this overflowTagPopover(array $value) 设置收纳标签的Popover配置
 * @method $this maxTagCount(int $value) 设置标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效
 * @method $this optionsPlaceholder(string $value) 设置选项为空时的占位符
 */
class InputTag extends Widget
{
    protected string $type = 'input-tag';
}
