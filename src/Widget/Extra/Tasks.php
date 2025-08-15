<?php

declare(strict_types=1);

namespace AmisSchema\Widget\Extra;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Tasks 任务操作集合
 *
 * 任务操作集合，类似于 orp 上线
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/tasks
 *
 * @method $this tableClassName(string $value = '') table Dom 的类名
 * @method $this checkApi(string|array|API $value = null) 返回任务列表，返回的数据请参考 items
 * @method $this submitApi(string|array|API $value = null) 提交任务使用的 API
 * @method $this reSubmitApi(string|array|API $value = null) 如果任务失败，且可以重试，提交的时候会使用此 API
 * @method $this interval(int $value = 3000) 当有任务进行中，会每隔一段时间再次检测，时间间隔默认 3s
 * @method $this taskNameLabel(string $value = '任务名称') 任务名称列说明
 * @method $this operationLabel(string $value = '操作') 操作列说明
 * @method $this statusLabel(string $value = '状态') 状态列说明
 * @method $this remarkLabel(string $value = '备注') 备注列说明
 * @method $this btnText(string $value = '上线') 操作按钮文字
 * @method $this retryBtnText(string $value = '重试') 重试操作按钮文字
 * @method $this btnClassName(string $value = 'btn-sm btn-default') 配置容器按钮 className
 * @method $this retryBtnClassName(string $value = 'btn-sm btn-danger') 配置容器重试按钮 className
 * @method $this statusLabelMap(array $value = ['label-warning', 'label-info', 'label-success', 'label-danger', 'label-default', 'label-danger']) 状态显示对应的类名配置
 * @method $this statusTextMap(array $value = ['未开始', '就绪', '进行中', '出错', '已完成', '出错']) 状态显示对应的文字显示配置
 * @method $this items(array|\AmisSchema\Definition\TasksItem[] $value) Tasks 任务项配置
 */
class Tasks extends Widget
{
    protected string $type = 'tasks';
}
