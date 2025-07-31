<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * JsonSchema 组件
 *
 * 基于 JSON Schema 生成表单项
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/json-schema
 *
 * @method $this schema(array|string|Widget $value) 设置指定 json-schema
 * @method $this schemaApi(API|string|array $value) 设置远程获取 schema 的接口
 * @method $this formula(string $value) 设置公式配置，可以配合公式使用
 */
class JsonSchema extends FormItem
{
    protected string $type = 'json-schema';
}
