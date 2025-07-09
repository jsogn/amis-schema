<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Cards 卡片组
 *
 * @method self type(string $value) 指定为卡片组
 * @method self title($value) 标题
 * @method self source(string $value) 数据源, 获取当前数据域中的变量
 * @method self placeholder($value) 当没数据的时候的文字提示
 * @method self className(string $value) 外层 CSS 类名
 * @method self headerClassName(string $value) 顶部外层 CSS 类名
 * @method self footerClassName(string $value) 底部外层 CSS 类名
 * @method self itemClassName(string $value) 卡片 CSS 类名
 * @method self card($value) 配置卡片信息
 * @method self selectable(bool $value) 卡片组是否可选
 * @method self multiple(bool $value) 卡片组是否为多选
 * @method self checkOnItemClick(bool $value) 点选卡片内容是否选中卡片
 * @method self onEvent($value) 事件
 */
class Cards extends Widget
{
    protected string $type = 'cards';
}
