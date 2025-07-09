<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputTable 表格组件
 * 
 * 可以用来展现数据的，可以用来展示数组类型的数据，比如 multiple 的子 form
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-table
 *
 * @method $this columns(array $value) 设置列信息
 * @method $this addable(bool $value) 设置是否可增加一行，默认为false
 * @method $this editable(bool $value) 设置是否可编辑，默认为false
 * @method $this removable(bool $value) 设置是否可删除，默认为false
 * @method $this showAddBtn(bool $value) 设置是否显示添加按钮，默认为true
 * @method $this addApi(string|array $value) 设置新增时提交的API
 * @method $this updateApi(string|array $value) 设置修改时提交的API
 * @method $this deleteApi(string|array $value) 设置删除时提交的API
 * @method $this addBtnLabel(string $value) 设置增加按钮名称，默认为"新增"
 * @method $this addBtnIcon(string $value) 设置增加按钮图标
 * @method $this copyBtnLabel(string $value) 设置复制按钮文字，默认为"复制"
 * @method $this copyBtnIcon(string $value) 设置复制按钮图标
 * @method $this editBtnLabel(string $value) 设置编辑按钮名称，默认为"编辑"
 * @method $this editBtnIcon(string $value) 设置编辑按钮图标
 * @method $this deleteBtnLabel(string $value) 设置删除按钮名称，默认为"删除"
 * @method $this deleteBtnIcon(string $value) 设置删除按钮图标
 * @method $this confirmBtnLabel(string $value) 设置确认编辑按钮名称，默认为"确认"
 * @method $this confirmBtnIcon(string $value) 设置确认编辑按钮图标
 * @method $this cancelBtnLabel(string $value) 设置取消编辑按钮名称，默认为"取消"
 * @method $this cancelBtnIcon(string $value) 设置取消编辑按钮图标
 * @method $this needConfirm(bool $value) 设置是否需要确认操作，默认为true
 * @method $this canAccessSuperData(bool $value) 设置是否可以访问父级数据，默认为false
 * @method $this strictMode(bool $value) 设置为了性能，默认其他表单项项值变化不会让当前表格更新，如果你希望别的表单项值变化时就更新当前表格，请设置为 false
 * @method $this minLength(int $value) 设置最小行数
 * @method $this maxLength(int $value) 设置最大行数
 * @method $this perPage(int $value) 设置每页显示多少行
 * @method $this draggable(bool $value) 设置是否可拖拽
 * @method $this itemCheckableOn(string $value) 设置行是否可勾选表达式
 * @method $this itemDraggableOn(string $value) 设置行是否可拖拽表达式
 * @method $this checkOnItemClick(bool $value) 设置点击数据行是否可以勾选当前行
 * @method $this hideCheckToggler(bool $value) 设置是否隐藏勾选框
 * @method $this combineNum(int $value) 设置合并单元格配置，配置数字表示从左到右的多少列自动合并单元格
 * @method $this combineFromIndex(int $value) 设置合并单元格配置，配置从第几列开始合并（起始位置是1）
 * @method $this placeholder(string $value) 设置当没有数据的时候的文字提示
 * @method $this showTableAddBtn(bool $value) 设置是否显示表格操作栏添加按钮
 * @method $this showFooterAddBtn(bool $value) 设置是否显示表格下方添加按钮
 * @method $this footerAddBtn(array $value) 设置表格下方添加按钮配置
 * @method $this scaffold(array $value) 设置新增的时候的默认值，一般可以配置默认的数组长度
 * @method $this deleteConfirmText(string $value) 设置删除确认文字
 * @method $this valueField(string $value) 设置可以用来设置在什么字段上保存数组信息
 */
class InputTable extends Widget
{
    protected string $type = 'input-table';
}
