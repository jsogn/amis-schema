<?php

declare(strict_types=1);

namespace AmisSchema\Widget\Extra;

use AmisSchema\Definition\API;
use AmisSchema\Schema;
use AmisSchema\Widget\Widget;

/**
 * Wizard 向导
 * 
 * 表单向导，能够配置多个步骤引导用户一步一步完成表单提交
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/wizard
 *
 * @method $this mode(string $value = 'horizontal') 展示模式：horizontal-水平、vertical-垂直
 * @method $this api(string|array|API $value = null) 最后一步保存的接口
 * @method $this initApi(string|array|API $value = null) 初始化数据接口
 * @method $this initFetch(bool $value = true) 初始是否拉取数据
 * @method $this initFetchOn(string $value = '') 初始是否拉取数据，通过表达式来配置
 * @method $this actionPrevLabel(string $value = '上一步') 上一步按钮文本
 * @method $this actionNextLabel(string $value = '下一步') 下一步按钮文本
 * @method $this actionNextSaveLabel(string $value = '保存并下一步') 保存并下一步按钮文本
 * @method $this actionFinishLabel(string $value = '完成') 完成按钮文本
 * @method $this actionClassName(string $value = 'btn-sm btn-default') 按钮 CSS 类名
 * @method $this reload(string $value = '') 操作完后刷新目标对象，填写目标组件的 name 值
 * @method $this redirect(string $value = '') 操作完后跳转
 * @method $this target(string $value = '') 可以把数据提交给别的组件而不是自己保存
 * @method $this steps(array $value = []) 数组，配置步骤信息
 * @method $this startStep(string|int $value = 1) 起始默认值，从第几步开始，支持模版
 * 
 * @version 3.5.0 支持在每个 step 中配置 actions 来自定义按钮
 */
class Wizard extends Widget
{
    protected string $type = 'wizard';
}
