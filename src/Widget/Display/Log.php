<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Log 实时日志
 *
 * 用于实时显示日志或程序输出结果
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/log
 *
 * @method $this type(string $value = 'log') 指定为 Log 渲染器，默认 'log'
 * @method $this height(int $value = 500) 展示区域高度，默认 500
 * @method $this autoScroll(bool $value = true) 是否自动滚动，默认 true
 * @method $this disableColor(bool $value = false) 是否禁用 ansi 颜色支持，默认 false
 * @method $this placeholder(string $value = '') 加载中的文字，默认 ''
 * @method $this encoding(string $value = 'utf-8') 返回内容的字符编码，默认 'utf-8'
 * @method $this source(string|array $value = '') 接口配置，支持变量（1.4.2+）和高级配置（1.6.1+），默认 ''
 * @method $this credentials(string $value = 'include') fetch 的 credentials 设置，默认 'include'
 * @method $this rowHeight(int $value = null) 设置每行高度，将会开启虚拟渲染（1.10.0+），默认 null
 * @method $this maxLength(int $value = null) 最大显示行数（1.10.0+），默认 null
 * @method $this operation(array $value = []) 可选日志操作：['stop','restart','clear','showLineNumber','filter']，默认 []
 */
class Log extends Widget
{
    protected string $type = 'log';
}
