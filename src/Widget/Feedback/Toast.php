<?php

namespace AmisSchema\Widget\Feedback;

use AmisSchema\Widget\Widget;

/**
 * Toast 轻提示
 *
 * 轻量级的消息通知组件，用于显示简短的提示信息
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/toast
 *
 * @method $this position(string $value = 'top-center') 提示显示位置：top-right、top-center、top-left、bottom-center、bottom-left、bottom-right、center
 * @method $this closeButton(bool $value = false) 是否展示关闭按钮，移动端不展示
 * @method $this showIcon(bool $value = true) 是否展示图标
 * @method $this timeout(int $value = 5000) 持续时间，error类型为6000，移动端为3000
 * @method $this level(string $value = 'info') 展示图标类型：info、success、error、warning
 * @method $this title(string|Widget $value = '') 标题，支持 SchemaNode
 * @method $this body(string|Widget $value = '') 内容，支持 SchemaNode
 * @method $this allowHtml(bool $value = true) 是否会被当作 HTML 片段处理
 * @method $this items(array|\AmisSchema\Definition\ToastItem[] $value) Toast 轻提示项配置
 */
class Toast extends Widget
{
    protected string $type = 'toast';
}
