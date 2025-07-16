<?php

namespace Jiangwang\AmisSchema\Widget\Display;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Table 表格
 *
 * @method self type(string $value) 指定为 Table 渲染器
 * @method self title(string $value) 标题
 * @method self source(string $value) 数据源, 绑定当前环境变量
 * @method self deferApi($value) 当行数据中有 defer 属性时，用此接口进一步加载内容
 * @method self affixHeader(bool $value) 是否固定表头
 * @method self affixFooter(bool $value) 是否固定表格底部工具栏
 * @method self columnsTogglable($value) 展示列显示开关, 自动即：列数量大于或等于 5 个时自动开启
 * @method self placeholder($value) 当没数据的时候的文字提示
 * @method self className(string $value) 外层 CSS 类名
 * @method self showIndex(bool $value) 是否展示序号
 * @method self tableClassName(string $value) 表格 CSS 类名
 * @method self headerClassName(string $value) 顶部外层 CSS 类名
 * @method self footerClassName(string $value) 底部外层 CSS 类名
 * @method self toolbarClassName(string $value) 工具栏 CSS 类名
 * @method self columns(array $value) 用来设置列信息
 * @method self combineNum(int $value) 自动合并单元格
 * @method self combineFromIndex(int $value) 从第几列开始合并
 * @method self itemActions(array $value) 悬浮行操作按钮组
 * @method self itemCheckableOn(string $value) 配置当前行是否可勾选的条件
 * @method self itemDraggableOn(string $value) 配置当前行是否可拖拽的条件
 * @method self checkOnItemClick(bool $value) 点击数据行是否可以勾选当前行
 * @method self rowClassName(string $value) 给行添加 CSS 类名
 * @method self rowClassNameExpr(string $value) 通过模板给行添加 CSS 类名
 * @method self prefixRow(array $value) 顶部总结行
 * @method self affixRow(array $value) 底部总结行
 * @method self itemBadge($value) 行角标配置
 * @method self autoFillHeight($value) 内容区域自适应高度
 * @method self resizable(bool $value) 列宽度是否支持调整
 * @method self selectable(bool $value) 支持勾选
 * @method self multiple(bool $value) 勾选 icon 是否为多选样式
 * @method self lazyRenderAfter(int $value) 用来控制从第几行开始懒渲染行
 * @method self tableLayout(string $value) 表格布局模式 auto|fixed
 * @method self childrenColumnName(string $value) 指定树形结构的列名
 * @method self expandConfig($value) 自定义展开配置
 * @method self footable($value) 底部展示配置
 * @method self itemAction($value) 单行点击操作
 * @method self canAccessSuperData(bool $value) 是否可以访问父级数据
 * @method self onEvent($value) 事件
 */
class Table extends Widget
{
    protected string $type = 'table';
}
