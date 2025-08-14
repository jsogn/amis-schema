<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;
use AmisSchema\Widget\Widget;

/**
 * 弹出提示配置
 * @link https://baidu.github.io/amis/zh-CN/components/popover
 *
 * @method $this mode(string $mode = 'popOver') 弹出模式，可选值："popOver" | "dialog" | "drawer"
 * @method $this size(string $size) 当配置成 dialog 或者 drawer 的时候有用
 * @method $this position(string $position) 配置弹出位置，只有 popOver 模式有用，默认是自适应
 * @method $this offset(array $offset = ['top' => 0, 'left' => 0]) 偏移量配置
 * @method $this trigger(string $trigger = 'click') 触发弹出的条件，可选值："click" | "hover"
 * @method $this showIcon(bool $showIcon) 是否显示图标，默认会有个放大形状的图标出现在列里面
 * @method $this title(string $title) 弹出框的标题
 * @method $this body(array|Widget|Widget[] $body) 弹出框的内容
 */
class PopOver extends Schema
{

}
