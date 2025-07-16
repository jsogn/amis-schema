<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Steps 步骤条
 * 
 * 步骤条组件
 *
 * @method self type(string $type) 指定为 Steps 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self steps(array $steps) 步骤数据
 * @method self source(string|array $source) 数据源
 * @method self current(int $current) 当前步骤索引
 * @method self status(string $status) 状态，可选值：wait、process、finish、error
 * @method self direction(string $direction) 方向，可选值：horizontal、vertical
 * @method self labelPlacement(string $labelPlacement) 标签位置，可选值：horizontal、vertical
 * @method self progressDot(bool $progressDot) 是否使用点状步骤条
 */
class Steps extends Widget
{
    protected string $type = 'steps';
}
