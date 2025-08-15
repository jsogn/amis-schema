<?php

declare(strict_types=1);

namespace AmisSchema\Widget\Extra;

use AmisSchema\Widget\Widget;

/**
 * Badge 角标
 * 
 * 部分组件可以设置 badge 属性来显示角标
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/badge
 *
 * @method $this mode(string $value = 'dot') 角标类型：dot-点状、text-文字、ribbon-缎带
 * @method $this text(string|int $value = '') 角标文案，支持字符串和数字，在 mode='dot' 下设置无效
 * @method $this size(int $value = null) 角标大小
 * @method $this level(string $value = '') 角标级别：info、success、warning、danger，设置之后角标背景颜色不同
 * @method $this overflowCount(int $value = 99) 设置封顶的数字值，超过会显示为 ${overflowCount}+
 * @method $this position(string $value = 'top-right') 角标位置：top-right、top-left、bottom-right、bottom-left
 * @method $this offset(array $value = [0, 0]) 角标位置偏移，格式为 [top, left]，相对于 position 位置进行偏移
 * @method $this animation(bool $value = false) 角标是否显示动画，在 mode='dot' 状态下生效
 *
 * @version 1.2.2 及之前版本只支持头像组件
 * @version 1.2.3 开始支持按钮、链接、模板组件
 */
class Badge extends Widget
{
    protected string $type = 'badge';
}