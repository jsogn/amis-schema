<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Each 循环渲染器
 *
 * @method self type(string $value) 指定为 each 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self value(array $value) 用于循环的值
 * @method self name(string $value) 获取数据域中变量
 * @method self source(string $value) 获取数据域中变量
 * @method self items($value) 使用value中的数据，循环输出渲染器
 * @method self placeholder(string $value) 当 value 值不存在或为空数组时的占位内容
 * @method self onEvent($value) 事件
 */
class Each extends Widget
{
    protected string $type = 'each';
}
