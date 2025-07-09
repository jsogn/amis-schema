<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Definition\API;
use Jiangwang\AmisSchema\Definition\ServiceMessage;
use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Service 功能型容器
 *
 * 专门为展示组件而生，配置初始化接口，进行数据域的初始化，然后在内容容器中配置子组件，
 * 这些子组件通过数据链的方法，获取 Service 所拉取到的数据
 *
 * @link https://baidu.github.io/amis/zh-CN/components/service
 *
 * @method $this className(string $className) 外层 Dom 的类名
 * @method $this body(Widget[]|Widget|string $body) 内容容器
 * @method $this api(API|string $api) 初始化数据域接口地址
 * @method $this ws(string $ws) WebSocket 地址
 * @method $this dataProvider(string $dataProvider) 数据获取函数
 * @method $this initFetch(bool $initFetch) 是否默认拉取
 * @method $this schemaApi(API|string $schemaApi) 用来获取远程 Schema 接口地址
 * @method $this initFetchSchema(bool $initFetchSchema) 是否默认拉取 Schema
 * @method $this messages(ServiceMessage $messages) 消息提示覆写，默认消息读取的是接口返回的 toast 提示文字，但是在此可以覆写它
 * @method $this interval(int $interval) 轮询时间间隔，单位 ms(最低 1000)
 * @method $this silentPolling(bool $silentPolling) 配置轮询时是否显示加载动画，默认 false
 * @method $this stopAutoRefreshWhen(string $stopAutoRefreshWhen) 配置停止轮询的条件
 * @method $this showErrorMsg(bool $showErrorMsg) 是否以 Alert 的形式显示 api 接口响应的错误信息，默认 true
 */
class Service extends Widget
{
    protected string $type = 'service';
}