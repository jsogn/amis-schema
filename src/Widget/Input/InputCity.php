<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputCity 城市选择器组件
 *
 * 城市选择器，方便输入城市，可以理解为自动配置了国内城市选项的 Select，支持到县级别
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-city
 *
 * @method $this allowCity(bool $value=true) 设置允许选择城市，默认为 true
 * @method $this allowDistrict(bool $value=true) 设置允许选择区域，默认为 true
 */
class InputCity extends Options
{
    protected string $type = 'input-city';
}
