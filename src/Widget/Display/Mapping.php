<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Mapping 映射
 *
 * 映射展示组件，将值通过映射配置转换后展示
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/mapping
 *
 * @method $this placeholder(string $value = '') 占位文本，默认 ''
 * @method $this map(array $value = []) 映射配置，支持k-v对象或对象数组格式，默认 []
 * @method $this source(string|array|API $value = '') 远程数据源接口(since 1.1.6)或数据映射，默认 ''
 * @method $this valueField(string $value = 'value') 映射匹配字段名(since 2.5.2)，默认 value
 * @method $this labelField(string $value = 'label') 映射显示字段名(since 2.5.2)，配置后映射值无法作为schema渲染，默认 label
 * @method $this itemSchema(string|array|Widget $value = null) 自定义渲染模板(since 2.5.2)，支持html或schema，非object使用${item}，object使用${xxx}，默认 null
 */
class Mapping extends Widget
{
    protected string $type = 'mapping';
}
