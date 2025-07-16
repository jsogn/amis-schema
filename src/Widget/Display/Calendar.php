<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Calendar 日历日程
 * 
 * 用于展示日历和日程
 *
 * @method self type(string $type) 指定为 Calendar 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self value(array|string $value) 日历数据
 * @method self source(string|array $source) 数据源
 * @method self startField(string $startField) 开始时间字段
 * @method self endField(string $endField) 结束时间字段
 * @method self titleField(string $titleField) 标题字段
 * @method self subtitleField(string $subtitleField) 副标题字段
 * @method self timeFormat(string $timeFormat) 时间格式
 * @method self mode(string $mode) 展示模式，可选值：month、week、day
 * @method self onEvent($onEvent) 事件
 */
class Calendar extends Widget
{
    protected string $type = 'calendar';
}
