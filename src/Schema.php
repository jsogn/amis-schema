<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema;

use Jiangwang\AmisSchema\Contract\Arrayable;
use Jiangwang\AmisSchema\Contract\Jsonable;
use Jiangwang\AmisSchema\Trait\Schemaable;

class Schema implements \JsonSerializable, Arrayable, Jsonable, \ArrayAccess
{
    use Schemaable;
}