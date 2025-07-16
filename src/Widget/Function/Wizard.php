<?php

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Wizard 向导
 * 
 * 分步向导组件
 *
 * @method self type(string $type) 指定为 Wizard 渲染器
 * @method self className(string $className) 外层 CSS 类名
 * @method self steps(array $steps) 步骤配置
 * @method self mode(string $mode) 展示模式，可选值：horizontal、vertical
 * @method self api(string|array $api) 保存接口
 * @method self initApi(string|array $initApi) 初始化数据接口
 * @method self target(string $target) 指定目标组件
 * @method self redirect(string $redirect) 完成后重定向地址
 * @method self reload(string $reload) 完成后刷新目标
 * @method self affixFooter(bool $affixFooter) 固定底部操作栏
 * @method self readOnly(bool $readOnly) 是否只读
 * @method self actionPrevLabel(string $actionPrevLabel) 上一步按钮文字
 * @method self actionNextLabel(string $actionNextLabel) 下一步按钮文字
 * @method self actionNextSaveLabel(string $actionNextSaveLabel) 保存并下一步按钮文字
 * @method self actionFinishLabel(string $actionFinishLabel) 完成按钮文字
 * @method self bulkSubmit(bool $bulkSubmit) 是否合并提交
 * @method self startStep(string|int $startStep) 起始步骤
 */
class Wizard extends Widget
{
    protected string $type = 'wizard';
}
