<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Function\TooltipWrapper;

/**
 * Select 下拉框组件
 *
 * 选择器表单项
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/select
 *
 * @method $this checkAllBySearch(bool $value = true) 设置有检索时只全选检索命中的项，默认为 true
 * @method $this filterOption(string $value) 设置自定义搜索函数
 * @method $this menuTpl(string $value) 设置支持配置自定义菜单
 * @method $this clearable(bool $value) 设置单选模式下是否支持清空
 * @method $this hideSelected(bool $value = false) 设置隐藏已选选项，默认为 false
 * @method $this mobileClassName(string $value) 设置移动端浮层类名
 * @method $this selectMode(string $value) 设置可选：group、table、tree、chained、associated。分别为：列表形式、表格形式、树形选择形式、级联选择形式，关联选择形式（与级联选择的区别在于，级联是无限极，而关联只有一级，关联左边可以是个 tree）
 * @method $this searchResultMode(string $value) 设置如果不设置将采用 selectMode 的值，可以单独配置，参考 selectMode，决定搜索结果的展示形式
 * @method $this columns(array $value) 设置当展示形式为 table 可以用来配置展示哪些列，跟 table 中的 columns 配置相似，只是只有展示功能
 * @method $this leftOptions(array $value) 设置当展示形式为 associated 时用来配置左边的选项集
 * @method $this leftMode(string $value) 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree。默认为 list
 * @method $this rightMode(string $value) 设置当展示形式为 associated 时用来配置右边的选择形式，可选：list、table、tree、chained
 * @method $this maxTagCount(int $value) 设置标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效
 * @method $this overflowTagPopover(array|TooltipWrapper $value) 收纳浮层的配置属性，详细配置参考Tooltip
 * @method $this optionClassName(string $value) 设置选项 CSS 类名
 * @method $this popOverContainerSelector(string $value) 设置弹层挂载位置选择器，会通过querySelector获取
 * @method $this showInvalidMatch(bool $value = false) 设置选项值与选项组不匹配时选项值是否飘红，默认为 false
 * @method $this noResultsText(string $value = '未找到任何结果') 设置无结果时的文本，默认为 未找到任何结果
 */
class Select extends Options
{
    protected string $type = 'select';

    /**
     * 弹层宽度与对齐方式 2.8.0 以上版本
     * @param array{
     *     width: string|int,
     *     align: 'left'|'right'|'center',
     * } $value
     * @return self
     */
    public function overlay(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
