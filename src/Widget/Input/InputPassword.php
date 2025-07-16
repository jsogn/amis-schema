<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputPassword 密码输入框组件
 * 
 * 用于输入密码，支持密码强度验证等功能
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-password
 *
 * @method $this clearable(bool $value) 设置是否可清除
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 * @method $this minLength(int $value) 设置限制最小字数
 * @method $this maxLength(int $value) 设置限制最大字数
 * @method $this showCounter(bool $value) 设置是否显示计数器
 * @method $this revealPassword(bool $value) 设置是否显示密码切换按钮
 */
class InputPassword extends Widget
{
    protected string $type = 'input-password';
}
