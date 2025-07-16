<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Json JSON 渲染器
 *
 * @method self type(string $value) 指定为 json 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self value($value) json 值，如果是 string 会自动 parse
 * @method self source(string $value) 通过数据映射获取数据链中的值
 * @method self placeholder(string $value) 占位文本
 * @method self levelExpand(int $value) 默认展开的层级
 * @method self jsonTheme(string $value) 主题
 * @method self mutable(bool $value) 是否可修改
 * @method self displayDataTypes(bool $value) 是否显示数据类型
 * @method self enableClipboard(bool $value) 是否开启复制功能
 * @method self iconStyle(string $value) 图标风格
 * @method self onEvent($value) 事件
 */
class Json extends Widget
{
    protected string $type = 'json';
}
