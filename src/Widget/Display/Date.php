<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Date 日期时间
 *
 * @method $this type(string $value = 'date') 指定为 date 渲染器，在 Table、Card 和 List 中为 "date"；在 Form 中用作静态展示为 "static-date"，默认 'date'
 * @method $this value(string $value = '') 显示的日期数值，默认 ''
 * @method $this name(string $value = '') 在其他组件中，时，用作变量映射，默认 ''
 * @method $this placeholder(string $value = '-') 占位内容，默认 '-'
 * @method $this displayFormat(string $value = 'YYYY-MM-DD') 展示格式，更多格式类型请参考 moment 文档，默认 'YYYY-MM-DD'
 * @method $this valueFormat(string $value = 'X') 数据格式，默认为时间戳，更多格式类型请参考 moment 文档，默认 'X'
 * @method $this fromNow(bool $value = false) 是否显示相对当前的时间描述，比如: 11 小时前、3 天前、1 年前等，fromNow 为 true 时，format 不生效，默认 false
 * @method $this updateFrequency(int $value = 60000) 更新频率，默认为 1 分钟（60000 毫秒），默认 60000
 * @method $this displayTimeZone(string $value = '') 设置日期展示时区，默认 ''
 */
class Date extends Widget
{
    protected string $type = 'date';
}
