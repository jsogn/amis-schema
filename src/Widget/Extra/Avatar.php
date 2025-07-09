<?php

namespace Slowlyo\AmisSchema\Widget\Extra;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Avatar 头像
 *
 * @method self type(string $value) 指定为 avatar 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self src(string $value) 头像图片地址
 * @method self text(string $value) 头像文字
 * @method self icon(string $value) 头像图标
 * @method self fit(string $value) 图片缩放类型
 * @method self shape(string $value) 头像形状，支持circle、square、rounded
 * @method self size(string $value) 头像大小，支持default、large、small
 * @method self style($value) 自定义样式
 * @method self draggable(bool $value) 是否开启拖拽
 * @method self crossOrigin(string $value) 图片 CORS 属性
 * @method self alt(string $value) 图片无法显示时的替代文本
 * @method self onError(string $value) 图片加载失败的字符串
 * @method self gap(int $value) 字符类型距离左右两侧边界单位像素
 * @method self onEvent($value) 事件
 */
class Avatar extends Widget
{
    protected string $type = 'avatar';
}
