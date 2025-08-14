<?php

namespace AmisSchema\Widget\Extra;

use AmisSchema\Widget\Widget;

/**
 * Audio 音频
 * 
 * 音频播放组件，提供完整的音频播放控制功能
 *
 * @method $this src(string $value = '') 音频地址，支持各种音频格式
 * @method $this inline(bool $value = true) 是否是内联模式
 * @method $this loop(bool $value = false) 是否循环播放
 * @method $this autoPlay(bool $value = false) 是否自动播放
 * @method $this rates(array $value = []) 可配置音频播放倍速，如：[1.0, 1.5, 2.0]
 * @method $this controls(array $value = ['rates', 'play', 'time', 'process', 'volume']) 内部模块定制化，控制显示哪些功能模块
 */
class Audio extends Widget
{
    protected string $type = 'audio';
}
