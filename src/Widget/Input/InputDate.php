<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

/**
 * InputDate 日期选择器
 *
 * 日期选择器，支持年、月、日选择，支持多种显示格式和值格式
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-date
 *
 * @method $this value(string $value) 设置默认值，支持时间戳、日期字符串或相对值（如 "+1days"）
 * @method $this valueFormat(string $value = 'X') 设置日期选择器值格式，更多格式类型请参考 moment 文档（3.4.0 版本后支持）
 * @method $this displayFormat(string $value = 'YYYY-MM-DD') 设置日期选择器显示格式，即时间戳格式，更多格式类型请参考 moment 文档（3.4.0 版本后支持），默认为 "YYYY-MM-DD"
 * @method $this closeOnSelect(bool $value = false) 设置点选日期后，是否马上关闭选择框，默认为 false
 * @method $this minDate(string $value) 设置限制最小日期
 * @method $this maxDate(string $value) 设置限制最大日期
 * @method $this utc(bool $value = false) 设置保存 utc 值，默认为 false
 * @method $this clearable(bool $value = true) 设置是否可清除，默认为 true
 * @method $this embed(bool $value = false) 设置是否内联模式，默认为 false
 * @method $this disabledDate(string $value) 设置用字符函数来控制哪些天不可以被点选
 * @method $this popOverContainerSelector(string $value) 设置弹层挂载位置选择器，会通过querySelector获取（6.4.0）
 */
class InputDate extends FormItem
{
    protected string $type = 'input-date';

    /**
     * 设置日期快捷键，字符串格式为预设值，对象格式支持写表达式（3.1.0版本后支持表达式）
     * @param string|string[]|array<array{
     *     label: string,
     *     date: string,
     * }> $value
     * @return self
     */
    public function shortcuts(array|string $value): self
    {
        return $this->__call(__METHOD__, $value);
    }
}
