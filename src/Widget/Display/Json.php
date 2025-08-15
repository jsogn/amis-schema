<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Json JSON 展示组件
 *
 * JSON 展示组件
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/json
 *
 * @method $this type(string $value = 'json') 如果在 Table、Card 和 List 中，为"json"；在 Form 中用作静态展示，为"static-json"，默认 'json'
 * @method $this value(array|string $value = null) json 值，如果是 string 会自动 parse，默认 null
 * @method $this source(string $value = '') 通过数据映射获取数据链中的值，默认 ''
 * @method $this name(string $value = '') 字段名，映射同名变量，默认 ''
 * @method $this placeholder(string $value = '-') 占位文本，默认 '-'
 * @method $this levelExpand(int $value = 1) 默认展开的层级，默认 1
 * @method $this jsonTheme(string $value = 'twilight') 主题，可选 twilight 和 eighties，默认 'twilight'
 * @method $this mutable(bool $value = false) 是否可修改（since 1.2.3），默认 false
 * @method $this displayDataTypes(bool $value = false) 是否显示数据类型，默认 false
 * @method $this ellipsisThreshold(int|bool $value = false) 设置字符串的最大展示长度，点击字符串可以切换全量/部分展示方式（2.0.0+），默认 false
 */
class Json extends Widget
{
    protected string $type = 'json';
}
