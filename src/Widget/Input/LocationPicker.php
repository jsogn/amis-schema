<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * LocationPicker 地理位置选择器组件
 * 
 * 地理位置选择器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/location-picker
 *
 * @method $this vendor(string $value) 设置地图厂商，目前支持 gaode、baidu、tenxun
 * @method $this ak(string $value) 设置地图厂商的 ak
 * @method $this clearable(bool $value) 设置输入框是否可清空
 * @method $this placeholder(string $value) 设置输入框占位符
 * @method $this coordinatesType(string $value) 设置坐标格式，支持 bd09、gcj02、wgs84
 * @method $this onlySelectLeaf(bool $value) 设置只允许选择叶子节点
 * @method $this autoSelectParent(bool $value) 设置自动选择父级节点
 */
class LocationPicker extends Widget
{
    protected string $type = 'location-picker';
}
