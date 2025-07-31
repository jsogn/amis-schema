<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * InputSignature 签名面板组件
 * 
 * 签名面板，用户可以在这里输入签名
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-signature
 *
 * @method $this width(int $value) 设置组件宽度，最小 300
 * @method $this height(int $value) 设置组件高度，最小 160
 * @method $this color(string $value = '#000') 设置手写字体颜色
 * @method $this bgColor(string $value = '#EFEFEF') 设置面板背景颜色
 * @method $this clearBtnLabel(string $value = '清空') 设置清空按钮名称
 * @method $this undoBtnLabel(string $value = '撤销') 设置撤销按钮名称
 * @method $this confirmBtnLabel(string $value = '确认') 设置确认按钮名称
 * @method $this embed(bool $value) 设置是否内嵌
 * @method $this embedConfirmLabel(string $value = '确认') 设置内嵌容器确认按钮名称
 * @method $this ebmedCancelLabel(string $value = '取消') 设置内嵌容器取消按钮名称
 * @method $this embedBtnIcon(string $value) 设置内嵌按钮图标
 * @method $this embedBtnLabel(string $value = '点击签名') 设置内嵌按钮文案
 * @method $this uploadApi(API|array|string $value) 设置上传签名图片接口，仅在内嵌模式下生效
 */
class InputSignature extends FormItem
{
    protected string $type = 'input-signature';
}
