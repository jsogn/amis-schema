<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputVerificationCode 验证码输入组件
 * 
 * 验证码输入框，支持多种模式和自定义配置
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-verification-code
 *
 * @method $this length(int $value = 6) 设置验证码的长度，根据长度渲染对应个数的输入框
 * @method $this masked(bool $value = false) 设置是否是密码模式
 * @method $this separator(string $value) 设置分隔符，支持表达式, 表达式只可以访问 index、character 变量
 */
class InputVerificationCode extends FormItem
{
    protected string $type = 'input-verification-code';
}
