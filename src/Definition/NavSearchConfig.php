<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * @method $this matchFunc(string $value) 自定义匹配函数, 默认模糊匹配导航对象中的label, title 和 key 字段
 * @method $this className(string $value) 搜索框外层 CSS 类名
 * @method $this placeholder(string $value) 搜索框占位符
 * @method $this mini(bool $value) 是否为 mini 模式
 * @method $this enhance(bool $value) 是否为增强样式
 * @method $this clearable(bool $value) 是否开启搜索
 * @method $this searchImediately(bool $value) 是否立即搜索
 */
class NavSearchConfig extends Schema
{

}