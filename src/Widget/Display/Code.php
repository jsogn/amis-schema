<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Code 代码高亮
 *
 * @method self type(string $value) 指定为 code 渲染器
 * @method self className(string $value) 外层CSS类名
 * @method self value(string $value) 显示的代码内容
 * @method self name(string $value) 在其他组件中，时，用作变量映射
 * @method self language(string $value) 所使用的高亮语言，默认是plaintext
 * @method self tabSize(int $value) 默认tab大小
 * @method self editorTheme(string $value) 主题，还有 'vs-dark'
 * @method self wordWrap(bool $value) 是否折行
 * @method self onEvent($value) 事件
 */
class Code extends Widget
{
    protected string $type = 'code';
}
