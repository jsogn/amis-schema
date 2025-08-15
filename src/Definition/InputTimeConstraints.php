<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * 设置时间输入范围限制
 * @method $this hours(array|InputTimeConstraintsItem $value)
 * @method $this minutes(array|InputTimeConstraintsItem $value)
 * @method $this seconds(array|InputTimeConstraintsItem $value)
 * @method $this milliseconds(array|InputTimeConstraintsItem $value)
 */
class InputTimeConstraints extends Schema
{

}