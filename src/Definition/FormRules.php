<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Definition;

use Jiangwang\AmisSchema\Schema;

/**
 * @property string $rule 校验规则
 * @property string $message 校验失败时的提示信息
 * @property string[]|null $name 需要校验的字段名数组，可选
 *
 * @method $this rule(string $value) 设置校验规则
 * @method $this message(string $value) 设置校验失败时的提示信息
 * @method $this name(array $value) 设置需要校验的字段名数组
 * */
class FormRules extends Schema
{

}