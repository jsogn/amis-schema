<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * QRCode 二维码
 * 
 * 二维码生成组件，根据 QR 码国际标准，二进制模式最多可存储 2953 字节的内容（1 中文汉字=2 字节）
 *
 * @method $this qrcodeClassName(string $value = '') 二维码的类名
 * @method $this codeSize(int $value = 128) 二维码的宽高大小
 * @method $this backgroundColor(string $value = '#fff') 二维码背景色
 * @method $this foregroundColor(string $value = '#000') 二维码前景色
 * @method $this level(string $value = 'L') 二维码复杂级别，有（'L' 'M' 'Q' 'H'）四种，从左到右依次提升
 * @method $this value(string $value = 'https://www.baidu.com') 扫描二维码后显示的文本，支持使用模板变量
 * 
 * @version 1.10.0 支持 imageSettings 图片嵌入功能
 * @version 3.6.0 支持下载二维码功能
 */
class QRCode extends Widget
{
    protected string $type = 'qr-code';

    /**
     * 设置二维码嵌入图片配置
     * 
     * @param array{
     *     src?: string,
     *     width?: int,
     *     height?: int,
     *     x?: int,
     *     y?: int,
     *     excavate?: bool
     * } $value 图片配置参数
     * @return $this
     * @since 1.10.0
     */
    public function imageSettings(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
