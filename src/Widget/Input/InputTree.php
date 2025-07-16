<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputTree 树形选择框组件
 * 
 * 树形结构选择框
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-tree
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this autoComplete(string|array $value) 设置自动补全
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this iconField(string $value) 设置选项图标字段，默认为 icon
 * @method $this unfoldedField(string $value) 设置选项是否默认展开字段，默认为 unfolded
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this creatable(bool $value) 设置新增选项，默认为 false
 * @method $this addControls(array $value) 设置新增选项表单项
 * @method $this addApi(string|array $value) 设置新增选项接口
 * @method $this editable(bool $value) 设置编辑选项，默认为 false
 * @method $this editControls(array $value) 设置编辑选项表单项
 * @method $this editApi(string|array $value) 设置编辑选项接口
 * @method $this removable(bool $value) 设置删除选项，默认为 false
 * @method $this deleteApi(string|array $value) 设置删除选项接口
 * @method $this searchable(bool $value) 设置是否可搜索，默认为 false
 * @method $this hideRoot(bool $value) 设置如果想要显示个顶级节点，请设置为 false
 * @method $this rootLabel(string $value) 设置当 hideRoot 不为 false 时有用，用来设置顶级节点的文字
 * @method $this showIcon(bool $value) 设置是否显示图标，默认为 true
 * @method $this showRadio(bool $value) 设置是否显示单选按钮，multiple 为 false 时有效
 * @method $this showOutline(bool $value) 设置是否显示树层级展开线，默认为 false
 * @method $this cascade(bool $value) 设置设置 true时，当选中父节点时不自动选择子节点
 * @method $this withChildren(bool $value) 设置设置 true时，选中父节点时，值里面将包含子节点
 * @method $this onlyChildren(bool $value) 设置设置true时，只允许选择叶子节点
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this initiallyOpen(bool $value) 设置设置 true 时，默认展开所有选项
 * @method $this unfoldedLevel(int $value) 设置设置展开级数，当数值为1，表示第一层默认展开
 * @method $this autoFill(array $value) 设置自动填充
 * @method $this menuTpl(string $value) 设置支持配置自定义菜单
 * @method $this enableNodePath(bool $value) 设置是否开启节点路径模式
 * @method $this pathSeparator(string $value) 设置节点路径的分隔符，默认为 /
 * @method $this highlightTxt(string $value) 设置标记文本
 * @method $this itemHeight(int $value) 设置每个选项的高度，用于虚拟渲染
 * @method $this virtualThreshold(int $value) 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @method $this minLength(int $value) 设置最少选中的节点数
 * @method $this maxLength(int $value) 设置最多选中的节点数
 */
class InputTree extends Widget
{
    protected string $type = 'input-tree';
}
