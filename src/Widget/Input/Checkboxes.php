<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

/**
 * Checkboxes 复选框组件
 *
 * 用于实现多选，通过 options 配置选项
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/checkboxes
 *
 * @method $this columnsCount(int|array $value) 设置选项按几列显示，默认为1，支持数组形式手动控制每行显示的列数
 * @method $this menuTpl(string $value) 设置支持自定义选项渲染
 * @method $this optionType(string $value = 'default') 设置按钮模式，支持 default、button，默认为 "default"
 * @method $this itemClassName(string $value) 设置选项样式类名
 */
class Checkboxes extends Options
{
    protected string $type = 'checkboxes';
}
