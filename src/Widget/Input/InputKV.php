<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputKV 键值对组件
 * 
 * 用于输入键值对类型的数据
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-kv
 *
 * @method $this valueType(string $value) 设置值类型，支持 input、textarea
 * @method $this keyPlaceholder(string $value) 设置key 的提示信息的
 * @method $this valuePlaceholder(string $value) 设置value 的提示信息的
 * @method $this draggable(bool $value) 设置是否可拖拽排序
 * @method $this defaultValue(array $value) 设置默认值
 */
class InputKV extends Widget
{
    protected string $type = 'input-kv';
}
