<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputSubForm 子表单组件
 * 
 * SubForm, 配置一个子表单作为当前的输入值
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-sub-form
 *
 * @method $this multiple(bool $value) 设置是否为多选模式
 * @method $this labelField(string $value) 设置当多选时，用来展示已选项的字段
 * @method $this btnLabel(string $value) 设置按钮的文字
 * @method $this minLength(int $value) 设置限制最小选择数量
 * @method $this maxLength(int $value) 设置限制最大选择数量
 * @method $this draggable(bool $value) 设置是否可拖拽排序
 * @method $this addable(bool $value) 设置是否可新增
 * @method $this removable(bool $value) 设置是否可删除
 * @method $this addButtonText(string $value) 设置新增时的文字
 * @method $this form(array $value) 设置子表单的表单项
 * @method $this value(mixed $value) 设置默认值
 * @method $this showErrorMsg(bool $value) 设置是否在左下角显示报错信息
 */
class InputSubForm extends Widget
{
    protected string $type = 'input-sub-form';
}
