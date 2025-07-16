<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Audio 音频
 *
 * @method $this type(string $value) 指定为 audio 渲染器
 * @method $this className(string $value) 外层CSS类名
 * @method $this src(string $value) 音频地址
 * @method $this loop(bool $value) 是否循环播放
 * @method $this autoPlay(bool $value) 是否自动播放
 * @method $this rates(array $value) 倍数，格式为数组，如：[1.0, 1.5, 2.0]
 * @method $this controls(array $value) 控制按钮的显示隐藏
 */
class Audio extends Widget
{
    protected string $type = 'audio';
}
