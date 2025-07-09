<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputYear 年份选择器组件
 * 
 * 年份选择器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-year
 *
 * @method $this value(string $value) 设置默认值
 * @method $this format(string $value) 设置年份选择器值格式，更多格式类型请参考 moment
 * @method $this inputFormat(string $value) 设置年份选择器显示格式，更多格式类型请参考 moment
 * @method $this displayFormat(string $value) 设置年份选择器显示格式，更多格式类型请参考 moment
 * @method $this placeholder(string $value) 设置占位文本
 * @method $this clearable(bool $value) 设置是否可清除
 * @method $this embed(bool $value) 设置是否内联模式
 * @method $this minDate(string $value) 设置限制最小年份
 * @method $this maxDate(string $value) 设置限制最大年份
 * @method $this popOverContainerSelector(string $value) 设置弹层挂载位置参考，主要用于确保弹层菜单不会被其他元素遮挡
 */
class InputYear extends Widget
{
    protected string $type = 'input-year';
}
