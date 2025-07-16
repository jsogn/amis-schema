<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * Options 选择器表单项
 *
 * 选择器表单项是指那些（例如下拉选择框）具有选择器特性的表单项
 * 它派生自表单项，拥有表单项所有的特性
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/options
 *
 * @method $this options(array $value) 设置选项组，供用户选择
 * @method $this source(string|array|API $value) 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @method $this multiple(bool $value = false) 设置是否支持多选，默认为 false
 * @method $this labelField(string $value = 'label') 设置标识选项中哪个字段是label值，默认为 "label"
 * @method $this valueField(string $value = 'value') 设置标识选项中哪个字段是value值，默认为 "value"
 * @method $this deferField(string $value = 'defer') 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @method $this joinValues(bool $value = true) 设置是否拼接value值，默认为 true
 * @method $this extractValue(bool $value = false) 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @method $this delimiter(string $value = ',') 设置拼接符，默认为逗号
 * @method $this itemHeight(int $value = 32) 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @method $this virtualThreshold(int $value = 100) 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @method $this valuesNoWrap(bool $value = false) 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @method $this searchable(bool $value = false) 设置是否可搜索，默认为 false
 * @method $this autoComplete(string|array $value) 设置自动补全配置
 * @method $this selectFirst(bool $value = false) 设置是否默认选择第一个选项，默认为 false
 * @method $this checkAll(bool $value = false) 设置是否支持全选，默认为 false
 * @method $this checkAllLabel(string $value = '全选') 设置全选的文字，默认为 "全选"
 * @method $this defaultCheckAll(bool $value = false) 设置默认是否全选，默认为 false
 * @method $this creatable(bool $value = false) 设置新增选项，默认为 false
 * @method $this createBtnLabel(string $value = '新增选项') 设置新增选项按钮名称，默认为 "新增选项"
 * @method $this addControls(array $value) 设置新增选项表单项
 * @method $this addApi(string|array|API $value) 设置新增选项接口
 * @method $this addDialog(array $value) 设置新增选项弹框配置
 * @method $this editable(bool $value = false) 设置编辑选项，默认为 false
 * @method $this editControls(array $value) 设置编辑选项表单项
 * @method $this editApi(string|array|API $value) 设置编辑选项接口
 * @method $this editDialog(array $value) 设置编辑选项弹框配置
 * @method $this removable(bool $value = false) 设置删除选项，默认为 false
 * @method $this deleteApi(string|array|API $value) 设置删除选项接口
 * @method $this autoFill(array|string[] $value) 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @method $this initAutoFill(string|bool $value) 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @method $this optionLabel(string $value) 设置选项标识文字，用于新增、编辑等操作的标题显示
 */
class Options extends FormItem
{
    protected string $type = 'select';
}