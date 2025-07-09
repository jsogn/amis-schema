<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Status 状态
 * 
 * 状态显示组件
 *
 * @method self type(string $type) 指定为 Status 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self name(string $name) 在其他组件中，时，用作变量映射
 * @method self value(string|int $value) 状态值
 * @method self map(array $map) 状态映射配置
 * @method self placeholder(string $placeholder) 占位文本
 * @method self source(string|array $source) 数据源
 */
class Status extends Widget
{
    protected string $type = 'status';
}
