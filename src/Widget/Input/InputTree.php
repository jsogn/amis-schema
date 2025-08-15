<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;
use AmisSchema\Trait\OptionsWidgetTrait;

/**
 * InputTree 树形选择框组件
 *
 * 树形结构选择框
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-tree
 *
 * @method $this iconField(string $value = 'icon') 设置图标值字段
 * @method $this searchApi(API $value) 设置检索接口
 * @method $this hideRoot(bool $value = true) 设置如果想要显示个顶级节点，请设置为 false
 * @method $this rootLabel(string $value = '顶级') 设置当 hideRoot 不为 false 时有用，用来设置顶级节点的文字
 * @method $this showIcon(bool $value = true) 设置是否显示图标
 * @method $this showRadio(bool $value = false) 设置是否显示单选按钮，multiple 为 false 是有效
 * @method $this showOutline(bool $value = false) 设置是否显示树层级展开线
 * @method $this initiallyOpen(bool $value = true) 设置设置是否默认展开所有层级
 * @method $this unfoldedLevel(int $value = 1) 设置设置默认展开的级数，只有initiallyOpen不是true时生效
 * @method $this autoCheckChildren(bool $value = true) 设置当选中父节点时级联选择子节点
 * @method $this cascade(bool $value = false) 设置autoCheckChildren 为 true 时生效；默认行为：子节点禁用，值只包含父节点值；设置为 true 时，子节点可反选，值包含父子节点值
 * @method $this withChildren(bool $value = false) 设置cascade 为 false 时生效，选中父节点时，值里面将包含父子节点的值，否则只会保留父节点的值
 * @method $this onlyChildren(bool $value = false) 设置autoCheckChildren 为 true 时生效，不受 cascade 影响；onlyChildren 为 true，ui 行为级联选中子节点，子节点可反选，值只包含子节点的值
 * @method $this onlyLeaf(bool $value = false) 设置只允许选择叶子节点
 * @method $this rootCreatable(bool $value = false) 设置是否可以创建顶级节点
 * @method $this rootCreateTip(string $value = '添加一级节点') 设置创建顶级节点的悬浮提示
 * @method $this minLength(int $value) 设置最少选中的节点数
 * @method $this maxLength(int $value) 设置最多选中的节点数
 * @method $this treeContainerClassName(string $value) 设置tree 控件最外层容器类名, 与 inputClassName 等价
 * @method $this treeClassName(string $value) 设置tree 组件层类名
 * @method $this enableNodePath(bool $value = false) 设置是否开启节点路径模式
 * @method $this pathSeparator(string $value = '/') 设置节点路径的分隔符，enableNodePath为true时生效
 * @method $this highlightTxt(string $value) 设置标签中需要高亮的字符，支持变量
 * @method $this itemHeight(int $value = 32) 设置每个选项的高度，用于虚拟渲染
 * @method $this virtualThreshold(int $value = 100) 设置在选项数量超过多少时开启虚拟渲染
 * @method $this menuTpl(string $value) 设置选项自定义渲染 HTML 片段
 * @method $this enableDefaultIcon(bool $value = true) 设置是否为选项添加默认的前缀 Icon，父节点默认为folder，叶节点默认为file
 * @method $this heightAuto(bool $value = false) 设置默认高度会有个 maxHeight，即超过一定高度就会内部滚动，如果希望自动增长请设置此属性
 * @method $this nodeBehavior(array $value = ['check']) 设置节点行为配置，支持配置多个行为
 * @method $this autoCancelParent(bool $value = false) 设置子节点取消时自动取消父节点的值，仅在多选且 cascade 为 true 时生效
 * @method $this toolbar(mixed $value) 设置工具栏区域，仅开启检索时生效
 * @method $this toolbarClassName(string $value) 设置工具栏区域类名
 * @method $this itemActions(mixed $value) 设置节点操作栏区域
 * @method $this deferApi(array|API|string $value)
 * @method $this clearable(bool $value) 设置单选模式下是否支持清空
 */
class InputTree extends FormItem
{
    use OptionsWidgetTrait;

    protected string $type = 'input-tree';
}
