<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * Editor 代码编辑器
 * 
 * 基于 Monaco Editor 的代码编辑器，用于实现代码编辑功能
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/editor
 *
 * @method $this language(string $value = 'javascript') 编辑器高亮的语言，默认为 'javascript'
 * @method $this allowFullscreen(bool $value = false) 是否显示全屏模式开关，默认为 false
 * @method $this options(array $value) monaco 编辑器的其它配置，比如是否显示行号等
 * @method $this editorDidMount(string $value) 编辑器挂载完成后的回调函数
 */
class Editor extends FormItem
{
    protected string $type = 'editor';
}
