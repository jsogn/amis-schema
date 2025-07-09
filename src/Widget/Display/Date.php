<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Date 日期时间
 *
 * @method self type(string $value) 指定为 date 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self value($value) 显示的日期数值
 * @method self name(string $value) 在其他组件中，时，用作变量映射
 * @method self placeholder(string $value) 占位内容
 * @method self format(string $value) 展示格式, 更多格式类型请参考 moment
 * @method self valueFormat(string $value) 数据格式，默认为时间戳。更多格式类型请参考 moment
 * @method self displayFormat(string $value) 展示格式 (新版本 format 已废弃，请用 displayFormat)
 * @method self fromNow(bool $value) 是否显示相对时间
 * @method self updateFrequency(int $value) 更新频率， 默认为1分钟
 * @method self onEvent($value) 事件
 */
class Date extends Widget
{
    protected string $type = 'date';
}
