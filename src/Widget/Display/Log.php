<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Log 实时日志
 * 
 * 用于实时显示日志或程序输出结果
 *
 * @method self type(string $type) 指定为 Log 渲染器
 * @method self height(int $height) 展示区域高度，默认为 500
 * @method self className(string $className) 外层 CSS 类名
 * @method self autoScroll(bool $autoScroll) 是否自动滚动，默认为 true
 * @method self disableColor(bool $disableColor) 是否禁用 ansi 颜色支持，默认为 false
 * @method self placeholder(string $placeholder) 加载中的文字
 * @method self encoding(string $encoding) 返回内容的字符编码，默认为 "utf-8"
 * @method self source(string|array $source) 接口配置
 * @method self credentials(string $credentials) fetch 的 credentials 设置，默认为 "include"
 * @method self rowHeight(int $rowHeight) 设置每行高度，将会开启虚拟渲染
 * @method self maxLength(int $maxLength) 最大显示行数
 * @method self operation(array $operation) 可选日志操作：['stop','restart','clear','showLineNumber','filter']
 */
class Log extends Widget
{
    protected string $type = 'log';
}
