<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Contract\Arrayable;
use AmisSchema\Contract\Jsonable;
use AmisSchema\Schema;
use AmisSchema\Trait\Schemaable;

/**
 * API 类型用于配置请求接口的格式，涉及请求方式、请求地址、请求数据体等等相关配置
 *
 * @link https://baidu.github.io/amis/zh-CN/docs/types/api
 *
 * @method $this method(string $method) 设置请求方式，支持：get、post、put、delete
 * @method $this url(string $url) 设置请求地址，支持模板字符串
 * @method $this data(array|string $data) 设置请求数据，对象或字符串，支持数据映射
 * @method $this dataType(string $dataType) 设置数据体格式，默认为 json，可配置 form 或 form-data
 * @method $this qsOptions(array|string $qsOptions) 设置 qs 参数配置，form/form-data 时有用
 * @method $this headers(array $headers) 设置请求头
 * @method $this sendOn(string $sendOn) 设置请求条件，表达式
 * @method $this cache(int $cache) 设置接口缓存时间，整型数字
 * @method $this requestAdaptor(string $requestAdaptor) 设置发送适配器，字符串或函数
 * @method $this adaptor(string $adaptor) 设置接收适配器，字符串或函数
 * @method $this replaceData(bool $replaceData) 设置返回数据是否替换当前数据，默认为 false
 * @method $this responseType(string $responseType) 设置返回类型，如下载用 blob
 * @method $this autoRefresh(bool $autoRefresh) 设置是否自动刷新接口
 * @method $this responseData(array $responseData) 配置返回数据，对返回结果做映射
 * @method $this trackExpression(string $trackExpression) 配置跟踪变量表达式
 * @method $this messages(array $messages) 配置接口请求的提示信息，messages.success/failed
 *
 * @property string $method 请求方式 支持：get、post、put、delete
 * @property string $url 请求地址 模板字符串
 * @property array|string $data 请求数据 对象或字符串 支持数据映射
 * @property string $dataType 数据体格式 默认为 json，可配置 form 或 form-data
 * @property array|string $qsOptions qs参数配置，form/form-data时有用
 * @property array $headers 请求头
 * @property string $sendOn 请求条件 表达式
 * @property int $cache 接口缓存时间
 * @property string $requestAdaptor 发送适配器
 * @property string $adaptor 接收适配器
 * @property bool $replaceData 替换当前数据，默认为 false
 * @property string $responseType 返回类型，如下载用 blob
 * @property bool $autoRefresh 是否自动刷新
 * @property array $responseData 配置返回数据，对返回结果做映射
 * @property string $trackExpression 跟踪变量表达式
 * @property array $messages 提示信息，messages.success/failed
 */
class API extends Schema
{

}