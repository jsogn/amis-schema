<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * LocationPicker 地理位置
 *
 * 用于选择地理位置
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/location-picker
 *
 * @method $this vendor(string $vendor = 'baidu') 地图厂商，目前只实现了百度地图和高德地图
 * @method $this ak(string $ak) 百度/高德地图的 ak
 * @method $this clearable(bool $clearable = false) 输入框是否可清空
 * @method $this autoSelectCurrentLoc(bool $autoSelectCurrentLoc = false) 是否自动选中当前地理位置
 * @method $this onlySelectCurrentLoc(bool $onlySelectCurrentLoc = false) 是否限制只能选中当前地理位置，设置为 true 后，可用于充当定位组件
 * @method $this coordinatesType(string $coordinatesType = 'bd09') 坐标系类型，默认百度坐标，使用高德地图时应设置为'gcj02'， 高德地图不支持坐标转换
 * @method $this value(array|\AmisSchema\Definition\LocationPickerValue $value) LocationPicker 地理位置值配置
 * @method $this staticSchema(array|\AmisSchema\Definition\LocationPickerStaticSchema $value) 静态展示，内嵌模式时的额外配置
 */
class LocationPicker extends FormItem
{
    protected string $type = 'location-picker';
}
