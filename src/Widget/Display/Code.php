<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Code 代码高亮
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/code
 *
 * @method $this type(string $value = 'code') 指定为 code 渲染器，默认 'code'
 * @method $this value(string $value = '') 显示的代码内容，默认 ''
 * @method $this name(string $value = '') 在其他组件中，时，用作变量映射，默认 ''
 * @method $this language(string $value = 'plaintext') 所使用的高亮语言，默认 'plaintext'
 * @method $this tabSize(int $value = 4) 默认 tab 大小，默认 4
 * @method $this editorTheme(string $value = 'vs') 主题，还有 'vs-dark'，默认 'vs'
 * @method $this wordWrap(bool $value = true) 是否折行，默认 true
 * @method $this maxHeight(string|int $value = '') 最大高度，超出滚动，默认 ''
 * @method $this customLang(array|\AmisSchema\Definition\CodeCustomLang $value) Code 代码高亮自定义语言配置
 */
class Code extends Widget
{
    protected string $type = 'code';
}
