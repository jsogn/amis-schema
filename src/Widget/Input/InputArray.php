<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputArray 数组输入框组件
 *
 * InputArray 是一种简化的 Combo，用于输入多个某种类型的表单项，提交的时将以数组的形式提交
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-array
 *
 * @method $this items(array|Widget[] $value) 设置成员渲染器配置，配置单项表单类型
 * @method $this addable(bool $value) 设置是否可新增
 * @method $this removable(bool $value) 设置是否可删除
 * @method $this draggable(bool $value) 设置是否可以拖拽排序，需要注意的是当启用拖拽排序的时候，会多一个$id字段，默认为 false
 * @method $this draggableTip(string $value) 设置可拖拽的提示文字，默认为"可通过拖动每行中的【交换】按钮进行顺序调整"
 * @method $this addButtonText(string $value) 设置新增按钮文字，默认为"新增"
 * @method $this minLength(int $value) 设置限制最小长度
 * @method $this maxLength(int $value) 设置限制最大长度
 * @method $this scaffold(mixed $value) 设置新增成员时的默认值，一般根据items的数据类型指定需要的默认值
 */
class InputArray extends FormItem
{
    protected string $type = 'input-array';
}
