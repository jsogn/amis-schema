<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputPassword 密码输入框组件
 * 
 * 密码输入框，用于输入密码
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-password
 *
 * @method $this revealPassword(bool $value = true) 是否展示密码显/隐按钮
 */
class InputPassword extends InputText
{
    protected string $type = 'input-password';
}
