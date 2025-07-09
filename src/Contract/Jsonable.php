<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Contract;

use Stringable;

interface Jsonable extends Stringable
{
    public function __toString(): string;
}
