<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputTime 时间选择器组件
 * 
 * 时间选择器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-time
 *
 * @method $this value(string $value) 设置默认值
 * @method $this format(string $value) 设置时间选择器值格式，更多格式类型请参考 moment
 * @method $this inputFormat(string $value) 设置时间选择器显示格式，即时间戳格式，更多格式类型请参考 moment
 * @method $this displayFormat(string $value) 设置时间选择器显示格式，更多格式类型请参考 moment
 * @method $this placeholder(string $value) 设置占位文本
 * @method $this clearable(bool $value) 设置是否可清除
 * @method $this timeConstraints(array $value) 设置时间约束，用来约束时间的选择
 * @method $this popOverContainerSelector(string $value) 设置弹层挂载位置参考，主要用于确保弹层菜单不会被其他元素遮挡
 */
class InputTime extends Widget
{
    protected string $type = 'input-time';
}
