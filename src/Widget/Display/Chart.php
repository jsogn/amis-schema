<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Chart 图表
 *
 * @method self type(string $value) 指定为 chart 渲染器
 * @method self className(string $value) 外层 Dom 的类名
 * @method self body($value) 内容容器
 * @method self api($value) 配置项接口地址
 * @method self source($value) 通过数据映射获取数据链中变量值作为配置
 * @method self initFetch(bool $value) 组件初始化时，是否请求接口
 * @method self interval(int $value) 刷新时间(最小 1000)
 * @method self config($value) 设置 echarts 的配置项
 * @method self style($value) 设置根元素的 style
 * @method self width(string $value) 设置根元素的宽度
 * @method self height(string $value) 设置根元素的高度
 * @method self replaceChartOption(bool $value) 每次更新是完全覆盖配置项还是追加
 * @method self trackExpression(string $value) 当这个表达式的值有变化时更新图表
 * @method self dataFilter(string $value) 自定义 echart config 转换
 * @method self mapURL($value) 地图 geo json 地址
 * @method self mapName(string $value) 地图名称
 * @method self loadBaiduMap(bool $value) 加载百度地图
 * @method self clickAction($value) 点击行为
 * @method self onEvent($value) 事件
 */
class Chart extends Widget
{
    protected string $type = 'chart';
}
