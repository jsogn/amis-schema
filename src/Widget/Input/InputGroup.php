<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputGroup 输入框组合
 *
 * 输入框组合选择器 可用于输入框与其他组件进行组合
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-group
 *
 * @method $this body(array|Widget[]|Widget $body) 表单项集合
 */
class InputGroup extends FormItem
{
    protected string $type = 'input-group';

    /**
     * 校验相关配置
     * @param array{
     *     errorMode?: 'full'|'partial',
     *     delimiter?: string
     * } $value
     * @return self
     */
    public function validationConfig(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
