<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * API 类型用于配置请求接口的格式，涉及请求方式、请求地址、请求数据体等等相关配置
 *
 * @link https://baidu.github.io/amis/zh-CN/docs/types/api
 *
 * @method $this method(string $value) 设置请求方式，支持：get、post、put、delete
 * @method $this url(string $value) 设置请求地址，支持模板字符串
 * @method $this data(array|string $value) 设置请求数据，对象或字符串，支持数据映射
 * @method $this dataType(string $value) 设置数据体格式，默认为 json，可配置 form 或 form-data
 * @method $this qsOptions(array|string $value) 设置 qs 参数配置，form/form-data 时有用
 * @method $this headers(array $value) 设置请求头
 * @method $this sendOn(string $value) 设置请求条件，表达式
 * @method $this cache(int $value) 设置接口缓存时间，整型数字
 * @method $this requestAdaptor(string $value) 设置发送适配器，字符串或函数
 * @method $this adaptor(string $value) 设置接收适配器，字符串或函数
 * @method $this replaceData(bool $value) 设置返回数据是否替换当前数据，默认为 false
 * @method $this responseType(string $value) 设置返回类型，如下载用 blob
 * @method $this autoRefresh(bool $value) 设置是否自动刷新接口
 * @method $this responseData(array $value) 配置返回数据，对返回结果做映射
 * @method $this trackExpression(string $value) 配置跟踪变量表达式
 * @method $this messages(array $value) 配置接口请求的提示信息，messages.success/failed
 */
class API extends Schema
{

}