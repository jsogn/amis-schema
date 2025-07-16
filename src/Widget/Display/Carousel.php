<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Carousel 轮播图
 *
 * @method self type(string $value) 指定为 carousel 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self options(array $value) 轮播面板数据
 * @method self itemSchema($value) 自定义schema来展示数据
 * @method self auto(bool $value) 是否自动轮播
 * @method self interval(int $value) 切换时间间隔，仅在auto为true时有效
 * @method self duration(int $value) 切换动画时长
 * @method self width(int $value) 宽度
 * @method self height(int $value) 高度
 * @method self controls(array $value) 显示箭头、底部圆点索引
 * @method self controlsTheme(string $value) 左右箭头、底部圆点索引颜色主题
 * @method self placeholder(string $value) 占位
 * @method self multiple($value) 多图展示
 * @method self alwaysShowArrow(bool $value) 是否一直显示箭头
 * @method self icons($value) 自定义箭头图标
 * @method self thumbMode(string $value) 图片默认缩放模式
 * @method self animation(string $value) 切换动画效果
 * @method self onEvent($value) 事件
 */
class Carousel extends Widget
{
    protected string $type = 'carousel';
}
