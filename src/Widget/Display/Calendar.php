<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Calendar 日历日程
 *
 * 用于展示日历和日程
 *
 * @method $this type(string $value = 'calendar') 指定为 calendar 渲染器，默认 'calendar'
 * @method $this schedules(array|string $value = []) 日历中展示日程，可设置静态数据或从上下文中取数据，默认 []
 * @method $this scheduleClassNames(array $value = ['bg-warning', 'bg-danger', 'bg-success', 'bg-info', 'bg-secondary']) 日历中展示日程的颜色，参考背景色，默认 ['bg-warning', 'bg-danger', 'bg-success', 'bg-info', 'bg-secondary']
 * @method $this scheduleAction(array|Widget $value) 自定义日程展示
 * @method $this largeMode(bool $value = false) 放大模式，默认 false
 * @method $this todayActiveStyle(array $value = []) 今日激活时的自定义样式，默认 []
 */
class Calendar extends Widget
{
    protected string $type = 'calendar';
}
