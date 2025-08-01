<?php

declare(strict_types=1);

namespace AmisSchema\Widget\Display;

use AmisSchema\Widget\Widget;

/**
 * Table View 表格展现
 *
 * @method $this type(string $value) 指定为 table-view 渲染器
 * @method $this width(int|string $value = '100%') 表格宽度
 * @method $this padding(int|string $value = 'var(--TableCell-paddingY) var(--TableCell-paddingX)') 单元格默认内间距
 * @method $this border(bool $value = true) 是否显示边框
 * @method $this borderColor(string $value = 'var(--borderColor)') 边框颜色
 * @method $this trs(array $value) 行设置
 * @method $this caption(string $value) 表格标题文本
 * @method $this captionSide(string $value) 标题显示位置
 * @method $this cols(array $value) 列设置项
 * @method $this className(string $value) 外层 CSS 类名
 * @method $this id(string $value) 组件唯一 id
 * @method $this onEvent(array $value) 事件
 * @method $this static(bool $value) 是否静态展示
 * @method $this staticOn(string $value) 是否静态展示的条件
 * @method $this staticPlaceholder(string $value) 静态展示空值占位
 * @method $this staticClassName(string $value) 静态展示类名
 * @method $this staticLabelClassName(string $value) 静态展示标签类名
 * @method $this staticInputClassName(string $value) 静态展示表单项类名
 * @method $this staticSchema(array $value) 自定义静态展示 schema
 * @method $this visible(bool $value = true) 是否显示
 * @method $this visibleOn(string $value) 是否显示表达式
 * @method $this hidden(bool $value = false) 是否隐藏
 * @method $this hiddenOn(string $value) 是否隐藏表达式
 */
class TableView extends Widget
{
    protected string $type = 'table-view';
}
