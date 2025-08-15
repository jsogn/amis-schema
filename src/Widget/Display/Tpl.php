<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Tpl 模板
 * 
 * 输出模板的常用组件，支持数据变量、过滤器、函数等强大的模板功能
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/tpl
 *
 * @method $this tpl(string $value = '') 配置模板内容，支持变量替换和表达式
 * @method $this showNativeTitle(bool $value = false) 是否设置外层 DOM 节点的 title 属性为文本内容
 * 
 * @version 2.5.3 支持 click、mouseenter、mouseleave 事件
 */
class Tpl extends Widget
{
    protected string $type = 'tpl';
}
