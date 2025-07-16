<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * DiffEditor 对比编辑器
 *
 * 基于 Monaco Editor 的对比编辑器，用于显示和编辑代码差异
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/diff-editor
 *
 * @method $this language(string $value = 'javascript') 编辑器高亮的语言，默认为 'javascript'
 * @method $this diffValue(string $value) 左侧值，用于对比的基础内容
 * @method $this options(array $value) Monaco 编辑器的其它配置选项
 */
class DiffEditor extends FormItem
{
    protected string $type = 'diff-editor';
}
