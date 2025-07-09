<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Definition;

use Jiangwang\AmisSchema\Schema;
use Jiangwang\AmisSchema\Widget\Function\DropDownButton;

/**
 * @method $this label(string $label) 文本
 * @method $this href(string $href) 链接
 * @method $this icon(string $icon) 图标
 * @method $this dropdown(DropDownButton[] $dropdown) 下拉菜单，dropdown[]的每个对象都包含label、href、icon属性
 *
 * @property string $label 文本
 * @property string $href 链接
 * @property string $icon 图标
 * @property array $dropdown 下拉菜单，dropdown[]的每个对象都包含label、href、icon属性
 */
class BreadcrumbItem extends Schema
{

}