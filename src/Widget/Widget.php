<?php
declare(strict_types=1);

namespace AmisSchema\Widget;

use AmisSchema\Schema;

/**
 * SchemaNode 是所有组件的基类，提供了基本的 JSON 序列化、数组访问和宏功能。
 *
 * @method $this onEvent(mixed $value)
 * @method $this visibleOn(mixed $value)
 * @method $this disabledOn(mixed $value)
 * @method $this data(mixed $value)
 * @method $this className(string $value)
 * @method $this style(mixed $value)
 */
abstract class Widget extends Schema
{
    protected string $type;

    public function getAttribute(): array
    {
        return [
            'type' => $this->type,
            ...$this->attribute
        ];
    }
}