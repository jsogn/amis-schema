<?php
declare(strict_types=1);

namespace AmisSchema\Trait;

use AmisSchema\Contract\Arrayable;

trait Schemaable
{
    use Macroable {
        __call as macroCall;
    }

    protected array $attribute = [];

    public function __construct(?array $attribute = [])
    {
        foreach ($attribute ?? [] as $key => $value) {
            $this->offsetSet($key, $value);
        }
    }

    public static function make(?array $attribute = []): static
    {
        return new static($attribute);
    }

    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_THROW_ON_ERROR);
    }

    public function toArray(): array
    {
        $attr = $this->getAttribute();

        array_walk_recursive($attr, static function (&$value) {
            if ($value instanceof Arrayable) {
                $value = $value->toArray();
            }
        });

        return $attr;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public static function __callStatic($method, $arguments): static
    {
        return static::make()->$method($arguments);
    }

    public function __call($method, $arguments): static
    {
        if (static::hasMacro($method)) {
            return $this->macroCall($method, $arguments);
        }

        $this->offsetSet($method, $arguments[0]);

        return $this;
    }

    public function __get($key): mixed
    {
        return $this->offsetGet($key);
    }

    public function __isset(string $key): bool
    {
        return $this->offsetExists($key);
    }

    public function __set(string $key, mixed $value): void
    {
        $this->offsetset($key, $value);
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->attribute[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->attribute[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->attribute[$offset] = is_callable($value) ? $value() : $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->attribute[$offset]);
    }

    public function getAttribute(): array
    {
        return $this->attribute;
    }

    public function setAttribute(string $key, mixed $value): static
    {
        $this->offsetSet($key, $value);

        return $this;
    }
}