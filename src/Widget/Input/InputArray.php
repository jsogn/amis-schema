<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputArray 数组输入框组件
 * 
 * Array 数组输入框，可以支持添加、编辑和删除
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-array
 *
 * @method $this items(array $value) 设置成员渲染器配置
 * @method $this addable(bool $value) 设置是否可新增
 * @method $this removable(bool $value) 设置是否可删除
 * @method $this draggable(bool $value) 设置是否可以拖拽排序
 * @method $this draggableTip(string $value) 设置可拖拽的提示文字
 * @method $this addButtonText(string $value) 设置新增按钮文字，默认为"新增"
 * @method $this minLength(int $value) 设置限制最小长度
 * @method $this maxLength(int $value) 设置限制最大长度
 * @method $this scaffold(mixed $value) 设置新增成员时的默认值
 */
class InputArray extends Widget
{
    protected string $type = 'input-array';
}
