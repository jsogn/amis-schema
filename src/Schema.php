<?php
declare(strict_types=1);

namespace AmisSchema;

use AmisSchema\Contract\Arrayable;
use AmisSchema\Contract\Jsonable;
use AmisSchema\Trait\Schemaable;

class Schema implements \JsonSerializable, Arrayable, Jsonable, \ArrayAccess
{
    use Schemaable;
}