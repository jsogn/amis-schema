<?php
declare(strict_types=1);

namespace AmisSchema\Trait;

/**
 * @method $this minDuration(string $value) 设置限制最小跨度，如：2days
 * @method $this maxDuration(string $value) 设置限制最大跨度，如：1year
 * @method $this animation(bool $value = true) 设置是否启用游标动画（2.2.0），默认为 true
 * @method $this extraName(string $value) 设置是否存成两个字段（3.3.0）
 * @method $this transform(string $value) 设置日期数据处理函数，用来处理选择日期之后的的值，返回值为 Moment对象（3.5.0）
 */
trait InputTimeRangeTrait
{
    use InputTimeTrait;

    /**
     * 日期范围快捷键（3.1.0版本后支持表达式）
     * @param string|string[]|array<array{
     *     label: string,
     *     startDate: string,
     *     endDate: string,
     * }> $value
     * @return self
     */
    public function shortcuts(array|string $value = 'yesterday,7daysago,prevweek,thismonth,prevmonth,prevquarter'): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}