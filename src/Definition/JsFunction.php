<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Definition;

use Jiangwang\AmisSchema\Schema;
use Jiangwang\AmisSchema\Trait\Schemaable;

/**
 * @property string $name 方法名称
 * @property array $parameters 方法参数
 * @property string $body 方法体
 *
 * @method $this name(string $value) 方法名称
 * @method $this parameters(array $value) 方法参数
 * @method $this body(string $value) 方法体
 */
class JsFunction extends Schema
{
    use Schemaable;

    protected string $type = 'js-function';

    public function getAttribute(): array
    {
        unset($this->attribute['type']);

        return [
            'type' => $this->type,
            ...$this->attribute
        ];
    }
}