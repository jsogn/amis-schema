<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * TabsTransfer 组合穿梭器组件
 * 
 * 在穿梭器(Transfer)的基础上扩展了左侧选择面板的 tabs 模式展示，用于复杂数据的选择展示
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/tabs-transfer
 */
class TabsTransfer extends Transfer
{
    protected string $type = 'tabs-transfer';
}
