<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Control 表单项包裹
 *
 * 展示类的组件，如果直接放在表单项里面，不会有 label 和 description 之类的信息展示。
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/control
 *
 * @method $this body(Widget|Widget[]|string $value)
 * @method $this label(string $value)
 * @method $this description(string $value)
 */
class Control extends Widget
{
    protected string $type = 'control';
}