<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Definition;

use Jiangwang\AmisSchema\Schema;

/**
 * 锚点导航链接项
 * @method $this title(string $title) 区域标题
 * @method $this href(string $href) 区域标识
 * @method $this body(mixed $body) 区域内容区，6.1.0及以上版本垂直方向支持配置子节点
 * @method $this className(string $className) 区域成员样式，默认值: "bg-white b-l b-r b-b wrapper-md"
 *
 * @property string $title 区域标题
 * @property string $href 区域标识
 * @property mixed $body 区域内容区，6.1.0及以上版本垂直方向支持配置子节点
 * @property string $className 区域成员样式，默认值: "bg-white b-l b-r b-b wrapper-md"
 */
class AnchorNavLink extends Schema
{

}
