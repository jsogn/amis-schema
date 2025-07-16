<?php

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;

/**
 * AmisRenderer Amis渲染器
 * 
 * 动态渲染Amis Schema
 *
 * @method self type(string $type) 指定为 AmisRenderer 渲染器  
 * @method self className(string $className) 外层 CSS 类名
 * @method self schema(array|string $schema) amis Schema配置
 * @method self schemaApi(string|array $schemaApi) 获取schema的API
 * @method self name(string $name) 组件名称
 * @method self env(array $env) 环境变量
 * @method self locale(string $locale) 多语言配置
 * @method self useMobileUI(bool $useMobileUI) 是否使用移动端UI
 */
class AmisRenderer extends Widget
{
    protected string $type = 'amis';
}
