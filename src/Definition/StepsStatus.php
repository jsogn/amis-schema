<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * Steps 步骤条
 * @method $this wait(string $value)
 * @method $this process(string $value)
 * @method $this finish(string $value)
 * @method $this error(string $value)
 */
class StepsStatus extends Schema
{

}