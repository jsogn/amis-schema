<?php

namespace AmisSchema\Widget\Extra;

use AmisSchema\Widget\Widget;

/**
 * Avatar 头像
 * 
 * 用来显示用户头像，支持图片、文字和图标三种显示方式
 *
 * @method $this src(string $value = '') 图片地址，支持变量
 * @method $this defaultAvatar(string $value = '') 占位图地址
 * @method $this text(string $value = '') 文字内容，支持变量
 * @method $this icon(string $value = 'fa fa-user') 图标，默认为用户图标
 * @method $this fit(string $value = 'cover') 图片拉伸方式：contain、cover、fill、none、scale-down
 * @method $this shape(string $value = 'circle') 头像形状：circle-圆形、square-正方形、rounded-圆角
 * @method $this size(string|int $value = 'default') 头像大小：default(48)、normal(40)、small(32) 或数字
 * @method $this gap(int $value = 4) 控制字符类型距离左右两侧边界单位像素
 * @method $this alt(string $value = '') 图像无法显示时的替代文本
 * @method $this draggable(bool $value = false) 图片是否允许拖动
 * @method $this crossOrigin(string $value = '') 图片的 CORS 属性设置：anonymous、use-credentials
 * @method $this onError(string $value = '') 图片加载失败的处理函数，返回 true 则进行 text/icon 置换
 * @method $this style(array $value = []) 自定义样式，可控制背景及文字颜色
 * 
 * @version 6.1.0 支持事件监听功能
 */
class Avatar extends Widget
{
    protected string $type = 'avatar';
}
