<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputKVS 键值对象组件
 * 
 * 用于支持对象值的键值对编辑器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-kvs
 *
 * @method $this keyItem(array $value) 设置key 的配置
 * @method $this valueItems(array $value) 设置value 的配置，请注意：这里是复数，需要配置成数组。支持任意表单项
 * @method $this draggable(bool $value) 设置是否可拖拽排序
 * @method $this defaultValue(array $value) 设置默认值
 * @method $this addButtonText(string $value) 设置新增按钮文字，默认为"新增"
 */
class InputKVS extends Widget
{
    protected string $type = 'input-kvs';
}
