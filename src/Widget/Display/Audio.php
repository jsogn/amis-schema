<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * Audio 音频
 *
 * @method self type(string $value) 指定为 audio 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self src(string $value) 音频地址
 * @method self loop(bool $value) 是否循环播放
 * @method self autoPlay(bool $value) 是否自动播放
 * @method self rates(array $value) 倍数，格式为数组，如：[1.0, 1.5, 2.0]
 * @method self controls(array $value) 控制按钮的显示隐藏
 * @method self onEvent($value) 事件
 */
class Audio extends Widget
{
    protected string $type = 'audio';
}
