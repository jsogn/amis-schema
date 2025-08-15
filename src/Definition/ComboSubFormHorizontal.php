<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * 设置当 subFormMode 为 horizontal 时有用，用来控制 label 的展示占比，默认为 {"left":2, "right":10, "justify": false}
 * @method $this left(int $value)
 * @method $this right(int $value)
 * @method $this justify(bool $value)
 */
class ComboSubFormHorizontal extends Schema
{

}