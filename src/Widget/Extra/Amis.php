<?php

declare(strict_types=1);

namespace AmisSchema\Widget\Extra;

use AmisSchema\Schema;
use AmisSchema\Widget\Widget;

/**
 * Amis 渲染器
 * 
 * 用于渲染数据中的 amis 配置
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/amis
 *
 * @method $this name(string $value = '') 绑定上下文变量名
 * @method $this props(array $value = []) 向下传递的 props，会作为默认值
 * @method $this schema(Schema|array|string $value = null) amis 配置，可以是 JSON 对象或字符串的 JSON
 */
class Amis extends Widget
{
    protected string $type = 'amis';
}
