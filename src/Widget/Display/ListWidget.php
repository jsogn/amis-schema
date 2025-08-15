<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\ListListItem;
use AmisSchema\Widget\Widget;

/**
 * List 列表
 *
 * 列表展示组件，不支持配置初始化接口初始化数据域，需要搭配 Service 等组件使用
*
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/list
 *
 * @method $this type(string $value = 'list') 指定为列表展示，默认 'list'
* @method $this title(string $value = '') 标题，默认 ''
* @method $this source(string $value = '${items}') 数据源，获取当前数据域变量，支持数据映射，默认 '${items}'
* @method $this placeholder(string $value = '暂无数据') 当没数据的时候的文字提示，默认 '暂无数据'
* @method $this selectable(bool $value = false) 列表是否可选，默认 false
* @method $this multiple(bool $value = true) 列表是否为多选，默认 true
* @method $this headerClassName(string $value = 'amis-list-header') 顶部外层 CSS 类名，默认 'amis-list-header'
* @method $this footerClassName(string $value = 'amis-list-footer') 底部外层 CSS 类名，默认 'amis-list-footer'
* @method $this checkOnItemClick(bool $value = false) 点击列表项内容是否选中列表项，默认 false
* @method $this itemAction(array $value = []) 单行点击操作配置（1.4.0+），默认 []
* @method $this innerClassName(string $value = '') 内层组件的CSS类名，默认 ''
* @method $this listItem(array|ListListItem $value) 配置单条信息
*/
class ListWidget extends Widget
{
    protected string $type = 'list';
}
