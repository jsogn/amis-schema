<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Image 图片
 *
 * @method self type(string $value) 指定为 image 渲染器
 * @method self className(string $value) 外层 CSS 类名
 * @method self imageClassName(string $value) 图片 CSS 类名
 * @method self title(string $value) 图片标题
 * @method self imageCaption(string $value) 图片描述
 * @method self placeholder(string $value) 占位文本
 * @method self defaultImage(string $value) 无数据时显示的图片
 * @method self src(string $value) 图片链接
 * @method self href(string $value) 外部链接
 * @method self blank(bool $value) 是否新窗口打开
 * @method self htmlTarget(string $value) a 标签的 target，优先于 blank 属性
 * @method self originalSrc(string $value) 原图链接
 * @method self enlargeAble(bool $value) 支持放大预览
 * @method self enlargeTitle(string $value) 放大预览的标题
 * @method self enlargeCaption(string $value) 放大预览的描述
 * @method self thumbMode(string $value) 预览图模式
 * @method self thumbRatio(string $value) 预览图比例
 * @method self imageMode(string $value) 图片展示模式
 * @method self alt(string $value) 图片描述
 * @method self height(int $value) 图片高度
 * @method self width(int $value) 图片宽度
 * @method self onEvent($value) 事件
 */
class Image extends Widget
{
    protected string $type = 'image';
}
