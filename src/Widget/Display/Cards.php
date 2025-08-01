<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Cards 卡片组
 *
 * @method $this type(string $value = 'cards') 指定为卡片组，默认 'cards'
 * @method $this title(string $value = '') 标题，默认 ''
 * @method $this source(string $value = '${items}') 数据源, 获取当前数据域中的变量，默认 '${items}'
 * @method $this placeholder(string $value = '暂无数据') 当没数据的时候的文字提示，默认 '暂无数据'
 * @method $this headerClassName(string $value = 'amis-grid-header') 顶部外层 CSS 类名，默认 'amis-grid-header'
 * @method $this footerClassName(string $value = 'amis-grid-footer') 底部外层 CSS 类名，默认 'amis-grid-footer'
 * @method $this itemClassName(string $value = 'col-sm-4 col-md-3') 卡片 CSS 类名，默认 'col-sm-4 col-md-3'
 * @method $this card(array|Card $value = []) 配置卡片信息，默认 []
 * @method $this selectable(bool $value = false) 卡片组是否可选，默认 false
 * @method $this multiple(bool $value = true) 卡片组是否为多选，默认 true
 * @method $this checkOnItemClick(bool $value = false) 点选卡片内容是否选中卡片，默认 false
 * @method $this masonryLayout(bool $value = false) 是否开启瀑布流布局，默认 false
 * @method $this columnsCount(int $value = 0) 瀑布流布局的固定列数，默认 0（自适应）
 */
class Cards extends Widget
{
    protected string $type = 'cards';
}
