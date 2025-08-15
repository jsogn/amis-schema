<?php

declare(strict_types=1);

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Table2 表格
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/table2
 *
 * @method $this type(string $value) 指定为 table2 渲染器
 * @method $this title(string $value) 标题
 * @method $this source(string $value = '${items}') 数据源, 绑定当前环境变量
 * @method $this sticky(bool $value = false) 是否粘性头部
 * @method $this footer(string|array $value) 表格尾部
 * @method $this loading(bool $value) 表格是否加载中
 * @method $this columnsTogglable(string|bool $value = 'auto') 展示列显示开关, 自动即：列数量大于或等于 5 个时自动开启
 * @method $this placeholder(string|array $value = '暂无数据') 当没数据的时候的文字提示
 * @method $this rowSelection(array $value) 行相关配置
 * @method $this rowClassNameExpr(string $value) 行 CSS 类名，支持模版语法
 * @method $this expandable(bool|array $value) 展开行配置
 * @method $this lineHeight(string $value) 行高设置
 * @method $this footerClassName(string $value = 'Action.md-table-footer') 底部外层 CSS 类名
 * @method $this toolbarClassName(string $value = 'Action.md-table-toolbar') 工具栏 CSS 类名
 * @method $this columns(array $value) 用来设置列信息
 * @method $this combineNum(int $value) 自动合并单元格
 * @method $this itemActions(array $value) 悬浮行操作按钮组
 * @method $this itemCheckableOn(string $value) 配置当前行是否可勾选的条件，要用表达式
 * @method $this itemDraggableOn(string $value) 配置当前行是否可拖拽的条件，要用表达式
 * @method $this checkOnItemClick(bool $value = false) 点击数据行是否可以勾选当前行
 * @method $this rowClassName(string $value) 给行添加 CSS 类名
 * @method $this prefixRow(array $value) 顶部总结行
 * @method $this affixRow(array $value) 底部总结行
 * @method $this itemBadge(array $value) 行角标配置
 * @method $this autoFillHeight(bool|array $value) 内容区域自适应高度，可选择自适应、固定高度和最大高度
 * @method $this lazyRenderAfter(int $value = 100) 默认数据超过 100 条启动懒加载提升渲染性能，也可通过自定义该属性调整数值
 * @method $this bordered(bool $value) 是否有边框
 * @method $this scroll(array $value) 滚动设置
 * @method $this resizable(bool $value) 是否可调整列宽
 * @method $this draggable(bool $value) 是否可拖拽排序
 * @method $this headSummary(array $value) 顶部总结栏
 * @method $this footSummary(array $value) 底部总结栏
 * @method $this childrenColumnName(string $value) 指定树形结构的列名
 * @method $this indentSize(int $value) 树形结构缩进值
 * @method $this size(string $value = 'default') 表格尺寸
 * @method $this selectable(bool $value) 支持勾选
 * @method $this multiple(bool $value) 勾选 icon 是否为多选样式
 * @method $this maxKeepItemSelectionLength(int $value) 最大选择个数
 * @method $this primaryField(string $value) 主键字段
 * @method $this keyField(string $value) 主键字段
 * @method $this quickSaveApi(API|string|array $value) 快速保存接口
 * @method $this quickSaveItemApi(API|string|array $value) 快速保存单项接口
 * @method $this canAccessSuperData(bool $value) 是否可以访问父级数据
 * @method $this onEvent(array $value) 事件
 */
class Table2 extends Widget
{
    protected string $type = 'table2';
}
