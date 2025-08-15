<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Property 属性表
 *
 * 使用表格的方式显示只读信息，支持表格和简易两种模式，动态内容、样式控制等功能
 *
 * @method $this title(string $value = '') 标题，默认 ''
 * @method $this source(string|array $value = '') 数据源，默认 ''
 * @method $this mode(string $value = 'table') 显示模式，table/simple，默认 'table'
 * @method $this separator(string $value = ',') simple模式下属性名和值之间的分隔符，默认 ','
 * @method $this column(int $value = 3) 每行几列，默认 3
 * @method $this labelStyle(array $value = []) 属性名的样式，默认 []
 * @method $this contentStyle(array $value = []) 属性值的样式，默认 []
 * @method $this items(array|\AmisSchema\Definition\PropertyItem[] $value) 属性项配置
 */
class Property extends Widget
{
    protected string $type = 'property';
}
