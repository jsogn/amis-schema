<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Each 循环渲染器
 *
 * @method $this type(string $value = 'each') 指定为 Each 组件，默认 'each'
 * @method $this value(array $value = []) 用于循环的值，默认 []
 * @method $this name(string $value = '') 获取数据域中变量，默认 ''
 * @method $this source(string $value = '') 获取数据域中变量，支持数据映射，默认 ''
 * @method $this items(array $value = []) 使用 value 中的数据，循环输出渲染器，默认 []
 * @method $this placeholder(string $value = '') 当 value 值不存在或为空数组时的占位文本，默认 ''
 * @method $this itemKeyName(string $value = 'item') 获取循环当前数组成员的字段名，默认 'item'
 * @method $this indexKeyName(string $value = 'index') 获取循环当前索引的字段名，默认 'index'
 */
class Each extends Widget
{
    protected string $type = 'each';
}
