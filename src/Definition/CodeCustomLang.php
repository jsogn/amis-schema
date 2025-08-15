<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * Code 代码高亮配置
 */
class CodeCustomLang extends Schema
{

    /**
     * 自定义语言高亮配置
     * @param array<array{
     *         name: string,
     *         regex: string,
     *         regexFlags?: string,
     *         color: string,
     *         fontStyle?: string
     *     }> $value
     * @return self
     */
    public function tokens(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}