<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Card 卡片
 *
 * @method $this type(string $value = 'card') 指定为 Card 渲染器，默认 'card'
 * @method $this href(string $value = '') 外部链接，默认 ''
 * @method $this body(array $value = []) 内容容器，主要用来放置非表单项组件，默认 []
 * @method $this bodyClassName(string $value = '') 内容区域类名，默认 ''
 * @method $this actions(array $value = []) 配置按钮集合，默认 []
 * @method $this actionsCount(int $value = 4) 按钮集合每行个数，默认 4
 * @method $this itemAction(array $value = []) 点击卡片的行为，默认 []
 * @method $this secondary(string $value = '') 次要说明，默认 ''
 * @method $this toolbar(array $value = []) 工具栏按钮，默认 []
 * @method $this dragging(bool $value = false) 是否显示拖拽图标，默认 false
 * @method $this selectable(bool $value = false) 卡片是否可选，默认 false
 * @method $this checkable(bool $value = true) 卡片选择按钮是否禁用，默认 true
 * @method $this selected(bool $value = false) 卡片选择按钮是否选中，默认 false
 * @method $this hideCheckToggler(bool $value = false) 卡片选择按钮是否隐藏，默认 false
 * @method $this multiple(bool $value = false) 卡片是否为多选，默认 false
 * @method $this useCardLabel(bool $value = true) 卡片内容区的表单项 label 是否使用 Card 内部的样式，默认 true
 */
class Card extends Widget
{
    protected string $type = 'card';

    /**
     * Card 头部内容设置
     * @param array{
     *     className?: string,
     *     title?: string,
     *     titleClassName?: string,
     *     subTitle?: string,
     *     subTitleClassName?: string,
     *     subTitlePlaceholder?: string,
     *     description?: string,
     *     descriptionClassName?: string,
     *     descriptionPlaceholder?: string,
     *     avatar?: string,
     *     avatarClassName?: string,
     *     imageClassName?: string,
     *     avatarText?: string,
     *     avatarTextBackground?: array,
     *     avatarTextClassName?: string,
     *     highlight?: bool,
     *     highlightClassName?: string,
     *     href?: string,
     *     blank?: bool
     * } $value
     * @return self
     */
    public function header(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }

    /**
     * Card 多媒体部内容设置
     * @param array{
     *     type?: 'image'|'video',
     *     url?: string,
     *     position?: 'left'|'right'|'top'|'bottom',
     *     className?: string,
     *     isLive?: bool,
     *     autoPlay?: bool,
     *     poster?: string
     * } $value
     * @return self
     */
    public function media(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
