<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * 消息提示覆写，默认消息读取的是 API 返回的消息，但是在此可以覆写它。
 * @method $this fetchSuccess(string $value)
 * @method $this fetchFailed(string $value)
 * @method $this saveSuccess(string $value)
 * @method $this saveFailed(string $value)
 * @method $this validateFailed(string $value)
 */
class FormMessages extends Schema
{

}