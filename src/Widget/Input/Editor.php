<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Editor 代码编辑器组件
 * 
 * 基于 Monaco Editor 的代码编辑器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/editor
 *
 * @method $this language(string $value) 设置编辑器高亮的语言，支持通过 ${xxx} 变量获取
 * @method $this size(string $value) 设置编辑器高度，取值可以是 md、lg、xl、xxl
 * @method $this allowFullscreen(bool $value) 设置是否显示全屏模式开关
 * @method $this placeholder(string $value) 设置占位符
 * @method $this options(array $value) 设置monaco编辑器的其它配置，比如 {"fontSize": 14}，请参考这里，不过无法设置 readOnly，只读模式需要使用 disabled: true
 */
class Editor extends Widget
{
    protected string $type = 'editor';
}
