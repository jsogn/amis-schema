<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * InputTable 表格组件
 *
 * 可以用来展现数据的，可以用来展示数组类型的数据，比如 multiple 的子 form
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-table
 *
 * @method $this type(string $value = "input-table") 指定为 Table 渲染器
 * @method $this addable(bool $value = false) 设置是否可增加一行
 * @method $this copyable(bool $value = false) 设置是否可复制
 * @method $this editable(bool $value = false) 设置是否可编辑
 * @method $this removable(bool $value = false) 设置是否可删除
 * @method $this showTableAddBtn(bool $value = true) 设置是否显示表格操作栏添加按钮
 * @method $this showFooterAddBtn(bool $value = true) 设置是否显示表格下方添加按钮
 * @method $this addApi(string|array|API $value) 设置新增时提交的API
 * @method $this updateApi(string|array|API $value) 设置修改时提交的API
 * @method $this deleteApi(string|array|API $value) 设置删除时提交的API
 * @method $this addBtnLabel(string $value = "新增") 设置增加按钮名称
 * @method $this addBtnIcon(string $value = "plus") 设置增加按钮图标
 * @method $this copyBtnLabel(string $value = "复制") 设置复制按钮文字
 * @method $this copyBtnIcon(string $value = "copy") 设置复制按钮图标
 * @method $this editBtnLabel(string $value = "编辑") 设置编辑按钮名称
 * @method $this editBtnIcon(string $value = "pencil") 设置编辑按钮图标
 * @method $this deleteBtnLabel(string $value = "删除") 设置删除按钮名称
 * @method $this deleteBtnIcon(string $value = "minus") 设置删除按钮图标
 * @method $this confirmBtnLabel(string $value = "确认") 设置确认编辑按钮名称
 * @method $this confirmBtnIcon(string $value = "check") 设置确认编辑按钮图标
 * @method $this cancelBtnLabel(string $value = "取消") 设置取消编辑按钮名称
 * @method $this cancelBtnIcon(string $value = "times") 设置取消编辑按钮图标
 * @method $this needConfirm(bool $value = true) 设置是否需要确认操作
 * @method $this canAccessSuperData(bool $value = false) 设置是否可以访问父级数据
 * @method $this strictMode(bool $value = true) 设置为了性能，默认其他表单项项值变化不会让当前表格更新
 * @method $this minLength(int $value = 0) 设置最小行数
 * @method $this maxLength(int $value) 设置最大行数
 * @method $this perPage(int $value) 设置每页显示多少行
 * @method $this draggable(bool $value = false) 设置是否可拖拽
 * @method $this itemCheckableOn(string $value) 设置行是否可勾选表达式
 * @method $this itemDraggableOn(string $value) 设置行是否可拖拽表达式
 * @method $this checkOnItemClick(bool $value = false) 设置点击数据行是否可以勾选当前行
 * @method $this hideCheckToggler(bool $value = false) 设置是否隐藏勾选框
 * @method $this combineNum(int $value) 设置合并单元格配置，配置数字表示从左到右的多少列自动合并单元格
 * @method $this combineFromIndex(int $value) 设置合并单元格配置，配置从第几列开始合并（起始位置是1）
 * @method $this placeholder(string $value) 设置当没有数据的时候的文字提示
 * @method $this footerAddBtn(array $value) 设置表格下方添加按钮配置
 * @method $this scaffold(array $value) 设置新增的时候的默认值，一般可以配置默认的数组长度
 * @method $this deleteConfirmText(string $value) 设置删除确认文字
 * @method $this valueField(string $value) 设置可以用来设置在什么字段上保存数组信息
 * @method $this subAddBtnIcon(string $value = "sub-plus")
 * @method $this columns(array|\AmisSchema\Definition\InputTableColumn[] $value) InputTable 表格列配置
 */
class InputTable extends FormItem
{
    protected string $type = 'input-table';
}
