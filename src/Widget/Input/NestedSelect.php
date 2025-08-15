<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Function\TooltipWrapper;

/**
 * NestedSelect 级联选择器组件
 *
 * 级联选择器，适合选择具有级联关系的选项
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/nestedselect
 *
 * @method $this cascade(bool $value = false) 设置 true时，当选中父节点时不自动选择子节点
 * @method $this withChildren(bool $value = false) 设置 true时，选中父节点时，值里面将包含子节点的值，否则只会保留父节点的值
 * @method $this onlyChildren(bool $value = false) 多选时，选中父节点时，是否只将其子节点加入到值中
 * @method $this searchPromptText(string $value = "输入内容进行检索") 搜索框占位文本
 * @method $this noResultsText(string $value = "未找到任何结果") 无结果时的文本
 * @method $this hideNodePathLabel(bool $value = false) 是否隐藏选择框中已选择节点的路径 label 信息
 * @method $this onlyLeaf(bool $value = false) 只允许选择叶子节点
 * @method $this maxTagCount(int $value) 标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效
 * @method $this overflowTagPopover(array|\AmisSchema\Definition\NestedSelectOverflowTagPopover $value) NestedSelect 级联选择器溢出标签弹窗配置
 */
class NestedSelect extends Options
{
    protected string $type = 'nested-select';
}
