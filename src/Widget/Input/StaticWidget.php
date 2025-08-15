<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\PopOver;

/**
 * Static 静态展示组件
 *
 * 用来在表单中，展示静态数据
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/static
 *
 * @method $this value(mixed $value) 设置显示的静态值
 * @method $this tpl(string $value) 设置如果想显示成其他文字，请设置此字段。支持模板语法如: $xxx
 * @method $this quickEdit(bool|array $value) 设置快速编辑，支持布尔值或配置对象
 * @method $this popOver(bool|array|PopOver $value) 设置弹出框配置
 * @method $this type(string $value = 'static') 支持通过配置type为static-xxx的形式，展示其他非表单项组件
 */
class StaticWidget extends FormItem
{
    protected string $type = 'static';
}
