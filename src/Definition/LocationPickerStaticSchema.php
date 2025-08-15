<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * 静态展示，内嵌模式时的额外配置
 * @method $this embed(bool $value)
 * @method $this showAddress(bool $value)
 * @method $this showGeoLoc(bool $value)
 * @method $this mapStyle(array $value)
 */
class LocationPickerStaticSchema extends Schema
{

}