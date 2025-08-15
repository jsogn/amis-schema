<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * 网格导航选项
 * @method $this icon(string $value) 图标，可以是字体图标或图片地址
 * @method $this text(string $value) 显示文本
 * @method $this badge(array $value) 角标配置
 * @method $this link(string $value) 链接地址
 * @method $this blank(bool $value) 是否在新窗口打开链接
 * @method $this clickAction(array $value) 点击动作配置
 */
class GridNavOption extends Schema
{

}