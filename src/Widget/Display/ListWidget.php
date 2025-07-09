<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * List 列表
 *
 * @method self type(string $value) 指定为 List 渲染器
 * @method self title($value) 标题
 * @method self source(string $value) 数据源, 获取当前数据域中的变量
 * @method self placeholder($value) 当没数据的时候的文字提示
 * @method self className(string $value) 外层 CSS 类名
 * @method self headerClassName(string $value) 顶部外层 CSS 类名
 * @method self footerClassName(string $value) 底部外层 CSS 类名
 * @method self listItem($value) 配置单个列表项
 * @method self selectable(bool $value) 列表项是否可选
 * @method self multiple(bool $value) 列表项是否为多选
 * @method self checkOnItemClick(bool $value) 点击列表项内容是否选中列表项
 * @method self onEvent($value) 事件
 */
class ListWidget extends Widget
{
    protected string $type = 'list';
}
