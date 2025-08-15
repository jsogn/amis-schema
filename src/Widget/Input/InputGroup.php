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
 * @method $this validationConfig(array|\AmisSchema\Definition\InputGroupValidationConfig $value) InputGroup 输入框组合验证配置
 */
class InputGroup extends FormItem
{
    protected string $type = 'input-group';
}
