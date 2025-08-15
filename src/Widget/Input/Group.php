<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * Group 表单项组
 *
 * 表单项，默认都是一行显示一个，Group 组件用于在一行展示多个表单项，会自动根据表单项数量均分宽度
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/group
 *
 * @method $this label(string $label) group 的标签
 * @method $this body(array|Widget|Widget[] $body) 表单项集合
 * @method $this gap(string $gap) 表单项之间的间距，可选：xs、sm、normal
 * @method $this direction(string $direction = 'horizontal') 可以配置水平展示还是垂直展示。对应的配置项分别是：vertical、horizontal
 */
class Group extends FormItem
{
    protected string $type = 'group';
}
