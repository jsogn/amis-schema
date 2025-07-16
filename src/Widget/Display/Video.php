<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Video 视频
 *
 * @method self type(string $value) 指定为 video 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self src(string $value) 视频地址
 * @method self isLive(bool $value) 是否为直播，视频为直播时需要添加 live 属性
 * @method self poster(string $value) 视频封面地址
 * @method self muted(bool $value) 是否静音
 * @method self autoPlay(bool $value) 是否自动播放
 * @method self rates(array $value) 倍数，格式为数组，如：[1.0, 1.5, 2.0]
 * @method self frames($value) 设置后，可以显示切帧按钮
 * @method self jumpFrame(bool $value) 是否显示跳帧按钮，需要frames配置
 * @method self aspectRatio(string $value) 视频比例，格式为数字，如：1.33
 * @method self onEvent($value) 事件
 */
class Video extends Widget
{
    protected string $type = 'video';
}
