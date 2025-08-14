<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Images 图片集
 *
 * 图片集展示，不支持配置初始化接口初始化数据域，需要搭配 Service、Form 或 CRUD 等组件使用
 *
 * @method $this type(string $value = 'images') 如果在 Table、Card 和 List 中，为"images"；在 Form 中用作静态展示，为"static-images"，默认 'images'
 * @method $this className(string $value = '') 外层 CSS 类名，默认 ''
 * @method $this defaultImage(string $value = '') 默认展示图片，默认 ''
 * @method $this value(string|array $value = []) 图片数组，支持字符串数组或对象数组，默认 []
 * @method $this source(string $value = '') 数据源，关联上下文数据，默认 ''
 * @method $this name(string $value = '') 字段名，映射同名变量，默认 ''
 * @method $this delimiter(string $value = ',') 分隔符，当 value 为字符串时，用该值进行分隔拆分，默认 ','
 * @method $this src(string $value = '') 预览图地址，支持数据映射获取对象中图片变量，默认 ''
 * @method $this originalSrc(string $value = '') 原图地址，支持数据映射获取对象中图片变量，默认 ''
 * @method $this enlargeAble(bool $value = false) 支持放大预览，默认 false
 * @method $this enlargeTitle(string $value = '') 放大时展示的标题，默认 ''
 * @method $this enlargeCaption(string $value = '') 放大时展示的描述，默认 ''
 * @method $this enlargeWithGallary(bool|string $value = true) 放大模式下是否展示图片集列表，表格中可设置为 true/false，默认 true
 * @method $this thumbMode(string $value = 'contain') 预览图模式，可选：'w-full', 'h-full', 'contain', 'cover'，默认 'contain'
 * @method $this thumbRatio(string $value = '1:1') 预览图比例，可选：'1:1', '4:3', '16:9'，默认 '1:1'
 * @method $this showToolbar(bool $value = false) 放大模式下是否展示图片的工具栏（2.2.0+），默认 false
 * @method $this listClassName(string $value = '') 图片集外层 CSS 类名，默认 ''
 * @method $this itemClassName(string $value = '') 单个图片外层 CSS 类名，默认 ''
 * @method $this options(array $value = []) 图片选项配置，默认 []
 */
class Images extends Widget
{
    protected string $type = 'images';
    
    /**
     * 图片工具栏配置
     * @param array{
     *     key: 'rotateRight'|'rotateLeft'|'zoomIn'|'zoomOut'|'scaleOrigin',
     *     label?: string,
     *     icon?: string,
     *     iconClassName?: string,
     *     disabled?: bool
     * }[] $value
     * @return $this
     */
    public function toolbarActions(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
