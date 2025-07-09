<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Layout;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Collapse 组件，AMis 折叠面板。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/collapse
 *
 * @method $this disabled(bool $value) 禁用。
 * @method $this collapsed(bool $value) 初始状态是否折叠。
 * @method $this key(string|int $value) 标识。
 * @method $this header(string|Widget|Widget[] $value) 标题。
 * @method $this body(string|Widget|Widget[] $value) 内容。
 * @method $this showArrow(bool $value) 是否展示图标。
 */
class Collapse extends Widget
{
    protected string $type = 'collapse';
}