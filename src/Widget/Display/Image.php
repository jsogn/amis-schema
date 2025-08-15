<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Image 图片
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/image
 *
 * @method $this type(string $value = 'image') 指定为 image 渲染器，在 Table、Card 和 List 中为 "image"；在 Form 中用作静态展示为 "static-image"，默认 'image'
 * @method $this innerClassName(string $value = '') 组件内层 CSS 类名，默认 ''
 * @method $this imageClassName(string $value = '') 图片 CSS 类名，默认 ''
 * @method $this thumbClassName(string $value = '') 图片缩略图 CSS 类名，默认 ''
 * @method $this title(string $value = '') 标题，默认 ''
 * @method $this imageCaption(string $value = '') 描述，默认 ''
 * @method $this placeholder(string $value = '') 占位文本，默认 ''
 * @method $this defaultImage(string $value = '') 无数据时显示的图片，默认 ''
 * @method $this src(string $value = '') 缩略图地址，默认 ''
 * @method $this name(string $value = '') 在其他组件中，时，用作变量映射，默认 ''
 * @method $this href(string $value = '') 外部链接地址，默认 ''
 * @method $this originalSrc(string $value = '') 原图地址，默认 ''
 * @method $this enlargeAble(bool $value = false) 支持放大预览，默认 false
 * @method $this enlargeTitle(string $value = '') 放大预览的标题，默认 ''
 * @method $this enlargeCaption(string $value = '') 放大预览的描述，默认 ''
 * @method $this enlargeWithGallary(bool $value = true) 在表格中，图片的放大功能会默认展示所有图片信息，设置为 false 将关闭放大模式下图片集列表的展示，默认 true
 * @method $this thumbMode(string $value = 'contain') 预览图模式，可选：'w-full', 'h-full', 'contain', 'cover'，默认 'contain'
 * @method $this thumbRatio(string $value = '1:1') 预览图比例，可选：'1:1', '4:3', '16:9'，默认 '1:1'
 * @method $this imageMode(string $value = 'thumb') 图片展示模式，可选：'thumb', 'original' 即：缩略图模式 或者 原图模式，默认 'thumb'
 * @method $this height(string $value = '') 图片缩略高度，默认 ''
 * @method $this width(string $value = '') 图片缩略宽度，默认 ''
 * @method $this showToolbar(bool $value = false) 放大模式下是否展示图片的工具栏，默认 false
 * @method $this maxScale(float|string $value = '') 执行调整图片比例动作时的最大百分比，默认 ''
 * @method $this minScale(float|string $value = '') 执行调整图片比例动作时的最小百分比，默认 ''
 * @method $this clickAction(array $value = []) 自定义点击行为，默认 []
 * @method $this toolbarActions(array|\AmisSchema\Definition\ImageToolbarActionsItem[] $value) Image 图片工具栏动作配置
 */
class Image extends Widget
{
    protected string $type = 'image';
}
