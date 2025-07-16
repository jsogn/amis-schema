<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputKVS 键值对象
 *
 * 键值对象输入组件，支持对象和数组的深层结构编辑
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-kvs
 *
 * @method $this keyItem(array|Widget $value) key 的配置项，可以设置 key 值控件类型
 * @method $this valueItems(array|Widget[] $value) value 的配置项，配置成数组，支持任意表单项
 * @method $this addButtonText(string $value = '新增') 新增按钮文字，默认为"新增"
 * @method $this draggable(bool $value = true) 是否可拖拽排序，默认为 true
 * @method $this valueIsArray(bool $value = false) 值是否为数组类型，默认为 false
 */
class InputKVS extends FormItem
{
    protected string $type = 'input-kvs';
}
