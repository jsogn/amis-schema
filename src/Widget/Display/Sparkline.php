<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Sparkline 走势图
 * 
 * 简单走势图，只做简单的展示，详细展示请采用 Chart 来完成
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/sparkline
 *
 * @method $this name(string $value = '') 关联的变量，用于从环境数据中获取值
 * @method $this value(array $value = []) 走势图数据，为数组格式
 * @method $this width(int $value = 0) 图表宽度
 * @method $this height(int $value = 0) 图表高度
 * @method $this placeholder(string $value = '') 数据为空时显示的内容
 * @method $this clickAction(array $value = []) 点击行为配置，支持 amis 的行为动作
 * 
 * @version 1.4.2 支持 placeholder 空数据显示功能
 */
class Sparkline extends Widget
{
    protected string $type = 'sparkline';
}
