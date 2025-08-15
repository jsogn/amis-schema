<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * Card 多媒体部内容设置
 * @method $this type(string $value) 'image'|'video'
 * @method $this url(string $value)
 * @method $this position(string $value) 'left'|'right'|'top'|'bottom'
 * @method $this className(string $value)
 * @method $this isLive(bool $value)
 * @method $this autoPlay(bool $value)
 * @method $this poster(string $value)
 */
class CardMedia extends Schema
{

}