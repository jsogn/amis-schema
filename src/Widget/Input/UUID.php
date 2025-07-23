<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * UUID 随机 ID 组件
 * 
 * 随机生成一个 id，可以用于防止表单重复提交。这个字段是不显示的。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/uuid
 *
 * @method $this length(int $value) 设置长度，用于生成短随机数
 */
class UUID extends FormItem
{
    protected string $type = 'uuid';
}
