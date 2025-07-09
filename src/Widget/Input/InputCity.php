<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputCity 城市选择器组件
 * 
 * 城市选择器，可用于选择城市
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-city
 *
 * @method $this allowCity(bool $value) 设置允许选择城市，默认为 true
 * @method $this allowDistrict(bool $value) 设置允许选择区域，默认为 true
 * @method $this searchable(bool $value) 设置是否出搜索框，默认为 false
 * @method $this extractValue(bool $value) 设置是否抽取值，如果设置成 false 值格式会变成对象，包含 code、province、city 和 district 字段
 * @method $this joinValues(bool $value) 设置是否拼接值，默认为 true
 * @method $this delimiter(string $value) 设置拼接值时的分隔符，默认为英文逗号
 */
class InputCity extends Widget
{
    protected string $type = 'input-city';
}
