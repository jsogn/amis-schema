<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Images 图片集
 * 
 * 图片集展示，不支持配置初始化接口初始化数据域
 *
 * @method self type(string $type) 如果在 Table、Card 和 List 中，为"images"；在 Form 中用作静态展示，为"static-images"
 * @method self className(string $className) 外层 CSS 类名
 * @method self defaultImage(string $defaultImage) 默认展示图片
 * @method self value(string|array $value) 图片数组
 * @method self source(string $source) 数据源
 * @method self delimiter(string $delimiter) 分隔符，当 value 为字符串时，用该值进行分隔拆分，默认为 ","
 * @method self src(string $src) 预览图地址，支持数据映射获取对象中图片变量
 * @method self originalSrc(string $originalSrc) 原图地址，支持数据映射获取对象中图片变量
 * @method self enlargeAble(bool $enlargeAble) 支持放大预览
 * @method self enlargeWithGallary(bool $enlargeWithGallary) 默认在放大功能展示图片集的所有图片信息；表格中使用时，设置为true将展示所有行的图片信息；设置为false将关闭放大模式下图片集列表的展示
 * @method self thumbMode(string $thumbMode) 预览图模式，可选：'w-full', 'h-full', 'contain', 'cover'，默认为 "contain"
 * @method self thumbRatio(string $thumbRatio) 预览图比例，可选：'1:1', '4:3', '16:9'，默认为 "1:1"
 * @method self showToolbar(bool $showToolbar) 放大模式下是否展示图片的工具栏，默认为 false
 * @method self toolbarActions(array $toolbarActions) 图片工具栏，支持旋转，缩放，默认操作全部开启
 */
class Images extends Widget
{
    protected string $type = 'images';
}
