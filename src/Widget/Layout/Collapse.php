<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * Collapse 折叠器
 *
 * 折叠器组件，用于内容的折叠展开
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/collapse
 *
 * @method $this disabled(bool $value = false) 禁用，默认为 false
 * @method $this collapsed(bool $value = true) 初始状态是否折叠，默认为 true
 * @method $this key(string|int $value) 标识
 * @method $this header(string|array|Widget|Widget[] $value) 标题
 * @method $this body(string|array|Widget|Widget[] $value) 内容
 * @method $this showArrow(bool $value = true) 是否展示图标，默认为 true
 */
class Collapse extends Widget
{
    protected string $type = 'collapse';
}