<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * 限制图片大小，超出不让上传
 * @method $this width(int $value)
 * @method $this height(int $value)
 * @method $this minWidth(int $value)
 * @method $this minHeight(int $value)
 * @method $this maxWidth(int $value)
 * @method $this maxHeight(int $value)
 * @method $this aspectRatio(float $value)
 */
class InputImageLimit extends Schema
{

}