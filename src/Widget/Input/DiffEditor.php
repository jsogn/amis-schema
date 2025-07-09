<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * DiffEditor 对比编辑器组件
 * 
 * 基于 Monaco Editor 的 Diff 编辑器
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/diff-editor
 *
 * @method $this language(string $value) 设置编辑器高亮的语言，支持通过 ${xxx} 变量获取
 * @method $this diffValue(string $value) 设置左侧值
 * @method $this options(array $value) 设置monaco编辑器的其它配置
 */
class DiffEditor extends Widget
{
    protected string $type = 'diff-editor';
}
