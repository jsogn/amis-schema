<?php

namespace Jiangwang\AmisSchema\Widget\Extra;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Avatar 头像
 *
 * @method $this type(string $value) 指定为 avatar 渲染器
 * @method $this className(string $value) 外层CSS类名
 * @method $this src(string $value) 头像图片地址
 * @method $this text(string $value) 头像文字
 * @method $this icon(string $value) 头像图标
 * @method $this fit(string $value) 图片缩放类型
 * @method $this shape(string $value) 头像形状，支持circle、square、rounded
 * @method $this size(string $value) 头像大小，支持default、large、small
 * @method $this style($value) 自定义样式
 * @method $this draggable(bool $value) 是否开启拖拽
 * @method $this crossOrigin(string $value) 图片 CORS 属性
 * @method $this alt(string $value) 图片无法显示时的替代文本
 * @method $this onError(string $value) 图片加载失败的字符串
 * @method $this gap(int $value) 字符类型距离左右两侧边界单位像素
 * @method $this onEvent($value) 事件
 */
class Avatar extends Widget
{
    protected string $type = 'avatar';
}
