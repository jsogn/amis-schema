<?php

declare(strict_types=1);

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Table2 表格
 *
 * @method self type(string $value) 指定为 table2 渲染器
 * @method self title(string $value) 标题
 * @method self source(string $value = '${items}') 数据源, 绑定当前环境变量
 * @method self sticky(bool $value = false) 是否粘性头部
 * @method self footer(string|array $value) 表格尾部
 * @method self loading(bool $value) 表格是否加载中
 * @method self columnsTogglable(string|bool $value = 'auto') 展示列显示开关, 自动即：列数量大于或等于 5 个时自动开启
 * @method self placeholder(string|array $value = '暂无数据') 当没数据的时候的文字提示
 * @method self rowSelection(array $value) 行相关配置
 * @method self rowClassNameExpr(string $value) 行 CSS 类名，支持模版语法
 * @method self expandable(bool|array $value) 展开行配置
 * @method self lineHeight(string $value) 行高设置
 * @method self footerClassName(string $value = 'Action.md-table-footer') 底部外层 CSS 类名
 * @method self toolbarClassName(string $value = 'Action.md-table-toolbar') 工具栏 CSS 类名
 * @method self columns(array $value) 用来设置列信息
 * @method self combineNum(int $value) 自动合并单元格
 * @method self itemActions(array $value) 悬浮行操作按钮组
 * @method self itemCheckableOn(string $value) 配置当前行是否可勾选的条件，要用表达式
 * @method self itemDraggableOn(string $value) 配置当前行是否可拖拽的条件，要用表达式
 * @method self checkOnItemClick(bool $value = false) 点击数据行是否可以勾选当前行
 * @method self rowClassName(string $value) 给行添加 CSS 类名
 * @method self prefixRow(array $value) 顶部总结行
 * @method self affixRow(array $value) 底部总结行
 * @method self itemBadge(array $value) 行角标配置
 * @method self autoFillHeight(bool|array $value) 内容区域自适应高度，可选择自适应、固定高度和最大高度
 * @method self lazyRenderAfter(int $value = 100) 默认数据超过 100 条启动懒加载提升渲染性能，也可通过自定义该属性调整数值
 * @method self bordered(bool $value) 是否有边框
 * @method self scroll(array $value) 滚动设置
 * @method self resizable(bool $value) 是否可调整列宽
 * @method self draggable(bool $value) 是否可拖拽排序
 * @method self headSummary(array $value) 顶部总结栏
 * @method self footSummary(array $value) 底部总结栏
 * @method self childrenColumnName(string $value) 指定树形结构的列名
 * @method self indentSize(int $value) 树形结构缩进值
 * @method self size(string $value = 'default') 表格尺寸
 * @method self selectable(bool $value) 支持勾选
 * @method self multiple(bool $value) 勾选 icon 是否为多选样式
 * @method self maxKeepItemSelectionLength(int $value) 最大选择个数
 * @method self primaryField(string $value) 主键字段
 * @method self keyField(string $value) 主键字段
 * @method self quickSaveApi(API|string|array $value) 快速保存接口
 * @method self quickSaveItemApi(API|string|array $value) 快速保存单项接口
 * @method self canAccessSuperData(bool $value) 是否可以访问父级数据
 * @method self onEvent(array $value) 事件
 */
class Table2 extends Widget
{
    protected string $type = 'table2';
}
