<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * SearchBox 搜索框
 * 
 * 用于展示一个简单搜索框，通常需要搭配其他组件使用。比如 page 配置 initApi 后，
 * 可以用来实现简单数据过滤查找，name keywords 会作为参数传递给 page 的 initApi
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/search-box
 *
 * @method $this mini(bool $value = false) 是否为 mini 模式
 * @method $this searchImediately(bool $value = false) 是否立即搜索
 * @method $this clearAndSubmit(bool $value = false) 清空搜索框内容后立即执行搜索
 * @method $this disabled(bool $value = false) 是否为禁用状态
 * @method $this loading(bool $value = false) 是否处于加载状态
 * 
 * @version 2.8.0 支持 clearAndSubmit 清除后立即搜索功能
 * @version 6.0.0 支持 disabled 和 loading 状态
 */
class SearchBox extends Widget
{
    protected string $type = 'search-box';
}
