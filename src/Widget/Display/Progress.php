<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Progress 进度条
 *
 * 进度条组件，支持线形、圆形、仪表盘三种模式，颜色映射、阈值、动画等功能
 *
 * @method $this mode(string $value = 'line') 进度条类型，line/circle/dashboard，默认 'line'
 * @method $this value(string $value = 0) 进度值，默认 0
 * @method $this name(string $value = '') 变量映射名称，默认 ''
 * @method $this placeholder(string $value = '-') 占位文本，默认 '-'
 * @method $this showLabel(bool $value = true) 是否展示进度文本，默认 true
 * @method $this stripe(bool $value = false) 背景是否显示条纹，默认 false
 * @method $this animate(bool $value = false) 是否支持动画(仅line类型)，默认 false
 * @method $this map(string|array $value = ['bg-danger', 'bg-warning', 'bg-info', 'bg-success', 'bg-success']) 进度颜色映射，默认 ['bg-danger', 'bg-warning', 'bg-info', 'bg-success', 'bg-success']
 * @method $this showThresholdText(bool $value = false) 是否显示阈值数值，默认 false
 * @method $this valueTpl(string $value = '${value}%') 自定义格式化内容，默认 '${value}%'
 * @method $this strokeWidth(int $value = null) 进度条线宽度，line类型默认10，circle/dashboard类型默认6，默认 null
 * @method $this gapDegree(int $value = 75) 仪表盘缺角角度(0~295)，默认 75
 * @method $this gapPosition(string $value = 'bottom') 仪表盘缺口位置，top/bottom/left/right，默认 'bottom'
 * @method $this threshold(array|\AmisSchema\Definition\ProgressThreshold|\AmisSchema\Definition\ProgressThreshold[] $value) Progress 进度条阈值配置
 */
class Progress extends Widget
{
    protected string $type = 'progress';
}
