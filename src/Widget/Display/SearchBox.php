<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * SearchBox 搜索框
 * 
 * 用于展示一个简单搜索框，通常需要搭配其他组件使用
 *
 * @method self type(string $type) 指定为 SearchBox 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self mini(bool $mini) 是否为 mini 模式
 * @method self searchImediately(bool $searchImediately) 是否立即搜索
 * @method self clearAndSubmit(bool $clearAndSubmit) 清空搜索框内容后立即执行搜索
 * @method self disabled(bool $disabled) 是否为禁用状态，默认为 false
 * @method self loading(bool $loading) 是否处于加载状态，默认为 false
 */
class SearchBox extends Widget
{
    protected string $type = 'search-box';
}
