<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * 配置单条信息
 * @method $this title(string $value) 标题
 * @method $this titleClassName(string $value) 标题样式类名
 * @method $this subTitle(string $value) 副标题
 * @method $this avatar(string $value) 头像
 * @method $this avatarClassName(string $value) 头像样式类名
 * @method $this desc(string $value) 描述
 * @method $this body(array $value) 内容区域
 * @method $this actions(array $value) 动作区域
 * @method $this actionsPosition(string $value) 动作区域位置，可选值：left、right
 */
class ListListItem extends Schema
{

}