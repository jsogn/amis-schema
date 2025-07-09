<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Select 下拉框组件
 * 
 * 选择器表单项
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/select
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this autoComplete(string|array $value) 设置自动补全
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this iconField(string $value) 设置选项图标字段，默认为 icon
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this checkAll(bool $value) 设置是否支持全选，默认为 false
 * @method $this checkAllLabel(string $value) 设置全选的文字，默认为 "全选"
 * @method $this checkAllBySearch(bool $value) 设置有检索时只全选检索命中的项，默认为 false
 * @method $this defaultCheckAll(bool $value) 设置默认是否全选，默认为 false
 * @method $this creatable(bool $value) 设置新增选项，默认为 false
 * @method $this multiple(bool $value) 设置是否多选，默认为 false
 * @method $this searchable(bool $value) 设置是否可搜索，默认为 false
 * @method $this createBtnLabel(string $value) 设置新增选项按钮名称，默认为 "新增选项"
 * @method $this addControls(array $value) 设置新增选项表单项
 * @method $this addApi(string|array $value) 设置新增选项接口
 * @method $this editable(bool $value) 设置编辑选项，默认为 false
 * @method $this editControls(array $value) 设置编辑选项表单项
 * @method $this editApi(string|array $value) 设置编辑选项接口
 * @method $this removable(bool $value) 设置删除选项，默认为 false
 * @method $this deleteApi(string|array $value) 设置删除选项接口
 * @method $this autoFill(array $value) 设置自动填充
 * @method $this menuTpl(string $value) 设置支持配置自定义菜单
 * @method $this clearable(bool $value) 设置单选模式下是否支持清空，默认为 false
 * @method $this hideSelected(bool $value) 设置隐藏已选择选项，默认为 false
 * @method $this mobileClassName(string $value) 设置移动端浮层类名
 * @method $this selectMode(string $value) 设置可选择：group、table、tree、chained、associated。分别为：列表形式、表格形式、树形选择形式、级联选择形式，关联选择形式（与级联选择的区别在于，级联是无限极，而关联只有一级，关联左边可以是个 tree）
 * @method $this searchResultMode(string $value) 设置如果不设置将采用 selectMode 的值，可以单独配置，参考 selectMode，决定搜索结果的展示形式
 * @method $this columns(array $value) 设置当展示形式为 table 可以用来配置展示哪些列，跟 table 中的 columns 配置相似，只是只有展示功能
 * @method $this leftOptions(array $value) 设置当展示形式为 associated 时用来配置左边的选项集
 * @method $this leftMode(string $value) 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree。默认为 list
 * @method $this rightMode(string $value) 设置当展示形式为 associated 时用来配置右边的选择形式，可选：list、table、tree、chained
 * @method $this maxTagCount(int $value) 设置标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效
 * @method $this overflowTagPopover(array $value) 设置收纳浮层的配置属性，详细配置参考Tooltip
 * @method $this optionClassName(string $value) 设置选项 CSS 类名
 * @method $this popOverContainerSelector(string $value) 设置弹层挂载位置参考，主要用于确保弹层菜单不会被其他元素遮挡
 * @method $this overlay(array $value) 设置弹层配置
 * @method $this showInvalidMatch(bool $value) 设置在选项中如果有 value 没有对应的 Option 时，是否显示对应的 value 值而不是隐藏，默认隐藏
 * @method $this virtualThreshold(int $value) 设置在选项数量超过多少时开启虚拟滚动，默认为 100
 * @method $this valuesNoWrap(bool $value) 设置默认情况下多选所有选中项都会显示，设置这个属性后只显示前面部分直到放不下为止，鼠标放上去后显示所有的
 */
class Select extends Widget
{
    protected string $type = 'select';
}
