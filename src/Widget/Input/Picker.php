<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * Picker 列表选择器组件
 *
 * 列表选择器，在功能上和 Select 类似，但它能显示更复杂的信息
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/picker
 *
 * @method $this modalTitle(string $value = "请选择") 设置模态框的标题
 * @method $this modalMode(string $value = "dialog") 设置 dialog 或者 drawer，用来配置弹出方式
 * @method $this modalSize(string $value) 设置弹框大小
 * @method $this pickerSchema(array $value) 即用 List 类型的渲染，来展示列表信息。更多配置参考 CRUD
 * @method $this embed(bool $value = false) 是否使用内嵌模式
 * @method $this itemClearable(bool $value = true) 用于控制是否显示选中项的删除图标
 * @method $this overflowConfig(array|\AmisSchema\Definition\PickerOverflowConfig $value) Picker 列表选择器溢出配置
 */
class Picker extends Options
{
    protected string $type = 'picker';
}
