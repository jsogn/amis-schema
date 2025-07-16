<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Definition\JsFunction;
use AmisSchema\Widget\Widget;

/**
 * Pagination 组件，AMis 分页渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/pagination
 *
 * @method $this mode(string $value) 迷你版本/简易版本，可选值：'normal'、'simple'。
 * @method $this layout(string|string[] $value) 通过控制 layout 属性的顺序，调整分页结构布局。
 * @method $this maxButtons(int|string $value) 最多显示多少个分页按钮，最小为 5。
 * @method $this total(int|string $value) 总条数。
 * @method $this activePage(int|string $value) 当前页数。
 * @method $this perPage(int|string $value) 每页显示多条数据。
 * @method $this showPerPage(bool $value) 是否展示 perPage 切换器。
 * @method $this size(string $value) 组件尺寸，可选值：'sm'、'md'。
 * @method $this ellipsisPageGap(int|string $value) 多页跳转页数，页数较多出现...时点击省略号时每次前进/后退的页数。
 * @method $this perPageAvailable(int[] $value) 指定每页可以显示多少条。
 * @method $this showPageInput(bool $value) 是否显示快速跳转输入框。
 * @method $this disabled(bool $value) 是否禁用。
 * @method $this onPageChange(JsFunction|string $value) 分页改变触发, (page: number, perPage: number) => void
 */
class Pagination extends Widget
{
    protected string $type = 'pagination';
}