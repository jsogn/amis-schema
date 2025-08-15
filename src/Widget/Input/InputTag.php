<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Function\TooltipWrapper;

/**
 * InputTag 标签选择器组件
 *
 * 标签输入框，配置 options 即可输入标签，也可以使用 source 通过 API 的方式动态拉取选项
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-tag
 *
 * @method $this optionsTip(array $value = "最近您使用的标签") 设置选项提示
 * @method $this clearable(bool $value = false) 设置在有值的时候是否显示一个删除图标在右侧
 * @method $this resetValue(string $value = "") 设置清除后设置此配置项给定的值
 * @method $this max(int $value) 设置允许添加的标签的最大数量
 * @method $this maxTagLength(int $value) 设置单个标签的最大文本长度
 * @method $this maxTagCount(int $value) 设置标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效
 * @method $this enableBatchAdd(bool $value = false) 设置是否开启批量添加模式
 * @method $this separator(string $value = "-") 设置开启批量添加后，输入多个标签的分隔符，支持传入多个符号
 * @method $this overflowTagPopover(array|\AmisSchema\Definition\InputTagOverflowTagPopover|TooltipWrapper $value) InputTag 标签溢出弹窗配置
 */
class InputTag extends Options
{
    protected string $type = 'input-tag';
}
