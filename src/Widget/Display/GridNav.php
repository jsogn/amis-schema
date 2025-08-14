<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * GridNav 宫格导航
 *
 * 宫格菜单导航，不支持配置初始化接口初始化数据域，需要搭配 Service、Form 或 CRUD 等组件使用
 *
 * @method $this type(string $value = 'grid-nav') 指定为 GridNav 渲染器，默认 'grid-nav'
 * @method $this itemClassName(string $value = '') 列表项 css 类名，默认 ''
 * @method $this contentClassName(string $value = '') 列表项内容 css 类名，默认 ''
 * @method $this value(array $value = []) 宫格数据数组，默认 []
 * @method $this source(string $value = '') 数据源，默认 ''
 * @method $this name(string $value = '') 字段名，映射同名变量，默认 ''
 * @method $this square(bool $value = false) 是否将列表项固定为正方形，默认 false
 * @method $this center(bool $value = true) 是否将列表项内容居中显示，默认 true
 * @method $this border(bool $value = true) 是否显示列表项边框，默认 true
 * @method $this gutter(int $value = 0) 列表项之间的间距，默认单位为px，默认 0
 * @method $this reverse(bool $value = false) 是否调换图标和文本的位置，默认 false
 * @method $this iconRatio(int $value = 60) 图标宽度占比，单位%，默认 60
 * @method $this direction(string $value = 'vertical') 列表项内容排列的方向，可选值为 horizontal、vertical，默认 'vertical'
 * @method $this columnNum(int $value = 4) 列数，默认 4
 */
class GridNav extends Widget
{
    protected string $type = 'grid-nav';

    /**
     * 宫格选项配置
     * @param array{
     *     icon?: string,
     *     text?: string,
     *     badge?: array,
     *     link?: string,
     *     blank?: bool,
     *     clickAction?: array
     * }[] $value
     * @return self
     */
    public function options(array $value): self
    {
        return $this->setAttribute('options', $value);
    }
}
