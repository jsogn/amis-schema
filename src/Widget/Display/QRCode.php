<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * QRCode 二维码
 * 
 * 二维码生成组件，根据 QR 码国际标准，二进制模式最多可存储 2953 字节的内容（1 中文汉字=2 字节）
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/qrcode
 *
 * @method $this qrcodeClassName(string $value = '') 二维码的类名
 * @method $this codeSize(int $value = 128) 二维码的宽高大小
 * @method $this backgroundColor(string $value = '#fff') 二维码背景色
 * @method $this foregroundColor(string $value = '#000') 二维码前景色
 * @method $this level(string $value = 'L') 二维码复杂级别，有（'L' 'M' 'Q' 'H'）四种，从左到右依次提升
 * @method $this value(string $value = 'https://www.baidu.com') 扫描二维码后显示的文本，支持使用模板变量
 * @method $this imageSettings(array|\AmisSchema\Definition\QRCodeImageSettings $value) QRCode 二维码图片设置
 */
class QRCode extends Widget
{
    protected string $type = 'qr-code';
}
