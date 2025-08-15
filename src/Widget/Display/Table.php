<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * Table 表格
 *
 * @method $this type(string $value) 指定为 Table 渲染器
 * @method $this title(string $value) 标题
 * @method $this source(string $value = '${items}') 数据源, 绑定当前环境变量
 * @method $this deferApi(API $value) 当行数据中有 defer 属性时，用此接口进一步加载内容
 * @method $this affixHeader(bool $value = true) 是否固定表头
 * @method $this affixFooter(bool $value = false) 是否固定表格底部工具栏
 * @method $this columnsTogglable(string|bool $value = 'auto') 展示列显示开关, 自动即：列数量大于或等于 5 个时自动开启
 * @method $this placeholder(string $value = '暂无数据') 当没数据的时候的文字提示
 * @method $this className(string $value = 'panel-default') 外层 CSS 类名
 * @method $this showIndex(bool $value) 是否展示序号
 * @method $this tableClassName(string $value = 'table-db table-striped') 表格 CSS 类名
 * @method $this headerClassName(string $value = 'Action.md-table-header') 顶部外层 CSS 类名
 * @method $this footerClassName(string $value = 'Action.md-table-footer') 底部外层 CSS 类名
 * @method $this toolbarClassName(string $value = 'Action.md-table-toolbar') 工具栏 CSS 类名
 * @method $this columns(array $value) 用来设置列信息
 * @method $this combineNum(int $value) 自动合并单元格
 * @method $this combineFromIndex(int $value) 从第几列开始合并
 * @method $this itemActions(array $value) 悬浮行操作按钮组
 * @method $this itemCheckableOn(string $value) 配置当前行是否可勾选的条件
 * @method $this itemDraggableOn(string $value) 配置当前行是否可拖拽的条件
 * @method $this checkOnItemClick(bool $value = false) 点击数据行是否可以勾选当前行
 * @method $this rowClassName(string $value) 给行添加 CSS 类名
 * @method $this rowClassNameExpr(string $value) 通过模板给行添加 CSS 类名
 * @method $this prefixRow(array $value) 顶部总结行
 * @method $this affixRow(array $value) 底部总结行
 * @method $this itemBadge($value) 行角标配置
 * @method $this autoFillHeight(bool|array $value) 内容区域自适应高度，可选择自适应、固定高度和最大高度
 * @method $this resizable(bool $value = true) 列宽度是否支持调整
 * @method $this selectable(bool $value = false) 支持勾选
 * @method $this multiple(bool $value = false) 勾选 icon 是否为多选样式checkbox，默认为radio
 * @method $this lazyRenderAfter(int $value = 100) 用来控制从第几行开始懒渲染行，用来渲染大表格时有用
 * @method $this tableLayout(string $value = 'auto') 表格布局模式，当配置为 fixed 时，内容将不会撑开表格，自动换行
 * @method $this childrenColumnName(string $value) 指定树形结构的列名
 * @method $this expandConfig($value) 自定义展开配置
 * @method $this footable($value) 底部展示配置
 * @method $this itemAction($value) 单行点击操作
 * @method $this canAccessSuperData(bool $value) 是否可以访问父级数据
 * @method $this reUseRow(bool|string|array|API $value) 默认当 API 返回数据与当前一致时不会触发表格行重渲染，为 false 总会触发重渲染，尽量复用返回数据中 id 一致的对象
 * @method $this persistKey(string $value) 用于配置列排序、列显示的本地缓存所使用的 key
 * @method $this prefixRowClassName(string $value) 顶部总结行 CSS 类名
 * @method $this prefixRowClassNameExpr(string $value) 顶部总结行 CSS 类名表达式
 * @method $this affixRowClassName(string $value) 底部总结行 CSS 类名
 * @method $this affixRowClassNameExpr(string $value) 底部总结行 CSS 类名表达式
 */
class Table extends Widget
{
    protected string $type = 'table';
}
