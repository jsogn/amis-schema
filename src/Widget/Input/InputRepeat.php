<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputRepeat 重复频率选择器组件
 *
 * 选择重复频率，比如每天、每周、每月、每年等
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-repeat
 *
 * @method $this options(string $value = 'hourly,daily,weekly,monthly') 设置可用配置，默认为 hourly,daily,weekly,monthly，可用配置 secondly,minutely,hourly,daily,weekdays,weekly,monthly,yearly
 * @method $this placeholder(string $value = '不重复') 设置当不指定值时的说明，默认为 不重复
 */
class InputRepeat extends FormItem
{
    protected string $type = 'input-repeat';
}
