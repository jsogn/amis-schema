<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputSignature 签名面板组件
 * 
 * 签名面板，用户可以在这里输入签名
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-signature
 *
 * @method $this width(int $value) 设置组件宽度，默认占满父容器
 * @method $this height(int $value) 设置组件高度，默认 200
 * @method $this color(string $value) 设置手写字体颜色
 * @method $this bgColor(string $value) 设置背景颜色
 * @method $this clearBtnLabel(string $value) 设置清空按钮名称
 * @method $this undoBtnLabel(string $value) 设置撤销按钮名称
 * @method $this confirmBtnLabel(string $value) 设置确认按钮名称
 * @method $this clearBtnIcon(string $value) 设置清空按钮图标
 * @method $this undoBtnIcon(string $value) 设置撤销按钮图标
 * @method $this confirmBtnIcon(string $value) 设置确认按钮图标
 * @method $this embedMode(bool $value) 设置内嵌模式，也就是说不需要确认便能实时提交，这个模式下不会有确认和撤销按钮
 */
class InputSignature extends Widget
{
    protected string $type = 'input-signature';
}
