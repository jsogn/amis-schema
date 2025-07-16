<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputKV 键值对
 *
 * 键值对输入组件，用于支持对象形式的数据编辑
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-kv
 *
 * @method $this valueType(string $value) 值类型，默认为 "input-text"
 * @method $this keyPlaceholder(string $value) key 的提示信息
 * @method $this valuePlaceholder(string $value) value 的提示信息
 * @method $this draggable(bool $value) 是否可拖拽排序，默认为 true
 * @method $this defaultValue(mixed $value) 默认值，默认为 ''
 * @method $this autoParseJSON(bool $value) 是否自动转换 json 对象字符串，默认为 true
 * @method $this valueSchema(array|Widget $value) 自定义 value 的 schema 配置 (3.1.0+)
 * @method $this keySchema(array|Widget $value) 自定义 key 的 schema 配置 (3.1.0+)
 */
class InputKV extends FormItem
{
    protected string $type = 'input-kv';
}
