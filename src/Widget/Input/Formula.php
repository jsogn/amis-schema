<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * Formula 公式
 *
 * 可以设置公式，将公式结果设置到指定表单项上
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/formula
 *
 * @method $this formula(string $formula) 应用的公式
 * @method $this condition(string $condition) 公式作用条件
 * @method $this initSet(bool $initSet = true) 初始化时是否设置
 * @method $this autoSet(bool $autoSet = true) 观察公式结果，如果计算结果有变化，则自动应用到变量上
 * @method $this id(string $id) 定义个名字，当某个按钮的目标指定为此值后，会触发一次公式应用。这个机制可以在 autoSet 为 false 时用来手动触发
 */
class Formula extends FormItem
{
    protected string $type = 'formula';
}
