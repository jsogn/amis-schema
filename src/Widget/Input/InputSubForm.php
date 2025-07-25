<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputSubForm 子表单组件
 *
 * SubForm, 配置一个子表单作为当前的输入值
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-sub-form
 *
 * @method $this multiple(bool $value = false) 设置是否为多选模式，默认为 false
 * @method $this labelField(string $value) 设置当值中存在这个字段，则按钮名称将使用此字段的值来展示
 * @method $this btnLabel(string $value = '设置') 设置按钮默认名称，默认为 设置
 * @method $this minLength(int $value = 0) 设置限制最小个数，默认为 0
 * @method $this maxLength(int $value = 0) 设置限制最大个数，默认为 0
 * @method $this draggable(bool $value) 设置是否可拖拽排序
 * @method $this addable(bool $value) 设置是否可新增
 * @method $this removable(bool $value) 设置是否可删除
 * @method $this addButtonClassName(string $value) 设置新增按钮 CSS 类名
 * @method $this itemClassName(string $value) 设置值元素 CSS 类名
 * @method $this itemsClassName(string $value) 设置值包裹元素 CSS 类名
 * @method $this form(array|Form $value) 设置子表单配置，同 Form
 * @method $this addButtonText(string $value) 设置自定义新增一项的文本
 * @method $this showErrorMsg(bool $value = true) 设置是否在左下角显示报错信息，默认为 true
 */
class InputSubForm extends FormItem
{
    protected string $type = 'input-sub-form';
}
