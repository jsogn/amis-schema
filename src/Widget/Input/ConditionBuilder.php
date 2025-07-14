<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Definition\API;

/**
 * ConditionBuilder 条件组合组件
 *
 * 用于设置复杂组合条件，支持添加条件，添加分组，设置组合方式，拖拽排序等功能
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/condition-builder
 *
 * @method $this fieldClassName(string $value) 设置输入字段的类名
 * @method $this source(string|API $value) 设置通过远程拉取配置项
 * @method $this embed(bool $value = true) 设置内嵌展示，默认为 true
 * @method $this title(string $value) 设置弹窗配置的顶部标题
 * @method $this fields(array $value) 设置字段配置
 * @method $this showANDOR(bool $value) 设置用于 simple 模式下显示切换按钮
 * @method $this showNot(bool $value) 设置是否显示「非」按钮
 * @method $this draggable(bool $value = true) 设置是否可拖拽，默认为 true
 * @method $this searchable(bool $value) 设置字段是否可搜索
 * @method $this selectMode(string $value = 'list') 设置组合条件左侧选项类型，可选值：list、tree、chained，默认为 "list"
 * @method $this addBtnVisibleOn(string $value) 设置表达式：控制按钮"添加条件"的显示。参数为depth、breadth，分别代表深度、长度。表达式需要返回boolean类型
 * @method $this addGroupBtnVisibleOn(string $value) 设置表达式：控制按钮"添加条件组"的显示。参数为depth、breadth，分别代表深度、长度。表达式需要返回boolean类型
 * @method $this formula(array $value) 设置字段输入控件变成公式编辑器
 * @method $this showIf(bool $value) 设置开启后条件中额外还能配置启动条件
 * @method $this formulaForIf(array $value) 设置给 showIF 表达式用的公式信息
 */
class ConditionBuilder extends FormItem
{
    protected string $type = 'condition-builder';

    /**
     * 设置开启公式编辑模式时的输入控件类型
     * @param array{
     *     type: 'text'|'number'|'boolean'|'date'|'time'|'datetime'|'select',
     *     step?: int,
     *     min?: int,
     *     max?: int,
     *     precision?: int,
     *     format?: string,
     *     inputFormat?: string,
     *     timeFormat?: string,
     *     options?: array<array{label: string, value: mixed}>,
     *     multiple?: bool,
     *     trueLabel?: string,
     *     falseLabel?: string,
     *     defaultValue?: mixed
     * } $value
     * @return self
     */
    public function inputSettings(array $value): self
    {
        return $this->__call(__METHOD__, $value);
    }
}
