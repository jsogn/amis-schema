<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * @method $this matchFunc(string $matchFunc) 自定义匹配函数, 默认模糊匹配导航对象中的label, title 和 key 字段
 * @method $this className(string $className = '') 搜索框外层 CSS 类名
 * @method $this placeholder(string $placeholder = false) 搜索框占位符
 * @method $this mini(bool $mini = false) 是否为 mini 模式
 * @method $this enhance(bool $enhance = false) 是否为增强样式
 * @method $this clearable(bool $clearable = false) 是否开启搜索
 * @method $this searchImediately(bool $searchImediately = false) 是否立即搜索
 *
 * @property string $matchFunc 自定义匹配函数, 默认模糊匹配导航对象中的label, title 和 key 字段
 * @property string $className 搜索框外层 CSS 类名
 * @property string $placeholder 搜索框占位符
 * @property bool $mini 是否为 mini 模式
 * @property bool $enhance 是否为增强样式
 * @property bool $clearable 是否开启搜索
 * @property bool $searchImediately 是否立即搜索
 */
class NavSearchConfig extends Schema
{

}