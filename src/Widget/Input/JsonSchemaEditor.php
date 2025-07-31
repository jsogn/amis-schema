<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Input\FormItem;

/**
 * JsonSchemaEditor 组件
 * 
 * JSON Schema 编辑器，用于可视化编辑 JSON Schema
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/json-schema-editor
 *
 * @method $this rootTypeMutable(bool $value = false) 设置顶级类型是否可配置
 * @method $this showRootInfo(bool $value = false) 设置是否显示顶级类型信息
 * @method $this disabledTypes(array $value) 设置用来禁用默认数据类型，默认类型有：string、number、interger、object、number、array、boolean、null
 * @method $this definitions(array $value) 设置用来配置预设类型
 * @method $this mini(bool $value) 设置用来开启迷你模式，适应于边栏面板，宽度较低的情况
 * @method $this placeholder(array $value) 设置属性输入控件的占位提示文本
 * @method $this enableAdvancedSetting(bool $value) 设置是否开启高级配置
 * @method $this advancedSettings(array $value) 设置高级配置面板的配置项
 */
class JsonSchemaEditor extends FormItem
{
    protected string $type = 'json-schema-editor';
}
