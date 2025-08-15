<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Widget\Widget;

/**
 * Flex 组件，AMis Flex 布局。
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/flex
 *
 * @method $this justify(string $value = 'center') 主轴对齐方式，支持: start、flex-start、center、end、flex-end、space-around、space-between、space-evenly
 * @method $this alignItems(string $value = 'center') 交叉轴对齐方式，支持: stretch、start、flex-start、flex-end、end、center、baseline
 * @method $this items(array|Widget[] $value = []) Flex 子项
 */
class Flex extends Widget
{
    protected string $type = 'flex';
}