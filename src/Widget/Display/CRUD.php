<?php

namespace AmisSchema\Widget\Display;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Input\Form;
use AmisSchema\Widget\Widget;

/**
 * CRUD 增删改查
 *
 * @method $this type(string $value = 'crud') 指定为 CRUD 渲染器，默认 'crud'
 * @method $this mode(string $value = 'table') 展示模式 'table'|'cards'|'list'，默认 'table'
 * @method $this title(string $value = '列表') 可设置成空，当设置成空时，没有标题栏，默认 '列表'
 * @method $this api(API|string $value) CRUD 用来获取列表数据的 api
 * @method $this deferApi(API|string $value) 当行数据中有 defer 属性时，用此接口进一步加载内容
 * @method $this loadDataOnce(bool $value = false) 是否一次性加载所有数据（前端分页），默认 false
 * @method $this loadDataOnceFetchOnFilter(bool $value = true) 在开启 loadDataOnce 时，filter 时是否去重新请求 api，默认 true
 * @method $this source(string $value = '') 数据映射接口返回某字段的值，默认 ''
 * @method $this filter(array|Form $value) 设置过滤器
 * @method $this filterTogglable(bool $value = false) 是否可显隐过滤器，默认 false
 * @method $this filterDefaultVisible(bool $value = true) 设置过滤器默认是否可见，默认 true
 * @method $this initFetch(bool $value = true) 是否初始化的时候拉取数据，默认 true
 * @method $this interval(int $value = 0) 刷新时间(最低 1000)，默认 0（不刷新）
 * @method $this silentPolling(bool $value = false) 配置刷新时是否隐藏加载动画，默认 false
 * @method $this stopAutoRefreshWhen(string $value = '') 通过表达式来配置停止刷新的条件，默认 ''
 * @method $this stopAutoRefreshWhenModalIsOpen(bool $value = true) 当有弹框时关闭自动刷新，默认 true
 * @method $this syncLocation(bool $value = true) 是否将过滤条件的参数同步到地址栏，默认 true
 * @method $this draggable(bool $value = false) 是否可通过拖拽排序，默认 false
 * @method $this resizable(bool $value = true) 是否可以调整列宽度，默认 true
 * @method $this itemDraggableOn(string $value = '') 用表达式来配置是否可拖拽排序，默认 ''
 * @method $this saveOrderApi(API|string $value) 保存排序的 api
 * @method $this quickSaveApi(API|string $value) 快速编辑后用来批量保存的 API
 * @method $this quickSaveItemApi(API|string $value) 快速编辑配置成及时保存时使用的 API
 * @method $this bulkActions(array $value = []) 批量操作列表，默认 []
 * @method $this primaryField(string $value = 'id') 设置 ID 字段名，默认 'id'
 * @method $this perPage(int $value = 10) 设置一页显示多少条数据，默认 10
 * @method $this orderBy(string $value = '') 默认排序字段，默认 ''
 * @method $this orderDir(string $value = 'asc') 排序方向 'asc'|'desc'，默认 'asc'
 * @method $this defaultParams($value = []) 设置默认 filter 默认参数，默认 []
 * @method $this pageField(string $value = 'page') 设置分页页码字段名，默认 'page'
 * @method $this perPageField(string $value = 'perPage') 设置分页一页显示的多少条数据的字段名，默认 'perPage'
 * @method $this perPageAvailable(array $value = [10, 20, 50, 100]) 设置一页显示多少条数据下拉框可选条数，默认 [10, 20, 50, 100]
 * @method $this orderField(string $value = '') 设置用来确定位置的字段名，默认 ''
 * @method $this hideQuickSaveBtn(bool $value = false) 隐藏顶部快速保存提示，默认 false
 * @method $this autoJumpToTopOnPagerChange(bool $value = false) 当切分页的时候，是否自动跳顶部，默认 false
 * @method $this syncResponse2Query(bool $value = true) 将返回数据同步到过滤器上，默认 true
 * @method $this keepItemSelectionOnPageChange(bool $value = true) 保留条目选择，默认 true
 * @method $this labelTpl(string $value = '') 单条描述模板，默认 ''
 * @method $this maxKeepItemSelectionLength(int $value = 0) 最大勾选数，默认 0（不限制）
 * @method $this maxItemSelectionLength(int $value = 0) 当前页的最大勾选数，默认 0（不限制）
 * @method $this headerToolbar(array $value = ['bulkActions', 'pagination']) 顶部工具栏配置，默认 ['bulkActions', 'pagination']
 * @method $this footerToolbar(array $value = ['statistics', 'pagination']) 底部工具栏配置，默认 ['statistics', 'pagination']
 * @method $this alwaysShowPagination(bool $value = false) 是否总是显示分页，默认 false
 * @method $this affixHeader(bool $value = true) 是否固定表头，默认 true
 * @method $this affixFooter(bool $value = false) 是否固定表格底部工具栏，默认 false
 * @method $this autoGenerateFilter(bool $value = false) 是否开启查询区域，默认 false
 * @method $this resetPageAfterAjaxItemAction(bool $value = false) 单条数据 ajax 操作后是否重置页码为第一页，默认 false
 * @method $this autoFillHeight(bool $value = false) 内容区域自适应高度，默认 false
 * @method $this canAccessSuperData(bool $value = false) 指定是否可以自动获取上层的数据，默认 false
 * @method $this matchFunc($value) 自定义匹配函数
 * @method $this parsePrimitiveQuery(bool $value = true) 是否开启 Query 信息转换，默认 true
 * @method $this columns(array $value = []) 列配置（table 模式下），默认 []
 * @method $this card($value) 卡片配置（cards 模式下）
 * @method $this listItem($value) 列表项配置（list 模式下）
 * @method $this itemCheckableOn(string $value = '') 配置当前行是否可勾选的条件，默认 ''
 * @method $this checkOnItemClick(bool $value = false) 点击数据行是否可以勾选当前行，默认 false
 * @method $this itemAction($value) 单行点击操作
 * @method $this selectable(bool $value = true) 支持勾选，默认 true
 * @method $this multiple(bool $value = true) 勾选 icon 是否为多选样式，默认 true
 **/
class CRUD extends Widget
{
    protected string $type = 'crud';

    /**
     * 覆盖消息提示，如果不指定，将采用 api 返回的 message
     * @param array{
     *     fetchFailed: string,
     *     saveOrderFailed: string,
     *     saveOrderSuccess: string,
     *     quickSaveFailed: string,
     *     quickSaveSuccess: string,
     * } $value
     * @return self
     */
    public function messages(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
