<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * QRCode 二维码
 * 
 * 二维码生成组件
 *
 * @method self type(string $type) 指定为 QRCode 渲染器
 * @method self className(string $className) 外层 Dom 的类名
 * @method self qrcodeClassName(string $qrcodeClassName) 二维码的类名
 * @method self codeSize(int $codeSize) 二维码的宽高大小，默认为 128
 * @method self backgroundColor(string $backgroundColor) 二维码背景色，默认为 "#fff"
 * @method self foregroundColor(string $foregroundColor) 二维码前景色，默认为 "#000"
 * @method self level(string $level) 二维码复杂级别，有（'L' 'M' 'Q' 'H'）四种，默认为 "L"
 * @method self value(string $value) 扫描二维码后显示的文本，如果要显示某个页面请输入完整 url，支持使用模板，默认为 "https://www.baidu.com"
 * @method self imageSettings(array $imageSettings) QRCode 图片配置
 */
class QRCode extends Widget
{
    protected string $type = 'qr-code';
}
