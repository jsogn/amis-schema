<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputRepeat 重复频率选择器组件
 * 
 * 选择重复频率，比如每天、每周、每月、每年等
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-repeat
 *
 * @method $this options(string $value) 设置可选择的重复频率，默认为 hourly,daily,weekdays,weekly,monthly,yearly
 * @method $this placeholder(string $value) 设置占位符
 */
class InputRepeat extends Widget
{
    protected string $type = 'input-repeat';
}
