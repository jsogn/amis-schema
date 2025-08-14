<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Video 视频
 * 
 * 视频播放组件，支持普通视频和直播流（flv、hls）播放
 *
 * @method $this src(string $value = '') 视频地址
 * @method $this isLive(bool $value = false) 是否为直播，支持 flv 和 hls 格式
 * @method $this videoType(string $value = '') 指定直播视频格式，可选：video/x-flv、application/x-mpegURL
 * @method $this poster(string $value = '') 视频封面地址
 * @method $this muted(bool $value = false) 是否静音
 * @method $this loop(bool $value = false) 是否循环播放
 * @method $this autoPlay(bool $value = false) 是否自动播放
 * @method $this rates(array $value = []) 播放速度倍数，格式为 [1.0, 1.5, 2.0]
 * @method $this frames(array $value = []) 视频帧配置，key 为时刻信息，value 为图片地址
 * @method $this jumpBufferDuration(int $value = 0) 点击帧时提前跳转的秒数
 * @method $this stopOnNextFrame(bool $value = false) 到达下一帧时是否自动停止
 */
class Video extends Widget
{
    protected string $type = 'video';
}
