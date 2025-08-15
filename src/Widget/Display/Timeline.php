<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Timeline 时间轴
 *
 * 时间轴展示组件，用于展示事件的时间顺序
 *
 * @method $this source(string|array|API $value) 设置远程数据源
 * @method $this mode(string $value = 'right') 展示模式：left-左侧显示、right-右侧显示、alternate-交替显示
 * @method $this direction(string $value = 'vertical') 时间轴方向：vertical-垂直、horizontal-水平
 * @method $this reverse(bool $value = false) 是否反向展示时间轴
 * @method $this itemTitleClassName(string $value = '') 节点标题的类名
 * @method $this itemDetailClassName(string $value = '') 节点详情的类名
 *
 * @version 3.4.0 支持 CSS 类名定制功能
 */
class Timeline extends Widget
{
    protected string $type = 'timeline';

    /**
     * 设置时间轴节点配置
     *
     * @param array<int, array{
     *     time?: string,
     *     title?: string,
     *     detail?: string,
     *     detailCollapsedText?: string,
     *     detailExpandedText?: string,
     *     color?: string,
     *     icon?: string,
     *     iconClassName?: string,
     *     titleClassName?: string,
     *     detailClassName?: string,
     *     timeClassName?: string
     * }> $value 时间轴节点配置数组
     * @return $this
     */
    public function items(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
