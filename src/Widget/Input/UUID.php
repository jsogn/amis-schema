<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * UUID 随机 ID 组件
 * 
 * 自动生成的 UUID
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/uuid
 *
 * @method $this length(int $value) 设置长度，默认 auto
 */
class UUID extends Widget
{
    protected string $type = 'uuid';
}
