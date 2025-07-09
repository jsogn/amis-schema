<?php

namespace AmisSchema\Widget\Function;

use AmisSchema\Widget\Widget;

/**
 * Tasks 任务操作集合
 * 
 * 任务操作集合组件
 *
 * @method self type(string $type) 指定为 Tasks 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self items(array $items) 任务项配置
 * @method self checkApi(string|array $checkApi) 检查任务状态的API
 * @method self submitApi(string|array $submitApi) 提交任务的API
 * @method self reSubmitApi(string|array $reSubmitApi) 重新提交任务的API
 * @method self interval(int $interval) 轮询间隔，默认为3000毫秒
 * @method self taskNameLabel(string $taskNameLabel) 任务名称标签
 * @method self operationLabel(string $operationLabel) 操作标签
 * @method self statusLabel(string $statusLabel) 状态标签
 * @method self remarkLabel(string $remarkLabel) 备注标签
 * @method self btnText(string $btnText) 操作按钮文字
 * @method self retryBtnText(string $retryBtnText) 重试按钮文字
 * @method self btnClassName(string $btnClassName) 操作按钮CSS类名
 * @method self retryBtnClassName(string $retryBtnClassName) 重试按钮CSS类名
 * @method self statusLabelMap(array $statusLabelMap) 状态显示对应的类名映射
 * @method self statusTextMap(array $statusTextMap) 状态显示对应的文字映射
 * @method self initialStatusCode(int $initialStatusCode) 初始状态码
 * @method self readyStatusCode(int $readyStatusCode) 就绪状态码
 * @method self loadingStatusCode(int $loadingStatusCode) 进行中状态码
 * @method self canRetryStatusCode(int $canRetryStatusCode) 可重试状态码
 * @method self finishStatusCode(int $finishStatusCode) 完成状态码
 * @method self errorStatusCode(int $errorStatusCode) 错误状态码
 */
class Tasks extends Widget
{
    protected string $type = 'tasks';
}
