<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Trait;

/**
 * @method $this value(string $value) 设置默认值，支持时间戳、日期字符串或相对值（如 "+1days"）
 * @method $this valueFormat(string $value = 'X') 设置日期选择器值格式，更多格式类型请参考 moment 文档（3.4.0 版本后支持）
 * @method $this displayFormat(string $value) 设置日期选择器显示格式，即时间戳格式，更多格式类型请参考 moment 文档（3.4.0 版本后支持）
 * @method $this closeOnSelect(bool $value = false) 设置点选日期后，是否马上关闭选择框，默认为 false
 * @method $this minDate(string $value) 设置限制最小日期
 * @method $this maxDate(string $value) 设置限制最大日期
 * @method $this utc(bool $value = false) 设置保存 utc 值，默认为 false
 * @method $this clearable(bool $value = true) 设置是否可清除，默认为 true
 * @method $this embed(bool $value = false) 设置是否内联模式，默认为 false
 * @method $this disabledDate(string $value) 设置用字符函数来控制哪些天不可以被点选
 * @method $this popOverContainerSelector(string $value) 设置弹层挂载位置选择器，会通过querySelector获取（6.4.0）
 * @method $this isEndDate(bool $value = false) 设置如果配置为 true，会自动默认为 23:59:59 秒，默认为 false
 *
 * @phpstan-type timeConstraintsItem array{min: int, max: int, step: int}
 */
trait InputTimeTrait
{
    /**
     * 设置日期快捷键，字符串格式为预设值，对象格式支持写表达式（3.1.0版本后支持表达式）
     * @param string|string[]|array<array{
     *     label: string,
     *     date: string,
     * }> $value
     */
    public function shortcuts(array|string $value): self
    {
        return $this->__call(__METHOD__, $value);
    }

    /**
     * 设置时间输入范围限制
     * @param bool|array{
     *     hours: timeConstraintsItem,
     *     minutes: timeConstraintsItem,
     *     seconds: timeConstraintsItem,
     *     milliseconds: timeConstraintsItem
     * } $value
     */
    public function timeConstraints(array|bool $value = true): self
    {
        return $this->__call(__METHOD__, $value);
    }
}