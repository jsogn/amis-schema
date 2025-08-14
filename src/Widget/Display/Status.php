<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Status 状态
 *
 * 状态显示组件，最适合的用法是放在列表类组件（CRUD，Table，List 等）的列中，用来表示状态
 *
 * @method $this placeholder(string $value = '') 占位文本
 * @method $this map(array $value = []) 映射图标配置
 * @method $this labelMap(array $value = []) 映射文本配置
 *
 * @version 2.3.0 支持 map 和 labelMap 动态数据映射
 * @version 2.8.0 支持 source 自定义状态配置
 */
class Status extends Widget
{
    protected string $type = 'status';

    /**
     * 自定义映射状态配置
     *
     * @param array{
     *     label: string,
     *     icon: string,
     *     color: string,
     *     Status: string
     * } $value 状态映射配置，格式：
     * @return $this
     * @since 2.8.0
     */
    public function source(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
