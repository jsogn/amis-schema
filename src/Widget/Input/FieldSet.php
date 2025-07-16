<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * FieldSet 表单项集合
 *
 * 用于分组展示表单项的一种容器型组件，可以折叠
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/fieldset
 *
 * @method $this headingClassName(string $value) 标题 CSS 类名
 * @method $this bodyClassName(string $value) 内容区域 CSS 类名
 * @method $this title(string|array|Widget|Widget[] $value) 标题
 * @method $this body(array|FormItem[] $value) 表单项集合
 * @method $this collapsable(bool $value = false) 是否可折叠，默认为 false
 * @method $this collapsed(bool $value = false) 默认是否折叠，默认为 false
 * @method $this collapseTitle(string|array|Widget|Widget[] $value = '收起') 收起的标题，默认为 '收起'
 * @method $this titlePosition(string $value) 标题位置，支持 'top'、'bottom'
 */
class FieldSet extends FormItem
{
    protected string $type = 'fieldset';
}
