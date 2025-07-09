<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * ButtonToolbar 按钮工具栏组件
 * 
 * 可以用来放置多个按钮或者按钮组，按钮之间会存在一定的间隔
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/button-toolbar
 *
 * @method $this buttons(array $value) 设置按钮组
 */
class ButtonToolbar extends Widget
{
    protected string $type = 'button-toolbar';
}
