<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;
use AmisSchema\Widget\Function\DropDownButton;

/**
 * Breadcrumb 面包屑
 * @method $this label(string $value)
 * @method $this href(string $value)
 * @method $this icon(string $value)
 * @method $this dropdown(array|DropDownButton[] $value)
 */
class BreadcrumbItem extends Schema
{

}