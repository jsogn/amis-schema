<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Trait\OptionsWidgetTrait;

/**
 * TransferPicker 穿梭选择器组件
 *
 * 在 Transfer 的基础上扩展了弹窗选择模式，展示值用的是简单的 input 框，但是编辑的操作是弹窗个穿梭框来完成
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/transfer-picker
 *
 * @method $this borderMode(string $value) 设置边框模式，全边框，还是半边框，或者没边框
 * @method $this modalMode(string $value = "dialog") 设置弹出方式，dialog 或者 drawer
 * @method $this modalTitle(string $value) 设置弹窗标题
 * @method $this modalSize(string $value) 设置弹窗大小，当 modalMode 为 dialog 时有用
 * @method $this pickerIcon(string $value = 'fa fa-list') 设置选择器按钮图标
 * @method $this resetValue(string $value = '') 设置清除后设置此配置项给定的值
 */
class TransferPicker extends Transfer
{
    use OptionsWidgetTrait;

    protected string $type = 'transfer-picker';
}
