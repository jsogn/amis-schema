<?php

namespace Slowlyo\AmisSchema\Widget\Display;

use Slowlyo\AmisSchema\Widget\Widget;

/**
 * CRUD 增删改查
 *
 * @method self type(string $value) 指定为 CRUD 渲染器
 * @method self mode(string $value) 展示模式 table|cards|list
 * @method self title(string $value) 可设置成空，当设置成空时，没有标题栏
 * @method self className(string $value) 表格外层 Dom 的类名
 * @method self api($value) CRUD 用来获取列表数据的 api
 * @method self deferApi($value) 当行数据中有 defer 属性时，用此接口进一步加载内容
 * @method self loadDataOnce(bool $value) 是否一次性加载所有数据（前端分页）
 * @method self loadDataOnceFetchOnFilter(bool $value) 在开启 loadDataOnce 时，filter 时是否去重新请求 api
 * @method self source(string $value) 数据映射接口返回某字段的值
 * @method self filter($value) 设置过滤器
 * @method self filterTogglable($value) 是否可显隐过滤器
 * @method self filterDefaultVisible(bool $value) 设置过滤器默认是否可见
 * @method self initFetch(bool $value) 是否初始化的时候拉取数据
 * @method self interval(int $value) 刷新时间(最低 1000)
 * @method self silentPolling(bool $value) 配置刷新时是否隐藏加载动画
 * @method self stopAutoRefreshWhen(string $value) 通过表达式来配置停止刷新的条件
 * @method self stopAutoRefreshWhenModalIsOpen(bool $value) 当有弹框时关闭自动刷新
 * @method self syncLocation(bool $value) 是否将过滤条件的参数同步到地址栏
 * @method self draggable(bool $value) 是否可通过拖拽排序
 * @method self resizable(bool $value) 是否可以调整列宽度
 * @method self itemDraggableOn(string $value) 用表达式来配置是否可拖拽排序
 * @method self saveOrderApi($value) 保存排序的 api
 * @method self quickSaveApi($value) 快速编辑后用来批量保存的 API
 * @method self quickSaveItemApi($value) 快速编辑配置成及时保存时使用的 API
 * @method self bulkActions(array $value) 批量操作列表
 * @method self messages($value) 覆盖消息提示
 * @method self primaryField(string $value) 设置 ID 字段名
 * @method self perPage(int $value) 设置一页显示多少条数据
 * @method self orderBy(string $value) 默认排序字段
 * @method self orderDir(string $value) 排序方向 asc|desc
 * @method self defaultParams($value) 设置默认 filter 默认参数
 * @method self pageField(string $value) 设置分页页码字段名
 * @method self perPageField(string $value) 设置分页一页显示的多少条数据的字段名
 * @method self perPageAvailable(array $value) 设置一页显示多少条数据下拉框可选条数
 * @method self orderField(string $value) 设置用来确定位置的字段名
 * @method self hideQuickSaveBtn(bool $value) 隐藏顶部快速保存提示
 * @method self autoJumpToTopOnPagerChange(bool $value) 当切分页的时候，是否自动跳顶部
 * @method self syncResponse2Query(bool $value) 将返回数据同步到过滤器上
 * @method self keepItemSelectionOnPageChange(bool $value) 保留条目选择
 * @method self labelTpl(string $value) 单条描述模板
 * @method self maxKeepItemSelectionLength(int $value) 最大勾选数
 * @method self maxItemSelectionLength(int $value) 当前页的最大勾选数
 * @method self headerToolbar(array $value) 顶部工具栏配置
 * @method self footerToolbar(array $value) 底部工具栏配置
 * @method self alwaysShowPagination(bool $value) 是否总是显示分页
 * @method self affixHeader(bool $value) 是否固定表头
 * @method self affixFooter(bool $value) 是否固定表格底部工具栏
 * @method self autoGenerateFilter($value) 是否开启查询区域
 * @method self resetPageAfterAjaxItemAction(bool $value) 单条数据 ajax 操作后是否重置页码为第一页
 * @method self autoFillHeight($value) 内容区域自适应高度
 * @method self canAccessSuperData(bool $value) 指定是否可以自动获取上层的数据
 * @method self matchFunc($value) 自定义匹配函数
 * @method self parsePrimitiveQuery($value) 是否开启 Query 信息转换
 * @method self columns(array $value) 列配置（table 模式下）
 * @method self card($value) 卡片配置（cards 模式下）
 * @method self listItem($value) 列表项配置（list 模式下）
 * @method self itemCheckableOn(string $value) 配置当前行是否可勾选的条件
 * @method self checkOnItemClick(bool $value) 点击数据行是否可以勾选当前行
 * @method self itemAction($value) 单行点击操作
 * @method self selectable(bool $value) 支持勾选
 * @method self multiple(bool $value) 勾选 icon 是否为多选样式
 * @method self onEvent($value) 事件
 */
class CRUD extends Widget
{
    protected string $type = 'crud';
}
