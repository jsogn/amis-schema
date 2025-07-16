<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * Static 静态展示组件
 * 
 * 纯用来展现数据，可用来展示用户填写的某个表单项数据
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/static
 *
 * @method $this tpl(string $value) 设置模板
 * @method $this text(string $value) 设置文字模板
 * @method $this placeholder(string $value) 设置占位符
 * @method $this className(string $value) 设置表单最外层类名
 * @method $this inputClassName(string $value) 设置表单控制器类名
 * @method $this labelClassName(string $value) 设置label类名
 * @method $this name(string $value) 设置字段名
 * @method $this value(mixed $value) 设置字段值，函数签名如下：(value: any, name: string, data: any) => any
 * @method $this popOver(bool|array $value) 设置是否显示一个小图标，鼠标放上去的时候显示提示内容
 * @method $this quickEdit(bool|array $value) 设置在Table中调整宽度
 * @method $this copyable(bool|array $value) 设置是否可复制
 */
class StaticControl extends Widget
{
    protected string $type = 'static';
}
