<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * ConditionBuilder 输入设置
 * 
 * @method $this type(string $value) 输入类型: 'text'|'number'|'boolean'|'date'|'time'|'datetime'|'select'
 * @method $this step(int $value) 数字输入的步长
 * @method $this min(int $value) 最小值
 * @method $this max(int $value) 最大值
 * @method $this precision(int $value) 精度
 * @method $this format(string $value) 显示格式
 * @method $this inputFormat(string $value) 输入格式
 * @method $this timeFormat(string $value) 时间格式
 * @method $this options(array $value) 选项列表
 * @method $this multiple(bool $value) 是否支持多选
 * @method $this trueLabel(string $value) boolean类型true值的标签
 * @method $this falseLabel(string $value) boolean类型false值的标签
 * @method $this defaultValue(mixed $value) 默认值
 */
class ConditionBuilderInputSettings extends Schema
{

}