<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * ChartRadios 图表单选框组件
 * 
 * 图表点选功能，用来做多个图表联动
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/chart-radios
 *
 * @method $this config(array $value) echart 图表配置
 * @method $this showTooltipOnHighlight(bool $value = false) 高亮的时候是否显示 tooltip
 * @method $this chartValueField(string $value = "value") 图表数值字段名
 */
class ChartRadios extends FormItem
{
    protected string $type = 'chart-radios';
}
