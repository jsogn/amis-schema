<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * ButtonGroupSelect 按钮点选组件
 *
 * 一般用来作为选项选择器，按钮集合当 select 点选用
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/button-group-select
 *
 * @method $this vertical(bool $value=false) 设置是否使用垂直模式，默认为 false
 * @method $this tiled(bool $value=false) 设置是否使用平铺模式，默认为 false
 * @method $this btnLevel(string $value='default') 设置按钮样式，支持：link、primary、secondary、info、success、warning、danger、light、dark、default，默认为 "default"
 * @method $this btnActiveLevel(string $value='default') 设置选中按钮样式，配置同btnLevel，默认为 "default"
 * @method $this clearable(bool $value) 设置是否可清空
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 */
class ButtonGroupSelect extends Options
{
    protected string $type = 'button-group-select';
}
