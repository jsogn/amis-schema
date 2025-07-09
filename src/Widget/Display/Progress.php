<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Progress 进度条
 *
 * @method self type(string $value) 指定为 progress 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self progressClassName(string $value) 进度条CSS类名
 * @method self value($value) 进度值
 * @method self name(string $value) 在其他组件中，时，用作变量映射
 * @method self placeholder(string $value) 占位内容
 * @method self showLabel(bool $value) 是否显示完成进度百分比
 * @method self map(array $value) 配置不同的值段，用不同的样式提示用户
 * @method self threshold($value) 阈值
 * @method self showThresholdText(bool $value) 是否显示阈值数值
 * @method self stripe(bool $value) 是否显示条纹
 * @method self animate(bool $value) 是否显示动画
 * @method self strokeWidth(int $value) 进度条线的宽度
 * @method self gapDegree(int $value) 圆形进度条缺口角度，可取值 0 ~ 295
 * @method self gapPosition(string $value) 圆形进度条缺口位置
 * @method self mode(string $value) 进度条类型，可选 line、circle、dashboard
 * @method self onEvent($value) 事件
 */
class Progress extends Widget
{
    protected string $type = 'progress';
}
