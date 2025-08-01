<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Chart 图表
 *
 * @method $this type(string $value = 'chart') 指定为 chart 渲染器，默认 'chart'
 * @method $this body(array $value = []) 内容容器，默认 []
 * @method $this api(API|string|array $value = '') 配置项接口地址，默认 ''
 * @method $this source(string $value = '') 通过数据映射获取数据链中变量值作为配置，默认 ''
 * @method $this initFetch(bool $value = true) 组件初始化时，是否请求接口，默认 true
 * @method $this interval(int $value = 0) 刷新时间(最小 1000)，默认 0（不刷新）
 * @method $this config(array|string $value = []) 设置 echarts 的配置项，默认 []
 * @method $this width(string $value = '') 设置根元素的宽度，默认 ''
 * @method $this height(string $value = '') 设置根元素的高度，默认 ''
 * @method $this replaceChartOption(bool $value = false) 每次更新是完全覆盖配置项还是追加，默认 false
 * @method $this trackExpression(string $value = '') 当这个表达式的值有变化时更新图表，默认 ''
 * @method $this dataFilter(string $value = '') 自定义 echart config 转换，默认 ''
 * @method $this mapURL(API|string|array $value = '') 地图 geo json 地址，默认 ''
 * @method $this mapName(string $value = '') 地图名称，默认 ''
 * @method $this loadBaiduMap(bool $value = false) 加载百度地图，默认 false
 * @method $this clickAction(array $value = []) 点击行为，默认 []
 */
class Chart extends Widget
{
    protected string $type = 'chart';
}
