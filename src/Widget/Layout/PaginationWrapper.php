<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * PaginationWrapper 组件，AMis 分页容器渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/pagination-wrapper
 *
 * @method $this showPageInput(bool $value) 是否显示快速跳转输入框。
 * @method $this maxButtons(int $value) 最多显示多少个分页按钮。
 * @method $this inputName(string $value) 输入字段名。
 * @method $this outputName(string $value) 输出字段名。
 * @method $this perPage(int $value) 每页显示多条数据。
 * @method $this position(string $value) 分页显示位置，可选值：'top'、'bottom'、'none'。
 * @method $this body(Widget|Widget[]|string $value) 内容区域。
 */
class PaginationWrapper extends Widget
{
    protected string $type = 'pagination-wrapper';
}