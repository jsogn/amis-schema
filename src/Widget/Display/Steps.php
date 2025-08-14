<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Steps 步骤条
 *
 * 步骤条组件，支持水平、垂直、简单三种模式，数据映射、状态配置等功能
 *
 * @method $this steps(array $value = []) 步骤数据配置，默认 []
 * @method $this source(string|API|array $value = '') 数据源，支持API或数据映射(since 1.9.1)，默认 ''
 * @method $this name(string $value = '') 关联上下文变量，默认 ''
 * @method $this value(string|int $value = '') 设置默认值，默认 ''
 * @method $this mode(string $value = 'horizontal') 步骤条模式，horizontal/vertical/simple，默认 'horizontal'
 * @method $this labelPlacement(string $value = 'horizontal') 标签放置位置，horizontal/vertical，默认 'horizontal'
 * @method $this progressDot(bool $value = false) 点状步骤条，默认 false
 */
class Steps extends Widget
{
    protected string $type = 'steps';

    /**
     * 步骤状态配置
     *
     * @param string|array{
     *     wait?: string,
     *     process?: string,
     *     finish?: string,
     *     error?: string
     * } $value 状态配置，可以是单一状态或状态映射对象
     * @return self
     */
    public function status(string|array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
