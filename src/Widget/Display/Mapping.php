<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Mapping 映射
 * 
 * 映射展示组件
 *
 * @method self type(string $type) 指定为 Mapping 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self placeholder(string $placeholder) 占位文本
 * @method self map(array|object $map) 映射配置
 * @method self source(string|array $source) API 或 数据映射
 * @method self valueField(string $valueField) map 或 source 为Array<object>时，用来匹配映射的字段名，默认为 "value"
 * @method self labelField(string $labelField) map 或 source 为Array<object>时，用来展示的字段名，默认为 "label"。注：配置后映射值无法作为schema组件渲染
 * @method self itemSchema(string|Widget|Widget[]|array $itemSchema) 自定义渲染模板，支持html或schemaNode；当映射值是非object时，可使用${item}获取映射值；当映射值是object时，可使用映射语法: ${xxx}获取object的值；也可使用数据映射语法：${xxx}获取数据域中变量值。
 */
class Mapping extends Widget
{
    protected string $type = 'mapping';
}
