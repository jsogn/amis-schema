<?php

declare(strict_types=1);

/**
 * Amis Schema 组件助手函数
 * 
 * 提供类似 Flutter 的组件调用方式
 * 生成时间: 2025-08-14 18:59:50
 */

/**
 * 创建 BarCode 组件
 * 
 * @param string $name 在其他组件中用作变量映射
 * @param string $value 显示的条形码值，支持模板变量
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * 
 * @return \AmisSchema\Widget\Display\BarCode
 */
function AmisBarCode(
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null
): \AmisSchema\Widget\Display\BarCode
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    return \AmisSchema\Widget\Display\BarCode::make($args);
}

/**
 * 创建 CRUD 组件
 * 
 * @param string $title 可设置成空，当设置成空时，没有标题栏，默认 '列表'
 * @param \AmisSchema\Definition\API|string $api CRUD 用来获取列表数据的 api
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 CRUD 渲染器，默认 'crud'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $mode 展示模式 'table'|'cards'|'list'，默认 'table'
 * @param \AmisSchema\Definition\API|string $deferApi 当行数据中有 defer 属性时，用此接口进一步加载内容
 * @param bool $loadDataOnce 是否一次性加载所有数据（前端分页），默认 false
 * @param bool $loadDataOnceFetchOnFilter 在开启 loadDataOnce 时，filter 时是否去重新请求 api，默认 true
 * @param string $source 数据映射接口返回某字段的值，默认 ''
 * @param array|\AmisSchema\Widget\Input\Form $filter 设置过滤器
 * @param bool $filterTogglable 是否可显隐过滤器，默认 false
 * @param bool $filterDefaultVisible 设置过滤器默认是否可见，默认 true
 * @param bool $initFetch 是否初始化的时候拉取数据，默认 true
 * @param int $interval 刷新时间(最低 1000)，默认 0（不刷新）
 * @param bool $silentPolling 配置刷新时是否隐藏加载动画，默认 false
 * @param string $stopAutoRefreshWhen 通过表达式来配置停止刷新的条件，默认 ''
 * @param bool $stopAutoRefreshWhenModalIsOpen 当有弹框时关闭自动刷新，默认 true
 * @param bool $syncLocation 是否将过滤条件的参数同步到地址栏，默认 true
 * @param bool $draggable 是否可通过拖拽排序，默认 false
 * @param bool $resizable 是否可以调整列宽度，默认 true
 * @param string $itemDraggableOn 用表达式来配置是否可拖拽排序，默认 ''
 * @param \AmisSchema\Definition\API|string $saveOrderApi 保存排序的 api
 * @param \AmisSchema\Definition\API|string $quickSaveApi 快速编辑后用来批量保存的 API
 * @param \AmisSchema\Definition\API|string $quickSaveItemApi 快速编辑配置成及时保存时使用的 API
 * @param array $bulkActions 批量操作列表，默认 []
 * @param string $primaryField 设置 ID 字段名，默认 'id'
 * @param int $perPage 设置一页显示多少条数据，默认 10
 * @param string $orderBy 默认排序字段，默认 ''
 * @param string $orderDir 排序方向 'asc'|'desc'，默认 'asc'
 * @param mixed $defaultParams 设置默认 filter 默认参数，默认 []
 * @param string $pageField 设置分页页码字段名，默认 'page'
 * @param string $perPageField 设置分页一页显示的多少条数据的字段名，默认 'perPage'
 * @param array $perPageAvailable 设置一页显示多少条数据下拉框可选条数，默认 [10, 20, 50, 100]
 * @param string $orderField 设置用来确定位置的字段名，默认 ''
 * @param bool $hideQuickSaveBtn 隐藏顶部快速保存提示，默认 false
 * @param bool $autoJumpToTopOnPagerChange 当切分页的时候，是否自动跳顶部，默认 false
 * @param bool $syncResponse2Query 将返回数据同步到过滤器上，默认 true
 * @param bool $keepItemSelectionOnPageChange 保留条目选择，默认 true
 * @param string $labelTpl 单条描述模板，默认 ''
 * @param int $maxKeepItemSelectionLength 最大勾选数，默认 0（不限制）
 * @param int $maxItemSelectionLength 当前页的最大勾选数，默认 0（不限制）
 * @param array $headerToolbar 顶部工具栏配置，默认 ['bulkActions', 'pagination']
 * @param array $footerToolbar 底部工具栏配置，默认 ['statistics', 'pagination']
 * @param bool $alwaysShowPagination 是否总是显示分页，默认 false
 * @param bool $affixHeader 是否固定表头，默认 true
 * @param bool $affixFooter 是否固定表格底部工具栏，默认 false
 * @param bool $autoGenerateFilter 是否开启查询区域，默认 false
 * @param bool $resetPageAfterAjaxItemAction 单条数据 ajax 操作后是否重置页码为第一页，默认 false
 * @param bool $autoFillHeight 内容区域自适应高度，默认 false
 * @param bool $canAccessSuperData 指定是否可以自动获取上层的数据，默认 false
 * @param string $matchFunc 自定义匹配函数
 * @param bool $parsePrimitiveQuery 是否开启 Query 信息转换，默认 true
 * @param array $columns 列配置（table 模式下），默认 []
 * @param mixed $card 卡片配置（cards 模式下）
 * @param mixed $listItem 列表项配置（list 模式下）
 * @param string $itemCheckableOn 配置当前行是否可勾选的条件，默认 ''
 * @param bool $checkOnItemClick 点击数据行是否可以勾选当前行，默认 false
 * @param mixed $itemAction 单行点击操作
 * @param bool $selectable 支持勾选，默认 true
 * @param bool $multiple 勾选 icon 是否为多选样式，默认 true
 * 
 * @return \AmisSchema\Widget\Display\CRUD
 */
function AmisCRUD(
    mixed $title = null,
    mixed $api = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $mode = null,
    mixed $deferApi = null,
    mixed $loadDataOnce = null,
    mixed $loadDataOnceFetchOnFilter = null,
    mixed $source = null,
    mixed $filter = null,
    mixed $filterTogglable = null,
    mixed $filterDefaultVisible = null,
    mixed $initFetch = null,
    mixed $interval = null,
    mixed $silentPolling = null,
    mixed $stopAutoRefreshWhen = null,
    mixed $stopAutoRefreshWhenModalIsOpen = null,
    mixed $syncLocation = null,
    mixed $draggable = null,
    mixed $resizable = null,
    mixed $itemDraggableOn = null,
    mixed $saveOrderApi = null,
    mixed $quickSaveApi = null,
    mixed $quickSaveItemApi = null,
    mixed $bulkActions = null,
    mixed $primaryField = null,
    mixed $perPage = null,
    mixed $orderBy = null,
    mixed $orderDir = null,
    mixed $defaultParams = null,
    mixed $pageField = null,
    mixed $perPageField = null,
    mixed $perPageAvailable = null,
    mixed $orderField = null,
    mixed $hideQuickSaveBtn = null,
    mixed $autoJumpToTopOnPagerChange = null,
    mixed $syncResponse2Query = null,
    mixed $keepItemSelectionOnPageChange = null,
    mixed $labelTpl = null,
    mixed $maxKeepItemSelectionLength = null,
    mixed $maxItemSelectionLength = null,
    mixed $headerToolbar = null,
    mixed $footerToolbar = null,
    mixed $alwaysShowPagination = null,
    mixed $affixHeader = null,
    mixed $affixFooter = null,
    mixed $autoGenerateFilter = null,
    mixed $resetPageAfterAjaxItemAction = null,
    mixed $autoFillHeight = null,
    mixed $canAccessSuperData = null,
    mixed $matchFunc = null,
    mixed $parsePrimitiveQuery = null,
    mixed $columns = null,
    mixed $card = null,
    mixed $listItem = null,
    mixed $itemCheckableOn = null,
    mixed $checkOnItemClick = null,
    mixed $itemAction = null,
    mixed $selectable = null,
    mixed $multiple = null
): \AmisSchema\Widget\Display\CRUD
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($api !== null) $args['api'] = $api;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($mode !== null) $args['mode'] = $mode;
    if ($deferApi !== null) $args['deferApi'] = $deferApi;
    if ($loadDataOnce !== null) $args['loadDataOnce'] = $loadDataOnce;
    if ($loadDataOnceFetchOnFilter !== null) $args['loadDataOnceFetchOnFilter'] = $loadDataOnceFetchOnFilter;
    if ($source !== null) $args['source'] = $source;
    if ($filter !== null) $args['filter'] = $filter;
    if ($filterTogglable !== null) $args['filterTogglable'] = $filterTogglable;
    if ($filterDefaultVisible !== null) $args['filterDefaultVisible'] = $filterDefaultVisible;
    if ($initFetch !== null) $args['initFetch'] = $initFetch;
    if ($interval !== null) $args['interval'] = $interval;
    if ($silentPolling !== null) $args['silentPolling'] = $silentPolling;
    if ($stopAutoRefreshWhen !== null) $args['stopAutoRefreshWhen'] = $stopAutoRefreshWhen;
    if ($stopAutoRefreshWhenModalIsOpen !== null) $args['stopAutoRefreshWhenModalIsOpen'] = $stopAutoRefreshWhenModalIsOpen;
    if ($syncLocation !== null) $args['syncLocation'] = $syncLocation;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($resizable !== null) $args['resizable'] = $resizable;
    if ($itemDraggableOn !== null) $args['itemDraggableOn'] = $itemDraggableOn;
    if ($saveOrderApi !== null) $args['saveOrderApi'] = $saveOrderApi;
    if ($quickSaveApi !== null) $args['quickSaveApi'] = $quickSaveApi;
    if ($quickSaveItemApi !== null) $args['quickSaveItemApi'] = $quickSaveItemApi;
    if ($bulkActions !== null) $args['bulkActions'] = $bulkActions;
    if ($primaryField !== null) $args['primaryField'] = $primaryField;
    if ($perPage !== null) $args['perPage'] = $perPage;
    if ($orderBy !== null) $args['orderBy'] = $orderBy;
    if ($orderDir !== null) $args['orderDir'] = $orderDir;
    if ($defaultParams !== null) $args['defaultParams'] = $defaultParams;
    if ($pageField !== null) $args['pageField'] = $pageField;
    if ($perPageField !== null) $args['perPageField'] = $perPageField;
    if ($perPageAvailable !== null) $args['perPageAvailable'] = $perPageAvailable;
    if ($orderField !== null) $args['orderField'] = $orderField;
    if ($hideQuickSaveBtn !== null) $args['hideQuickSaveBtn'] = $hideQuickSaveBtn;
    if ($autoJumpToTopOnPagerChange !== null) $args['autoJumpToTopOnPagerChange'] = $autoJumpToTopOnPagerChange;
    if ($syncResponse2Query !== null) $args['syncResponse2Query'] = $syncResponse2Query;
    if ($keepItemSelectionOnPageChange !== null) $args['keepItemSelectionOnPageChange'] = $keepItemSelectionOnPageChange;
    if ($labelTpl !== null) $args['labelTpl'] = $labelTpl;
    if ($maxKeepItemSelectionLength !== null) $args['maxKeepItemSelectionLength'] = $maxKeepItemSelectionLength;
    if ($maxItemSelectionLength !== null) $args['maxItemSelectionLength'] = $maxItemSelectionLength;
    if ($headerToolbar !== null) $args['headerToolbar'] = $headerToolbar;
    if ($footerToolbar !== null) $args['footerToolbar'] = $footerToolbar;
    if ($alwaysShowPagination !== null) $args['alwaysShowPagination'] = $alwaysShowPagination;
    if ($affixHeader !== null) $args['affixHeader'] = $affixHeader;
    if ($affixFooter !== null) $args['affixFooter'] = $affixFooter;
    if ($autoGenerateFilter !== null) $args['autoGenerateFilter'] = $autoGenerateFilter;
    if ($resetPageAfterAjaxItemAction !== null) $args['resetPageAfterAjaxItemAction'] = $resetPageAfterAjaxItemAction;
    if ($autoFillHeight !== null) $args['autoFillHeight'] = $autoFillHeight;
    if ($canAccessSuperData !== null) $args['canAccessSuperData'] = $canAccessSuperData;
    if ($matchFunc !== null) $args['matchFunc'] = $matchFunc;
    if ($parsePrimitiveQuery !== null) $args['parsePrimitiveQuery'] = $parsePrimitiveQuery;
    if ($columns !== null) $args['columns'] = $columns;
    if ($card !== null) $args['card'] = $card;
    if ($listItem !== null) $args['listItem'] = $listItem;
    if ($itemCheckableOn !== null) $args['itemCheckableOn'] = $itemCheckableOn;
    if ($checkOnItemClick !== null) $args['checkOnItemClick'] = $checkOnItemClick;
    if ($itemAction !== null) $args['itemAction'] = $itemAction;
    if ($selectable !== null) $args['selectable'] = $selectable;
    if ($multiple !== null) $args['multiple'] = $multiple;
    return \AmisSchema\Widget\Display\CRUD::make($args);
}

/**
 * 创建 Calendar 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 calendar 渲染器，默认 'calendar'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param array|string $schedules 日历中展示日程，可设置静态数据或从上下文中取数据，默认 []
 * @param array $scheduleClassNames 日历中展示日程的颜色，参考背景色，默认 ['bg-warning', 'bg-danger', 'bg-success', 'bg-info', 'bg-secondary']
 * @param array|\AmisSchema\Widget\Widget $scheduleAction 自定义日程展示
 * @param bool $largeMode 放大模式，默认 false
 * @param array $todayActiveStyle 今日激活时的自定义样式，默认 []
 * 
 * @return \AmisSchema\Widget\Display\Calendar
 */
function AmisCalendar(
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $schedules = null,
    mixed $scheduleClassNames = null,
    mixed $scheduleAction = null,
    mixed $largeMode = null,
    mixed $todayActiveStyle = null
): \AmisSchema\Widget\Display\Calendar
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($schedules !== null) $args['schedules'] = $schedules;
    if ($scheduleClassNames !== null) $args['scheduleClassNames'] = $scheduleClassNames;
    if ($scheduleAction !== null) $args['scheduleAction'] = $scheduleAction;
    if ($largeMode !== null) $args['largeMode'] = $largeMode;
    if ($todayActiveStyle !== null) $args['todayActiveStyle'] = $todayActiveStyle;
    return \AmisSchema\Widget\Display\Calendar::make($args);
}

/**
 * 创建 Card 组件
 * 
 * @param array $body 内容容器，主要用来放置非表单项组件，默认 []
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 Card 渲染器，默认 'card'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $href 外部链接，默认 ''
 * @param string $bodyClassName 内容区域类名，默认 ''
 * @param array $actions 配置按钮集合，默认 []
 * @param int $actionsCount 按钮集合每行个数，默认 4
 * @param array $itemAction 点击卡片的行为，默认 []
 * @param string $secondary 次要说明，默认 ''
 * @param array $toolbar 工具栏按钮，默认 []
 * @param bool $dragging 是否显示拖拽图标，默认 false
 * @param bool $selectable 卡片是否可选，默认 false
 * @param bool $checkable 卡片选择按钮是否禁用，默认 true
 * @param bool $selected 卡片选择按钮是否选中，默认 false
 * @param bool $hideCheckToggler 卡片选择按钮是否隐藏，默认 false
 * @param bool $multiple 卡片是否为多选，默认 false
 * @param bool $useCardLabel 卡片内容区的表单项 label 是否使用 Card 内部的样式，默认 true
 * 
 * @return \AmisSchema\Widget\Display\Card
 */
function AmisCard(
    mixed $body = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $href = null,
    mixed $bodyClassName = null,
    mixed $actions = null,
    mixed $actionsCount = null,
    mixed $itemAction = null,
    mixed $secondary = null,
    mixed $toolbar = null,
    mixed $dragging = null,
    mixed $selectable = null,
    mixed $checkable = null,
    mixed $selected = null,
    mixed $hideCheckToggler = null,
    mixed $multiple = null,
    mixed $useCardLabel = null
): \AmisSchema\Widget\Display\Card
{
    $args = [];
    if ($body !== null) $args['body'] = $body;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($href !== null) $args['href'] = $href;
    if ($bodyClassName !== null) $args['bodyClassName'] = $bodyClassName;
    if ($actions !== null) $args['actions'] = $actions;
    if ($actionsCount !== null) $args['actionsCount'] = $actionsCount;
    if ($itemAction !== null) $args['itemAction'] = $itemAction;
    if ($secondary !== null) $args['secondary'] = $secondary;
    if ($toolbar !== null) $args['toolbar'] = $toolbar;
    if ($dragging !== null) $args['dragging'] = $dragging;
    if ($selectable !== null) $args['selectable'] = $selectable;
    if ($checkable !== null) $args['checkable'] = $checkable;
    if ($selected !== null) $args['selected'] = $selected;
    if ($hideCheckToggler !== null) $args['hideCheckToggler'] = $hideCheckToggler;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($useCardLabel !== null) $args['useCardLabel'] = $useCardLabel;
    return \AmisSchema\Widget\Display\Card::make($args);
}

/**
 * 创建 Cards 组件
 * 
 * @param string $title 标题，默认 ''
 * @param string $placeholder 当没数据的时候的文字提示，默认 '暂无数据'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为卡片组，默认 'cards'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $source 数据源, 获取当前数据域中的变量，默认 '${items}'
 * @param string $headerClassName 顶部外层 CSS 类名，默认 'amis-grid-header'
 * @param string $footerClassName 底部外层 CSS 类名，默认 'amis-grid-footer'
 * @param string $itemClassName 卡片 CSS 类名，默认 'col-sm-4 col-md-3'
 * @param array|\AmisSchema\Widget\Display\Card $card 配置卡片信息，默认 []
 * @param bool $selectable 卡片组是否可选，默认 false
 * @param bool $multiple 卡片组是否为多选，默认 true
 * @param bool $checkOnItemClick 点选卡片内容是否选中卡片，默认 false
 * @param bool $masonryLayout 是否开启瀑布流布局，默认 false
 * @param int $columnsCount 瀑布流布局的固定列数，默认 0（自适应）
 * 
 * @return \AmisSchema\Widget\Display\Cards
 */
function AmisCards(
    mixed $title = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $headerClassName = null,
    mixed $footerClassName = null,
    mixed $itemClassName = null,
    mixed $card = null,
    mixed $selectable = null,
    mixed $multiple = null,
    mixed $checkOnItemClick = null,
    mixed $masonryLayout = null,
    mixed $columnsCount = null
): \AmisSchema\Widget\Display\Cards
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($headerClassName !== null) $args['headerClassName'] = $headerClassName;
    if ($footerClassName !== null) $args['footerClassName'] = $footerClassName;
    if ($itemClassName !== null) $args['itemClassName'] = $itemClassName;
    if ($card !== null) $args['card'] = $card;
    if ($selectable !== null) $args['selectable'] = $selectable;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($checkOnItemClick !== null) $args['checkOnItemClick'] = $checkOnItemClick;
    if ($masonryLayout !== null) $args['masonryLayout'] = $masonryLayout;
    if ($columnsCount !== null) $args['columnsCount'] = $columnsCount;
    return \AmisSchema\Widget\Display\Cards::make($args);
}

/**
 * 创建 Carousel 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 carousel 渲染器，默认 'carousel'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param array $itemSchema 自定义schema来展示数据，默认 []
 * @param bool $auto 是否自动轮播，默认 true
 * @param string $interval 切换动画间隔，默认 '5s'
 * @param int $duration 切换动画时长（ms），默认 500
 * @param string $width 宽度，默认 'auto'
 * @param string $height 高度，默认 '200px'
 * @param array $controls 显示左右箭头、底部圆点索引，默认 ['dots', 'arrows']
 * @param string $controlsTheme 左右箭头、底部圆点索引颜色，默认 'light'
 * @param string $animation 切换动画效果，默认 'fade'
 * @param string $thumbMode 图片默认缩放模式，默认 'cover'
 * @param array $multiple 多图展示，默认 ['count' => 1]
 * @param bool $alwaysShowArrow 是否一直显示箭头，默认 false
 * @param array $icons 自定义箭头图标，默认 []
 * 
 * @return \AmisSchema\Widget\Display\Carousel
 */
function AmisCarousel(
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $itemSchema = null,
    mixed $auto = null,
    mixed $interval = null,
    mixed $duration = null,
    mixed $width = null,
    mixed $height = null,
    mixed $controls = null,
    mixed $controlsTheme = null,
    mixed $animation = null,
    mixed $thumbMode = null,
    mixed $multiple = null,
    mixed $alwaysShowArrow = null,
    mixed $icons = null
): \AmisSchema\Widget\Display\Carousel
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($itemSchema !== null) $args['itemSchema'] = $itemSchema;
    if ($auto !== null) $args['auto'] = $auto;
    if ($interval !== null) $args['interval'] = $interval;
    if ($duration !== null) $args['duration'] = $duration;
    if ($width !== null) $args['width'] = $width;
    if ($height !== null) $args['height'] = $height;
    if ($controls !== null) $args['controls'] = $controls;
    if ($controlsTheme !== null) $args['controlsTheme'] = $controlsTheme;
    if ($animation !== null) $args['animation'] = $animation;
    if ($thumbMode !== null) $args['thumbMode'] = $thumbMode;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($alwaysShowArrow !== null) $args['alwaysShowArrow'] = $alwaysShowArrow;
    if ($icons !== null) $args['icons'] = $icons;
    return \AmisSchema\Widget\Display\Carousel::make($args);
}

/**
 * 创建 Chart 组件
 * 
 * @param array $body 内容容器，默认 []
 * @param \AmisSchema\Definition\API|string|array $api 配置项接口地址，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 chart 渲染器，默认 'chart'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $source 通过数据映射获取数据链中变量值作为配置，默认 ''
 * @param bool $initFetch 组件初始化时，是否请求接口，默认 true
 * @param int $interval 刷新时间(最小 1000)，默认 0（不刷新）
 * @param array|string $config 设置 echarts 的配置项，默认 []
 * @param string $width 设置根元素的宽度，默认 ''
 * @param string $height 设置根元素的高度，默认 ''
 * @param bool $replaceChartOption 每次更新是完全覆盖配置项还是追加，默认 false
 * @param string $trackExpression 当这个表达式的值有变化时更新图表，默认 ''
 * @param string $dataFilter 自定义 echart config 转换，默认 ''
 * @param \AmisSchema\Definition\API|string|array $mapURL 地图 geo json 地址，默认 ''
 * @param string $mapName 地图名称，默认 ''
 * @param bool $loadBaiduMap 加载百度地图，默认 false
 * @param array $clickAction 点击行为，默认 []
 * 
 * @return \AmisSchema\Widget\Display\Chart
 */
function AmisChart(
    mixed $body = null,
    mixed $api = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $initFetch = null,
    mixed $interval = null,
    mixed $config = null,
    mixed $width = null,
    mixed $height = null,
    mixed $replaceChartOption = null,
    mixed $trackExpression = null,
    mixed $dataFilter = null,
    mixed $mapURL = null,
    mixed $mapName = null,
    mixed $loadBaiduMap = null,
    mixed $clickAction = null
): \AmisSchema\Widget\Display\Chart
{
    $args = [];
    if ($body !== null) $args['body'] = $body;
    if ($api !== null) $args['api'] = $api;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($initFetch !== null) $args['initFetch'] = $initFetch;
    if ($interval !== null) $args['interval'] = $interval;
    if ($config !== null) $args['config'] = $config;
    if ($width !== null) $args['width'] = $width;
    if ($height !== null) $args['height'] = $height;
    if ($replaceChartOption !== null) $args['replaceChartOption'] = $replaceChartOption;
    if ($trackExpression !== null) $args['trackExpression'] = $trackExpression;
    if ($dataFilter !== null) $args['dataFilter'] = $dataFilter;
    if ($mapURL !== null) $args['mapURL'] = $mapURL;
    if ($mapName !== null) $args['mapName'] = $mapName;
    if ($loadBaiduMap !== null) $args['loadBaiduMap'] = $loadBaiduMap;
    if ($clickAction !== null) $args['clickAction'] = $clickAction;
    return \AmisSchema\Widget\Display\Chart::make($args);
}

/**
 * 创建 Code 组件
 * 
 * @param string $name 在其他组件中，时，用作变量映射，默认 ''
 * @param string $value 显示的代码内容，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 code 渲染器，默认 'code'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $language 所使用的高亮语言，默认 'plaintext'
 * @param int $tabSize 默认 tab 大小，默认 4
 * @param string $editorTheme 主题，还有 'vs-dark'，默认 'vs'
 * @param bool $wordWrap 是否折行，默认 true
 * @param string|int $maxHeight 最大高度，超出滚动，默认 ''
 * 
 * @return \AmisSchema\Widget\Display\Code
 */
function AmisCode(
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $language = null,
    mixed $tabSize = null,
    mixed $editorTheme = null,
    mixed $wordWrap = null,
    mixed $maxHeight = null
): \AmisSchema\Widget\Display\Code
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($language !== null) $args['language'] = $language;
    if ($tabSize !== null) $args['tabSize'] = $tabSize;
    if ($editorTheme !== null) $args['editorTheme'] = $editorTheme;
    if ($wordWrap !== null) $args['wordWrap'] = $wordWrap;
    if ($maxHeight !== null) $args['maxHeight'] = $maxHeight;
    return \AmisSchema\Widget\Display\Code::make($args);
}

/**
 * 创建 Color 组件
 * 
 * @param string $name 在其他组件中，时，用作变量映射，默认 ''
 * @param string $value 显示的颜色值，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 color 渲染器，在 Table、Card 和 List 中为 "color"；在 Form 中用作静态展示为 "static-color"，默认 'color'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $defaultColor 默认颜色值，默认 ''
 * @param bool $showValue 是否显示右边的颜色值，默认 true
 * @param string $popOverContainerSelector 弹层挂载位置选择器，会通过 querySelector 获取，默认 ''
 * 
 * @return \AmisSchema\Widget\Display\Color
 */
function AmisColor(
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $defaultColor = null,
    mixed $showValue = null,
    mixed $popOverContainerSelector = null
): \AmisSchema\Widget\Display\Color
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($defaultColor !== null) $args['defaultColor'] = $defaultColor;
    if ($showValue !== null) $args['showValue'] = $showValue;
    if ($popOverContainerSelector !== null) $args['popOverContainerSelector'] = $popOverContainerSelector;
    return \AmisSchema\Widget\Display\Color::make($args);
}

/**
 * 创建 Date 组件
 * 
 * @param string $name 在其他组件中，时，用作变量映射，默认 ''
 * @param string $value 显示的日期数值，默认 ''
 * @param string $placeholder 占位内容，默认 '-'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 date 渲染器，在 Table、Card 和 List 中为 "date"；在 Form 中用作静态展示为 "static-date"，默认 'date'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $displayFormat 展示格式，更多格式类型请参考 moment 文档，默认 'YYYY-MM-DD'
 * @param string $valueFormat 数据格式，默认为时间戳，更多格式类型请参考 moment 文档，默认 'X'
 * @param bool $fromNow 是否显示相对当前的时间描述，比如: 11 小时前、3 天前、1 年前等，fromNow 为 true 时，format 不生效，默认 false
 * @param int $updateFrequency 更新频率，默认为 1 分钟（60000 毫秒），默认 60000
 * @param string $displayTimeZone 设置日期展示时区，默认 ''
 * 
 * @return \AmisSchema\Widget\Display\Date
 */
function AmisDate(
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $displayFormat = null,
    mixed $valueFormat = null,
    mixed $fromNow = null,
    mixed $updateFrequency = null,
    mixed $displayTimeZone = null
): \AmisSchema\Widget\Display\Date
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($displayFormat !== null) $args['displayFormat'] = $displayFormat;
    if ($valueFormat !== null) $args['valueFormat'] = $valueFormat;
    if ($fromNow !== null) $args['fromNow'] = $fromNow;
    if ($updateFrequency !== null) $args['updateFrequency'] = $updateFrequency;
    if ($displayTimeZone !== null) $args['displayTimeZone'] = $displayTimeZone;
    return \AmisSchema\Widget\Display\Date::make($args);
}

/**
 * 创建 Each 组件
 * 
 * @param string $name 获取数据域中变量，默认 ''
 * @param array $value 用于循环的值，默认 []
 * @param string $placeholder 当 value 值不存在或为空数组时的占位文本，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 Each 组件，默认 'each'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $source 获取数据域中变量，支持数据映射，默认 ''
 * @param array $items 使用 value 中的数据，循环输出渲染器，默认 []
 * @param string $itemKeyName 获取循环当前数组成员的字段名，默认 'item'
 * @param string $indexKeyName 获取循环当前索引的字段名，默认 'index'
 * 
 * @return \AmisSchema\Widget\Display\Each
 */
function AmisEach(
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $items = null,
    mixed $itemKeyName = null,
    mixed $indexKeyName = null
): \AmisSchema\Widget\Display\Each
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($items !== null) $args['items'] = $items;
    if ($itemKeyName !== null) $args['itemKeyName'] = $itemKeyName;
    if ($indexKeyName !== null) $args['indexKeyName'] = $indexKeyName;
    return \AmisSchema\Widget\Display\Each::make($args);
}

/**
 * 创建 GridNav 组件
 * 
 * @param string $name 字段名，映射同名变量，默认 ''
 * @param array $value 宫格数据数组，默认 []
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 GridNav 渲染器，默认 'grid-nav'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $itemClassName 列表项 css 类名，默认 ''
 * @param string $contentClassName 列表项内容 css 类名，默认 ''
 * @param string $source 数据源，默认 ''
 * @param bool $square 是否将列表项固定为正方形，默认 false
 * @param bool $center 是否将列表项内容居中显示，默认 true
 * @param bool $border 是否显示列表项边框，默认 true
 * @param int $gutter 列表项之间的间距，默认单位为px，默认 0
 * @param bool $reverse 是否调换图标和文本的位置，默认 false
 * @param int $iconRatio 图标宽度占比，单位%，默认 60
 * @param string $direction 列表项内容排列的方向，可选值为 horizontal、vertical，默认 'vertical'
 * @param int $columnNum 列数，默认 4
 * 
 * @return \AmisSchema\Widget\Display\GridNav
 */
function AmisGridNav(
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $itemClassName = null,
    mixed $contentClassName = null,
    mixed $source = null,
    mixed $square = null,
    mixed $center = null,
    mixed $border = null,
    mixed $gutter = null,
    mixed $reverse = null,
    mixed $iconRatio = null,
    mixed $direction = null,
    mixed $columnNum = null
): \AmisSchema\Widget\Display\GridNav
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($itemClassName !== null) $args['itemClassName'] = $itemClassName;
    if ($contentClassName !== null) $args['contentClassName'] = $contentClassName;
    if ($source !== null) $args['source'] = $source;
    if ($square !== null) $args['square'] = $square;
    if ($center !== null) $args['center'] = $center;
    if ($border !== null) $args['border'] = $border;
    if ($gutter !== null) $args['gutter'] = $gutter;
    if ($reverse !== null) $args['reverse'] = $reverse;
    if ($iconRatio !== null) $args['iconRatio'] = $iconRatio;
    if ($direction !== null) $args['direction'] = $direction;
    if ($columnNum !== null) $args['columnNum'] = $columnNum;
    return \AmisSchema\Widget\Display\GridNav::make($args);
}

/**
 * 创建 Html 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 html 渲染器，默认 'html'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $html html 代码，默认 ''
 * 
 * @return \AmisSchema\Widget\Display\Html
 */
function AmisHtml(
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $html = null
): \AmisSchema\Widget\Display\Html
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($html !== null) $args['html'] = $html;
    return \AmisSchema\Widget\Display\Html::make($args);
}

/**
 * 创建 Icon 组件
 * 
 * @param string $icon icon 名称，支持 fontawesome v4 或通过 registerIcon 注册的 icon、或使用 url，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定组件类型，默认 'icon'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $vendor icon 类型，默认为 fa，表示 fontawesome v4。也支持 iconfont，如果是 fontawesome v5 以上版本或者其他框架可以设置为空字符串，默认 'fa'
 * 
 * @return \AmisSchema\Widget\Display\Icon
 */
function AmisIcon(
    mixed $icon = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $vendor = null
): \AmisSchema\Widget\Display\Icon
{
    $args = [];
    if ($icon !== null) $args['icon'] = $icon;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($vendor !== null) $args['vendor'] = $vendor;
    return \AmisSchema\Widget\Display\Icon::make($args);
}

/**
 * 创建 Iframe 组件
 * 
 * @param string $name iframe 名称，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 iFrame 渲染器，默认 'iframe'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $src iframe 地址，支持动态数据和 base64 格式，默认 ''
 * @param array $frameBorder frameBorder 配置，默认 []
 * @param string $allow allow 配置，默认 ''
 * @param string $sandbox sandbox 配置，默认 ''
 * @param string $referrerpolicy referrerpolicy 配置，默认 ''
 * @param string|int $height iframe 高度，默认 '100%'
 * @param string|int $width iframe 宽度，默认 '100%'
 * @param array $events 事件配置，用于 iframe 向 amis 通信，默认 []
 * 
 * @return \AmisSchema\Widget\Display\Iframe
 */
function AmisIframe(
    mixed $name = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $src = null,
    mixed $frameBorder = null,
    mixed $allow = null,
    mixed $sandbox = null,
    mixed $referrerpolicy = null,
    mixed $height = null,
    mixed $width = null,
    mixed $events = null
): \AmisSchema\Widget\Display\Iframe
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($src !== null) $args['src'] = $src;
    if ($frameBorder !== null) $args['frameBorder'] = $frameBorder;
    if ($allow !== null) $args['allow'] = $allow;
    if ($sandbox !== null) $args['sandbox'] = $sandbox;
    if ($referrerpolicy !== null) $args['referrerpolicy'] = $referrerpolicy;
    if ($height !== null) $args['height'] = $height;
    if ($width !== null) $args['width'] = $width;
    if ($events !== null) $args['events'] = $events;
    return \AmisSchema\Widget\Display\Iframe::make($args);
}

/**
 * 创建 Image 组件
 * 
 * @param string $title 标题，默认 ''
 * @param string $name 在其他组件中，时，用作变量映射，默认 ''
 * @param string $placeholder 占位文本，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 image 渲染器，在 Table、Card 和 List 中为 "image"；在 Form 中用作静态展示为 "static-image"，默认 'image'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $innerClassName 组件内层 CSS 类名，默认 ''
 * @param string $imageClassName 图片 CSS 类名，默认 ''
 * @param string $thumbClassName 图片缩略图 CSS 类名，默认 ''
 * @param string $imageCaption 描述，默认 ''
 * @param string $defaultImage 无数据时显示的图片，默认 ''
 * @param string $src 缩略图地址，默认 ''
 * @param string $href 外部链接地址，默认 ''
 * @param string $originalSrc 原图地址，默认 ''
 * @param bool $enlargeAble 支持放大预览，默认 false
 * @param string $enlargeTitle 放大预览的标题，默认 ''
 * @param string $enlargeCaption 放大预览的描述，默认 ''
 * @param bool $enlargeWithGallary 在表格中，图片的放大功能会默认展示所有图片信息，设置为 false 将关闭放大模式下图片集列表的展示，默认 true
 * @param string $thumbMode 预览图模式，可选：'w-full', 'h-full', 'contain', 'cover'，默认 'contain'
 * @param string $thumbRatio 预览图比例，可选：'1:1', '4:3', '16:9'，默认 '1:1'
 * @param string $imageMode 图片展示模式，可选：'thumb', 'original' 即：缩略图模式 或者 原图模式，默认 'thumb'
 * @param string $height 图片缩略高度，默认 ''
 * @param string $width 图片缩略宽度，默认 ''
 * @param bool $showToolbar 放大模式下是否展示图片的工具栏，默认 false
 * @param float|string $maxScale 执行调整图片比例动作时的最大百分比，默认 ''
 * @param float|string $minScale 执行调整图片比例动作时的最小百分比，默认 ''
 * @param array $clickAction 自定义点击行为，默认 []
 * 
 * @return \AmisSchema\Widget\Display\Image
 */
function AmisImage(
    mixed $title = null,
    mixed $name = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $innerClassName = null,
    mixed $imageClassName = null,
    mixed $thumbClassName = null,
    mixed $imageCaption = null,
    mixed $defaultImage = null,
    mixed $src = null,
    mixed $href = null,
    mixed $originalSrc = null,
    mixed $enlargeAble = null,
    mixed $enlargeTitle = null,
    mixed $enlargeCaption = null,
    mixed $enlargeWithGallary = null,
    mixed $thumbMode = null,
    mixed $thumbRatio = null,
    mixed $imageMode = null,
    mixed $height = null,
    mixed $width = null,
    mixed $showToolbar = null,
    mixed $maxScale = null,
    mixed $minScale = null,
    mixed $clickAction = null
): \AmisSchema\Widget\Display\Image
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($name !== null) $args['name'] = $name;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($innerClassName !== null) $args['innerClassName'] = $innerClassName;
    if ($imageClassName !== null) $args['imageClassName'] = $imageClassName;
    if ($thumbClassName !== null) $args['thumbClassName'] = $thumbClassName;
    if ($imageCaption !== null) $args['imageCaption'] = $imageCaption;
    if ($defaultImage !== null) $args['defaultImage'] = $defaultImage;
    if ($src !== null) $args['src'] = $src;
    if ($href !== null) $args['href'] = $href;
    if ($originalSrc !== null) $args['originalSrc'] = $originalSrc;
    if ($enlargeAble !== null) $args['enlargeAble'] = $enlargeAble;
    if ($enlargeTitle !== null) $args['enlargeTitle'] = $enlargeTitle;
    if ($enlargeCaption !== null) $args['enlargeCaption'] = $enlargeCaption;
    if ($enlargeWithGallary !== null) $args['enlargeWithGallary'] = $enlargeWithGallary;
    if ($thumbMode !== null) $args['thumbMode'] = $thumbMode;
    if ($thumbRatio !== null) $args['thumbRatio'] = $thumbRatio;
    if ($imageMode !== null) $args['imageMode'] = $imageMode;
    if ($height !== null) $args['height'] = $height;
    if ($width !== null) $args['width'] = $width;
    if ($showToolbar !== null) $args['showToolbar'] = $showToolbar;
    if ($maxScale !== null) $args['maxScale'] = $maxScale;
    if ($minScale !== null) $args['minScale'] = $minScale;
    if ($clickAction !== null) $args['clickAction'] = $clickAction;
    return \AmisSchema\Widget\Display\Image::make($args);
}

/**
 * 创建 Images 组件
 * 
 * @param string $name 字段名，映射同名变量，默认 ''
 * @param string|array $value 图片数组，支持字符串数组或对象数组，默认 []
 * @param string $className 外层 CSS 类名，默认 ''
 * @param mixed $style 
 * @param string $type 如果在 Table、Card 和 List 中，为"images"；在 Form 中用作静态展示，为"static-images"，默认 'images'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $defaultImage 默认展示图片，默认 ''
 * @param string $source 数据源，关联上下文数据，默认 ''
 * @param string $delimiter 分隔符，当 value 为字符串时，用该值进行分隔拆分，默认 ','
 * @param string $src 预览图地址，支持数据映射获取对象中图片变量，默认 ''
 * @param string $originalSrc 原图地址，支持数据映射获取对象中图片变量，默认 ''
 * @param bool $enlargeAble 支持放大预览，默认 false
 * @param string $enlargeTitle 放大时展示的标题，默认 ''
 * @param string $enlargeCaption 放大时展示的描述，默认 ''
 * @param bool|string $enlargeWithGallary 放大模式下是否展示图片集列表，表格中可设置为 true/false，默认 true
 * @param string $thumbMode 预览图模式，可选：'w-full', 'h-full', 'contain', 'cover'，默认 'contain'
 * @param string $thumbRatio 预览图比例，可选：'1:1', '4:3', '16:9'，默认 '1:1'
 * @param bool $showToolbar 放大模式下是否展示图片的工具栏（2.2.0+），默认 false
 * @param string $listClassName 图片集外层 CSS 类名，默认 ''
 * @param string $itemClassName 单个图片外层 CSS 类名，默认 ''
 * @param array $options 图片选项配置，默认 []
 * 
 * @return \AmisSchema\Widget\Display\Images
 */
function AmisImages(
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $defaultImage = null,
    mixed $source = null,
    mixed $delimiter = null,
    mixed $src = null,
    mixed $originalSrc = null,
    mixed $enlargeAble = null,
    mixed $enlargeTitle = null,
    mixed $enlargeCaption = null,
    mixed $enlargeWithGallary = null,
    mixed $thumbMode = null,
    mixed $thumbRatio = null,
    mixed $showToolbar = null,
    mixed $listClassName = null,
    mixed $itemClassName = null,
    mixed $options = null
): \AmisSchema\Widget\Display\Images
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($defaultImage !== null) $args['defaultImage'] = $defaultImage;
    if ($source !== null) $args['source'] = $source;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($src !== null) $args['src'] = $src;
    if ($originalSrc !== null) $args['originalSrc'] = $originalSrc;
    if ($enlargeAble !== null) $args['enlargeAble'] = $enlargeAble;
    if ($enlargeTitle !== null) $args['enlargeTitle'] = $enlargeTitle;
    if ($enlargeCaption !== null) $args['enlargeCaption'] = $enlargeCaption;
    if ($enlargeWithGallary !== null) $args['enlargeWithGallary'] = $enlargeWithGallary;
    if ($thumbMode !== null) $args['thumbMode'] = $thumbMode;
    if ($thumbRatio !== null) $args['thumbRatio'] = $thumbRatio;
    if ($showToolbar !== null) $args['showToolbar'] = $showToolbar;
    if ($listClassName !== null) $args['listClassName'] = $listClassName;
    if ($itemClassName !== null) $args['itemClassName'] = $itemClassName;
    if ($options !== null) $args['options'] = $options;
    return \AmisSchema\Widget\Display\Images::make($args);
}

/**
 * 创建 Json 组件
 * 
 * @param string $name 字段名，映射同名变量，默认 ''
 * @param array|string $value json 值，如果是 string 会自动 parse，默认 null
 * @param string $placeholder 占位文本，默认 '-'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 如果在 Table、Card 和 List 中，为"json"；在 Form 中用作静态展示，为"static-json"，默认 'json'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $source 通过数据映射获取数据链中的值，默认 ''
 * @param int $levelExpand 默认展开的层级，默认 1
 * @param string $jsonTheme 主题，可选 twilight 和 eighties，默认 'twilight'
 * @param bool $mutable 是否可修改（since 1.2.3），默认 false
 * @param bool $displayDataTypes 是否显示数据类型，默认 false
 * @param int|bool $ellipsisThreshold 设置字符串的最大展示长度，点击字符串可以切换全量/部分展示方式（2.0.0+），默认 false
 * 
 * @return \AmisSchema\Widget\Display\Json
 */
function AmisJson(
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $levelExpand = null,
    mixed $jsonTheme = null,
    mixed $mutable = null,
    mixed $displayDataTypes = null,
    mixed $ellipsisThreshold = null
): \AmisSchema\Widget\Display\Json
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($levelExpand !== null) $args['levelExpand'] = $levelExpand;
    if ($jsonTheme !== null) $args['jsonTheme'] = $jsonTheme;
    if ($mutable !== null) $args['mutable'] = $mutable;
    if ($displayDataTypes !== null) $args['displayDataTypes'] = $displayDataTypes;
    if ($ellipsisThreshold !== null) $args['ellipsisThreshold'] = $ellipsisThreshold;
    return \AmisSchema\Widget\Display\Json::make($args);
}

/**
 * 创建 Link 组件
 * 
 * @param string $title a 标签的 title，默认 ''
 * @param string $body 标签内文本，默认 ''
 * @param string $icon 超链接图标，以加强显示，默认 ''
 * @param bool $disabled 禁用超链接，默认 false
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 如果在 Table、Card 和 List 中，为"link"；在 Form 中用作静态展示，为"static-link"，默认 'link'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $href 链接地址，默认 ''
 * @param bool $blank 是否在新标签页打开，默认 false
 * @param string $htmlTarget a 标签的 target，优先于 blank 属性，默认 ''
 * @param string $rightIcon 右侧图标，默认 ''
 * 
 * @return \AmisSchema\Widget\Display\Link
 */
function AmisLink(
    mixed $title = null,
    mixed $body = null,
    mixed $icon = null,
    mixed $disabled = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $href = null,
    mixed $blank = null,
    mixed $htmlTarget = null,
    mixed $rightIcon = null
): \AmisSchema\Widget\Display\Link
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($body !== null) $args['body'] = $body;
    if ($icon !== null) $args['icon'] = $icon;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($href !== null) $args['href'] = $href;
    if ($blank !== null) $args['blank'] = $blank;
    if ($htmlTarget !== null) $args['htmlTarget'] = $htmlTarget;
    if ($rightIcon !== null) $args['rightIcon'] = $rightIcon;
    return \AmisSchema\Widget\Display\Link::make($args);
}

/**
 * 创建 ListWidget 组件
 * 
 * @param string $title 标题，默认 ''
 * @param string $placeholder 当没数据的时候的文字提示，默认 '暂无数据'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为列表展示，默认 'list'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $source 数据源，获取当前数据域变量，支持数据映射，默认 '${items}'
 * @param bool $selectable 列表是否可选，默认 false
 * @param bool $multiple 列表是否为多选，默认 true
 * @param string $headerClassName 顶部外层 CSS 类名，默认 'amis-list-header'
 * @param string $footerClassName 底部外层 CSS 类名，默认 'amis-list-footer'
 * @param bool $checkOnItemClick 点击列表项内容是否选中列表项，默认 false
 * @param array $itemAction 单行点击操作配置（1.4.0+），默认 []
 * @param string $innerClassName 内层组件的CSS类名，默认 ''
 * 
 * @return \AmisSchema\Widget\Display\ListWidget
 */
function AmisListWidget(
    mixed $title = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $selectable = null,
    mixed $multiple = null,
    mixed $headerClassName = null,
    mixed $footerClassName = null,
    mixed $checkOnItemClick = null,
    mixed $itemAction = null,
    mixed $innerClassName = null
): \AmisSchema\Widget\Display\ListWidget
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($selectable !== null) $args['selectable'] = $selectable;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($headerClassName !== null) $args['headerClassName'] = $headerClassName;
    if ($footerClassName !== null) $args['footerClassName'] = $footerClassName;
    if ($checkOnItemClick !== null) $args['checkOnItemClick'] = $checkOnItemClick;
    if ($itemAction !== null) $args['itemAction'] = $itemAction;
    if ($innerClassName !== null) $args['innerClassName'] = $innerClassName;
    return \AmisSchema\Widget\Display\ListWidget::make($args);
}

/**
 * 创建 Log 组件
 * 
 * @param string $placeholder 加载中的文字，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 Log 渲染器，默认 'log'
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param int $height 展示区域高度，默认 500
 * @param bool $autoScroll 是否自动滚动，默认 true
 * @param bool $disableColor 是否禁用 ansi 颜色支持，默认 false
 * @param string $encoding 返回内容的字符编码，默认 'utf-8'
 * @param string|array $source 接口配置，支持变量（1.4.2+）和高级配置（1.6.1+），默认 ''
 * @param string $credentials fetch 的 credentials 设置，默认 'include'
 * @param int $rowHeight 设置每行高度，将会开启虚拟渲染（1.10.0+），默认 null
 * @param int $maxLength 最大显示行数（1.10.0+），默认 null
 * @param array $operation 可选日志操作：['stop','restart','clear','showLineNumber','filter']，默认 []
 * 
 * @return \AmisSchema\Widget\Display\Log
 */
function AmisLog(
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $height = null,
    mixed $autoScroll = null,
    mixed $disableColor = null,
    mixed $encoding = null,
    mixed $source = null,
    mixed $credentials = null,
    mixed $rowHeight = null,
    mixed $maxLength = null,
    mixed $operation = null
): \AmisSchema\Widget\Display\Log
{
    $args = [];
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($height !== null) $args['height'] = $height;
    if ($autoScroll !== null) $args['autoScroll'] = $autoScroll;
    if ($disableColor !== null) $args['disableColor'] = $disableColor;
    if ($encoding !== null) $args['encoding'] = $encoding;
    if ($source !== null) $args['source'] = $source;
    if ($credentials !== null) $args['credentials'] = $credentials;
    if ($rowHeight !== null) $args['rowHeight'] = $rowHeight;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($operation !== null) $args['operation'] = $operation;
    return \AmisSchema\Widget\Display\Log::make($args);
}

/**
 * 创建 Mapping 组件
 * 
 * @param string $placeholder 占位文本，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param array $map 映射配置，支持k-v对象或对象数组格式，默认 []
 * @param string|array|\AmisSchema\Definition\API $source 远程数据源接口(since 1.1.6)或数据映射，默认 ''
 * @param string $valueField 映射匹配字段名(since 2.5.2)，默认 value
 * @param string $labelField 映射显示字段名(since 2.5.2)，配置后映射值无法作为schema渲染，默认 label
 * @param string|array|\AmisSchema\Widget\Widget $itemSchema 自定义渲染模板(since 2.5.2)，支持html或schema，非object使用${item}，object使用${xxx}，默认 null
 * 
 * @return \AmisSchema\Widget\Display\Mapping
 */
function AmisMapping(
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $map = null,
    mixed $source = null,
    mixed $valueField = null,
    mixed $labelField = null,
    mixed $itemSchema = null
): \AmisSchema\Widget\Display\Mapping
{
    $args = [];
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($map !== null) $args['map'] = $map;
    if ($source !== null) $args['source'] = $source;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($itemSchema !== null) $args['itemSchema'] = $itemSchema;
    return \AmisSchema\Widget\Display\Mapping::make($args);
}

/**
 * 创建 Markdown 组件
 * 
 * @param string $name 变量映射名称，默认 ''
 * @param string $value 静态markdown内容，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string|\AmisSchema\Definition\API|array $src 外部markdown文件地址(since 1.6.5)，默认 ''
 * @param bool $html 是否支持html标签(since 1.8.1)，默认 false
 * @param bool $linkify 是否自动识别链接(since 1.8.1)，默认 true
 * @param bool $breaks 是否回车就是换行(since 1.8.1)，默认 false
 * 
 * @return \AmisSchema\Widget\Display\Markdown
 */
function AmisMarkdown(
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $src = null,
    mixed $html = null,
    mixed $linkify = null,
    mixed $breaks = null
): \AmisSchema\Widget\Display\Markdown
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($src !== null) $args['src'] = $src;
    if ($html !== null) $args['html'] = $html;
    if ($linkify !== null) $args['linkify'] = $linkify;
    if ($breaks !== null) $args['breaks'] = $breaks;
    return \AmisSchema\Widget\Display\Markdown::make($args);
}

/**
 * 创建 Number 组件
 * 
 * @param string $name 变量映射名称，默认 ''
 * @param string|int|float $value 数值，默认 ''
 * @param string $placeholder 占位内容，默认 '-'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param bool $kilobitSeparator 是否千分位展示，默认 true
 * @param int $precision 小数点位数，默认 null
 * @param bool|int $percent 百分比展示，为数字时控制百分比小数位数，默认 false
 * @param string $prefix 前缀，默认 ''
 * @param string $affix 后缀，默认 ''
 * 
 * @return \AmisSchema\Widget\Display\Number
 */
function AmisNumber(
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $kilobitSeparator = null,
    mixed $precision = null,
    mixed $percent = null,
    mixed $prefix = null,
    mixed $affix = null
): \AmisSchema\Widget\Display\Number
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($kilobitSeparator !== null) $args['kilobitSeparator'] = $kilobitSeparator;
    if ($precision !== null) $args['precision'] = $precision;
    if ($percent !== null) $args['percent'] = $percent;
    if ($prefix !== null) $args['prefix'] = $prefix;
    if ($affix !== null) $args['affix'] = $affix;
    return \AmisSchema\Widget\Display\Number::make($args);
}

/**
 * 创建 OfficeViewer 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param bool $loading 是否显示loading图标，默认 false
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string|\AmisSchema\Definition\API|array $src 文档地址，默认 ''
 * @param bool $enableVar 是否开启变量替换功能，默认 true
 * @param array $wordOptions Word渲染配置选项，默认 []
 * @param array $excelOptions Excel渲染配置选项(since 6.3.0)，默认 []
 * 
 * @return \AmisSchema\Widget\Display\OfficeViewer
 */
function AmisOfficeViewer(
    mixed $className = null,
    mixed $style = null,
    mixed $loading = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $src = null,
    mixed $enableVar = null,
    mixed $wordOptions = null,
    mixed $excelOptions = null
): \AmisSchema\Widget\Display\OfficeViewer
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($loading !== null) $args['loading'] = $loading;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($src !== null) $args['src'] = $src;
    if ($enableVar !== null) $args['enableVar'] = $enableVar;
    if ($wordOptions !== null) $args['wordOptions'] = $wordOptions;
    if ($excelOptions !== null) $args['excelOptions'] = $excelOptions;
    return \AmisSchema\Widget\Display\OfficeViewer::make($args);
}

/**
 * 创建 PDFViewer 组件
 * 
 * @param string $name 变量映射名称，配合文件上传使用，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string|\AmisSchema\Definition\API|array $src PDF文档地址，默认 ''
 * @param int $width 宽度，默认 null
 * @param int $height 高度，默认 null
 * @param string $background PDF背景色，默认 '#fff'
 * 
 * @return \AmisSchema\Widget\Display\PDFViewer
 */
function AmisPDFViewer(
    mixed $name = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $src = null,
    mixed $width = null,
    mixed $height = null,
    mixed $background = null
): \AmisSchema\Widget\Display\PDFViewer
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($src !== null) $args['src'] = $src;
    if ($width !== null) $args['width'] = $width;
    if ($height !== null) $args['height'] = $height;
    if ($background !== null) $args['background'] = $background;
    return \AmisSchema\Widget\Display\PDFViewer::make($args);
}

/**
 * 创建 Progress 组件
 * 
 * @param string $name 变量映射名称，默认 ''
 * @param string $value 进度值，默认 0
 * @param string $placeholder 占位文本，默认 '-'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $mode 进度条类型，line/circle/dashboard，默认 'line'
 * @param bool $showLabel 是否展示进度文本，默认 true
 * @param bool $stripe 背景是否显示条纹，默认 false
 * @param bool $animate 是否支持动画(仅line类型)，默认 false
 * @param string|array $map 进度颜色映射，默认 ['bg-danger', 'bg-warning', 'bg-info', 'bg-success', 'bg-success']
 * @param bool $showThresholdText 是否显示阈值数值，默认 false
 * @param string $valueTpl 自定义格式化内容，默认 '${value}%'
 * @param int $strokeWidth 进度条线宽度，line类型默认10，circle/dashboard类型默认6，默认 null
 * @param int $gapDegree 仪表盘缺角角度(0~295)，默认 75
 * @param string $gapPosition 仪表盘缺口位置，top/bottom/left/right，默认 'bottom'
 * 
 * @return \AmisSchema\Widget\Display\Progress
 */
function AmisProgress(
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $mode = null,
    mixed $showLabel = null,
    mixed $stripe = null,
    mixed $animate = null,
    mixed $map = null,
    mixed $showThresholdText = null,
    mixed $valueTpl = null,
    mixed $strokeWidth = null,
    mixed $gapDegree = null,
    mixed $gapPosition = null
): \AmisSchema\Widget\Display\Progress
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($mode !== null) $args['mode'] = $mode;
    if ($showLabel !== null) $args['showLabel'] = $showLabel;
    if ($stripe !== null) $args['stripe'] = $stripe;
    if ($animate !== null) $args['animate'] = $animate;
    if ($map !== null) $args['map'] = $map;
    if ($showThresholdText !== null) $args['showThresholdText'] = $showThresholdText;
    if ($valueTpl !== null) $args['valueTpl'] = $valueTpl;
    if ($strokeWidth !== null) $args['strokeWidth'] = $strokeWidth;
    if ($gapDegree !== null) $args['gapDegree'] = $gapDegree;
    if ($gapPosition !== null) $args['gapPosition'] = $gapPosition;
    return \AmisSchema\Widget\Display\Progress::make($args);
}

/**
 * 创建 Property 组件
 * 
 * @param string $title 标题，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string|array $source 数据源，默认 ''
 * @param string $mode 显示模式，table/simple，默认 'table'
 * @param string $separator simple模式下属性名和值之间的分隔符，默认 ','
 * @param int $column 每行几列，默认 3
 * @param array $labelStyle 属性名的样式，默认 []
 * @param array $contentStyle 属性值的样式，默认 []
 * 
 * @return \AmisSchema\Widget\Display\Property
 */
function AmisProperty(
    mixed $title = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $mode = null,
    mixed $separator = null,
    mixed $column = null,
    mixed $labelStyle = null,
    mixed $contentStyle = null
): \AmisSchema\Widget\Display\Property
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($mode !== null) $args['mode'] = $mode;
    if ($separator !== null) $args['separator'] = $separator;
    if ($column !== null) $args['column'] = $column;
    if ($labelStyle !== null) $args['labelStyle'] = $labelStyle;
    if ($contentStyle !== null) $args['contentStyle'] = $contentStyle;
    return \AmisSchema\Widget\Display\Property::make($args);
}

/**
 * 创建 QRCode 组件
 * 
 * @param string $value 扫描二维码后显示的文本，支持使用模板变量
 * @param string $level 二维码复杂级别，有（'L' 'M' 'Q' 'H'）四种，从左到右依次提升
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $qrcodeClassName 二维码的类名
 * @param int $codeSize 二维码的宽高大小
 * @param string $backgroundColor 二维码背景色
 * @param string $foregroundColor 二维码前景色
 * 
 * @return \AmisSchema\Widget\Display\QRCode
 */
function AmisQRCode(
    mixed $value = null,
    mixed $level = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $qrcodeClassName = null,
    mixed $codeSize = null,
    mixed $backgroundColor = null,
    mixed $foregroundColor = null
): \AmisSchema\Widget\Display\QRCode
{
    $args = [];
    if ($value !== null) $args['value'] = $value;
    if ($level !== null) $args['level'] = $level;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($qrcodeClassName !== null) $args['qrcodeClassName'] = $qrcodeClassName;
    if ($codeSize !== null) $args['codeSize'] = $codeSize;
    if ($backgroundColor !== null) $args['backgroundColor'] = $backgroundColor;
    if ($foregroundColor !== null) $args['foregroundColor'] = $foregroundColor;
    return \AmisSchema\Widget\Display\QRCode::make($args);
}

/**
 * 创建 Remark 组件
 * 
 * @param string $icon 图标
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $content 提示文本，支持模板变量
 * @param string $placement 弹出位置
 * @param array|string $trigger 触发条件
 * @param string $shape 图标形状，可选 circle、square
 * 
 * @return \AmisSchema\Widget\Display\Remark
 */
function AmisRemark(
    mixed $icon = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $content = null,
    mixed $placement = null,
    mixed $trigger = null,
    mixed $shape = null
): \AmisSchema\Widget\Display\Remark
{
    $args = [];
    if ($icon !== null) $args['icon'] = $icon;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($content !== null) $args['content'] = $content;
    if ($placement !== null) $args['placement'] = $placement;
    if ($trigger !== null) $args['trigger'] = $trigger;
    if ($shape !== null) $args['shape'] = $shape;
    return \AmisSchema\Widget\Display\Remark::make($args);
}

/**
 * 创建 SearchBox 组件
 * 
 * @param bool $disabled 是否为禁用状态
 * @param string $className CSS类名
 * @param mixed $style 
 * @param bool $loading 是否处于加载状态
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param bool $mini 是否为 mini 模式
 * @param bool $searchImediately 是否立即搜索
 * @param bool $clearAndSubmit 清空搜索框内容后立即执行搜索
 * 
 * @return \AmisSchema\Widget\Display\SearchBox
 */
function AmisSearchBox(
    mixed $disabled = null,
    mixed $className = null,
    mixed $style = null,
    mixed $loading = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $mini = null,
    mixed $searchImediately = null,
    mixed $clearAndSubmit = null
): \AmisSchema\Widget\Display\SearchBox
{
    $args = [];
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($loading !== null) $args['loading'] = $loading;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($mini !== null) $args['mini'] = $mini;
    if ($searchImediately !== null) $args['searchImediately'] = $searchImediately;
    if ($clearAndSubmit !== null) $args['clearAndSubmit'] = $clearAndSubmit;
    return \AmisSchema\Widget\Display\SearchBox::make($args);
}

/**
 * 创建 Shape 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $shapeType 图形类型，如：rect、circle、triangle、polygon、line、arrow、star 等
 * @param string $color 填充颜色，支持十六进制颜色值
 * @param int $width 图形宽度（像素）
 * @param int $height 图形高度（像素）
 * @param int $radius 圆角大小，负数表示内弧
 * @param string $borderColor 边框颜色
 * @param int $borderWidth 边框宽度（像素）
 * @param string $borderStyle 边框样式：solid、dashed、dotted
 * @param string $path 自定义 SVG 路径
 * 
 * @return \AmisSchema\Widget\Display\Shape
 */
function AmisShape(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $shapeType = null,
    mixed $color = null,
    mixed $width = null,
    mixed $height = null,
    mixed $radius = null,
    mixed $borderColor = null,
    mixed $borderWidth = null,
    mixed $borderStyle = null,
    mixed $path = null
): \AmisSchema\Widget\Display\Shape
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($shapeType !== null) $args['shapeType'] = $shapeType;
    if ($color !== null) $args['color'] = $color;
    if ($width !== null) $args['width'] = $width;
    if ($height !== null) $args['height'] = $height;
    if ($radius !== null) $args['radius'] = $radius;
    if ($borderColor !== null) $args['borderColor'] = $borderColor;
    if ($borderWidth !== null) $args['borderWidth'] = $borderWidth;
    if ($borderStyle !== null) $args['borderStyle'] = $borderStyle;
    if ($path !== null) $args['path'] = $path;
    return \AmisSchema\Widget\Display\Shape::make($args);
}

/**
 * 创建 Sparkline 组件
 * 
 * @param string $name 关联的变量，用于从环境数据中获取值
 * @param array $value 走势图数据，为数组格式
 * @param string $placeholder 数据为空时显示的内容
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param int $width 图表宽度
 * @param int $height 图表高度
 * @param array $clickAction 点击行为配置，支持 amis 的行为动作
 * 
 * @return \AmisSchema\Widget\Display\Sparkline
 */
function AmisSparkline(
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $width = null,
    mixed $height = null,
    mixed $clickAction = null
): \AmisSchema\Widget\Display\Sparkline
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($width !== null) $args['width'] = $width;
    if ($height !== null) $args['height'] = $height;
    if ($clickAction !== null) $args['clickAction'] = $clickAction;
    return \AmisSchema\Widget\Display\Sparkline::make($args);
}

/**
 * 创建 Status 组件
 * 
 * @param string $placeholder 占位文本
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param array $map 映射图标配置
 * @param array $labelMap 映射文本配置
 * 
 * @return \AmisSchema\Widget\Display\Status
 */
function AmisStatus(
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $map = null,
    mixed $labelMap = null
): \AmisSchema\Widget\Display\Status
{
    $args = [];
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($map !== null) $args['map'] = $map;
    if ($labelMap !== null) $args['labelMap'] = $labelMap;
    return \AmisSchema\Widget\Display\Status::make($args);
}

/**
 * 创建 Steps 组件
 * 
 * @param string $name 关联上下文变量，默认 ''
 * @param string|int $value 设置默认值，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param array $steps 步骤数据配置，默认 []
 * @param string|\AmisSchema\Definition\API|array $source 数据源，支持API或数据映射(since 1.9.1)，默认 ''
 * @param string $mode 步骤条模式，horizontal/vertical/simple，默认 'horizontal'
 * @param string $labelPlacement 标签放置位置，horizontal/vertical，默认 'horizontal'
 * @param bool $progressDot 点状步骤条，默认 false
 * 
 * @return \AmisSchema\Widget\Display\Steps
 */
function AmisSteps(
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $steps = null,
    mixed $source = null,
    mixed $mode = null,
    mixed $labelPlacement = null,
    mixed $progressDot = null
): \AmisSchema\Widget\Display\Steps
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($steps !== null) $args['steps'] = $steps;
    if ($source !== null) $args['source'] = $source;
    if ($mode !== null) $args['mode'] = $mode;
    if ($labelPlacement !== null) $args['labelPlacement'] = $labelPlacement;
    if ($progressDot !== null) $args['progressDot'] = $progressDot;
    return \AmisSchema\Widget\Display\Steps::make($args);
}

/**
 * 创建 Table 组件
 * 
 * @param string $title 标题
 * @param string $placeholder 当没数据的时候的文字提示
 * @param string $className 外层 CSS 类名
 * @param mixed $style 
 * @param string $type 指定为 Table 渲染器
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $source 数据源, 绑定当前环境变量
 * @param \AmisSchema\Definition\API $deferApi 当行数据中有 defer 属性时，用此接口进一步加载内容
 * @param bool $affixHeader 是否固定表头
 * @param bool $affixFooter 是否固定表格底部工具栏
 * @param string|bool $columnsTogglable 展示列显示开关, 自动即：列数量大于或等于 5 个时自动开启
 * @param bool $showIndex 是否展示序号
 * @param string $tableClassName 表格 CSS 类名
 * @param string $headerClassName 顶部外层 CSS 类名
 * @param string $footerClassName 底部外层 CSS 类名
 * @param string $toolbarClassName 工具栏 CSS 类名
 * @param array $columns 用来设置列信息
 * @param int $combineNum 自动合并单元格
 * @param int $combineFromIndex 从第几列开始合并
 * @param array $itemActions 悬浮行操作按钮组
 * @param string $itemCheckableOn 配置当前行是否可勾选的条件
 * @param string $itemDraggableOn 配置当前行是否可拖拽的条件
 * @param bool $checkOnItemClick 点击数据行是否可以勾选当前行
 * @param string $rowClassName 给行添加 CSS 类名
 * @param string $rowClassNameExpr 通过模板给行添加 CSS 类名
 * @param array $prefixRow 顶部总结行
 * @param array $affixRow 底部总结行
 * @param mixed $itemBadge 行角标配置
 * @param bool|array $autoFillHeight 内容区域自适应高度，可选择自适应、固定高度和最大高度
 * @param bool $resizable 列宽度是否支持调整
 * @param bool $selectable 支持勾选
 * @param bool $multiple 勾选 icon 是否为多选样式checkbox，默认为radio
 * @param int $lazyRenderAfter 用来控制从第几行开始懒渲染行，用来渲染大表格时有用
 * @param string $tableLayout 表格布局模式，当配置为 fixed 时，内容将不会撑开表格，自动换行
 * @param string $childrenColumnName 指定树形结构的列名
 * @param mixed $expandConfig 自定义展开配置
 * @param mixed $footable 底部展示配置
 * @param mixed $itemAction 单行点击操作
 * @param bool $canAccessSuperData 是否可以访问父级数据
 * @param bool|string|\AmisSchema\Definition\API $reUseRow 默认当 API 返回数据与当前一致时不会触发表格行重渲染，为 false 总会触发重渲染，尽量复用返回数据中 id 一致的对象
 * @param string $persistKey 用于配置列排序、列显示的本地缓存所使用的 key
 * @param string $prefixRowClassName 顶部总结行 CSS 类名
 * @param string $prefixRowClassNameExpr 顶部总结行 CSS 类名表达式
 * @param string $affixRowClassName 底部总结行 CSS 类名
 * @param string $affixRowClassNameExpr 底部总结行 CSS 类名表达式
 * 
 * @return \AmisSchema\Widget\Display\Table
 */
function AmisTable(
    mixed $title = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $deferApi = null,
    mixed $affixHeader = null,
    mixed $affixFooter = null,
    mixed $columnsTogglable = null,
    mixed $showIndex = null,
    mixed $tableClassName = null,
    mixed $headerClassName = null,
    mixed $footerClassName = null,
    mixed $toolbarClassName = null,
    mixed $columns = null,
    mixed $combineNum = null,
    mixed $combineFromIndex = null,
    mixed $itemActions = null,
    mixed $itemCheckableOn = null,
    mixed $itemDraggableOn = null,
    mixed $checkOnItemClick = null,
    mixed $rowClassName = null,
    mixed $rowClassNameExpr = null,
    mixed $prefixRow = null,
    mixed $affixRow = null,
    mixed $itemBadge = null,
    mixed $autoFillHeight = null,
    mixed $resizable = null,
    mixed $selectable = null,
    mixed $multiple = null,
    mixed $lazyRenderAfter = null,
    mixed $tableLayout = null,
    mixed $childrenColumnName = null,
    mixed $expandConfig = null,
    mixed $footable = null,
    mixed $itemAction = null,
    mixed $canAccessSuperData = null,
    mixed $reUseRow = null,
    mixed $persistKey = null,
    mixed $prefixRowClassName = null,
    mixed $prefixRowClassNameExpr = null,
    mixed $affixRowClassName = null,
    mixed $affixRowClassNameExpr = null
): \AmisSchema\Widget\Display\Table
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($deferApi !== null) $args['deferApi'] = $deferApi;
    if ($affixHeader !== null) $args['affixHeader'] = $affixHeader;
    if ($affixFooter !== null) $args['affixFooter'] = $affixFooter;
    if ($columnsTogglable !== null) $args['columnsTogglable'] = $columnsTogglable;
    if ($showIndex !== null) $args['showIndex'] = $showIndex;
    if ($tableClassName !== null) $args['tableClassName'] = $tableClassName;
    if ($headerClassName !== null) $args['headerClassName'] = $headerClassName;
    if ($footerClassName !== null) $args['footerClassName'] = $footerClassName;
    if ($toolbarClassName !== null) $args['toolbarClassName'] = $toolbarClassName;
    if ($columns !== null) $args['columns'] = $columns;
    if ($combineNum !== null) $args['combineNum'] = $combineNum;
    if ($combineFromIndex !== null) $args['combineFromIndex'] = $combineFromIndex;
    if ($itemActions !== null) $args['itemActions'] = $itemActions;
    if ($itemCheckableOn !== null) $args['itemCheckableOn'] = $itemCheckableOn;
    if ($itemDraggableOn !== null) $args['itemDraggableOn'] = $itemDraggableOn;
    if ($checkOnItemClick !== null) $args['checkOnItemClick'] = $checkOnItemClick;
    if ($rowClassName !== null) $args['rowClassName'] = $rowClassName;
    if ($rowClassNameExpr !== null) $args['rowClassNameExpr'] = $rowClassNameExpr;
    if ($prefixRow !== null) $args['prefixRow'] = $prefixRow;
    if ($affixRow !== null) $args['affixRow'] = $affixRow;
    if ($itemBadge !== null) $args['itemBadge'] = $itemBadge;
    if ($autoFillHeight !== null) $args['autoFillHeight'] = $autoFillHeight;
    if ($resizable !== null) $args['resizable'] = $resizable;
    if ($selectable !== null) $args['selectable'] = $selectable;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($lazyRenderAfter !== null) $args['lazyRenderAfter'] = $lazyRenderAfter;
    if ($tableLayout !== null) $args['tableLayout'] = $tableLayout;
    if ($childrenColumnName !== null) $args['childrenColumnName'] = $childrenColumnName;
    if ($expandConfig !== null) $args['expandConfig'] = $expandConfig;
    if ($footable !== null) $args['footable'] = $footable;
    if ($itemAction !== null) $args['itemAction'] = $itemAction;
    if ($canAccessSuperData !== null) $args['canAccessSuperData'] = $canAccessSuperData;
    if ($reUseRow !== null) $args['reUseRow'] = $reUseRow;
    if ($persistKey !== null) $args['persistKey'] = $persistKey;
    if ($prefixRowClassName !== null) $args['prefixRowClassName'] = $prefixRowClassName;
    if ($prefixRowClassNameExpr !== null) $args['prefixRowClassNameExpr'] = $prefixRowClassNameExpr;
    if ($affixRowClassName !== null) $args['affixRowClassName'] = $affixRowClassName;
    if ($affixRowClassNameExpr !== null) $args['affixRowClassNameExpr'] = $affixRowClassNameExpr;
    return \AmisSchema\Widget\Display\Table::make($args);
}

/**
 * 创建 Table2 组件
 * 
 * @param string $title 标题
 * @param string|array $placeholder 当没数据的时候的文字提示
 * @param string $size 表格尺寸
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $type 指定为 table2 渲染器
 * @param bool $loading 表格是否加载中
 * @param array $onEvent 事件
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $source 数据源, 绑定当前环境变量
 * @param bool $sticky 是否粘性头部
 * @param string|array $footer 表格尾部
 * @param string|bool $columnsTogglable 展示列显示开关, 自动即：列数量大于或等于 5 个时自动开启
 * @param array $rowSelection 行相关配置
 * @param string $rowClassNameExpr 行 CSS 类名，支持模版语法
 * @param bool|array $expandable 展开行配置
 * @param string $lineHeight 行高设置
 * @param string $footerClassName 底部外层 CSS 类名
 * @param string $toolbarClassName 工具栏 CSS 类名
 * @param array $columns 用来设置列信息
 * @param int $combineNum 自动合并单元格
 * @param array $itemActions 悬浮行操作按钮组
 * @param string $itemCheckableOn 配置当前行是否可勾选的条件，要用表达式
 * @param string $itemDraggableOn 配置当前行是否可拖拽的条件，要用表达式
 * @param bool $checkOnItemClick 点击数据行是否可以勾选当前行
 * @param string $rowClassName 给行添加 CSS 类名
 * @param array $prefixRow 顶部总结行
 * @param array $affixRow 底部总结行
 * @param array $itemBadge 行角标配置
 * @param bool|array $autoFillHeight 内容区域自适应高度，可选择自适应、固定高度和最大高度
 * @param int $lazyRenderAfter 默认数据超过 100 条启动懒加载提升渲染性能，也可通过自定义该属性调整数值
 * @param bool $bordered 是否有边框
 * @param array $scroll 滚动设置
 * @param bool $resizable 是否可调整列宽
 * @param bool $draggable 是否可拖拽排序
 * @param array $headSummary 顶部总结栏
 * @param array $footSummary 底部总结栏
 * @param string $childrenColumnName 指定树形结构的列名
 * @param int $indentSize 树形结构缩进值
 * @param bool $selectable 支持勾选
 * @param bool $multiple 勾选 icon 是否为多选样式
 * @param int $maxKeepItemSelectionLength 最大选择个数
 * @param string $primaryField 主键字段
 * @param string $keyField 主键字段
 * @param \AmisSchema\Definition\API|string|array $quickSaveApi 快速保存接口
 * @param \AmisSchema\Definition\API|string|array $quickSaveItemApi 快速保存单项接口
 * @param bool $canAccessSuperData 是否可以访问父级数据
 * 
 * @return \AmisSchema\Widget\Display\Table2
 */
function AmisTable2(
    mixed $title = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $loading = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $sticky = null,
    mixed $footer = null,
    mixed $columnsTogglable = null,
    mixed $rowSelection = null,
    mixed $rowClassNameExpr = null,
    mixed $expandable = null,
    mixed $lineHeight = null,
    mixed $footerClassName = null,
    mixed $toolbarClassName = null,
    mixed $columns = null,
    mixed $combineNum = null,
    mixed $itemActions = null,
    mixed $itemCheckableOn = null,
    mixed $itemDraggableOn = null,
    mixed $checkOnItemClick = null,
    mixed $rowClassName = null,
    mixed $prefixRow = null,
    mixed $affixRow = null,
    mixed $itemBadge = null,
    mixed $autoFillHeight = null,
    mixed $lazyRenderAfter = null,
    mixed $bordered = null,
    mixed $scroll = null,
    mixed $resizable = null,
    mixed $draggable = null,
    mixed $headSummary = null,
    mixed $footSummary = null,
    mixed $childrenColumnName = null,
    mixed $indentSize = null,
    mixed $selectable = null,
    mixed $multiple = null,
    mixed $maxKeepItemSelectionLength = null,
    mixed $primaryField = null,
    mixed $keyField = null,
    mixed $quickSaveApi = null,
    mixed $quickSaveItemApi = null,
    mixed $canAccessSuperData = null
): \AmisSchema\Widget\Display\Table2
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($loading !== null) $args['loading'] = $loading;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($sticky !== null) $args['sticky'] = $sticky;
    if ($footer !== null) $args['footer'] = $footer;
    if ($columnsTogglable !== null) $args['columnsTogglable'] = $columnsTogglable;
    if ($rowSelection !== null) $args['rowSelection'] = $rowSelection;
    if ($rowClassNameExpr !== null) $args['rowClassNameExpr'] = $rowClassNameExpr;
    if ($expandable !== null) $args['expandable'] = $expandable;
    if ($lineHeight !== null) $args['lineHeight'] = $lineHeight;
    if ($footerClassName !== null) $args['footerClassName'] = $footerClassName;
    if ($toolbarClassName !== null) $args['toolbarClassName'] = $toolbarClassName;
    if ($columns !== null) $args['columns'] = $columns;
    if ($combineNum !== null) $args['combineNum'] = $combineNum;
    if ($itemActions !== null) $args['itemActions'] = $itemActions;
    if ($itemCheckableOn !== null) $args['itemCheckableOn'] = $itemCheckableOn;
    if ($itemDraggableOn !== null) $args['itemDraggableOn'] = $itemDraggableOn;
    if ($checkOnItemClick !== null) $args['checkOnItemClick'] = $checkOnItemClick;
    if ($rowClassName !== null) $args['rowClassName'] = $rowClassName;
    if ($prefixRow !== null) $args['prefixRow'] = $prefixRow;
    if ($affixRow !== null) $args['affixRow'] = $affixRow;
    if ($itemBadge !== null) $args['itemBadge'] = $itemBadge;
    if ($autoFillHeight !== null) $args['autoFillHeight'] = $autoFillHeight;
    if ($lazyRenderAfter !== null) $args['lazyRenderAfter'] = $lazyRenderAfter;
    if ($bordered !== null) $args['bordered'] = $bordered;
    if ($scroll !== null) $args['scroll'] = $scroll;
    if ($resizable !== null) $args['resizable'] = $resizable;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($headSummary !== null) $args['headSummary'] = $headSummary;
    if ($footSummary !== null) $args['footSummary'] = $footSummary;
    if ($childrenColumnName !== null) $args['childrenColumnName'] = $childrenColumnName;
    if ($indentSize !== null) $args['indentSize'] = $indentSize;
    if ($selectable !== null) $args['selectable'] = $selectable;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($maxKeepItemSelectionLength !== null) $args['maxKeepItemSelectionLength'] = $maxKeepItemSelectionLength;
    if ($primaryField !== null) $args['primaryField'] = $primaryField;
    if ($keyField !== null) $args['keyField'] = $keyField;
    if ($quickSaveApi !== null) $args['quickSaveApi'] = $quickSaveApi;
    if ($quickSaveItemApi !== null) $args['quickSaveItemApi'] = $quickSaveItemApi;
    if ($canAccessSuperData !== null) $args['canAccessSuperData'] = $canAccessSuperData;
    return \AmisSchema\Widget\Display\Table2::make($args);
}

/**
 * 创建 TableView 组件
 * 
 * @param bool $visible 是否显示
 * @param string $className 外层 CSS 类名
 * @param mixed $style 
 * @param string $type 指定为 table-view 渲染器
 * @param array $onEvent 事件
 * @param string $visibleOn 是否显示表达式
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param int|string $width 表格宽度
 * @param int|string $padding var(--TableCell-paddingX)') 单元格默认内间距
 * @param bool $border 是否显示边框
 * @param string $borderColor 
 * @param array $trs 行设置
 * @param string $caption 表格标题文本
 * @param string $captionSide 标题显示位置
 * @param array $cols 列设置项
 * @param string $id 组件唯一 id
 * @param bool $static 是否静态展示
 * @param string $staticOn 是否静态展示的条件
 * @param string $staticPlaceholder 静态展示空值占位
 * @param string $staticClassName 静态展示类名
 * @param string $staticLabelClassName 静态展示标签类名
 * @param string $staticInputClassName 静态展示表单项类名
 * @param array $staticSchema 自定义静态展示 schema
 * @param bool $hidden 是否隐藏
 * @param string $hiddenOn 是否隐藏表达式
 * 
 * @return \AmisSchema\Widget\Display\TableView
 */
function AmisTableView(
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $width = null,
    mixed $padding = null,
    mixed $border = null,
    mixed $borderColor = null,
    mixed $trs = null,
    mixed $caption = null,
    mixed $captionSide = null,
    mixed $cols = null,
    mixed $id = null,
    mixed $static = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $hidden = null,
    mixed $hiddenOn = null
): \AmisSchema\Widget\Display\TableView
{
    $args = [];
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($width !== null) $args['width'] = $width;
    if ($padding !== null) $args['padding'] = $padding;
    if ($border !== null) $args['border'] = $border;
    if ($borderColor !== null) $args['borderColor'] = $borderColor;
    if ($trs !== null) $args['trs'] = $trs;
    if ($caption !== null) $args['caption'] = $caption;
    if ($captionSide !== null) $args['captionSide'] = $captionSide;
    if ($cols !== null) $args['cols'] = $cols;
    if ($id !== null) $args['id'] = $id;
    if ($static !== null) $args['static'] = $static;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    return \AmisSchema\Widget\Display\TableView::make($args);
}

/**
 * 创建 Tag 组件
 * 
 * @param string $label 标签内容
 * @param string $icon status 模式下的前置图标
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $displayMode 展现模式，可选：normal、rounded、status
 * @param string $color 颜色主题，支持预设主题或自定义色值
 * @param bool $closable 是否展示关闭按钮
 * 
 * @return \AmisSchema\Widget\Display\Tag
 */
function AmisTag(
    mixed $label = null,
    mixed $icon = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $displayMode = null,
    mixed $color = null,
    mixed $closable = null
): \AmisSchema\Widget\Display\Tag
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($icon !== null) $args['icon'] = $icon;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($displayMode !== null) $args['displayMode'] = $displayMode;
    if ($color !== null) $args['color'] = $color;
    if ($closable !== null) $args['closable'] = $closable;
    return \AmisSchema\Widget\Display\Tag::make($args);
}

/**
 * 创建 Timeline 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string|\AmisSchema\Definition\API|array $source 设置远程数据源
 * @param string $mode 展示模式：left-左侧显示、right-右侧显示、alternate-交替显示
 * @param string $direction 时间轴方向：vertical-垂直、horizontal-水平
 * @param bool $reverse 是否反向展示时间轴
 * @param string $itemTitleClassName 节点标题的类名
 * @param string $itemDetailClassName 节点详情的类名
 * 
 * @return \AmisSchema\Widget\Display\Timeline
 */
function AmisTimeline(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $mode = null,
    mixed $direction = null,
    mixed $reverse = null,
    mixed $itemTitleClassName = null,
    mixed $itemDetailClassName = null
): \AmisSchema\Widget\Display\Timeline
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($source !== null) $args['source'] = $source;
    if ($mode !== null) $args['mode'] = $mode;
    if ($direction !== null) $args['direction'] = $direction;
    if ($reverse !== null) $args['reverse'] = $reverse;
    if ($itemTitleClassName !== null) $args['itemTitleClassName'] = $itemTitleClassName;
    if ($itemDetailClassName !== null) $args['itemDetailClassName'] = $itemDetailClassName;
    return \AmisSchema\Widget\Display\Timeline::make($args);
}

/**
 * 创建 Tpl 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $tpl 配置模板内容，支持变量替换和表达式
 * @param bool $showNativeTitle 是否设置外层 DOM 节点的 title 属性为文本内容
 * 
 * @return \AmisSchema\Widget\Display\Tpl
 */
function AmisTpl(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $tpl = null,
    mixed $showNativeTitle = null
): \AmisSchema\Widget\Display\Tpl
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($tpl !== null) $args['tpl'] = $tpl;
    if ($showNativeTitle !== null) $args['showNativeTitle'] = $showNativeTitle;
    return \AmisSchema\Widget\Display\Tpl::make($args);
}

/**
 * 创建 Video 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $src 视频地址
 * @param bool $isLive 是否为直播，支持 flv 和 hls 格式
 * @param string $videoType 指定直播视频格式，可选：video/x-flv、application/x-mpegURL
 * @param string $poster 视频封面地址
 * @param bool $muted 是否静音
 * @param bool $loop 是否循环播放
 * @param bool $autoPlay 是否自动播放
 * @param array $rates 播放速度倍数，格式为 [1.0, 1.5, 2.0]
 * @param array $frames 视频帧配置，key 为时刻信息，value 为图片地址
 * @param int $jumpBufferDuration 点击帧时提前跳转的秒数
 * @param bool $stopOnNextFrame 到达下一帧时是否自动停止
 * 
 * @return \AmisSchema\Widget\Display\Video
 */
function AmisVideo(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $src = null,
    mixed $isLive = null,
    mixed $videoType = null,
    mixed $poster = null,
    mixed $muted = null,
    mixed $loop = null,
    mixed $autoPlay = null,
    mixed $rates = null,
    mixed $frames = null,
    mixed $jumpBufferDuration = null,
    mixed $stopOnNextFrame = null
): \AmisSchema\Widget\Display\Video
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($src !== null) $args['src'] = $src;
    if ($isLive !== null) $args['isLive'] = $isLive;
    if ($videoType !== null) $args['videoType'] = $videoType;
    if ($poster !== null) $args['poster'] = $poster;
    if ($muted !== null) $args['muted'] = $muted;
    if ($loop !== null) $args['loop'] = $loop;
    if ($autoPlay !== null) $args['autoPlay'] = $autoPlay;
    if ($rates !== null) $args['rates'] = $rates;
    if ($frames !== null) $args['frames'] = $frames;
    if ($jumpBufferDuration !== null) $args['jumpBufferDuration'] = $jumpBufferDuration;
    if ($stopOnNextFrame !== null) $args['stopOnNextFrame'] = $stopOnNextFrame;
    return \AmisSchema\Widget\Display\Video::make($args);
}

/**
 * 创建 ButtonGroupSelect 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param bool $vertical 设置是否使用垂直模式，默认为 false
 * @param bool $tiled 设置是否使用平铺模式，默认为 false
 * @param string $btnLevel 设置按钮样式，支持：link、primary、secondary、info、success、warning、danger、light、dark、default，默认为 "default"
 * @param string $btnActiveLevel 设置选中按钮样式，配置同btnLevel，默认为 "default"
 * @param bool $clearable 设置是否可清空
 * @param string $resetValue 设置清除后设置此配置项给定的值
 * 
 * @return \AmisSchema\Widget\Input\ButtonGroupSelect
 */
function AmisButtonGroupSelect(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $vertical = null,
    mixed $tiled = null,
    mixed $btnLevel = null,
    mixed $btnActiveLevel = null,
    mixed $clearable = null,
    mixed $resetValue = null
): \AmisSchema\Widget\Input\ButtonGroupSelect
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($vertical !== null) $args['vertical'] = $vertical;
    if ($tiled !== null) $args['tiled'] = $tiled;
    if ($btnLevel !== null) $args['btnLevel'] = $btnLevel;
    if ($btnActiveLevel !== null) $args['btnActiveLevel'] = $btnActiveLevel;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\ButtonGroupSelect::make($args);
}

/**
 * 创建 ButtonToolbar 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array|\AmisSchema\Widget\Function\Action[] $buttons 设置按钮组
 * 
 * @return \AmisSchema\Widget\Input\ButtonToolbar
 */
function AmisButtonToolbar(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $buttons = null
): \AmisSchema\Widget\Input\ButtonToolbar
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($buttons !== null) $args['buttons'] = $buttons;
    return \AmisSchema\Widget\Input\ButtonToolbar::make($args);
}

/**
 * 创建 ChainedSelect 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * 
 * @return \AmisSchema\Widget\Input\ChainedSelect
 */
function AmisChainedSelect(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null
): \AmisSchema\Widget\Input\ChainedSelect
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    return \AmisSchema\Widget\Input\ChainedSelect::make($args);
}

/**
 * 创建 ChartRadios 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $config echart 图表配置
 * @param bool $showTooltipOnHighlight 高亮的时候是否显示 tooltip
 * @param string $chartValueField 图表数值字段名
 * 
 * @return \AmisSchema\Widget\Input\ChartRadios
 */
function AmisChartRadios(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $config = null,
    mixed $showTooltipOnHighlight = null,
    mixed $chartValueField = null
): \AmisSchema\Widget\Input\ChartRadios
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($config !== null) $args['config'] = $config;
    if ($showTooltipOnHighlight !== null) $args['showTooltipOnHighlight'] = $showTooltipOnHighlight;
    if ($chartValueField !== null) $args['chartValueField'] = $chartValueField;
    return \AmisSchema\Widget\Input\ChartRadios::make($args);
}

/**
 * 创建 Checkbox 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $option 设置选项说明
 * @param string|int|bool $trueValue 设置标识真值，默认为 true
 * @param string|int|bool $falseValue 设置标识假值，默认为 false
 * @param string $optionType 设置设置 option 类型，支持 default、button
 * 
 * @return \AmisSchema\Widget\Input\Checkbox
 */
function AmisCheckbox(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $option = null,
    mixed $trueValue = null,
    mixed $falseValue = null,
    mixed $optionType = null
): \AmisSchema\Widget\Input\Checkbox
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($option !== null) $args['option'] = $option;
    if ($trueValue !== null) $args['trueValue'] = $trueValue;
    if ($falseValue !== null) $args['falseValue'] = $falseValue;
    if ($optionType !== null) $args['optionType'] = $optionType;
    return \AmisSchema\Widget\Input\Checkbox::make($args);
}

/**
 * 创建 Checkboxes 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param int|array $columnsCount 设置选项按几列显示，默认为1，支持数组形式手动控制每行显示的列数
 * @param string $menuTpl 设置支持自定义选项渲染
 * @param string $optionType 设置按钮模式，支持 default、button，默认为 "default"
 * @param string $itemClassName 设置选项样式类名
 * 
 * @return \AmisSchema\Widget\Input\Checkboxes
 */
function AmisCheckboxes(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $columnsCount = null,
    mixed $menuTpl = null,
    mixed $optionType = null,
    mixed $itemClassName = null
): \AmisSchema\Widget\Input\Checkboxes
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($columnsCount !== null) $args['columnsCount'] = $columnsCount;
    if ($menuTpl !== null) $args['menuTpl'] = $menuTpl;
    if ($optionType !== null) $args['optionType'] = $optionType;
    if ($itemClassName !== null) $args['itemClassName'] = $itemClassName;
    return \AmisSchema\Widget\Input\Checkboxes::make($args);
}

/**
 * 创建 Combo 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $formClassName 设置单组表单项的类名
 * @param array|\AmisSchema\Widget\Input\FormItem[] $items 设置组合展示的表单项
 * @param bool $noBorder 设置单组表单项是否显示边框，默认为 false
 * @param array|\AmisSchema\Widget\Input\FormItem $scaffold 设置单组表单项初始值，默认为空对象
 * @param bool $multiple 设置是否多选，默认为 false
 * @param int $perPage 设置配置正整数后支持分页展示，默认为 0
 * @param bool $multiLine 设置是否竖着展示，默认是横着展示一排，设置以后竖着展示，默认为 false
 * @param int $minLength 设置最少添加的条数，2.4.1 版本后支持变量
 * @param int $maxLength 设置最多添加的条数，2.4.1 版本后支持变量
 * @param bool $flat 设置是否将结果扁平化(去掉name)，只有当items的length为1且multiple为true的时候才有效，默认为 false
 * @param bool $joinValues 设置默认为 true，当扁平化开启的时候，是否用分隔符的形式发送给后端，否则采用 array 的方式
 * @param string $delimiter 设置当扁平化开启并且joinValues为true时，用什么分隔符
 * @param bool $addable 设置是否可新增，默认为 false
 * @param bool $addAtTop 设置在顶部添加，默认为 false
 * @param string $addButtonText 设置新增按钮文字，默认为"新增"
 * @param string $addButtonClassName 设置新增按钮 CSS 类名
 * @param array|\AmisSchema\Widget\Function\Button $addBtn 设置自定义新增按钮，可新增自定义配置渲染新增按钮，在tabsMode: true下不生效
 * @param bool $removable 设置是否可删除，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置如果配置了，则删除前会发送一个 api，请求成功才完成删除
 * @param string $deleteConfirmText 设置删除时用来做用户确认，默认为"确认要删除？"
 * @param array|string|\AmisSchema\Widget\Function\Button $deleteBtn 设置自定义删除按钮，只有当removable为 true 时有效；如果为string则为按钮的文本；如果为Button则根据配置渲染删除按钮
 * @param bool $draggable 设置是否可以拖动排序，需要注意的是当启用拖动排序的时候，会多一个$id字段，默认为 false
 * @param string $draggableTip 设置可拖拽的提示文字
 * @param bool $nullable 设置允许为空，如果子表单项里面配置验证器，且又是单条模式。可以允许用户选择清空（不填），默认为 false
 * @param bool $justify 设置默认 false，可以让所有列的宽度相等，多列的时候生效
 * @param array|string[] $syncFields 设置配置同步字段，只有 strictMode 为 false 时有效，默认为空数组
 * @param bool $typeSwitchable 设置是否可切换条件，配合conditions使用，默认为 false
 * @param bool $tabsMode 设置采用 Tabs 展示方式，默认为 false
 * @param string $tabsStyle 设置Tabs 的展示模式，可选值：line、card、radio、vertical
 * @param string $tabsLabelTpl 设置选项卡标题的生成模板，默认为："成员 \${index|plus}"
 * @param bool $canAccessSuperData 设置指定是否可以自动获取上层的数据并映射到表单项上，默认为 false
 * @param bool $lazyLoad 设置是否为懒加载模式，如果是，则需要点击展开才会渲染内部
 * @param string $subFormMode 设置子表单模式，可选normal、horizontal、inline，默认为 "normal"
 * @param string $itemClassName 设置单组 CSS 类
 * @param string $itemsWrapperClassName 设置组合区域 CSS 类
 * 
 * @return \AmisSchema\Widget\Input\Combo
 */
function AmisCombo(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $formClassName = null,
    mixed $items = null,
    mixed $noBorder = null,
    mixed $scaffold = null,
    mixed $multiple = null,
    mixed $perPage = null,
    mixed $multiLine = null,
    mixed $minLength = null,
    mixed $maxLength = null,
    mixed $flat = null,
    mixed $joinValues = null,
    mixed $delimiter = null,
    mixed $addable = null,
    mixed $addAtTop = null,
    mixed $addButtonText = null,
    mixed $addButtonClassName = null,
    mixed $addBtn = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $deleteConfirmText = null,
    mixed $deleteBtn = null,
    mixed $draggable = null,
    mixed $draggableTip = null,
    mixed $nullable = null,
    mixed $justify = null,
    mixed $syncFields = null,
    mixed $typeSwitchable = null,
    mixed $tabsMode = null,
    mixed $tabsStyle = null,
    mixed $tabsLabelTpl = null,
    mixed $canAccessSuperData = null,
    mixed $lazyLoad = null,
    mixed $subFormMode = null,
    mixed $itemClassName = null,
    mixed $itemsWrapperClassName = null
): \AmisSchema\Widget\Input\Combo
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($formClassName !== null) $args['formClassName'] = $formClassName;
    if ($items !== null) $args['items'] = $items;
    if ($noBorder !== null) $args['noBorder'] = $noBorder;
    if ($scaffold !== null) $args['scaffold'] = $scaffold;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($perPage !== null) $args['perPage'] = $perPage;
    if ($multiLine !== null) $args['multiLine'] = $multiLine;
    if ($minLength !== null) $args['minLength'] = $minLength;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($flat !== null) $args['flat'] = $flat;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($addable !== null) $args['addable'] = $addable;
    if ($addAtTop !== null) $args['addAtTop'] = $addAtTop;
    if ($addButtonText !== null) $args['addButtonText'] = $addButtonText;
    if ($addButtonClassName !== null) $args['addButtonClassName'] = $addButtonClassName;
    if ($addBtn !== null) $args['addBtn'] = $addBtn;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($deleteConfirmText !== null) $args['deleteConfirmText'] = $deleteConfirmText;
    if ($deleteBtn !== null) $args['deleteBtn'] = $deleteBtn;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($draggableTip !== null) $args['draggableTip'] = $draggableTip;
    if ($nullable !== null) $args['nullable'] = $nullable;
    if ($justify !== null) $args['justify'] = $justify;
    if ($syncFields !== null) $args['syncFields'] = $syncFields;
    if ($typeSwitchable !== null) $args['typeSwitchable'] = $typeSwitchable;
    if ($tabsMode !== null) $args['tabsMode'] = $tabsMode;
    if ($tabsStyle !== null) $args['tabsStyle'] = $tabsStyle;
    if ($tabsLabelTpl !== null) $args['tabsLabelTpl'] = $tabsLabelTpl;
    if ($canAccessSuperData !== null) $args['canAccessSuperData'] = $canAccessSuperData;
    if ($lazyLoad !== null) $args['lazyLoad'] = $lazyLoad;
    if ($subFormMode !== null) $args['subFormMode'] = $subFormMode;
    if ($itemClassName !== null) $args['itemClassName'] = $itemClassName;
    if ($itemsWrapperClassName !== null) $args['itemsWrapperClassName'] = $itemsWrapperClassName;
    return \AmisSchema\Widget\Input\Combo::make($args);
}

/**
 * 创建 ConditionBuilder 组件
 * 
 * @param string $title 设置弹窗配置的顶部标题
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $fieldClassName 设置输入字段的类名
 * @param string|\AmisSchema\Definition\API $source 设置通过远程拉取配置项
 * @param bool $embed 设置内嵌展示，默认为 true
 * @param array $fields 设置字段配置
 * @param bool $showANDOR 设置用于 simple 模式下显示切换按钮
 * @param bool $showNot 设置是否显示「非」按钮
 * @param bool $draggable 设置是否可拖拽，默认为 true
 * @param bool $searchable 设置字段是否可搜索
 * @param string $selectMode 设置组合条件左侧选项类型，可选值：list、tree、chained，默认为 "list"
 * @param string $addBtnVisibleOn 设置表达式：控制按钮"添加条件"的显示。参数为depth、breadth，分别代表深度、长度。表达式需要返回boolean类型
 * @param string $addGroupBtnVisibleOn 设置表达式：控制按钮"添加条件组"的显示。参数为depth、breadth，分别代表深度、长度。表达式需要返回boolean类型
 * @param array $formula 设置字段输入控件变成公式编辑器
 * @param bool $showIf 设置开启后条件中额外还能配置启动条件
 * @param array $formulaForIf 设置给 showIF 表达式用的公式信息
 * 
 * @return \AmisSchema\Widget\Input\ConditionBuilder
 */
function AmisConditionBuilder(
    mixed $title = null,
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $fieldClassName = null,
    mixed $source = null,
    mixed $embed = null,
    mixed $fields = null,
    mixed $showANDOR = null,
    mixed $showNot = null,
    mixed $draggable = null,
    mixed $searchable = null,
    mixed $selectMode = null,
    mixed $addBtnVisibleOn = null,
    mixed $addGroupBtnVisibleOn = null,
    mixed $formula = null,
    mixed $showIf = null,
    mixed $formulaForIf = null
): \AmisSchema\Widget\Input\ConditionBuilder
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($fieldClassName !== null) $args['fieldClassName'] = $fieldClassName;
    if ($source !== null) $args['source'] = $source;
    if ($embed !== null) $args['embed'] = $embed;
    if ($fields !== null) $args['fields'] = $fields;
    if ($showANDOR !== null) $args['showANDOR'] = $showANDOR;
    if ($showNot !== null) $args['showNot'] = $showNot;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($selectMode !== null) $args['selectMode'] = $selectMode;
    if ($addBtnVisibleOn !== null) $args['addBtnVisibleOn'] = $addBtnVisibleOn;
    if ($addGroupBtnVisibleOn !== null) $args['addGroupBtnVisibleOn'] = $addGroupBtnVisibleOn;
    if ($formula !== null) $args['formula'] = $formula;
    if ($showIf !== null) $args['showIf'] = $showIf;
    if ($formulaForIf !== null) $args['formulaForIf'] = $formulaForIf;
    return \AmisSchema\Widget\Input\ConditionBuilder::make($args);
}

/**
 * 创建 Control 组件
 * 
 * @param string $label 组件标签
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $body 组件内容
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $description 
 * 
 * @return \AmisSchema\Widget\Input\Control
 */
function AmisControl(
    mixed $label = null,
    mixed $body = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $description = null
): \AmisSchema\Widget\Input\Control
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($body !== null) $args['body'] = $body;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($description !== null) $args['description'] = $description;
    return \AmisSchema\Widget\Input\Control::make($args);
}

/**
 * 创建 DiffEditor 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $language 编辑器高亮的语言，默认为 'javascript'
 * @param string $diffValue 左侧值，用于对比的基础内容
 * @param array $options Monaco 编辑器的其它配置选项
 * 
 * @return \AmisSchema\Widget\Input\DiffEditor
 */
function AmisDiffEditor(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $language = null,
    mixed $diffValue = null,
    mixed $options = null
): \AmisSchema\Widget\Input\DiffEditor
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($language !== null) $args['language'] = $language;
    if ($diffValue !== null) $args['diffValue'] = $diffValue;
    if ($options !== null) $args['options'] = $options;
    return \AmisSchema\Widget\Input\DiffEditor::make($args);
}

/**
 * 创建 Editor 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $language 编辑器高亮的语言，默认为 'javascript'
 * @param bool $allowFullscreen 是否显示全屏模式开关，默认为 false
 * @param array $options monaco 编辑器的其它配置，比如是否显示行号等
 * @param string $editorDidMount 编辑器挂载完成后的回调函数
 * 
 * @return \AmisSchema\Widget\Input\Editor
 */
function AmisEditor(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $language = null,
    mixed $allowFullscreen = null,
    mixed $options = null,
    mixed $editorDidMount = null
): \AmisSchema\Widget\Input\Editor
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($language !== null) $args['language'] = $language;
    if ($allowFullscreen !== null) $args['allowFullscreen'] = $allowFullscreen;
    if ($options !== null) $args['options'] = $options;
    if ($editorDidMount !== null) $args['editorDidMount'] = $editorDidMount;
    return \AmisSchema\Widget\Input\Editor::make($args);
}

/**
 * 创建 FieldSet 组件
 * 
 * @param string|array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $title 标题
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param array|\AmisSchema\Widget\Input\FormItem[] $body 表单项集合
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $headingClassName 标题 CSS 类名
 * @param string $bodyClassName 内容区域 CSS 类名
 * @param bool $collapsable 是否可折叠，默认为 false
 * @param bool $collapsed 默认是否折叠，默认为 false
 * @param string|array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $collapseTitle 收起的标题，默认为 '收起'
 * @param string $titlePosition 标题位置，支持 'top'、'bottom'
 * 
 * @return \AmisSchema\Widget\Input\FieldSet
 */
function AmisFieldSet(
    mixed $title = null,
    mixed $label = null,
    mixed $name = null,
    mixed $body = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $headingClassName = null,
    mixed $bodyClassName = null,
    mixed $collapsable = null,
    mixed $collapsed = null,
    mixed $collapseTitle = null,
    mixed $titlePosition = null
): \AmisSchema\Widget\Input\FieldSet
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($body !== null) $args['body'] = $body;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($headingClassName !== null) $args['headingClassName'] = $headingClassName;
    if ($bodyClassName !== null) $args['bodyClassName'] = $bodyClassName;
    if ($collapsable !== null) $args['collapsable'] = $collapsable;
    if ($collapsed !== null) $args['collapsed'] = $collapsed;
    if ($collapseTitle !== null) $args['collapseTitle'] = $collapseTitle;
    if ($titlePosition !== null) $args['titlePosition'] = $titlePosition;
    return \AmisSchema\Widget\Input\FieldSet::make($args);
}

/**
 * 创建 Form 组件
 * 
 * @param string $title 设置表单标题。
 * @param string $name 设置表单名称，方便其他组件通信。
 * @param \AmisSchema\Widget\Input\FormItem[]|\AmisSchema\Widget\Widget[] $body 设置表单项集合。
 * @param string|\AmisSchema\Definition\API $api 设置表单提交接口。
 * @param string $className 设置外层 dom 类名。
 * @param mixed $style 
 * @param string $reload 设置提交成功后刷新目标对象。
 * @param string $redirect 设置提交成功后跳转到的地址。
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $mode 设置表单展示方式，可选值：'normal'、'horizontal'、'inline'。
 * @param \AmisSchema\Widget\Function\Action[]|\AmisSchema\Widget\Widget[] $actions 设置表单按钮组。
 * @param bool $wrapWithPanel 设置是否让表单用 panel 包裹。
 * @param string $panelClassName 设置外层 panel 的类名。
 * @param string|\AmisSchema\Definition\API $initApi 设置初始数据接口。
 * @param int $interval 设置刷新时间间隔（毫秒）。
 * @param bool $silentPolling 设置配置刷新时是否静默。
 * @param string $stopAutoRefreshWhen 设置停止自动刷新的条件。
 * @param string|\AmisSchema\Definition\API $initAsyncApi 设置异步初始数据接口。
 * @param bool $initFetch 设置是否初始拉取数据。
 * @param string $initFetchOn 设置初始是否拉取数据的表达式。
 * @param string $initFinishedField 设置异步请求完成后的字段名。
 * @param int $initCheckInterval 设置异步请求轮询间隔。
 * @param string|\AmisSchema\Definition\API $asyncApi 设置设置此属性后，表单提交发送保存接口后，还会继续轮询请求该接口，直到返回 finished 属性为 true 才 结束。
 * @param int $checkInterval 设置轮询请求的时间间隔。
 * @param string $finishedField 设置如果决定结束的字段名不是 finished 请设置此属性。
 * @param string $submitText 设置默认的提交按钮名称。
 * @param bool $autoFocus 设置是否自动聚焦第一个表单项。
 * @param bool $canAccessSuperData 设置指定是否可以自动获取上层的数据并映射到表单项上。
 * @param string $persistData 设置指定一个唯一的 key，来配置当前表单在 LocalStorage 中缓存的 key。
 * @param bool $clearPersistDataAfterSubmit 设置指定表单提交成功后是否清除本地缓存。
 * @param bool $preventEnterSubmit 设置禁用回车提交功能。
 * @param bool $trimValues 设置是否去除提交数据中的空白字符。
 * @param bool $promptPageLeave 设置页面离开提示。
 * @param bool $submitOnChange 设置表单修改即提交。
 * @param bool $submitOnInit 设置初始就提交一次。
 * @param bool $resetAfterSubmit 设置提交后是否重置表单。
 * @param string $primaryField 设置设置主键 id，当设置后，检测表单是否完成时（asyncApi），只会携带此数据。
 * @param string $target 设置默认表单提交自己会通过发送 api 保存数据，但是也可以设定另外一个 form 的 name 值，或者另外一个 `CRUD` 模型上的 name 值。
 * @param int $columnCount 设置表单项显示为几列。
 * @param bool $inherit 设置默认表单是独立的，如果想要看到上层数据，需要明确指定这个属性。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param bool $debug 设置开启调试，就会在表单顶部实时显示表单项数据。
 * @param string $messagesFetchSuccess 设置获取成功时提示。
 * @param string $messagesFetchFailed 设置获取失败时提示。
 * @param string $messagesSaveSuccess 设置保存成功时提示。
 * @param string $messagesSaveFailed 设置保存失败时提示。
 * @param string $messagesValidateFailed 设置表单验证失败时的提示。
 * @param string[] $persistDataKeys 设置本地缓存的 key 列表。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param bool $closeDialogOnSubmit 设置提交时是否关闭弹窗。
 * @param string $labelAlign "right" | "left" 设置表单项标签对齐方式，仅在 horizontal 时生效。
 * @param int|string $labelWidth 设置表单项标签自定义宽度。
 * @param bool $inheritData 设置是否共用上层数据域。
 * 
 * @return \AmisSchema\Widget\Input\Form
 */
function AmisForm(
    mixed $title = null,
    mixed $name = null,
    mixed $body = null,
    mixed $api = null,
    mixed $className = null,
    mixed $style = null,
    mixed $reload = null,
    mixed $redirect = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $mode = null,
    mixed $actions = null,
    mixed $wrapWithPanel = null,
    mixed $panelClassName = null,
    mixed $initApi = null,
    mixed $interval = null,
    mixed $silentPolling = null,
    mixed $stopAutoRefreshWhen = null,
    mixed $initAsyncApi = null,
    mixed $initFetch = null,
    mixed $initFetchOn = null,
    mixed $initFinishedField = null,
    mixed $initCheckInterval = null,
    mixed $asyncApi = null,
    mixed $checkInterval = null,
    mixed $finishedField = null,
    mixed $submitText = null,
    mixed $autoFocus = null,
    mixed $canAccessSuperData = null,
    mixed $persistData = null,
    mixed $clearPersistDataAfterSubmit = null,
    mixed $preventEnterSubmit = null,
    mixed $trimValues = null,
    mixed $promptPageLeave = null,
    mixed $submitOnChange = null,
    mixed $submitOnInit = null,
    mixed $resetAfterSubmit = null,
    mixed $primaryField = null,
    mixed $target = null,
    mixed $columnCount = null,
    mixed $inherit = null,
    mixed $staticOn = null,
    mixed $debug = null,
    mixed $messagesFetchSuccess = null,
    mixed $messagesFetchFailed = null,
    mixed $messagesSaveSuccess = null,
    mixed $messagesSaveFailed = null,
    mixed $messagesValidateFailed = null,
    mixed $persistDataKeys = null,
    mixed $staticClassName = null,
    mixed $closeDialogOnSubmit = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $inheritData = null
): \AmisSchema\Widget\Input\Form
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($name !== null) $args['name'] = $name;
    if ($body !== null) $args['body'] = $body;
    if ($api !== null) $args['api'] = $api;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($reload !== null) $args['reload'] = $reload;
    if ($redirect !== null) $args['redirect'] = $redirect;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($mode !== null) $args['mode'] = $mode;
    if ($actions !== null) $args['actions'] = $actions;
    if ($wrapWithPanel !== null) $args['wrapWithPanel'] = $wrapWithPanel;
    if ($panelClassName !== null) $args['panelClassName'] = $panelClassName;
    if ($initApi !== null) $args['initApi'] = $initApi;
    if ($interval !== null) $args['interval'] = $interval;
    if ($silentPolling !== null) $args['silentPolling'] = $silentPolling;
    if ($stopAutoRefreshWhen !== null) $args['stopAutoRefreshWhen'] = $stopAutoRefreshWhen;
    if ($initAsyncApi !== null) $args['initAsyncApi'] = $initAsyncApi;
    if ($initFetch !== null) $args['initFetch'] = $initFetch;
    if ($initFetchOn !== null) $args['initFetchOn'] = $initFetchOn;
    if ($initFinishedField !== null) $args['initFinishedField'] = $initFinishedField;
    if ($initCheckInterval !== null) $args['initCheckInterval'] = $initCheckInterval;
    if ($asyncApi !== null) $args['asyncApi'] = $asyncApi;
    if ($checkInterval !== null) $args['checkInterval'] = $checkInterval;
    if ($finishedField !== null) $args['finishedField'] = $finishedField;
    if ($submitText !== null) $args['submitText'] = $submitText;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($canAccessSuperData !== null) $args['canAccessSuperData'] = $canAccessSuperData;
    if ($persistData !== null) $args['persistData'] = $persistData;
    if ($clearPersistDataAfterSubmit !== null) $args['clearPersistDataAfterSubmit'] = $clearPersistDataAfterSubmit;
    if ($preventEnterSubmit !== null) $args['preventEnterSubmit'] = $preventEnterSubmit;
    if ($trimValues !== null) $args['trimValues'] = $trimValues;
    if ($promptPageLeave !== null) $args['promptPageLeave'] = $promptPageLeave;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($submitOnInit !== null) $args['submitOnInit'] = $submitOnInit;
    if ($resetAfterSubmit !== null) $args['resetAfterSubmit'] = $resetAfterSubmit;
    if ($primaryField !== null) $args['primaryField'] = $primaryField;
    if ($target !== null) $args['target'] = $target;
    if ($columnCount !== null) $args['columnCount'] = $columnCount;
    if ($inherit !== null) $args['inherit'] = $inherit;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($debug !== null) $args['debug'] = $debug;
    if ($messagesFetchSuccess !== null) $args['messagesFetchSuccess'] = $messagesFetchSuccess;
    if ($messagesFetchFailed !== null) $args['messagesFetchFailed'] = $messagesFetchFailed;
    if ($messagesSaveSuccess !== null) $args['messagesSaveSuccess'] = $messagesSaveSuccess;
    if ($messagesSaveFailed !== null) $args['messagesSaveFailed'] = $messagesSaveFailed;
    if ($messagesValidateFailed !== null) $args['messagesValidateFailed'] = $messagesValidateFailed;
    if ($persistDataKeys !== null) $args['persistDataKeys'] = $persistDataKeys;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($closeDialogOnSubmit !== null) $args['closeDialogOnSubmit'] = $closeDialogOnSubmit;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($inheritData !== null) $args['inheritData'] = $inheritData;
    return \AmisSchema\Widget\Input\Form::make($args);
}

/**
 * 创建 FormItem 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\FormItem
 */
function AmisFormItem(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\FormItem
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\FormItem::make($args);
}

/**
 * 创建 Formula 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $formula 应用的公式
 * @param string $condition 公式作用条件
 * @param bool $initSet 初始化时是否设置
 * @param bool $autoSet 观察公式结果，如果计算结果有变化，则自动应用到变量上
 * @param string $id 定义个名字，当某个按钮的目标指定为此值后，会触发一次公式应用。这个机制可以在 autoSet 为 false 时用来手动触发
 * 
 * @return \AmisSchema\Widget\Input\Formula
 */
function AmisFormula(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $formula = null,
    mixed $condition = null,
    mixed $initSet = null,
    mixed $autoSet = null,
    mixed $id = null
): \AmisSchema\Widget\Input\Formula
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($formula !== null) $args['formula'] = $formula;
    if ($condition !== null) $args['condition'] = $condition;
    if ($initSet !== null) $args['initSet'] = $initSet;
    if ($autoSet !== null) $args['autoSet'] = $autoSet;
    if ($id !== null) $args['id'] = $id;
    return \AmisSchema\Widget\Input\Formula::make($args);
}

/**
 * 创建 Group 组件
 * 
 * @param string $label group 的标签
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $body 表单项集合
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $gap 表单项之间的间距，可选：xs、sm、normal
 * @param string $direction 可以配置水平展示还是垂直展示。对应的配置项分别是：vertical、horizontal
 * 
 * @return \AmisSchema\Widget\Input\Group
 */
function AmisGroup(
    mixed $label = null,
    mixed $name = null,
    mixed $body = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $gap = null,
    mixed $direction = null
): \AmisSchema\Widget\Input\Group
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($body !== null) $args['body'] = $body;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($gap !== null) $args['gap'] = $gap;
    if ($direction !== null) $args['direction'] = $direction;
    return \AmisSchema\Widget\Input\Group::make($args);
}

/**
 * 创建 Hidden 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\Hidden
 */
function AmisHidden(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\Hidden
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\Hidden::make($args);
}

/**
 * 创建 InputArray 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array|\AmisSchema\Widget\Widget[] $items 设置成员渲染器配置，配置单项表单类型
 * @param bool $addable 设置是否可新增
 * @param bool $removable 设置是否可删除
 * @param bool $draggable 设置是否可以拖拽排序，需要注意的是当启用拖拽排序的时候，会多一个$id字段，默认为 false
 * @param string $draggableTip 设置可拖拽的提示文字，默认为"可通过拖动每行中的【交换】按钮进行顺序调整"
 * @param string $addButtonText 设置新增按钮文字，默认为"新增"
 * @param int $minLength 设置限制最小长度
 * @param int $maxLength 设置限制最大长度
 * @param mixed $scaffold 设置新增成员时的默认值，一般根据items的数据类型指定需要的默认值
 * 
 * @return \AmisSchema\Widget\Input\InputArray
 */
function AmisInputArray(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $items = null,
    mixed $addable = null,
    mixed $removable = null,
    mixed $draggable = null,
    mixed $draggableTip = null,
    mixed $addButtonText = null,
    mixed $minLength = null,
    mixed $maxLength = null,
    mixed $scaffold = null
): \AmisSchema\Widget\Input\InputArray
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($items !== null) $args['items'] = $items;
    if ($addable !== null) $args['addable'] = $addable;
    if ($removable !== null) $args['removable'] = $removable;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($draggableTip !== null) $args['draggableTip'] = $draggableTip;
    if ($addButtonText !== null) $args['addButtonText'] = $addButtonText;
    if ($minLength !== null) $args['minLength'] = $minLength;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($scaffold !== null) $args['scaffold'] = $scaffold;
    return \AmisSchema\Widget\Input\InputArray::make($args);
}

/**
 * 创建 InputCity 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param bool $allowCity 设置允许选择城市，默认为 true
 * @param bool $allowDistrict 设置允许选择区域，默认为 true
 * 
 * @return \AmisSchema\Widget\Input\InputCity
 */
function AmisInputCity(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $allowCity = null,
    mixed $allowDistrict = null
): \AmisSchema\Widget\Input\InputCity
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($allowCity !== null) $args['allowCity'] = $allowCity;
    if ($allowDistrict !== null) $args['allowDistrict'] = $allowDistrict;
    return \AmisSchema\Widget\Input\InputCity::make($args);
}

/**
 * 创建 InputColor 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param string $format 设置颜色格式，支持 hex、hexa、hls、rgb、rgba
 * @param bool $allowCustomColor 设置是否允许自定义颜色，为 false 时只能选择颜色
 * @param bool $clearable 设置是否显示清除按钮
 * @param string $resetValue 设置清除后表单项值调整成该值
 * 
 * @return \AmisSchema\Widget\Input\InputColor
 */
function AmisInputColor(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $format = null,
    mixed $allowCustomColor = null,
    mixed $clearable = null,
    mixed $resetValue = null
): \AmisSchema\Widget\Input\InputColor
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($format !== null) $args['format'] = $format;
    if ($allowCustomColor !== null) $args['allowCustomColor'] = $allowCustomColor;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\InputColor::make($args);
}

/**
 * 创建 InputDate 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputDate
 */
function AmisInputDate(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputDate
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputDate::make($args);
}

/**
 * 创建 InputDateRange 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputDateRange
 */
function AmisInputDateRange(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputDateRange
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputDateRange::make($args);
}

/**
 * 创建 InputDatetime 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputDatetime
 */
function AmisInputDatetime(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputDatetime
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputDatetime::make($args);
}

/**
 * 创建 InputDatetimeRange 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputDatetimeRange
 */
function AmisInputDatetimeRange(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputDatetimeRange
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputDatetimeRange::make($args);
}

/**
 * 创建 InputExcel 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param bool $allSheets 设置是否解析所有 sheet
 * @param string $parseMode 设置解析模式，支持 array、object
 * @param bool $includeEmpty 设置是否包含空内容
 * @param bool $plainText 设置是否解析为纯文本
 * @param bool $multiple 解析多个文件
 * @param int $maxLength 解析文件最大数
 * 
 * @return \AmisSchema\Widget\Input\InputExcel
 */
function AmisInputExcel(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $allSheets = null,
    mixed $parseMode = null,
    mixed $includeEmpty = null,
    mixed $plainText = null,
    mixed $multiple = null,
    mixed $maxLength = null
): \AmisSchema\Widget\Input\InputExcel
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($allSheets !== null) $args['allSheets'] = $allSheets;
    if ($parseMode !== null) $args['parseMode'] = $parseMode;
    if ($includeEmpty !== null) $args['includeEmpty'] = $includeEmpty;
    if ($plainText !== null) $args['plainText'] = $plainText;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    return \AmisSchema\Widget\Input\InputExcel::make($args);
}

/**
 * 创建 InputFile 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string|array|\AmisSchema\Definition\API $receiver 上传文件接口
 * @param string $accept 默认只支持纯文本，要支持其他类型，请配置此属性为文件后缀
 * @param string $capture 用于控制 input[type = file] 标签的 capture 属性，在移动端可控制输入来源
 * @param bool $asBase64 将文件以base64的形式，赋值给当前组件
 * @param bool $asBlob 将文件以二进制的形式，赋值给当前组件
 * @param int $maxSize 默认没有限制，当设置后，文件大小大于此值将不允许上传。单位为B
 * @param int $maxLength 默认没有限制，当设置后，一次只允许上传指定数量文件
 * @param bool $multiple 是否多选
 * @param bool $drag 是否为拖拽上传
 * @param bool $joinValues 拼接值
 * @param bool $extractValue 提取值
 * @param string $delimiter 拼接符
 * @param bool $autoUpload 是否选择完就自动开始上传
 * @param bool $hideUploadButton 隐藏上传按钮
 * @param string $fileField 如果你不想自己存储，则可以忽略此属性
 * @param string $nameField 接口返回哪个字段用来标识文件名
 * @param string $valueField 文件的值用那个字段来标识
 * @param string $urlField 文件下载地址的字段名
 * @param string $btnLabel 上传按钮的文字
 * @param string|bool $downloadUrl 默认显示文件路径的时候会支持直接下载
 * @param string|bool $useChunk amis 所在服务器，限制了文件上传大小不得超出 10M，所以 amis 在用户选择大文件的时候，自动会改成分块上传模式
 * @param int $chunkSize 分块大小，默认为 5M
 * @param string|array|\AmisSchema\Definition\API $startChunkApi startChunkApi
 * @param string|array|\AmisSchema\Definition\API $chunkApi chunkApi
 * @param string|array|\AmisSchema\Definition\API $finishChunkApi finishChunkApi
 * @param int $concurrency 分块上传时并行个数
 * @param string $documentation 文档内容
 * @param string $documentLink 文档链接
 * @param bool $initAutoFill 初始表单反显时是否执行
 * @param string $invalidTypeMessage 校验格式失败后的提示信息
 * @param string $invalidSizeMessage 校验文件大小失败时显示的文字信息
 * 
 * @return \AmisSchema\Widget\Input\InputFile
 */
function AmisInputFile(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $receiver = null,
    mixed $accept = null,
    mixed $capture = null,
    mixed $asBase64 = null,
    mixed $asBlob = null,
    mixed $maxSize = null,
    mixed $maxLength = null,
    mixed $multiple = null,
    mixed $drag = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $autoUpload = null,
    mixed $hideUploadButton = null,
    mixed $fileField = null,
    mixed $nameField = null,
    mixed $valueField = null,
    mixed $urlField = null,
    mixed $btnLabel = null,
    mixed $downloadUrl = null,
    mixed $useChunk = null,
    mixed $chunkSize = null,
    mixed $startChunkApi = null,
    mixed $chunkApi = null,
    mixed $finishChunkApi = null,
    mixed $concurrency = null,
    mixed $documentation = null,
    mixed $documentLink = null,
    mixed $initAutoFill = null,
    mixed $invalidTypeMessage = null,
    mixed $invalidSizeMessage = null
): \AmisSchema\Widget\Input\InputFile
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($receiver !== null) $args['receiver'] = $receiver;
    if ($accept !== null) $args['accept'] = $accept;
    if ($capture !== null) $args['capture'] = $capture;
    if ($asBase64 !== null) $args['asBase64'] = $asBase64;
    if ($asBlob !== null) $args['asBlob'] = $asBlob;
    if ($maxSize !== null) $args['maxSize'] = $maxSize;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($drag !== null) $args['drag'] = $drag;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($autoUpload !== null) $args['autoUpload'] = $autoUpload;
    if ($hideUploadButton !== null) $args['hideUploadButton'] = $hideUploadButton;
    if ($fileField !== null) $args['fileField'] = $fileField;
    if ($nameField !== null) $args['nameField'] = $nameField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($urlField !== null) $args['urlField'] = $urlField;
    if ($btnLabel !== null) $args['btnLabel'] = $btnLabel;
    if ($downloadUrl !== null) $args['downloadUrl'] = $downloadUrl;
    if ($useChunk !== null) $args['useChunk'] = $useChunk;
    if ($chunkSize !== null) $args['chunkSize'] = $chunkSize;
    if ($startChunkApi !== null) $args['startChunkApi'] = $startChunkApi;
    if ($chunkApi !== null) $args['chunkApi'] = $chunkApi;
    if ($finishChunkApi !== null) $args['finishChunkApi'] = $finishChunkApi;
    if ($concurrency !== null) $args['concurrency'] = $concurrency;
    if ($documentation !== null) $args['documentation'] = $documentation;
    if ($documentLink !== null) $args['documentLink'] = $documentLink;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($invalidTypeMessage !== null) $args['invalidTypeMessage'] = $invalidTypeMessage;
    if ($invalidSizeMessage !== null) $args['invalidSizeMessage'] = $invalidSizeMessage;
    return \AmisSchema\Widget\Input\InputFile::make($args);
}

/**
 * 创建 InputFormula 组件
 * 
 * @param string $title 弹框标题，默认为 '公式编辑器'
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $level 按钮样式，默认为 'default'
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param string $icon 按钮图标，例如 fa fa-list
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $header 编辑器 header 标题，如果不设置，默认使用表单项label字段
 * @param bool $evalMode 表达式模式 或者 模板模式，默认为 true
 * @param string $variableMode 变量展示模式，可配置成 tabs 或者 tree，默认为 'list'
 * @param array $functions 可用函数，默认就是 amis-formula 里面定义的函数
 * @param string $inputMode 控件的展示模式，可选值：button、input-button、input-group
 * @param string $btnLabel 按钮文本，inputMode为button时生效，默认为 '公示编辑'
 * @param bool $allowInput 输入框是否可输入
 * @param string $btnSize 按钮大小，可选值：xs、sm、md、lg
 * @param string $borderMode 输入框边框模式，可选值：full、half、none
 * @param string $variableClassName 变量面板 CSS 样式类名
 * @param string $functionClassName 函数面板 CSS 样式类名
 * @param bool $mixedMode 是否启用混合模式，支持输入文本和输入公式
 * 
 * @return \AmisSchema\Widget\Input\InputFormula
 */
function AmisInputFormula(
    mixed $title = null,
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $level = null,
    mixed $size = null,
    mixed $icon = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $header = null,
    mixed $evalMode = null,
    mixed $variableMode = null,
    mixed $functions = null,
    mixed $inputMode = null,
    mixed $btnLabel = null,
    mixed $allowInput = null,
    mixed $btnSize = null,
    mixed $borderMode = null,
    mixed $variableClassName = null,
    mixed $functionClassName = null,
    mixed $mixedMode = null
): \AmisSchema\Widget\Input\InputFormula
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($level !== null) $args['level'] = $level;
    if ($size !== null) $args['size'] = $size;
    if ($icon !== null) $args['icon'] = $icon;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($header !== null) $args['header'] = $header;
    if ($evalMode !== null) $args['evalMode'] = $evalMode;
    if ($variableMode !== null) $args['variableMode'] = $variableMode;
    if ($functions !== null) $args['functions'] = $functions;
    if ($inputMode !== null) $args['inputMode'] = $inputMode;
    if ($btnLabel !== null) $args['btnLabel'] = $btnLabel;
    if ($allowInput !== null) $args['allowInput'] = $allowInput;
    if ($btnSize !== null) $args['btnSize'] = $btnSize;
    if ($borderMode !== null) $args['borderMode'] = $borderMode;
    if ($variableClassName !== null) $args['variableClassName'] = $variableClassName;
    if ($functionClassName !== null) $args['functionClassName'] = $functionClassName;
    if ($mixedMode !== null) $args['mixedMode'] = $mixedMode;
    return \AmisSchema\Widget\Input\InputFormula::make($args);
}

/**
 * 创建 InputGroup 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param array|\AmisSchema\Widget\Widget[]|\AmisSchema\Widget\Widget $body 表单项集合
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputGroup
 */
function AmisInputGroup(
    mixed $label = null,
    mixed $name = null,
    mixed $body = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputGroup
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($body !== null) $args['body'] = $body;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputGroup::make($args);
}

/**
 * 创建 InputImage 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string|array|\AmisSchema\Definition\API $receiver 上传文件接口
 * @param string $accept 支持的图片类型格式，请配置此属性为图片后缀，例如.jpg, .png
 * @param string $capture 用于控制 input[type = file] 标签的 capture 属性，在移动端可控制输入来源
 * @param int $maxSize 默认没有限制，当设置后，文件大小大于此值将不允许上传。单位为B
 * @param int $maxLength 默认没有限制，当设置后，一次只允许上传指定数量文件
 * @param bool $multiple 是否多选
 * @param bool $joinValues 拼接值
 * @param bool $extractValue 提取值
 * @param string $delimiter 拼接符
 * @param bool $autoUpload 是否选择完就自动开始上传
 * @param bool $hideUploadButton 隐藏上传按钮
 * @param string $fileField 如果你不想自己存储，则可以忽略此属性
 * @param string $cropFormat 裁剪文件格式
 * @param float $cropQuality 裁剪文件格式的质量，用于 jpeg/webp，取值在 0 和 1 之间
 * @param string $frameImage 默认占位图地址
 * @param bool $fixedSize 是否开启固定尺寸, 若开启，需同时设置 fixedSizeClassName
 * @param string $fixedSizeClassName 开启固定尺寸时，根据此值控制展示尺寸。例如h-30, 即图片框高为 h-30, AMIS 将自动缩放比率设置默认图所占位置的宽度，最终上传图片根据此尺寸对应缩放
 * @param bool $initAutoFill 表单反显时是否执行 autoFill
 * @param string|\AmisSchema\Widget\Widget $uploadBtnText 上传按钮文案。支持 tpl、schema 形式配置
 * @param bool $dropCrop 图片上传后是否进入裁剪模式
 * @param bool $initCrop 图片选择器初始化后是否立即进入裁剪模式
 * @param bool $draggable 开启后支持拖拽排序改变图片值顺序
 * @param string $draggableTip 拖拽提示文案
 * @param bool $showErrorModal 校验失败后是否弹窗提醒
 * @param string $invalidTypeMessage 校验格式失败后的提示信息
 * @param string $invalidSizeMessage 校验文件大小失败时显示的文字信息
 * 
 * @return \AmisSchema\Widget\Input\InputImage
 */
function AmisInputImage(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $receiver = null,
    mixed $accept = null,
    mixed $capture = null,
    mixed $maxSize = null,
    mixed $maxLength = null,
    mixed $multiple = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $autoUpload = null,
    mixed $hideUploadButton = null,
    mixed $fileField = null,
    mixed $cropFormat = null,
    mixed $cropQuality = null,
    mixed $frameImage = null,
    mixed $fixedSize = null,
    mixed $fixedSizeClassName = null,
    mixed $initAutoFill = null,
    mixed $uploadBtnText = null,
    mixed $dropCrop = null,
    mixed $initCrop = null,
    mixed $draggable = null,
    mixed $draggableTip = null,
    mixed $showErrorModal = null,
    mixed $invalidTypeMessage = null,
    mixed $invalidSizeMessage = null
): \AmisSchema\Widget\Input\InputImage
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($receiver !== null) $args['receiver'] = $receiver;
    if ($accept !== null) $args['accept'] = $accept;
    if ($capture !== null) $args['capture'] = $capture;
    if ($maxSize !== null) $args['maxSize'] = $maxSize;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($autoUpload !== null) $args['autoUpload'] = $autoUpload;
    if ($hideUploadButton !== null) $args['hideUploadButton'] = $hideUploadButton;
    if ($fileField !== null) $args['fileField'] = $fileField;
    if ($cropFormat !== null) $args['cropFormat'] = $cropFormat;
    if ($cropQuality !== null) $args['cropQuality'] = $cropQuality;
    if ($frameImage !== null) $args['frameImage'] = $frameImage;
    if ($fixedSize !== null) $args['fixedSize'] = $fixedSize;
    if ($fixedSizeClassName !== null) $args['fixedSizeClassName'] = $fixedSizeClassName;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($uploadBtnText !== null) $args['uploadBtnText'] = $uploadBtnText;
    if ($dropCrop !== null) $args['dropCrop'] = $dropCrop;
    if ($initCrop !== null) $args['initCrop'] = $initCrop;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($draggableTip !== null) $args['draggableTip'] = $draggableTip;
    if ($showErrorModal !== null) $args['showErrorModal'] = $showErrorModal;
    if ($invalidTypeMessage !== null) $args['invalidTypeMessage'] = $invalidTypeMessage;
    if ($invalidSizeMessage !== null) $args['invalidSizeMessage'] = $invalidSizeMessage;
    return \AmisSchema\Widget\Input\InputImage::make($args);
}

/**
 * 创建 InputKV 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $valueType 值类型，默认为 "input-text"
 * @param string $keyPlaceholder key 的提示信息
 * @param string $valuePlaceholder value 的提示信息
 * @param bool $draggable 是否可拖拽排序，默认为 true
 * @param bool $autoParseJSON 是否自动转换 json 对象字符串，默认为 true
 * @param array|\AmisSchema\Widget\Widget $valueSchema 自定义 value 的 schema 配置 (3.1.0+)
 * @param array|\AmisSchema\Widget\Widget $keySchema 自定义 key 的 schema 配置 (3.1.0+)
 * 
 * @return \AmisSchema\Widget\Input\InputKV
 */
function AmisInputKV(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $valueType = null,
    mixed $keyPlaceholder = null,
    mixed $valuePlaceholder = null,
    mixed $draggable = null,
    mixed $autoParseJSON = null,
    mixed $valueSchema = null,
    mixed $keySchema = null
): \AmisSchema\Widget\Input\InputKV
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($valueType !== null) $args['valueType'] = $valueType;
    if ($keyPlaceholder !== null) $args['keyPlaceholder'] = $keyPlaceholder;
    if ($valuePlaceholder !== null) $args['valuePlaceholder'] = $valuePlaceholder;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($autoParseJSON !== null) $args['autoParseJSON'] = $autoParseJSON;
    if ($valueSchema !== null) $args['valueSchema'] = $valueSchema;
    if ($keySchema !== null) $args['keySchema'] = $keySchema;
    return \AmisSchema\Widget\Input\InputKV::make($args);
}

/**
 * 创建 InputKVS 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array|\AmisSchema\Widget\Widget $keyItem key 的配置项，可以设置 key 值控件类型
 * @param array|\AmisSchema\Widget\Widget[] $valueItems value 的配置项，配置成数组，支持任意表单项
 * @param string $addButtonText 新增按钮文字，默认为"新增"
 * @param bool $draggable 是否可拖拽排序，默认为 true
 * @param bool $valueIsArray 值是否为数组类型，默认为 false
 * 
 * @return \AmisSchema\Widget\Input\InputKVS
 */
function AmisInputKVS(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $keyItem = null,
    mixed $valueItems = null,
    mixed $addButtonText = null,
    mixed $draggable = null,
    mixed $valueIsArray = null
): \AmisSchema\Widget\Input\InputKVS
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($keyItem !== null) $args['keyItem'] = $keyItem;
    if ($valueItems !== null) $args['valueItems'] = $valueItems;
    if ($addButtonText !== null) $args['addButtonText'] = $addButtonText;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($valueIsArray !== null) $args['valueIsArray'] = $valueIsArray;
    return \AmisSchema\Widget\Input\InputKVS::make($args);
}

/**
 * 创建 InputMonth 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputMonth
 */
function AmisInputMonth(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputMonth
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputMonth::make($args);
}

/**
 * 创建 InputMonthRange 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $format 设置日期选择器值格式，默认为 "X"
 * @param string $inputFormat 设置日期选择器显示格式，默认为 "YYYY-DD"
 * 
 * @return \AmisSchema\Widget\Input\InputMonthRange
 */
function AmisInputMonthRange(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $format = null,
    mixed $inputFormat = null
): \AmisSchema\Widget\Input\InputMonthRange
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($format !== null) $args['format'] = $format;
    if ($inputFormat !== null) $args['inputFormat'] = $inputFormat;
    return \AmisSchema\Widget\Input\InputMonthRange::make($args);
}

/**
 * 创建 InputNumber 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param int|string $min 最小值
 * @param int|string $max 最大值
 * @param int|float $step 步长
 * @param int $precision 精度，即小数点后几位，支持 0 和正整数
 * @param bool $showSteps 是否显示上下点击按钮
 * @param string $prefix 前缀
 * @param string $suffix 后缀
 * @param string[] $unitOptions 单位选项
 * @param bool $kilobitSeparator 千分分隔
 * @param bool $keyboard 键盘事件（方向上下）
 * @param bool $big 是否使用大数
 * @param string $displayMode 样式类型
 * @param string $borderMode 边框模式，全边框，还是半边框，或者没边框
 * @param int|string $resetValue 清空输入内容时，组件值将设置为 resetValue
 * @param bool $clearValueOnEmpty 内容为空时从数据域中删除该表单项对应的值
 * 
 * @return \AmisSchema\Widget\Input\InputNumber
 */
function AmisInputNumber(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $min = null,
    mixed $max = null,
    mixed $step = null,
    mixed $precision = null,
    mixed $showSteps = null,
    mixed $prefix = null,
    mixed $suffix = null,
    mixed $unitOptions = null,
    mixed $kilobitSeparator = null,
    mixed $keyboard = null,
    mixed $big = null,
    mixed $displayMode = null,
    mixed $borderMode = null,
    mixed $resetValue = null,
    mixed $clearValueOnEmpty = null
): \AmisSchema\Widget\Input\InputNumber
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($min !== null) $args['min'] = $min;
    if ($max !== null) $args['max'] = $max;
    if ($step !== null) $args['step'] = $step;
    if ($precision !== null) $args['precision'] = $precision;
    if ($showSteps !== null) $args['showSteps'] = $showSteps;
    if ($prefix !== null) $args['prefix'] = $prefix;
    if ($suffix !== null) $args['suffix'] = $suffix;
    if ($unitOptions !== null) $args['unitOptions'] = $unitOptions;
    if ($kilobitSeparator !== null) $args['kilobitSeparator'] = $kilobitSeparator;
    if ($keyboard !== null) $args['keyboard'] = $keyboard;
    if ($big !== null) $args['big'] = $big;
    if ($displayMode !== null) $args['displayMode'] = $displayMode;
    if ($borderMode !== null) $args['borderMode'] = $borderMode;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    if ($clearValueOnEmpty !== null) $args['clearValueOnEmpty'] = $clearValueOnEmpty;
    return \AmisSchema\Widget\Input\InputNumber::make($args);
}

/**
 * 创建 InputPassword 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param bool $trimContents 设置是否去除首尾空白文本
 * @param bool $clearValueOnEmpty 设置文本内容为空时去掉这个值
 * @param bool $clearable 设置是否可清除
 * @param string $resetValue 设置清除后设置此配置项给定的值
 * @param string $prefix 设置前缀
 * @param string $suffix 设置后缀
 * @param bool $showCounter 设置是否显示计数器
 * @param int $minLength 设置限制最小字数
 * @param int $maxLength 设置限制最大字数
 * @param string $borderMode 设置输入框边框模式，全边框，还是半边框，或者没边框
 * @param string $inputControlClassName 设置 control 节点的 CSS 类名
 * @param string $nativeInputClassName 设置原生 input 标签的 CSS 类名
 * @param string $nativeAutoComplete 设置原生 input 标签的 autoComplete 属性
 * @param bool $revealPassword 是否展示密码显/隐按钮
 * 
 * @return \AmisSchema\Widget\Input\InputPassword
 */
function AmisInputPassword(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $trimContents = null,
    mixed $clearValueOnEmpty = null,
    mixed $clearable = null,
    mixed $resetValue = null,
    mixed $prefix = null,
    mixed $suffix = null,
    mixed $showCounter = null,
    mixed $minLength = null,
    mixed $maxLength = null,
    mixed $borderMode = null,
    mixed $inputControlClassName = null,
    mixed $nativeInputClassName = null,
    mixed $nativeAutoComplete = null,
    mixed $revealPassword = null
): \AmisSchema\Widget\Input\InputPassword
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($trimContents !== null) $args['trimContents'] = $trimContents;
    if ($clearValueOnEmpty !== null) $args['clearValueOnEmpty'] = $clearValueOnEmpty;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    if ($prefix !== null) $args['prefix'] = $prefix;
    if ($suffix !== null) $args['suffix'] = $suffix;
    if ($showCounter !== null) $args['showCounter'] = $showCounter;
    if ($minLength !== null) $args['minLength'] = $minLength;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($borderMode !== null) $args['borderMode'] = $borderMode;
    if ($inputControlClassName !== null) $args['inputControlClassName'] = $inputControlClassName;
    if ($nativeInputClassName !== null) $args['nativeInputClassName'] = $nativeInputClassName;
    if ($nativeAutoComplete !== null) $args['nativeAutoComplete'] = $nativeAutoComplete;
    if ($revealPassword !== null) $args['revealPassword'] = $revealPassword;
    return \AmisSchema\Widget\Input\InputPassword::make($args);
}

/**
 * 创建 InputQuarter 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputQuarter
 */
function AmisInputQuarter(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputQuarter
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputQuarter::make($args);
}

/**
 * 创建 InputQuarterRange 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputQuarterRange
 */
function AmisInputQuarterRange(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputQuarterRange
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputQuarterRange::make($args);
}

/**
 * 创建 InputRange 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置支持选择范围
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置默认为 true，选择的 value 会通过 delimiter 连接起来，否则直接将以{ * min: 1, max: 100 * }的形式提交
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置分隔符，默认为,
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param int $min 设置最小值
 * @param int $max 设置最大值
 * @param int $step 设置步长
 * @param bool $showSteps 设置是否显示步长
 * @param int $parts 设置分段数量，默认为1，即不分段
 * @param bool $tooltipVisible 设置是否显示滑块标签
 * @param string $tooltipPlacement 设置滑块标签的位置，默认bottom，可选top、bottom、left、right
 * @param string $unit 设置单位
 * @param bool $clearable 设置是否可清除
 * @param bool $showInput 设置是否显示输入框
 * @param bool $showInputUnit 设置是否显示输入框单位
 * 
 * @return \AmisSchema\Widget\Input\InputRange
 */
function AmisInputRange(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $min = null,
    mixed $max = null,
    mixed $step = null,
    mixed $showSteps = null,
    mixed $parts = null,
    mixed $tooltipVisible = null,
    mixed $tooltipPlacement = null,
    mixed $unit = null,
    mixed $clearable = null,
    mixed $showInput = null,
    mixed $showInputUnit = null
): \AmisSchema\Widget\Input\InputRange
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($min !== null) $args['min'] = $min;
    if ($max !== null) $args['max'] = $max;
    if ($step !== null) $args['step'] = $step;
    if ($showSteps !== null) $args['showSteps'] = $showSteps;
    if ($parts !== null) $args['parts'] = $parts;
    if ($tooltipVisible !== null) $args['tooltipVisible'] = $tooltipVisible;
    if ($tooltipPlacement !== null) $args['tooltipPlacement'] = $tooltipPlacement;
    if ($unit !== null) $args['unit'] = $unit;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($showInput !== null) $args['showInput'] = $showInput;
    if ($showInputUnit !== null) $args['showInputUnit'] = $showInputUnit;
    return \AmisSchema\Widget\Input\InputRange::make($args);
}

/**
 * 创建 InputRating 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param bool $half 是否使用半星选择
 * @param int $count 总星数
 * @param bool $allowClear 是否允许再次点击后清除
 * @param string $inactiveColor 未被选中的星星的颜色
 * @param string $textPosition 文字的位置，可选值：'right'、'left'
 * @param string $char 自定义字符
 * @param string $charClassName 自定义字符类名
 * @param string $textClassName 自定义文字类名
 * @param array $colors 星星被选中的颜色。 若传入字符串，则只有一种颜色。若传入对象，可自定义分段，键名为分段的界限值，键值为对应的类名
 * @param array|string $texts 星星被选中时的提示文字。可自定义分段，键名为分段的界限值，键值为对应的类名
 * 
 * @return \AmisSchema\Widget\Input\InputRating
 */
function AmisInputRating(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $half = null,
    mixed $count = null,
    mixed $allowClear = null,
    mixed $inactiveColor = null,
    mixed $textPosition = null,
    mixed $char = null,
    mixed $charClassName = null,
    mixed $textClassName = null,
    mixed $colors = null,
    mixed $texts = null
): \AmisSchema\Widget\Input\InputRating
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($half !== null) $args['half'] = $half;
    if ($count !== null) $args['count'] = $count;
    if ($allowClear !== null) $args['allowClear'] = $allowClear;
    if ($inactiveColor !== null) $args['inactiveColor'] = $inactiveColor;
    if ($textPosition !== null) $args['textPosition'] = $textPosition;
    if ($char !== null) $args['char'] = $char;
    if ($charClassName !== null) $args['charClassName'] = $charClassName;
    if ($textClassName !== null) $args['textClassName'] = $textClassName;
    if ($colors !== null) $args['colors'] = $colors;
    if ($texts !== null) $args['texts'] = $texts;
    return \AmisSchema\Widget\Input\InputRating::make($args);
}

/**
 * 创建 InputRepeat 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置当不指定值时的说明，默认为 不重复
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $options 设置可用配置，默认为 hourly,daily,weekly,monthly，可用配置 secondly,minutely,hourly,daily,weekdays,weekly,monthly,yearly
 * 
 * @return \AmisSchema\Widget\Input\InputRepeat
 */
function AmisInputRepeat(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null
): \AmisSchema\Widget\Input\InputRepeat
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    return \AmisSchema\Widget\Input\InputRepeat::make($args);
}

/**
 * 创建 InputRichText 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param bool $saveAsUbb 设置是否保存为 ubb 格式
 * @param string|array|\AmisSchema\Definition\API $receiver 设置默认的图片保存 API
 * @param string|array|\AmisSchema\Definition\API $videoReceiver 设置默认的视频保存 API，仅支持 froala 编辑器
 * @param string $fileField 设置上传文件时的字段名
 * @param array $options 设置 tinymce 或 froala 的配置选项
 * @param string[] $buttons 设置 froala 专用按钮配置，配置显示的按钮，tinymce 可以通过 options 设置 toolbar 字符串
 * 
 * @return \AmisSchema\Widget\Input\InputRichText
 */
function AmisInputRichText(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $saveAsUbb = null,
    mixed $receiver = null,
    mixed $videoReceiver = null,
    mixed $fileField = null,
    mixed $options = null,
    mixed $buttons = null
): \AmisSchema\Widget\Input\InputRichText
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($saveAsUbb !== null) $args['saveAsUbb'] = $saveAsUbb;
    if ($receiver !== null) $args['receiver'] = $receiver;
    if ($videoReceiver !== null) $args['videoReceiver'] = $videoReceiver;
    if ($fileField !== null) $args['fileField'] = $fileField;
    if ($options !== null) $args['options'] = $options;
    if ($buttons !== null) $args['buttons'] = $buttons;
    return \AmisSchema\Widget\Input\InputRichText::make($args);
}

/**
 * 创建 InputSignature 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param int $width 设置组件宽度，最小 300
 * @param int $height 设置组件高度，最小 160
 * @param string $color 设置手写字体颜色
 * @param string $bgColor 设置面板背景颜色
 * @param string $clearBtnLabel 设置清空按钮名称
 * @param string $undoBtnLabel 设置撤销按钮名称
 * @param string $confirmBtnLabel 设置确认按钮名称
 * @param bool $embed 设置是否内嵌
 * @param string $embedConfirmLabel 设置内嵌容器确认按钮名称
 * @param string $ebmedCancelLabel 设置内嵌容器取消按钮名称
 * @param string $embedBtnIcon 设置内嵌按钮图标
 * @param string $embedBtnLabel 设置内嵌按钮文案
 * @param \AmisSchema\Definition\API|array|string $uploadApi 设置上传签名图片接口，仅在内嵌模式下生效
 * 
 * @return \AmisSchema\Widget\Input\InputSignature
 */
function AmisInputSignature(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $width = null,
    mixed $height = null,
    mixed $color = null,
    mixed $bgColor = null,
    mixed $clearBtnLabel = null,
    mixed $undoBtnLabel = null,
    mixed $confirmBtnLabel = null,
    mixed $embed = null,
    mixed $embedConfirmLabel = null,
    mixed $ebmedCancelLabel = null,
    mixed $embedBtnIcon = null,
    mixed $embedBtnLabel = null,
    mixed $uploadApi = null
): \AmisSchema\Widget\Input\InputSignature
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($width !== null) $args['width'] = $width;
    if ($height !== null) $args['height'] = $height;
    if ($color !== null) $args['color'] = $color;
    if ($bgColor !== null) $args['bgColor'] = $bgColor;
    if ($clearBtnLabel !== null) $args['clearBtnLabel'] = $clearBtnLabel;
    if ($undoBtnLabel !== null) $args['undoBtnLabel'] = $undoBtnLabel;
    if ($confirmBtnLabel !== null) $args['confirmBtnLabel'] = $confirmBtnLabel;
    if ($embed !== null) $args['embed'] = $embed;
    if ($embedConfirmLabel !== null) $args['embedConfirmLabel'] = $embedConfirmLabel;
    if ($ebmedCancelLabel !== null) $args['ebmedCancelLabel'] = $ebmedCancelLabel;
    if ($embedBtnIcon !== null) $args['embedBtnIcon'] = $embedBtnIcon;
    if ($embedBtnLabel !== null) $args['embedBtnLabel'] = $embedBtnLabel;
    if ($uploadApi !== null) $args['uploadApi'] = $uploadApi;
    return \AmisSchema\Widget\Input\InputSignature::make($args);
}

/**
 * 创建 InputSubForm 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否在左下角显示报错信息，默认为 true
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param bool $multiple 设置是否为多选模式，默认为 false
 * @param string $labelField 设置当值中存在这个字段，则按钮名称将使用此字段的值来展示
 * @param string $btnLabel 设置按钮默认名称，默认为 设置
 * @param int $minLength 设置限制最小个数，默认为 0
 * @param int $maxLength 设置限制最大个数，默认为 0
 * @param bool $draggable 设置是否可拖拽排序
 * @param bool $addable 设置是否可新增
 * @param bool $removable 设置是否可删除
 * @param string $addButtonClassName 设置新增按钮 CSS 类名
 * @param string $itemClassName 设置值元素 CSS 类名
 * @param string $itemsClassName 设置值包裹元素 CSS 类名
 * @param array|\AmisSchema\Widget\Input\Form $form 设置子表单配置，同 Form
 * @param string $addButtonText 设置自定义新增一项的文本
 * 
 * @return \AmisSchema\Widget\Input\InputSubForm
 */
function AmisInputSubForm(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $btnLabel = null,
    mixed $minLength = null,
    mixed $maxLength = null,
    mixed $draggable = null,
    mixed $addable = null,
    mixed $removable = null,
    mixed $addButtonClassName = null,
    mixed $itemClassName = null,
    mixed $itemsClassName = null,
    mixed $form = null,
    mixed $addButtonText = null
): \AmisSchema\Widget\Input\InputSubForm
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($btnLabel !== null) $args['btnLabel'] = $btnLabel;
    if ($minLength !== null) $args['minLength'] = $minLength;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($addable !== null) $args['addable'] = $addable;
    if ($removable !== null) $args['removable'] = $removable;
    if ($addButtonClassName !== null) $args['addButtonClassName'] = $addButtonClassName;
    if ($itemClassName !== null) $args['itemClassName'] = $itemClassName;
    if ($itemsClassName !== null) $args['itemsClassName'] = $itemsClassName;
    if ($form !== null) $args['form'] = $form;
    if ($addButtonText !== null) $args['addButtonText'] = $addButtonText;
    return \AmisSchema\Widget\Input\InputSubForm::make($args);
}

/**
 * 创建 InputTable 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置当没有数据的时候的文字提示
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 指定为 Table 渲染器
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置为了性能，默认其他表单项项值变化不会让当前表格更新
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param bool $addable 设置是否可增加一行
 * @param bool $copyable 设置是否可复制
 * @param bool $editable 设置是否可编辑
 * @param bool $removable 设置是否可删除
 * @param bool $showTableAddBtn 设置是否显示表格操作栏添加按钮
 * @param bool $showFooterAddBtn 设置是否显示表格下方添加按钮
 * @param string|\AmisSchema\Definition\API $addApi 设置新增时提交的API
 * @param string|\AmisSchema\Definition\API $updateApi 设置修改时提交的API
 * @param string|\AmisSchema\Definition\API $deleteApi 设置删除时提交的API
 * @param string $addBtnLabel 设置增加按钮名称
 * @param string $addBtnIcon 设置增加按钮图标
 * @param string $copyBtnLabel 设置复制按钮文字
 * @param string $copyBtnIcon 设置复制按钮图标
 * @param string $editBtnLabel 设置编辑按钮名称
 * @param string $editBtnIcon 设置编辑按钮图标
 * @param string $deleteBtnLabel 设置删除按钮名称
 * @param string $deleteBtnIcon 设置删除按钮图标
 * @param string $confirmBtnLabel 设置确认编辑按钮名称
 * @param string $confirmBtnIcon 设置确认编辑按钮图标
 * @param string $cancelBtnLabel 设置取消编辑按钮名称
 * @param string $cancelBtnIcon 设置取消编辑按钮图标
 * @param bool $needConfirm 设置是否需要确认操作
 * @param bool $canAccessSuperData 设置是否可以访问父级数据
 * @param int $minLength 设置最小行数
 * @param int $maxLength 设置最大行数
 * @param int $perPage 设置每页显示多少行
 * @param bool $draggable 设置是否可拖拽
 * @param string $itemCheckableOn 设置行是否可勾选表达式
 * @param string $itemDraggableOn 设置行是否可拖拽表达式
 * @param bool $checkOnItemClick 设置点击数据行是否可以勾选当前行
 * @param bool $hideCheckToggler 设置是否隐藏勾选框
 * @param int $combineNum 设置合并单元格配置，配置数字表示从左到右的多少列自动合并单元格
 * @param int $combineFromIndex 设置合并单元格配置，配置从第几列开始合并（起始位置是1）
 * @param array $footerAddBtn 设置表格下方添加按钮配置
 * @param array $scaffold 设置新增的时候的默认值，一般可以配置默认的数组长度
 * @param string $deleteConfirmText 设置删除确认文字
 * @param string $valueField 设置可以用来设置在什么字段上保存数组信息
 * @param string $subAddBtnIcon 
 * 
 * @return \AmisSchema\Widget\Input\InputTable
 */
function AmisInputTable(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $addable = null,
    mixed $copyable = null,
    mixed $editable = null,
    mixed $removable = null,
    mixed $showTableAddBtn = null,
    mixed $showFooterAddBtn = null,
    mixed $addApi = null,
    mixed $updateApi = null,
    mixed $deleteApi = null,
    mixed $addBtnLabel = null,
    mixed $addBtnIcon = null,
    mixed $copyBtnLabel = null,
    mixed $copyBtnIcon = null,
    mixed $editBtnLabel = null,
    mixed $editBtnIcon = null,
    mixed $deleteBtnLabel = null,
    mixed $deleteBtnIcon = null,
    mixed $confirmBtnLabel = null,
    mixed $confirmBtnIcon = null,
    mixed $cancelBtnLabel = null,
    mixed $cancelBtnIcon = null,
    mixed $needConfirm = null,
    mixed $canAccessSuperData = null,
    mixed $minLength = null,
    mixed $maxLength = null,
    mixed $perPage = null,
    mixed $draggable = null,
    mixed $itemCheckableOn = null,
    mixed $itemDraggableOn = null,
    mixed $checkOnItemClick = null,
    mixed $hideCheckToggler = null,
    mixed $combineNum = null,
    mixed $combineFromIndex = null,
    mixed $footerAddBtn = null,
    mixed $scaffold = null,
    mixed $deleteConfirmText = null,
    mixed $valueField = null,
    mixed $subAddBtnIcon = null
): \AmisSchema\Widget\Input\InputTable
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($addable !== null) $args['addable'] = $addable;
    if ($copyable !== null) $args['copyable'] = $copyable;
    if ($editable !== null) $args['editable'] = $editable;
    if ($removable !== null) $args['removable'] = $removable;
    if ($showTableAddBtn !== null) $args['showTableAddBtn'] = $showTableAddBtn;
    if ($showFooterAddBtn !== null) $args['showFooterAddBtn'] = $showFooterAddBtn;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($updateApi !== null) $args['updateApi'] = $updateApi;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($addBtnLabel !== null) $args['addBtnLabel'] = $addBtnLabel;
    if ($addBtnIcon !== null) $args['addBtnIcon'] = $addBtnIcon;
    if ($copyBtnLabel !== null) $args['copyBtnLabel'] = $copyBtnLabel;
    if ($copyBtnIcon !== null) $args['copyBtnIcon'] = $copyBtnIcon;
    if ($editBtnLabel !== null) $args['editBtnLabel'] = $editBtnLabel;
    if ($editBtnIcon !== null) $args['editBtnIcon'] = $editBtnIcon;
    if ($deleteBtnLabel !== null) $args['deleteBtnLabel'] = $deleteBtnLabel;
    if ($deleteBtnIcon !== null) $args['deleteBtnIcon'] = $deleteBtnIcon;
    if ($confirmBtnLabel !== null) $args['confirmBtnLabel'] = $confirmBtnLabel;
    if ($confirmBtnIcon !== null) $args['confirmBtnIcon'] = $confirmBtnIcon;
    if ($cancelBtnLabel !== null) $args['cancelBtnLabel'] = $cancelBtnLabel;
    if ($cancelBtnIcon !== null) $args['cancelBtnIcon'] = $cancelBtnIcon;
    if ($needConfirm !== null) $args['needConfirm'] = $needConfirm;
    if ($canAccessSuperData !== null) $args['canAccessSuperData'] = $canAccessSuperData;
    if ($minLength !== null) $args['minLength'] = $minLength;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($perPage !== null) $args['perPage'] = $perPage;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($itemCheckableOn !== null) $args['itemCheckableOn'] = $itemCheckableOn;
    if ($itemDraggableOn !== null) $args['itemDraggableOn'] = $itemDraggableOn;
    if ($checkOnItemClick !== null) $args['checkOnItemClick'] = $checkOnItemClick;
    if ($hideCheckToggler !== null) $args['hideCheckToggler'] = $hideCheckToggler;
    if ($combineNum !== null) $args['combineNum'] = $combineNum;
    if ($combineFromIndex !== null) $args['combineFromIndex'] = $combineFromIndex;
    if ($footerAddBtn !== null) $args['footerAddBtn'] = $footerAddBtn;
    if ($scaffold !== null) $args['scaffold'] = $scaffold;
    if ($deleteConfirmText !== null) $args['deleteConfirmText'] = $deleteConfirmText;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($subAddBtnIcon !== null) $args['subAddBtnIcon'] = $subAddBtnIcon;
    return \AmisSchema\Widget\Input\InputTable::make($args);
}

/**
 * 创建 InputTag 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param array $optionsTip 设置选项提示
 * @param bool $clearable 设置在有值的时候是否显示一个删除图标在右侧
 * @param string $resetValue 设置清除后设置此配置项给定的值
 * @param int $max 设置允许添加的标签的最大数量
 * @param int $maxTagLength 设置单个标签的最大文本长度
 * @param int $maxTagCount 设置标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效
 * @param bool $enableBatchAdd 设置是否开启批量添加模式
 * @param string $separator 设置开启批量添加后，输入多个标签的分隔符，支持传入多个符号
 * 
 * @return \AmisSchema\Widget\Input\InputTag
 */
function AmisInputTag(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $optionsTip = null,
    mixed $clearable = null,
    mixed $resetValue = null,
    mixed $max = null,
    mixed $maxTagLength = null,
    mixed $maxTagCount = null,
    mixed $enableBatchAdd = null,
    mixed $separator = null
): \AmisSchema\Widget\Input\InputTag
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($optionsTip !== null) $args['optionsTip'] = $optionsTip;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    if ($max !== null) $args['max'] = $max;
    if ($maxTagLength !== null) $args['maxTagLength'] = $maxTagLength;
    if ($maxTagCount !== null) $args['maxTagCount'] = $maxTagCount;
    if ($enableBatchAdd !== null) $args['enableBatchAdd'] = $enableBatchAdd;
    if ($separator !== null) $args['separator'] = $separator;
    return \AmisSchema\Widget\Input\InputTag::make($args);
}

/**
 * 创建 InputText 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param bool $trimContents 设置是否去除首尾空白文本
 * @param bool $clearValueOnEmpty 设置文本内容为空时去掉这个值
 * @param bool $clearable 设置是否可清除
 * @param string $resetValue 设置清除后设置此配置项给定的值
 * @param string $prefix 设置前缀
 * @param string $suffix 设置后缀
 * @param bool $showCounter 设置是否显示计数器
 * @param int $minLength 设置限制最小字数
 * @param int $maxLength 设置限制最大字数
 * @param string $borderMode 设置输入框边框模式，全边框，还是半边框，或者没边框
 * @param string $inputControlClassName 设置 control 节点的 CSS 类名
 * @param string $nativeInputClassName 设置原生 input 标签的 CSS 类名
 * @param string $nativeAutoComplete 设置原生 input 标签的 autoComplete 属性
 * 
 * @return \AmisSchema\Widget\Input\InputText
 */
function AmisInputText(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $trimContents = null,
    mixed $clearValueOnEmpty = null,
    mixed $clearable = null,
    mixed $resetValue = null,
    mixed $prefix = null,
    mixed $suffix = null,
    mixed $showCounter = null,
    mixed $minLength = null,
    mixed $maxLength = null,
    mixed $borderMode = null,
    mixed $inputControlClassName = null,
    mixed $nativeInputClassName = null,
    mixed $nativeAutoComplete = null
): \AmisSchema\Widget\Input\InputText
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($trimContents !== null) $args['trimContents'] = $trimContents;
    if ($clearValueOnEmpty !== null) $args['clearValueOnEmpty'] = $clearValueOnEmpty;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    if ($prefix !== null) $args['prefix'] = $prefix;
    if ($suffix !== null) $args['suffix'] = $suffix;
    if ($showCounter !== null) $args['showCounter'] = $showCounter;
    if ($minLength !== null) $args['minLength'] = $minLength;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($borderMode !== null) $args['borderMode'] = $borderMode;
    if ($inputControlClassName !== null) $args['inputControlClassName'] = $inputControlClassName;
    if ($nativeInputClassName !== null) $args['nativeInputClassName'] = $nativeInputClassName;
    if ($nativeAutoComplete !== null) $args['nativeAutoComplete'] = $nativeAutoComplete;
    return \AmisSchema\Widget\Input\InputText::make($args);
}

/**
 * 创建 InputTime 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputTime
 */
function AmisInputTime(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputTime
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputTime::make($args);
}

/**
 * 创建 InputTimeRange 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * 
 * @return \AmisSchema\Widget\Input\InputTimeRange
 */
function AmisInputTimeRange(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null
): \AmisSchema\Widget\Input\InputTimeRange
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputTimeRange::make($args);
}

/**
 * 创建 InputTree 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $iconField 设置图标值字段
 * @param \AmisSchema\Definition\API $searchApi 设置检索接口
 * @param bool $hideRoot 设置如果想要显示个顶级节点，请设置为 false
 * @param string $rootLabel 设置当 hideRoot 不为 false 时有用，用来设置顶级节点的文字
 * @param bool $showIcon 设置是否显示图标
 * @param bool $showRadio 设置是否显示单选按钮，multiple 为 false 是有效
 * @param bool $showOutline 设置是否显示树层级展开线
 * @param bool $initiallyOpen 设置设置是否默认展开所有层级
 * @param int $unfoldedLevel 设置设置默认展开的级数，只有initiallyOpen不是true时生效
 * @param bool $autoCheckChildren 设置当选中父节点时级联选择子节点
 * @param bool $cascade 设置autoCheckChildren 为 true 时生效；默认行为：子节点禁用，值只包含父节点值；设置为 true 时，子节点可反选，值包含父子节点值
 * @param bool $withChildren 设置cascade 为 false 时生效，选中父节点时，值里面将包含父子节点的值，否则只会保留父节点的值
 * @param bool $onlyChildren 设置autoCheckChildren 为 true 时生效，不受 cascade 影响；onlyChildren 为 true，ui 行为级联选中子节点，子节点可反选，值只包含子节点的值
 * @param bool $onlyLeaf 设置只允许选择叶子节点
 * @param bool $rootCreatable 设置是否可以创建顶级节点
 * @param string $rootCreateTip 设置创建顶级节点的悬浮提示
 * @param int $minLength 设置最少选中的节点数
 * @param int $maxLength 设置最多选中的节点数
 * @param string $treeContainerClassName 设置tree 控件最外层容器类名, 与 inputClassName 等价
 * @param string $treeClassName 设置tree 组件层类名
 * @param bool $enableNodePath 设置是否开启节点路径模式
 * @param string $pathSeparator 设置节点路径的分隔符，enableNodePath为true时生效
 * @param string $highlightTxt 设置标签中需要高亮的字符，支持变量
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染
 * @param string $menuTpl 设置选项自定义渲染 HTML 片段
 * @param bool $enableDefaultIcon 设置是否为选项添加默认的前缀 Icon，父节点默认为folder，叶节点默认为file
 * @param bool $heightAuto 设置默认高度会有个 maxHeight，即超过一定高度就会内部滚动，如果希望自动增长请设置此属性
 * @param array $nodeBehavior 设置节点行为配置，支持配置多个行为
 * @param bool $autoCancelParent 设置子节点取消时自动取消父节点的值，仅在多选且 cascade 为 true 时生效
 * @param mixed $toolbar 设置工具栏区域，仅开启检索时生效
 * @param string $toolbarClassName 设置工具栏区域类名
 * @param mixed $itemActions 设置节点操作栏区域
 * @param array|\AmisSchema\Definition\API|string $deferApi 
 * @param bool $clearable 设置单选模式下是否支持清空
 * 
 * @return \AmisSchema\Widget\Input\InputTree
 */
function AmisInputTree(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $iconField = null,
    mixed $searchApi = null,
    mixed $hideRoot = null,
    mixed $rootLabel = null,
    mixed $showIcon = null,
    mixed $showRadio = null,
    mixed $showOutline = null,
    mixed $initiallyOpen = null,
    mixed $unfoldedLevel = null,
    mixed $autoCheckChildren = null,
    mixed $cascade = null,
    mixed $withChildren = null,
    mixed $onlyChildren = null,
    mixed $onlyLeaf = null,
    mixed $rootCreatable = null,
    mixed $rootCreateTip = null,
    mixed $minLength = null,
    mixed $maxLength = null,
    mixed $treeContainerClassName = null,
    mixed $treeClassName = null,
    mixed $enableNodePath = null,
    mixed $pathSeparator = null,
    mixed $highlightTxt = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $menuTpl = null,
    mixed $enableDefaultIcon = null,
    mixed $heightAuto = null,
    mixed $nodeBehavior = null,
    mixed $autoCancelParent = null,
    mixed $toolbar = null,
    mixed $toolbarClassName = null,
    mixed $itemActions = null,
    mixed $deferApi = null,
    mixed $clearable = null
): \AmisSchema\Widget\Input\InputTree
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($iconField !== null) $args['iconField'] = $iconField;
    if ($searchApi !== null) $args['searchApi'] = $searchApi;
    if ($hideRoot !== null) $args['hideRoot'] = $hideRoot;
    if ($rootLabel !== null) $args['rootLabel'] = $rootLabel;
    if ($showIcon !== null) $args['showIcon'] = $showIcon;
    if ($showRadio !== null) $args['showRadio'] = $showRadio;
    if ($showOutline !== null) $args['showOutline'] = $showOutline;
    if ($initiallyOpen !== null) $args['initiallyOpen'] = $initiallyOpen;
    if ($unfoldedLevel !== null) $args['unfoldedLevel'] = $unfoldedLevel;
    if ($autoCheckChildren !== null) $args['autoCheckChildren'] = $autoCheckChildren;
    if ($cascade !== null) $args['cascade'] = $cascade;
    if ($withChildren !== null) $args['withChildren'] = $withChildren;
    if ($onlyChildren !== null) $args['onlyChildren'] = $onlyChildren;
    if ($onlyLeaf !== null) $args['onlyLeaf'] = $onlyLeaf;
    if ($rootCreatable !== null) $args['rootCreatable'] = $rootCreatable;
    if ($rootCreateTip !== null) $args['rootCreateTip'] = $rootCreateTip;
    if ($minLength !== null) $args['minLength'] = $minLength;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($treeContainerClassName !== null) $args['treeContainerClassName'] = $treeContainerClassName;
    if ($treeClassName !== null) $args['treeClassName'] = $treeClassName;
    if ($enableNodePath !== null) $args['enableNodePath'] = $enableNodePath;
    if ($pathSeparator !== null) $args['pathSeparator'] = $pathSeparator;
    if ($highlightTxt !== null) $args['highlightTxt'] = $highlightTxt;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($menuTpl !== null) $args['menuTpl'] = $menuTpl;
    if ($enableDefaultIcon !== null) $args['enableDefaultIcon'] = $enableDefaultIcon;
    if ($heightAuto !== null) $args['heightAuto'] = $heightAuto;
    if ($nodeBehavior !== null) $args['nodeBehavior'] = $nodeBehavior;
    if ($autoCancelParent !== null) $args['autoCancelParent'] = $autoCancelParent;
    if ($toolbar !== null) $args['toolbar'] = $toolbar;
    if ($toolbarClassName !== null) $args['toolbarClassName'] = $toolbarClassName;
    if ($itemActions !== null) $args['itemActions'] = $itemActions;
    if ($deferApi !== null) $args['deferApi'] = $deferApi;
    if ($clearable !== null) $args['clearable'] = $clearable;
    return \AmisSchema\Widget\Input\InputTree::make($args);
}

/**
 * 创建 InputVerificationCode 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param int $length 设置验证码的长度，根据长度渲染对应个数的输入框
 * @param bool $masked 设置是否是密码模式
 * @param string $separator 设置分隔符，支持表达式, 表达式只可以访问 index、character 变量
 * 
 * @return \AmisSchema\Widget\Input\InputVerificationCode
 */
function AmisInputVerificationCode(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $length = null,
    mixed $masked = null,
    mixed $separator = null
): \AmisSchema\Widget\Input\InputVerificationCode
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($length !== null) $args['length'] = $length;
    if ($masked !== null) $args['masked'] = $masked;
    if ($separator !== null) $args['separator'] = $separator;
    return \AmisSchema\Widget\Input\InputVerificationCode::make($args);
}

/**
 * 创建 InputYear 组件
 * 
 * @param string $value 设置默认值
 * @param string $placeholder 设置占位文本
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $format 设置年份选择器值格式，更多格式类型请参考 moment
 * @param string $inputFormat 设置年份选择器显示格式，更多格式类型请参考 moment
 * @param string $displayFormat 设置年份选择器显示格式，更多格式类型请参考 moment
 * @param bool $clearable 设置是否可清除
 * @param bool $embed 设置是否内联模式
 * @param string $minDate 设置限制最小年份
 * @param string $maxDate 设置限制最大年份
 * @param string $popOverContainerSelector 设置弹层挂载位置参考，主要用于确保弹层菜单不会被其他元素遮挡
 * 
 * @return \AmisSchema\Widget\Input\InputYear
 */
function AmisInputYear(
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $format = null,
    mixed $inputFormat = null,
    mixed $displayFormat = null,
    mixed $clearable = null,
    mixed $embed = null,
    mixed $minDate = null,
    mixed $maxDate = null,
    mixed $popOverContainerSelector = null
): \AmisSchema\Widget\Input\InputYear
{
    $args = [];
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($format !== null) $args['format'] = $format;
    if ($inputFormat !== null) $args['inputFormat'] = $inputFormat;
    if ($displayFormat !== null) $args['displayFormat'] = $displayFormat;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($embed !== null) $args['embed'] = $embed;
    if ($minDate !== null) $args['minDate'] = $minDate;
    if ($maxDate !== null) $args['maxDate'] = $maxDate;
    if ($popOverContainerSelector !== null) $args['popOverContainerSelector'] = $popOverContainerSelector;
    return \AmisSchema\Widget\Input\InputYear::make($args);
}

/**
 * 创建 InputYearRange 组件
 * 
 * @param string $placeholder 设置占位文本
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $format 设置年份选择器值格式，更多格式类型请参考 moment
 * @param string $inputFormat 设置年份选择器显示格式，即时间戳格式，更多格式类型请参考 moment
 * @param string $displayFormat 设置年份选择器显示格式，更多格式类型请参考 moment
 * @param string $startPlaceholder 设置开始年份占位文本
 * @param string $endPlaceholder 设置结束年份占位文本
 * @param string $minDate 设置限制最小年份
 * @param string $maxDate 设置限制最大年份
 * @param string $minDuration 设置限制最小跨度，如：2years
 * @param string $maxDuration 设置限制最大跨度，如：10years
 * @param bool $clearable 设置是否可清除
 * @param bool $embed 设置是否内联模式
 * @param bool $animation 设置是否启用游标动画，默认开启
 * @param string $extraName 设置范围内的结束年份的字段名
 * @param string $popOverContainerSelector 设置弹层挂载位置参考，主要用于确保弹层菜单不会被其他元素遮挡
 * 
 * @return \AmisSchema\Widget\Input\InputYearRange
 */
function AmisInputYearRange(
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $format = null,
    mixed $inputFormat = null,
    mixed $displayFormat = null,
    mixed $startPlaceholder = null,
    mixed $endPlaceholder = null,
    mixed $minDate = null,
    mixed $maxDate = null,
    mixed $minDuration = null,
    mixed $maxDuration = null,
    mixed $clearable = null,
    mixed $embed = null,
    mixed $animation = null,
    mixed $extraName = null,
    mixed $popOverContainerSelector = null
): \AmisSchema\Widget\Input\InputYearRange
{
    $args = [];
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($format !== null) $args['format'] = $format;
    if ($inputFormat !== null) $args['inputFormat'] = $inputFormat;
    if ($displayFormat !== null) $args['displayFormat'] = $displayFormat;
    if ($startPlaceholder !== null) $args['startPlaceholder'] = $startPlaceholder;
    if ($endPlaceholder !== null) $args['endPlaceholder'] = $endPlaceholder;
    if ($minDate !== null) $args['minDate'] = $minDate;
    if ($maxDate !== null) $args['maxDate'] = $maxDate;
    if ($minDuration !== null) $args['minDuration'] = $minDuration;
    if ($maxDuration !== null) $args['maxDuration'] = $maxDuration;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($embed !== null) $args['embed'] = $embed;
    if ($animation !== null) $args['animation'] = $animation;
    if ($extraName !== null) $args['extraName'] = $extraName;
    if ($popOverContainerSelector !== null) $args['popOverContainerSelector'] = $popOverContainerSelector;
    return \AmisSchema\Widget\Input\InputYearRange::make($args);
}

/**
 * 创建 JsonSchema 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array|string|\AmisSchema\Widget\Widget $schema 设置指定 json-schema
 * @param \AmisSchema\Definition\API|string|array $schemaApi 设置远程获取 schema 的接口
 * @param string $formula 设置公式配置，可以配合公式使用
 * 
 * @return \AmisSchema\Widget\Input\JsonSchema
 */
function AmisJsonSchema(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $schema = null,
    mixed $schemaApi = null,
    mixed $formula = null
): \AmisSchema\Widget\Input\JsonSchema
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($schema !== null) $args['schema'] = $schema;
    if ($schemaApi !== null) $args['schemaApi'] = $schemaApi;
    if ($formula !== null) $args['formula'] = $formula;
    return \AmisSchema\Widget\Input\JsonSchema::make($args);
}

/**
 * 创建 JsonSchemaEditor 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param array $placeholder 设置属性输入控件的占位提示文本
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param bool $rootTypeMutable 设置顶级类型是否可配置
 * @param bool $showRootInfo 设置是否显示顶级类型信息
 * @param array $disabledTypes 设置用来禁用默认数据类型，默认类型有：string、number、interger、object、number、array、boolean、null
 * @param array $definitions 设置用来配置预设类型
 * @param bool $mini 设置用来开启迷你模式，适应于边栏面板，宽度较低的情况
 * @param bool $enableAdvancedSetting 设置是否开启高级配置
 * @param array $advancedSettings 设置高级配置面板的配置项
 * 
 * @return \AmisSchema\Widget\Input\JsonSchemaEditor
 */
function AmisJsonSchemaEditor(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $rootTypeMutable = null,
    mixed $showRootInfo = null,
    mixed $disabledTypes = null,
    mixed $definitions = null,
    mixed $mini = null,
    mixed $enableAdvancedSetting = null,
    mixed $advancedSettings = null
): \AmisSchema\Widget\Input\JsonSchemaEditor
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($rootTypeMutable !== null) $args['rootTypeMutable'] = $rootTypeMutable;
    if ($showRootInfo !== null) $args['showRootInfo'] = $showRootInfo;
    if ($disabledTypes !== null) $args['disabledTypes'] = $disabledTypes;
    if ($definitions !== null) $args['definitions'] = $definitions;
    if ($mini !== null) $args['mini'] = $mini;
    if ($enableAdvancedSetting !== null) $args['enableAdvancedSetting'] = $enableAdvancedSetting;
    if ($advancedSettings !== null) $args['advancedSettings'] = $advancedSettings;
    return \AmisSchema\Widget\Input\JsonSchemaEditor::make($args);
}

/**
 * 创建 ListSelect 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param string $listClassName 支持配置 list div 的 css 类名。比如: flex justify-between
 * 
 * @return \AmisSchema\Widget\Input\ListSelect
 */
function AmisListSelect(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $listClassName = null
): \AmisSchema\Widget\Input\ListSelect
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($listClassName !== null) $args['listClassName'] = $listClassName;
    return \AmisSchema\Widget\Input\ListSelect::make($args);
}

/**
 * 创建 LocationPicker 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $vendor 地图厂商，目前只实现了百度地图和高德地图
 * @param string $ak 百度/高德地图的 ak
 * @param bool $clearable 输入框是否可清空
 * @param bool $autoSelectCurrentLoc 是否自动选中当前地理位置
 * @param bool $onlySelectCurrentLoc 是否限制只能选中当前地理位置，设置为 true 后，可用于充当定位组件
 * @param string $coordinatesType 坐标系类型，默认百度坐标，使用高德地图时应设置为'gcj02'， 高德地图不支持坐标转换
 * 
 * @return \AmisSchema\Widget\Input\LocationPicker
 */
function AmisLocationPicker(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $vendor = null,
    mixed $ak = null,
    mixed $clearable = null,
    mixed $autoSelectCurrentLoc = null,
    mixed $onlySelectCurrentLoc = null,
    mixed $coordinatesType = null
): \AmisSchema\Widget\Input\LocationPicker
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($vendor !== null) $args['vendor'] = $vendor;
    if ($ak !== null) $args['ak'] = $ak;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($autoSelectCurrentLoc !== null) $args['autoSelectCurrentLoc'] = $autoSelectCurrentLoc;
    if ($onlySelectCurrentLoc !== null) $args['onlySelectCurrentLoc'] = $onlySelectCurrentLoc;
    if ($coordinatesType !== null) $args['coordinatesType'] = $coordinatesType;
    return \AmisSchema\Widget\Input\LocationPicker::make($args);
}

/**
 * 创建 MatrixCheckboxes 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $columns 列信息，数组中 label 字段是必须给出的
 * @param array $rows 行信息，数组中 label 字段是必须给出的
 * @param string $rowLabel 行标题说明
 * @param string|\AmisSchema\Definition\API $source Api 地址，如果选项组不固定，可以通过配置 source 动态拉取
 * @param bool $multiple 是否多选
 * @param string $singleSelectMode 设置单选模式，multiple为false时有效，可设置为cell, row, column 分别为全部选项中只能单选某个单元格、每行只能单选某个单元格，每列只能单选某个单元格
 * @param string $textAlign 当开启多选+全选时，默认为'left'
 * @param bool $yCheckAll 列上的全选
 * @param bool $xCheckAll 行上的全选
 * 
 * @return \AmisSchema\Widget\Input\MatrixCheckboxes
 */
function AmisMatrixCheckboxes(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $columns = null,
    mixed $rows = null,
    mixed $rowLabel = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $singleSelectMode = null,
    mixed $textAlign = null,
    mixed $yCheckAll = null,
    mixed $xCheckAll = null
): \AmisSchema\Widget\Input\MatrixCheckboxes
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($columns !== null) $args['columns'] = $columns;
    if ($rows !== null) $args['rows'] = $rows;
    if ($rowLabel !== null) $args['rowLabel'] = $rowLabel;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($singleSelectMode !== null) $args['singleSelectMode'] = $singleSelectMode;
    if ($textAlign !== null) $args['textAlign'] = $textAlign;
    if ($yCheckAll !== null) $args['yCheckAll'] = $yCheckAll;
    if ($xCheckAll !== null) $args['xCheckAll'] = $xCheckAll;
    return \AmisSchema\Widget\Input\MatrixCheckboxes::make($args);
}

/**
 * 创建 NestedSelect 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param bool $cascade 设置 true时，当选中父节点时不自动选择子节点
 * @param bool $withChildren 设置 true时，选中父节点时，值里面将包含子节点的值，否则只会保留父节点的值
 * @param bool $onlyChildren 多选时，选中父节点时，是否只将其子节点加入到值中
 * @param string $searchPromptText 搜索框占位文本
 * @param string $noResultsText 无结果时的文本
 * @param bool $hideNodePathLabel 是否隐藏选择框中已选择节点的路径 label 信息
 * @param bool $onlyLeaf 只允许选择叶子节点
 * @param int $maxTagCount 标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效
 * 
 * @return \AmisSchema\Widget\Input\NestedSelect
 */
function AmisNestedSelect(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $cascade = null,
    mixed $withChildren = null,
    mixed $onlyChildren = null,
    mixed $searchPromptText = null,
    mixed $noResultsText = null,
    mixed $hideNodePathLabel = null,
    mixed $onlyLeaf = null,
    mixed $maxTagCount = null
): \AmisSchema\Widget\Input\NestedSelect
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($cascade !== null) $args['cascade'] = $cascade;
    if ($withChildren !== null) $args['withChildren'] = $withChildren;
    if ($onlyChildren !== null) $args['onlyChildren'] = $onlyChildren;
    if ($searchPromptText !== null) $args['searchPromptText'] = $searchPromptText;
    if ($noResultsText !== null) $args['noResultsText'] = $noResultsText;
    if ($hideNodePathLabel !== null) $args['hideNodePathLabel'] = $hideNodePathLabel;
    if ($onlyLeaf !== null) $args['onlyLeaf'] = $onlyLeaf;
    if ($maxTagCount !== null) $args['maxTagCount'] = $maxTagCount;
    return \AmisSchema\Widget\Input\NestedSelect::make($args);
}

/**
 * 创建 Options 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * 
 * @return \AmisSchema\Widget\Input\Options
 */
function AmisOptions(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null
): \AmisSchema\Widget\Input\Options
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    return \AmisSchema\Widget\Input\Options::make($args);
}

/**
 * 创建 Picker 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param string $modalTitle 设置模态框的标题
 * @param string $modalMode 设置 dialog 或者 drawer，用来配置弹出方式
 * @param string $modalSize 设置弹框大小
 * @param array $pickerSchema 即用 List 类型的渲染，来展示列表信息。更多配置参考 CRUD
 * @param bool $embed 是否使用内嵌模式
 * @param bool $itemClearable 用于控制是否显示选中项的删除图标
 * 
 * @return \AmisSchema\Widget\Input\Picker
 */
function AmisPicker(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $modalTitle = null,
    mixed $modalMode = null,
    mixed $modalSize = null,
    mixed $pickerSchema = null,
    mixed $embed = null,
    mixed $itemClearable = null
): \AmisSchema\Widget\Input\Picker
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($modalTitle !== null) $args['modalTitle'] = $modalTitle;
    if ($modalMode !== null) $args['modalMode'] = $modalMode;
    if ($modalSize !== null) $args['modalSize'] = $modalSize;
    if ($pickerSchema !== null) $args['pickerSchema'] = $pickerSchema;
    if ($embed !== null) $args['embed'] = $embed;
    if ($itemClearable !== null) $args['itemClearable'] = $itemClearable;
    return \AmisSchema\Widget\Input\Picker::make($args);
}

/**
 * 创建 Radio 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $option 设置选项说明
 * @param string|int|bool $trueValue 设置标识真值，默认为 true
 * @param string|int|bool $falseValue 设置标识假值，默认为 false
 * 
 * @return \AmisSchema\Widget\Input\Radio
 */
function AmisRadio(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $option = null,
    mixed $trueValue = null,
    mixed $falseValue = null
): \AmisSchema\Widget\Input\Radio
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($option !== null) $args['option'] = $option;
    if ($trueValue !== null) $args['trueValue'] = $trueValue;
    if ($falseValue !== null) $args['falseValue'] = $falseValue;
    return \AmisSchema\Widget\Input\Radio::make($args);
}

/**
 * 创建 Radios 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param int $columnsCount 设置选项按几列来排列，默认为一列
 * 
 * @return \AmisSchema\Widget\Input\Radios
 */
function AmisRadios(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $columnsCount = null
): \AmisSchema\Widget\Input\Radios
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($columnsCount !== null) $args['columnsCount'] = $columnsCount;
    return \AmisSchema\Widget\Input\Radios::make($args);
}

/**
 * 创建 Select 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param array|string[] $autoFill 设置自动填充配置，将当前已选中的选项的某个字段的值，自动填充到表单中某个表单项中
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param array $options 设置选项组，供用户选择
 * @param string|array|\AmisSchema\Definition\API $source 设置选项组源，可通过数据映射获取当前数据域变量、或者配置 API 对象
 * @param bool $multiple 设置是否支持多选，默认为 false
 * @param string $labelField 设置标识选项中哪个字段是label值，默认为 "label"
 * @param string $valueField 设置标识选项中哪个字段是value值，默认为 "value"
 * @param string $deferField 设置标识选项中哪个字段是defer值，默认为 "defer"
 * @param bool $joinValues 设置是否拼接value值，默认为 true
 * @param bool $extractValue 设置是否将value值抽取出来组成新的数组，只有在joinValues是false时生效，默认为 false
 * @param string $delimiter 设置拼接符，默认为逗号
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染，默认为 32
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @param bool $valuesNoWrap 设置默认情况下多选所有选项都会显示，通过这个可以最多显示一行，超出的部分变成 ...，默认为 false
 * @param bool $searchable 设置是否可搜索，默认为 false
 * @param string|array $autoComplete 设置自动补全配置
 * @param bool $selectFirst 设置是否默认选择第一个选项，默认为 false
 * @param bool $checkAll 设置是否支持全选，默认为 false
 * @param string $checkAllLabel 设置全选的文字，默认为 "全选"
 * @param bool $defaultCheckAll 设置默认是否全选，默认为 false
 * @param bool $creatable 设置新增选项，默认为 false
 * @param string $createBtnLabel 设置新增选项按钮名称，默认为 "新增选项"
 * @param array $addControls 设置新增选项表单项
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增选项接口
 * @param array $addDialog 设置新增选项弹框配置
 * @param bool $editable 设置编辑选项，默认为 false
 * @param array $editControls 设置编辑选项表单项
 * @param string|array|\AmisSchema\Definition\API $editApi 设置编辑选项接口
 * @param array $editDialog 设置编辑选项弹框配置
 * @param bool $removable 设置删除选项，默认为 false
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除选项接口
 * @param string|bool $initAutoFill 设置初始化时是否执行自动填充，可选：fillIfNotSet、true、false，默认为 fillIfNotSet
 * @param string $optionLabel 设置选项标识文字，用于新增、编辑等操作的标题显示
 * @param bool $checkAllBySearch 设置有检索时只全选检索命中的项，默认为 true
 * @param string $filterOption 设置自定义搜索函数
 * @param string $menuTpl 设置支持配置自定义菜单
 * @param bool $clearable 设置单选模式下是否支持清空
 * @param bool $hideSelected 设置隐藏已选选项，默认为 false
 * @param string $mobileClassName 设置移动端浮层类名
 * @param string $selectMode 设置可选：group、table、tree、chained、associated。分别为：列表形式、表格形式、树形选择形式、级联选择形式，关联选择形式（与级联选择的区别在于，级联是无限极，而关联只有一级，关联左边可以是个 tree）
 * @param string $searchResultMode 设置如果不设置将采用 selectMode 的值，可以单独配置，参考 selectMode，决定搜索结果的展示形式
 * @param array $columns 设置当展示形式为 table 可以用来配置展示哪些列，跟 table 中的 columns 配置相似，只是只有展示功能
 * @param array $leftOptions 设置当展示形式为 associated 时用来配置左边的选项集
 * @param string $leftMode 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree。默认为 list
 * @param string $rightMode 设置当展示形式为 associated 时用来配置右边的选择形式，可选：list、table、tree、chained
 * @param int $maxTagCount 设置标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效
 * @param array|\AmisSchema\Widget\Function\TooltipWrapper $overflowTagPopover 收纳浮层的配置属性，详细配置参考Tooltip
 * @param string $optionClassName 设置选项 CSS 类名
 * @param string $popOverContainerSelector 设置弹层挂载位置选择器，会通过querySelector获取
 * @param bool $showInvalidMatch 设置选项值与选项组不匹配时选项值是否飘红，默认为 false
 * @param string $noResultsText 设置无结果时的文本，默认为 未找到任何结果
 * 
 * @return \AmisSchema\Widget\Input\Select
 */
function AmisSelect(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $options = null,
    mixed $source = null,
    mixed $multiple = null,
    mixed $labelField = null,
    mixed $valueField = null,
    mixed $deferField = null,
    mixed $joinValues = null,
    mixed $extractValue = null,
    mixed $delimiter = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $valuesNoWrap = null,
    mixed $searchable = null,
    mixed $autoComplete = null,
    mixed $selectFirst = null,
    mixed $checkAll = null,
    mixed $checkAllLabel = null,
    mixed $defaultCheckAll = null,
    mixed $creatable = null,
    mixed $createBtnLabel = null,
    mixed $addControls = null,
    mixed $addApi = null,
    mixed $addDialog = null,
    mixed $editable = null,
    mixed $editControls = null,
    mixed $editApi = null,
    mixed $editDialog = null,
    mixed $removable = null,
    mixed $deleteApi = null,
    mixed $initAutoFill = null,
    mixed $optionLabel = null,
    mixed $checkAllBySearch = null,
    mixed $filterOption = null,
    mixed $menuTpl = null,
    mixed $clearable = null,
    mixed $hideSelected = null,
    mixed $mobileClassName = null,
    mixed $selectMode = null,
    mixed $searchResultMode = null,
    mixed $columns = null,
    mixed $leftOptions = null,
    mixed $leftMode = null,
    mixed $rightMode = null,
    mixed $maxTagCount = null,
    mixed $overflowTagPopover = null,
    mixed $optionClassName = null,
    mixed $popOverContainerSelector = null,
    mixed $showInvalidMatch = null,
    mixed $noResultsText = null
): \AmisSchema\Widget\Input\Select
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($options !== null) $args['options'] = $options;
    if ($source !== null) $args['source'] = $source;
    if ($multiple !== null) $args['multiple'] = $multiple;
    if ($labelField !== null) $args['labelField'] = $labelField;
    if ($valueField !== null) $args['valueField'] = $valueField;
    if ($deferField !== null) $args['deferField'] = $deferField;
    if ($joinValues !== null) $args['joinValues'] = $joinValues;
    if ($extractValue !== null) $args['extractValue'] = $extractValue;
    if ($delimiter !== null) $args['delimiter'] = $delimiter;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($valuesNoWrap !== null) $args['valuesNoWrap'] = $valuesNoWrap;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($autoComplete !== null) $args['autoComplete'] = $autoComplete;
    if ($selectFirst !== null) $args['selectFirst'] = $selectFirst;
    if ($checkAll !== null) $args['checkAll'] = $checkAll;
    if ($checkAllLabel !== null) $args['checkAllLabel'] = $checkAllLabel;
    if ($defaultCheckAll !== null) $args['defaultCheckAll'] = $defaultCheckAll;
    if ($creatable !== null) $args['creatable'] = $creatable;
    if ($createBtnLabel !== null) $args['createBtnLabel'] = $createBtnLabel;
    if ($addControls !== null) $args['addControls'] = $addControls;
    if ($addApi !== null) $args['addApi'] = $addApi;
    if ($addDialog !== null) $args['addDialog'] = $addDialog;
    if ($editable !== null) $args['editable'] = $editable;
    if ($editControls !== null) $args['editControls'] = $editControls;
    if ($editApi !== null) $args['editApi'] = $editApi;
    if ($editDialog !== null) $args['editDialog'] = $editDialog;
    if ($removable !== null) $args['removable'] = $removable;
    if ($deleteApi !== null) $args['deleteApi'] = $deleteApi;
    if ($initAutoFill !== null) $args['initAutoFill'] = $initAutoFill;
    if ($optionLabel !== null) $args['optionLabel'] = $optionLabel;
    if ($checkAllBySearch !== null) $args['checkAllBySearch'] = $checkAllBySearch;
    if ($filterOption !== null) $args['filterOption'] = $filterOption;
    if ($menuTpl !== null) $args['menuTpl'] = $menuTpl;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($hideSelected !== null) $args['hideSelected'] = $hideSelected;
    if ($mobileClassName !== null) $args['mobileClassName'] = $mobileClassName;
    if ($selectMode !== null) $args['selectMode'] = $selectMode;
    if ($searchResultMode !== null) $args['searchResultMode'] = $searchResultMode;
    if ($columns !== null) $args['columns'] = $columns;
    if ($leftOptions !== null) $args['leftOptions'] = $leftOptions;
    if ($leftMode !== null) $args['leftMode'] = $leftMode;
    if ($rightMode !== null) $args['rightMode'] = $rightMode;
    if ($maxTagCount !== null) $args['maxTagCount'] = $maxTagCount;
    if ($overflowTagPopover !== null) $args['overflowTagPopover'] = $overflowTagPopover;
    if ($optionClassName !== null) $args['optionClassName'] = $optionClassName;
    if ($popOverContainerSelector !== null) $args['popOverContainerSelector'] = $popOverContainerSelector;
    if ($showInvalidMatch !== null) $args['showInvalidMatch'] = $showInvalidMatch;
    if ($noResultsText !== null) $args['noResultsText'] = $noResultsText;
    return \AmisSchema\Widget\Input\Select::make($args);
}

/**
 * 创建 StaticWidget 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置显示的静态值
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 支持通过配置type为static-xxx的形式，展示其他非表单项组件
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $tpl 设置如果想显示成其他文字，请设置此字段。支持模板语法如: $xxx
 * @param bool|array $quickEdit 设置快速编辑，支持布尔值或配置对象
 * @param bool|array|\AmisSchema\Definition\PopOver $popOver 设置弹出框配置
 * 
 * @return \AmisSchema\Widget\Input\StaticWidget
 */
function AmisStaticWidget(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $tpl = null,
    mixed $quickEdit = null,
    mixed $popOver = null
): \AmisSchema\Widget\Input\StaticWidget
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($tpl !== null) $args['tpl'] = $tpl;
    if ($quickEdit !== null) $args['quickEdit'] = $quickEdit;
    if ($popOver !== null) $args['popOver'] = $popOver;
    return \AmisSchema\Widget\Input\StaticWidget::make($args);
}

/**
 * 创建 SwitchWidget 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置开关大小，默认为 md
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param bool $loading 设置是否处于加载状态，默认为 false
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $option 设置选项说明
 * @param string|array|\AmisSchema\Widget\Widget $onText 设置开启时开关显示的内容，3.6.0支持 Schema
 * @param string|array|\AmisSchema\Widget\Widget $offText 设置关闭时开关显示的内容，3.6.0支持 Schema
 * @param bool|string|int $trueValue 设置标识真值，默认为 true
 * @param bool|string|int $falseValue 设置标识假值，默认为 false
 * 
 * @return \AmisSchema\Widget\Input\SwitchWidget
 */
function AmisSwitchWidget(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $loading = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $option = null,
    mixed $onText = null,
    mixed $offText = null,
    mixed $trueValue = null,
    mixed $falseValue = null
): \AmisSchema\Widget\Input\SwitchWidget
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($loading !== null) $args['loading'] = $loading;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($option !== null) $args['option'] = $option;
    if ($onText !== null) $args['onText'] = $onText;
    if ($offText !== null) $args['offText'] = $offText;
    if ($trueValue !== null) $args['trueValue'] = $trueValue;
    if ($falseValue !== null) $args['falseValue'] = $falseValue;
    return \AmisSchema\Widget\Input\SwitchWidget::make($args);
}

/**
 * 创建 TabsTransfer 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $delimeter 设置拼接符
 * @param \AmisSchema\Definition\API $searchApi 设置如果想通过接口检索，可以设置这个 api
 * @param bool $resultListModeFollowSelect 设置结果面板跟随模式，目前只支持list、table、tree
 * @param bool $statistics 设置是否显示统计数据
 * @param string $selectTitle 设置左侧的标题文字
 * @param string $resultTitle 设置右侧结果的标题文字
 * @param bool $sortable 设置结果可以进行拖拽排序（结果列表为树时，不支持排序）
 * @param string $selectMode 设置可选：list、table、tree、chained、associated
 * @param string $searchResultMode 设置如果不设置将采用 selectMode 的值，可以单独配置，参考 selectMode，决定搜索结果的展示形式
 * @param string $searchPlaceholder 设置左侧列表搜索框提示
 * @param array $columns 设置当展示形式为 table 可以用来配置展示哪些列，跟 table 中的 columns 配置相似，只是只有展示功能
 * @param array $leftOptions 设置当展示形式为 associated 时用来配置左边的选项集
 * @param string $leftMode 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree。默认为 list
 * @param string $rightMode 设置当展示形式为 associated 时用来配置右边的选择形式，可选：list、table、tree、chained
 * @param bool $resultSearchable 设置结果（右则）列表的检索功能，当设置为 true 时，可以通过输入检索模糊匹配检索内容
 * @param string $resultSearchPlaceholder 设置右侧列表搜索框提示
 * @param string $menuTpl 设置用来自定义选项展示
 * @param string $valueTpl 设置用来自定义值的展示
 * 
 * @return \AmisSchema\Widget\Input\TabsTransfer
 */
function AmisTabsTransfer(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $delimeter = null,
    mixed $searchApi = null,
    mixed $resultListModeFollowSelect = null,
    mixed $statistics = null,
    mixed $selectTitle = null,
    mixed $resultTitle = null,
    mixed $sortable = null,
    mixed $selectMode = null,
    mixed $searchResultMode = null,
    mixed $searchPlaceholder = null,
    mixed $columns = null,
    mixed $leftOptions = null,
    mixed $leftMode = null,
    mixed $rightMode = null,
    mixed $resultSearchable = null,
    mixed $resultSearchPlaceholder = null,
    mixed $menuTpl = null,
    mixed $valueTpl = null
): \AmisSchema\Widget\Input\TabsTransfer
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($delimeter !== null) $args['delimeter'] = $delimeter;
    if ($searchApi !== null) $args['searchApi'] = $searchApi;
    if ($resultListModeFollowSelect !== null) $args['resultListModeFollowSelect'] = $resultListModeFollowSelect;
    if ($statistics !== null) $args['statistics'] = $statistics;
    if ($selectTitle !== null) $args['selectTitle'] = $selectTitle;
    if ($resultTitle !== null) $args['resultTitle'] = $resultTitle;
    if ($sortable !== null) $args['sortable'] = $sortable;
    if ($selectMode !== null) $args['selectMode'] = $selectMode;
    if ($searchResultMode !== null) $args['searchResultMode'] = $searchResultMode;
    if ($searchPlaceholder !== null) $args['searchPlaceholder'] = $searchPlaceholder;
    if ($columns !== null) $args['columns'] = $columns;
    if ($leftOptions !== null) $args['leftOptions'] = $leftOptions;
    if ($leftMode !== null) $args['leftMode'] = $leftMode;
    if ($rightMode !== null) $args['rightMode'] = $rightMode;
    if ($resultSearchable !== null) $args['resultSearchable'] = $resultSearchable;
    if ($resultSearchPlaceholder !== null) $args['resultSearchPlaceholder'] = $resultSearchPlaceholder;
    if ($menuTpl !== null) $args['menuTpl'] = $menuTpl;
    if ($valueTpl !== null) $args['valueTpl'] = $valueTpl;
    return \AmisSchema\Widget\Input\TabsTransfer::make($args);
}

/**
 * 创建 TabsTransferPicker 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $delimeter 设置拼接符
 * @param \AmisSchema\Definition\API $searchApi 设置如果想通过接口检索，可以设置这个 api
 * @param bool $resultListModeFollowSelect 设置结果面板跟随模式，目前只支持list、table、tree
 * @param bool $statistics 设置是否显示统计数据
 * @param string $selectTitle 设置左侧的标题文字
 * @param string $resultTitle 设置右侧结果的标题文字
 * @param bool $sortable 设置结果可以进行拖拽排序（结果列表为树时，不支持排序）
 * @param string $selectMode 设置可选：list、table、tree、chained、associated
 * @param string $searchResultMode 设置如果不设置将采用 selectMode 的值，可以单独配置，参考 selectMode，决定搜索结果的展示形式
 * @param string $searchPlaceholder 设置左侧列表搜索框提示
 * @param array $columns 设置当展示形式为 table 可以用来配置展示哪些列，跟 table 中的 columns 配置相似，只是只有展示功能
 * @param array $leftOptions 设置当展示形式为 associated 时用来配置左边的选项集
 * @param string $leftMode 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree。默认为 list
 * @param string $rightMode 设置当展示形式为 associated 时用来配置右边的选择形式，可选：list、table、tree、chained
 * @param bool $resultSearchable 设置结果（右则）列表的检索功能，当设置为 true 时，可以通过输入检索模糊匹配检索内容
 * @param string $resultSearchPlaceholder 设置右侧列表搜索框提示
 * @param string $menuTpl 设置用来自定义选项展示
 * @param string $valueTpl 设置用来自定义值的展示
 * @param string $borderMode 设置边框模式，全边框，还是半边框，或者没边框
 * @param string $modalMode 设置弹出方式，dialog 或者 drawer
 * @param string $modalTitle 设置弹窗标题
 * @param string $modalSize 设置弹窗大小，当 modalMode 为 dialog 时有用
 * @param string $pickerIcon 设置选择器按钮图标
 * @param string $resetValue 设置清除后设置此配置项给定的值
 * 
 * @return \AmisSchema\Widget\Input\TabsTransferPicker
 */
function AmisTabsTransferPicker(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $delimeter = null,
    mixed $searchApi = null,
    mixed $resultListModeFollowSelect = null,
    mixed $statistics = null,
    mixed $selectTitle = null,
    mixed $resultTitle = null,
    mixed $sortable = null,
    mixed $selectMode = null,
    mixed $searchResultMode = null,
    mixed $searchPlaceholder = null,
    mixed $columns = null,
    mixed $leftOptions = null,
    mixed $leftMode = null,
    mixed $rightMode = null,
    mixed $resultSearchable = null,
    mixed $resultSearchPlaceholder = null,
    mixed $menuTpl = null,
    mixed $valueTpl = null,
    mixed $borderMode = null,
    mixed $modalMode = null,
    mixed $modalTitle = null,
    mixed $modalSize = null,
    mixed $pickerIcon = null,
    mixed $resetValue = null
): \AmisSchema\Widget\Input\TabsTransferPicker
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($delimeter !== null) $args['delimeter'] = $delimeter;
    if ($searchApi !== null) $args['searchApi'] = $searchApi;
    if ($resultListModeFollowSelect !== null) $args['resultListModeFollowSelect'] = $resultListModeFollowSelect;
    if ($statistics !== null) $args['statistics'] = $statistics;
    if ($selectTitle !== null) $args['selectTitle'] = $selectTitle;
    if ($resultTitle !== null) $args['resultTitle'] = $resultTitle;
    if ($sortable !== null) $args['sortable'] = $sortable;
    if ($selectMode !== null) $args['selectMode'] = $selectMode;
    if ($searchResultMode !== null) $args['searchResultMode'] = $searchResultMode;
    if ($searchPlaceholder !== null) $args['searchPlaceholder'] = $searchPlaceholder;
    if ($columns !== null) $args['columns'] = $columns;
    if ($leftOptions !== null) $args['leftOptions'] = $leftOptions;
    if ($leftMode !== null) $args['leftMode'] = $leftMode;
    if ($rightMode !== null) $args['rightMode'] = $rightMode;
    if ($resultSearchable !== null) $args['resultSearchable'] = $resultSearchable;
    if ($resultSearchPlaceholder !== null) $args['resultSearchPlaceholder'] = $resultSearchPlaceholder;
    if ($menuTpl !== null) $args['menuTpl'] = $menuTpl;
    if ($valueTpl !== null) $args['valueTpl'] = $valueTpl;
    if ($borderMode !== null) $args['borderMode'] = $borderMode;
    if ($modalMode !== null) $args['modalMode'] = $modalMode;
    if ($modalTitle !== null) $args['modalTitle'] = $modalTitle;
    if ($modalSize !== null) $args['modalSize'] = $modalSize;
    if ($pickerIcon !== null) $args['pickerIcon'] = $pickerIcon;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\TabsTransferPicker::make($args);
}

/**
 * 创建 Textarea 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param int $minRows 设置最小行数
 * @param int $maxRows 设置最大行数
 * @param bool $trimContents 设置是否去除首尾空白文本
 * @param bool $showCounter 设置是否显示计数器
 * @param int $maxLength 设置限制最大字数
 * @param bool $clearable 设置是否可清除
 * @param string $resetValue 设置清除后设置此配置项给定的值
 * 
 * @return \AmisSchema\Widget\Input\Textarea
 */
function AmisTextarea(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $minRows = null,
    mixed $maxRows = null,
    mixed $trimContents = null,
    mixed $showCounter = null,
    mixed $maxLength = null,
    mixed $clearable = null,
    mixed $resetValue = null
): \AmisSchema\Widget\Input\Textarea
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($minRows !== null) $args['minRows'] = $minRows;
    if ($maxRows !== null) $args['maxRows'] = $maxRows;
    if ($trimContents !== null) $args['trimContents'] = $trimContents;
    if ($showCounter !== null) $args['showCounter'] = $showCounter;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($clearable !== null) $args['clearable'] = $clearable;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\Textarea::make($args);
}

/**
 * 创建 Transfer 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $delimeter 设置拼接符
 * @param \AmisSchema\Definition\API $searchApi 设置如果想通过接口检索，可以设置这个 api
 * @param bool $resultListModeFollowSelect 设置结果面板跟随模式，目前只支持list、table、tree
 * @param bool $statistics 设置是否显示统计数据
 * @param string $selectTitle 设置左侧的标题文字
 * @param string $resultTitle 设置右侧结果的标题文字
 * @param bool $sortable 设置结果可以进行拖拽排序（结果列表为树时，不支持排序）
 * @param string $selectMode 设置可选：list、table、tree、chained、associated
 * @param string $searchResultMode 设置如果不设置将采用 selectMode 的值，可以单独配置，参考 selectMode，决定搜索结果的展示形式
 * @param string $searchPlaceholder 设置左侧列表搜索框提示
 * @param array $columns 设置当展示形式为 table 可以用来配置展示哪些列，跟 table 中的 columns 配置相似，只是只有展示功能
 * @param array $leftOptions 设置当展示形式为 associated 时用来配置左边的选项集
 * @param string $leftMode 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree。默认为 list
 * @param string $rightMode 设置当展示形式为 associated 时用来配置右边的选择形式，可选：list、table、tree、chained
 * @param bool $resultSearchable 设置结果（右则）列表的检索功能，当设置为 true 时，可以通过输入检索模糊匹配检索内容
 * @param string $resultSearchPlaceholder 设置右侧列表搜索框提示
 * @param string $menuTpl 设置用来自定义选项展示
 * @param string $valueTpl 设置用来自定义值的展示
 * 
 * @return \AmisSchema\Widget\Input\Transfer
 */
function AmisTransfer(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $delimeter = null,
    mixed $searchApi = null,
    mixed $resultListModeFollowSelect = null,
    mixed $statistics = null,
    mixed $selectTitle = null,
    mixed $resultTitle = null,
    mixed $sortable = null,
    mixed $selectMode = null,
    mixed $searchResultMode = null,
    mixed $searchPlaceholder = null,
    mixed $columns = null,
    mixed $leftOptions = null,
    mixed $leftMode = null,
    mixed $rightMode = null,
    mixed $resultSearchable = null,
    mixed $resultSearchPlaceholder = null,
    mixed $menuTpl = null,
    mixed $valueTpl = null
): \AmisSchema\Widget\Input\Transfer
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($delimeter !== null) $args['delimeter'] = $delimeter;
    if ($searchApi !== null) $args['searchApi'] = $searchApi;
    if ($resultListModeFollowSelect !== null) $args['resultListModeFollowSelect'] = $resultListModeFollowSelect;
    if ($statistics !== null) $args['statistics'] = $statistics;
    if ($selectTitle !== null) $args['selectTitle'] = $selectTitle;
    if ($resultTitle !== null) $args['resultTitle'] = $resultTitle;
    if ($sortable !== null) $args['sortable'] = $sortable;
    if ($selectMode !== null) $args['selectMode'] = $selectMode;
    if ($searchResultMode !== null) $args['searchResultMode'] = $searchResultMode;
    if ($searchPlaceholder !== null) $args['searchPlaceholder'] = $searchPlaceholder;
    if ($columns !== null) $args['columns'] = $columns;
    if ($leftOptions !== null) $args['leftOptions'] = $leftOptions;
    if ($leftMode !== null) $args['leftMode'] = $leftMode;
    if ($rightMode !== null) $args['rightMode'] = $rightMode;
    if ($resultSearchable !== null) $args['resultSearchable'] = $resultSearchable;
    if ($resultSearchPlaceholder !== null) $args['resultSearchPlaceholder'] = $resultSearchPlaceholder;
    if ($menuTpl !== null) $args['menuTpl'] = $menuTpl;
    if ($valueTpl !== null) $args['valueTpl'] = $valueTpl;
    return \AmisSchema\Widget\Input\Transfer::make($args);
}

/**
 * 创建 TransferPicker 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $delimeter 设置拼接符
 * @param \AmisSchema\Definition\API $searchApi 设置如果想通过接口检索，可以设置这个 api
 * @param bool $resultListModeFollowSelect 设置结果面板跟随模式，目前只支持list、table、tree
 * @param bool $statistics 设置是否显示统计数据
 * @param string $selectTitle 设置左侧的标题文字
 * @param string $resultTitle 设置右侧结果的标题文字
 * @param bool $sortable 设置结果可以进行拖拽排序（结果列表为树时，不支持排序）
 * @param string $selectMode 设置可选：list、table、tree、chained、associated
 * @param string $searchResultMode 设置如果不设置将采用 selectMode 的值，可以单独配置，参考 selectMode，决定搜索结果的展示形式
 * @param string $searchPlaceholder 设置左侧列表搜索框提示
 * @param array $columns 设置当展示形式为 table 可以用来配置展示哪些列，跟 table 中的 columns 配置相似，只是只有展示功能
 * @param array $leftOptions 设置当展示形式为 associated 时用来配置左边的选项集
 * @param string $leftMode 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree。默认为 list
 * @param string $rightMode 设置当展示形式为 associated 时用来配置右边的选择形式，可选：list、table、tree、chained
 * @param bool $resultSearchable 设置结果（右则）列表的检索功能，当设置为 true 时，可以通过输入检索模糊匹配检索内容
 * @param string $resultSearchPlaceholder 设置右侧列表搜索框提示
 * @param string $menuTpl 设置用来自定义选项展示
 * @param string $valueTpl 设置用来自定义值的展示
 * @param string $borderMode 设置边框模式，全边框，还是半边框，或者没边框
 * @param string $modalMode 设置弹出方式，dialog 或者 drawer
 * @param string $modalTitle 设置弹窗标题
 * @param string $modalSize 设置弹窗大小，当 modalMode 为 dialog 时有用
 * @param string $pickerIcon 设置选择器按钮图标
 * @param string $resetValue 设置清除后设置此配置项给定的值
 * 
 * @return \AmisSchema\Widget\Input\TransferPicker
 */
function AmisTransferPicker(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $delimeter = null,
    mixed $searchApi = null,
    mixed $resultListModeFollowSelect = null,
    mixed $statistics = null,
    mixed $selectTitle = null,
    mixed $resultTitle = null,
    mixed $sortable = null,
    mixed $selectMode = null,
    mixed $searchResultMode = null,
    mixed $searchPlaceholder = null,
    mixed $columns = null,
    mixed $leftOptions = null,
    mixed $leftMode = null,
    mixed $rightMode = null,
    mixed $resultSearchable = null,
    mixed $resultSearchPlaceholder = null,
    mixed $menuTpl = null,
    mixed $valueTpl = null,
    mixed $borderMode = null,
    mixed $modalMode = null,
    mixed $modalTitle = null,
    mixed $modalSize = null,
    mixed $pickerIcon = null,
    mixed $resetValue = null
): \AmisSchema\Widget\Input\TransferPicker
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($delimeter !== null) $args['delimeter'] = $delimeter;
    if ($searchApi !== null) $args['searchApi'] = $searchApi;
    if ($resultListModeFollowSelect !== null) $args['resultListModeFollowSelect'] = $resultListModeFollowSelect;
    if ($statistics !== null) $args['statistics'] = $statistics;
    if ($selectTitle !== null) $args['selectTitle'] = $selectTitle;
    if ($resultTitle !== null) $args['resultTitle'] = $resultTitle;
    if ($sortable !== null) $args['sortable'] = $sortable;
    if ($selectMode !== null) $args['selectMode'] = $selectMode;
    if ($searchResultMode !== null) $args['searchResultMode'] = $searchResultMode;
    if ($searchPlaceholder !== null) $args['searchPlaceholder'] = $searchPlaceholder;
    if ($columns !== null) $args['columns'] = $columns;
    if ($leftOptions !== null) $args['leftOptions'] = $leftOptions;
    if ($leftMode !== null) $args['leftMode'] = $leftMode;
    if ($rightMode !== null) $args['rightMode'] = $rightMode;
    if ($resultSearchable !== null) $args['resultSearchable'] = $resultSearchable;
    if ($resultSearchPlaceholder !== null) $args['resultSearchPlaceholder'] = $resultSearchPlaceholder;
    if ($menuTpl !== null) $args['menuTpl'] = $menuTpl;
    if ($valueTpl !== null) $args['valueTpl'] = $valueTpl;
    if ($borderMode !== null) $args['borderMode'] = $borderMode;
    if ($modalMode !== null) $args['modalMode'] = $modalMode;
    if ($modalTitle !== null) $args['modalTitle'] = $modalTitle;
    if ($modalSize !== null) $args['modalSize'] = $modalSize;
    if ($pickerIcon !== null) $args['pickerIcon'] = $pickerIcon;
    if ($resetValue !== null) $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\TransferPicker::make($args);
}

/**
 * 创建 TreeSelect 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param string $iconField 设置图标值字段
 * @param \AmisSchema\Definition\API $searchApi 设置检索接口
 * @param bool $hideRoot 设置如果想要显示个顶级节点，请设置为 false
 * @param string $rootLabel 设置当 hideRoot 不为 false 时有用，用来设置顶级节点的文字
 * @param bool $showIcon 设置是否显示图标
 * @param bool $showRadio 设置是否显示单选按钮，multiple 为 false 是有效
 * @param bool $showOutline 设置是否显示树层级展开线
 * @param bool $initiallyOpen 设置设置是否默认展开所有层级
 * @param int $unfoldedLevel 设置设置默认展开的级数，只有initiallyOpen不是true时生效
 * @param bool $autoCheckChildren 设置当选中父节点时级联选择子节点
 * @param bool $cascade 设置autoCheckChildren 为 true 时生效；默认行为：子节点禁用，值只包含父节点值；设置为 true 时，子节点可反选，值包含父子节点值
 * @param bool $withChildren 设置cascade 为 false 时生效，选中父节点时，值里面将包含父子节点的值，否则只会保留父节点的值
 * @param bool $onlyChildren 设置autoCheckChildren 为 true 时生效，不受 cascade 影响；onlyChildren 为 true，ui 行为级联选中子节点，子节点可反选，值只包含子节点的值
 * @param bool $onlyLeaf 设置只允许选择叶子节点
 * @param bool $rootCreatable 设置是否可以创建顶级节点
 * @param string $rootCreateTip 设置创建顶级节点的悬浮提示
 * @param int $minLength 设置最少选中的节点数
 * @param int $maxLength 设置最多选中的节点数
 * @param string $treeContainerClassName 设置tree 控件最外层容器类名, 与 inputClassName 等价
 * @param string $treeClassName 设置tree 组件层类名
 * @param bool $enableNodePath 设置是否开启节点路径模式
 * @param string $pathSeparator 设置节点路径的分隔符，enableNodePath为true时生效
 * @param string $highlightTxt 设置标签中需要高亮的字符，支持变量
 * @param int $itemHeight 设置每个选项的高度，用于虚拟渲染
 * @param int $virtualThreshold 设置在选项数量超过多少时开启虚拟渲染
 * @param string $menuTpl 设置选项自定义渲染 HTML 片段
 * @param bool $enableDefaultIcon 设置是否为选项添加默认的前缀 Icon，父节点默认为folder，叶节点默认为file
 * @param bool $heightAuto 设置默认高度会有个 maxHeight，即超过一定高度就会内部滚动，如果希望自动增长请设置此属性
 * @param array $nodeBehavior 设置节点行为配置，支持配置多个行为
 * @param bool $autoCancelParent 设置子节点取消时自动取消父节点的值，仅在多选且 cascade 为 true 时生效
 * @param mixed $toolbar 设置工具栏区域，仅开启检索时生效
 * @param string $toolbarClassName 设置工具栏区域类名
 * @param mixed $itemActions 设置节点操作栏区域
 * @param array|\AmisSchema\Definition\API|string $deferApi 
 * @param bool $clearable 设置单选模式下是否支持清空
 * 
 * @return \AmisSchema\Widget\Input\TreeSelect
 */
function AmisTreeSelect(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $iconField = null,
    mixed $searchApi = null,
    mixed $hideRoot = null,
    mixed $rootLabel = null,
    mixed $showIcon = null,
    mixed $showRadio = null,
    mixed $showOutline = null,
    mixed $initiallyOpen = null,
    mixed $unfoldedLevel = null,
    mixed $autoCheckChildren = null,
    mixed $cascade = null,
    mixed $withChildren = null,
    mixed $onlyChildren = null,
    mixed $onlyLeaf = null,
    mixed $rootCreatable = null,
    mixed $rootCreateTip = null,
    mixed $minLength = null,
    mixed $maxLength = null,
    mixed $treeContainerClassName = null,
    mixed $treeClassName = null,
    mixed $enableNodePath = null,
    mixed $pathSeparator = null,
    mixed $highlightTxt = null,
    mixed $itemHeight = null,
    mixed $virtualThreshold = null,
    mixed $menuTpl = null,
    mixed $enableDefaultIcon = null,
    mixed $heightAuto = null,
    mixed $nodeBehavior = null,
    mixed $autoCancelParent = null,
    mixed $toolbar = null,
    mixed $toolbarClassName = null,
    mixed $itemActions = null,
    mixed $deferApi = null,
    mixed $clearable = null
): \AmisSchema\Widget\Input\TreeSelect
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($iconField !== null) $args['iconField'] = $iconField;
    if ($searchApi !== null) $args['searchApi'] = $searchApi;
    if ($hideRoot !== null) $args['hideRoot'] = $hideRoot;
    if ($rootLabel !== null) $args['rootLabel'] = $rootLabel;
    if ($showIcon !== null) $args['showIcon'] = $showIcon;
    if ($showRadio !== null) $args['showRadio'] = $showRadio;
    if ($showOutline !== null) $args['showOutline'] = $showOutline;
    if ($initiallyOpen !== null) $args['initiallyOpen'] = $initiallyOpen;
    if ($unfoldedLevel !== null) $args['unfoldedLevel'] = $unfoldedLevel;
    if ($autoCheckChildren !== null) $args['autoCheckChildren'] = $autoCheckChildren;
    if ($cascade !== null) $args['cascade'] = $cascade;
    if ($withChildren !== null) $args['withChildren'] = $withChildren;
    if ($onlyChildren !== null) $args['onlyChildren'] = $onlyChildren;
    if ($onlyLeaf !== null) $args['onlyLeaf'] = $onlyLeaf;
    if ($rootCreatable !== null) $args['rootCreatable'] = $rootCreatable;
    if ($rootCreateTip !== null) $args['rootCreateTip'] = $rootCreateTip;
    if ($minLength !== null) $args['minLength'] = $minLength;
    if ($maxLength !== null) $args['maxLength'] = $maxLength;
    if ($treeContainerClassName !== null) $args['treeContainerClassName'] = $treeContainerClassName;
    if ($treeClassName !== null) $args['treeClassName'] = $treeClassName;
    if ($enableNodePath !== null) $args['enableNodePath'] = $enableNodePath;
    if ($pathSeparator !== null) $args['pathSeparator'] = $pathSeparator;
    if ($highlightTxt !== null) $args['highlightTxt'] = $highlightTxt;
    if ($itemHeight !== null) $args['itemHeight'] = $itemHeight;
    if ($virtualThreshold !== null) $args['virtualThreshold'] = $virtualThreshold;
    if ($menuTpl !== null) $args['menuTpl'] = $menuTpl;
    if ($enableDefaultIcon !== null) $args['enableDefaultIcon'] = $enableDefaultIcon;
    if ($heightAuto !== null) $args['heightAuto'] = $heightAuto;
    if ($nodeBehavior !== null) $args['nodeBehavior'] = $nodeBehavior;
    if ($autoCancelParent !== null) $args['autoCancelParent'] = $autoCancelParent;
    if ($toolbar !== null) $args['toolbar'] = $toolbar;
    if ($toolbarClassName !== null) $args['toolbarClassName'] = $toolbarClassName;
    if ($itemActions !== null) $args['itemActions'] = $itemActions;
    if ($deferApi !== null) $args['deferApi'] = $deferApi;
    if ($clearable !== null) $args['clearable'] = $clearable;
    return \AmisSchema\Widget\Input\TreeSelect::make($args);
}

/**
 * 创建 UUID 组件
 * 
 * @param string $label 设置表单项标签。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
 * @param string $type 设置指定表单项类型。
 * @param mixed $onEvent 
 * @param string $visibleOn 设置当前表单项是否显示的条件。
 * @param string $disabledOn 设置当前表单项是否禁用的条件。
 * @param mixed $data 
 * @param string $inputClassName 设置表单控制器类名。
 * @param string $labelClassName 设置 label 类名。
 * @param string $labelAlign 设置表单项标签对齐方式，可选值：'left'、'center'、'right'。
 * @param int|string $labelWidth 设置表单项标签宽度。
 * @param string $description 设置表单项描述。
 * @param bool $inline 设置是否为内联模式。
 * @param bool $submitOnChange 设置是否该表单项值发生变化时就提交当前表单。
 * @param bool $readOnly 设置当前表单项是否为只读状态。
 * @param string $readOnlyOn 设置当前表单项是否只读的条件。
 * @param string $requiredOn 设置通过表达式来配置当前表单项是否为必填。
 * @param string|array $validations 设置表单项值格式验证。
 * @param array $validationErrors 设置表单项值验证失败时的错误信息。
 * @param string|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
 * @param bool $clearValueOnHidden 设置表单项隐藏时，是否在当前 Form 中删除掉该表单项值。
 * @param bool $autoFocus 设置是否自动获取焦点。
 * @param string $mode 设置配置当前表单项展示模式，可选值：'normal'、'inline'、'horizontal'。
 * @param array $horizontal 设置当 mode 为 horizontal 时有用，用来控制 label。
 * @param string $hint 设置输入提示，聚焦的时候显示。
 * @param string|array $remark 设置显示一个小图标, hover 查看提示内容。
 * @param string|\AmisSchema\Widget\Display\Remark $labelRemark 设置显示一个小图标, hover 查看提示内容, 这个小图标跟 label 在一起。
 * @param string $inputGroupClassName 设置输入框容器 css 类名。
 * @param mixed $defaultValue 设置默认值。
 * @param bool $showErrorMsg 设置是否显示验证错误信息。
 * @param bool $hidden 设置当前表单项是否隐藏。
 * @param string $hiddenOn 设置当前表单项是否隐藏的条件。
 * @param int $row 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @param string $staticOn 设置是否静态展示表达式。
 * @param string $staticPlaceholder 设置静态展示时的占位符。
 * @param bool $strictMode 设置是否严格模式，false 可及时获取所有表单数据。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $autoFill 设置数据录入配置，自动填充或参照录入。
 * @param string $staticClassName 设置静态展示时的类名。
 * @param string $staticLabelClassName 设置静态展示时的 Label 的类名。
 * @param string $staticInputClassName 设置静态展示时的 value 的类名。
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $staticSchema 设置自定义静态展示方式。
 * @param bool $validateOnChange 设置表单项值发生变化时就校验。
 * @param string $columnClassName 列的类名，可以用它配置列宽度。默认平均分配。
 * @param bool $unique 设置当前列值是否唯一，即不允许重复选择。
 * @param int $length 设置长度，用于生成短随机数
 * 
 * @return \AmisSchema\Widget\Input\UUID
 */
function AmisUUID(
    mixed $label = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $inputClassName = null,
    mixed $labelClassName = null,
    mixed $labelAlign = null,
    mixed $labelWidth = null,
    mixed $description = null,
    mixed $inline = null,
    mixed $submitOnChange = null,
    mixed $readOnly = null,
    mixed $readOnlyOn = null,
    mixed $requiredOn = null,
    mixed $validations = null,
    mixed $validationErrors = null,
    mixed $validateApi = null,
    mixed $clearValueOnHidden = null,
    mixed $autoFocus = null,
    mixed $mode = null,
    mixed $horizontal = null,
    mixed $hint = null,
    mixed $remark = null,
    mixed $labelRemark = null,
    mixed $inputGroupClassName = null,
    mixed $defaultValue = null,
    mixed $showErrorMsg = null,
    mixed $hidden = null,
    mixed $hiddenOn = null,
    mixed $row = null,
    mixed $staticOn = null,
    mixed $staticPlaceholder = null,
    mixed $strictMode = null,
    mixed $autoFill = null,
    mixed $staticClassName = null,
    mixed $staticLabelClassName = null,
    mixed $staticInputClassName = null,
    mixed $staticSchema = null,
    mixed $validateOnChange = null,
    mixed $columnClassName = null,
    mixed $unique = null,
    mixed $length = null
): \AmisSchema\Widget\Input\UUID
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($name !== null) $args['name'] = $name;
    if ($value !== null) $args['value'] = $value;
    if ($placeholder !== null) $args['placeholder'] = $placeholder;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($visible !== null) $args['visible'] = $visible;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($inputClassName !== null) $args['inputClassName'] = $inputClassName;
    if ($labelClassName !== null) $args['labelClassName'] = $labelClassName;
    if ($labelAlign !== null) $args['labelAlign'] = $labelAlign;
    if ($labelWidth !== null) $args['labelWidth'] = $labelWidth;
    if ($description !== null) $args['description'] = $description;
    if ($inline !== null) $args['inline'] = $inline;
    if ($submitOnChange !== null) $args['submitOnChange'] = $submitOnChange;
    if ($readOnly !== null) $args['readOnly'] = $readOnly;
    if ($readOnlyOn !== null) $args['readOnlyOn'] = $readOnlyOn;
    if ($requiredOn !== null) $args['requiredOn'] = $requiredOn;
    if ($validations !== null) $args['validations'] = $validations;
    if ($validationErrors !== null) $args['validationErrors'] = $validationErrors;
    if ($validateApi !== null) $args['validateApi'] = $validateApi;
    if ($clearValueOnHidden !== null) $args['clearValueOnHidden'] = $clearValueOnHidden;
    if ($autoFocus !== null) $args['autoFocus'] = $autoFocus;
    if ($mode !== null) $args['mode'] = $mode;
    if ($horizontal !== null) $args['horizontal'] = $horizontal;
    if ($hint !== null) $args['hint'] = $hint;
    if ($remark !== null) $args['remark'] = $remark;
    if ($labelRemark !== null) $args['labelRemark'] = $labelRemark;
    if ($inputGroupClassName !== null) $args['inputGroupClassName'] = $inputGroupClassName;
    if ($defaultValue !== null) $args['defaultValue'] = $defaultValue;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($hidden !== null) $args['hidden'] = $hidden;
    if ($hiddenOn !== null) $args['hiddenOn'] = $hiddenOn;
    if ($row !== null) $args['row'] = $row;
    if ($staticOn !== null) $args['staticOn'] = $staticOn;
    if ($staticPlaceholder !== null) $args['staticPlaceholder'] = $staticPlaceholder;
    if ($strictMode !== null) $args['strictMode'] = $strictMode;
    if ($autoFill !== null) $args['autoFill'] = $autoFill;
    if ($staticClassName !== null) $args['staticClassName'] = $staticClassName;
    if ($staticLabelClassName !== null) $args['staticLabelClassName'] = $staticLabelClassName;
    if ($staticInputClassName !== null) $args['staticInputClassName'] = $staticInputClassName;
    if ($staticSchema !== null) $args['staticSchema'] = $staticSchema;
    if ($validateOnChange !== null) $args['validateOnChange'] = $validateOnChange;
    if ($columnClassName !== null) $args['columnClassName'] = $columnClassName;
    if ($unique !== null) $args['unique'] = $unique;
    if ($length !== null) $args['length'] = $length;
    return \AmisSchema\Widget\Input\UUID::make($args);
}

/**
 * 创建 Collapse 组件
 * 
 * @param string|array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $body 内容
 * @param bool $disabled 禁用，默认为 false
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param bool $collapsed 初始状态是否折叠，默认为 true
 * @param string|int $key 标识
 * @param string|array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $header 标题
 * @param bool $showArrow 是否展示图标，默认为 true
 * 
 * @return \AmisSchema\Widget\Layout\Collapse
 */
function AmisCollapse(
    mixed $body = null,
    mixed $disabled = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $collapsed = null,
    mixed $key = null,
    mixed $header = null,
    mixed $showArrow = null
): \AmisSchema\Widget\Layout\Collapse
{
    $args = [];
    if ($body !== null) $args['body'] = $body;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($collapsed !== null) $args['collapsed'] = $collapsed;
    if ($key !== null) $args['key'] = $key;
    if ($header !== null) $args['header'] = $header;
    if ($showArrow !== null) $args['showArrow'] = $showArrow;
    return \AmisSchema\Widget\Layout\Collapse::make($args);
}

/**
 * 创建 Container 组件
 * 
 * @param string|array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $body 内容
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $bodyClassName 容器内容区的类名
 * @param string $wrapperComponent 容器标签名，默认为 'div'
 * 
 * @return \AmisSchema\Widget\Layout\Container
 */
function AmisContainer(
    mixed $body = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $bodyClassName = null,
    mixed $wrapperComponent = null
): \AmisSchema\Widget\Layout\Container
{
    $args = [];
    if ($body !== null) $args['body'] = $body;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($bodyClassName !== null) $args['bodyClassName'] = $bodyClassName;
    if ($wrapperComponent !== null) $args['wrapperComponent'] = $wrapperComponent;
    return \AmisSchema\Widget\Layout\Container::make($args);
}

/**
 * 创建 Divider 组件
 * 
 * @param \AmisSchema\Widget\Widget|string|\AmisSchema\Widget\Widget[] $title 分割线的标题
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $lineStyle 分割线的样式，支持 dashed 和 solid
 * @param string $direction 分割线的方向，支持 horizontal 和 vertical
 * @param string $color 分割线的颜色
 * @param int|float $rotate 分割线的旋转角度
 * @param string $titleClassName 分割线的标题类名
 * @param string $titlePosition 分割线的标题位置，支持 left、center 和 right
 * 
 * @return \AmisSchema\Widget\Layout\Divider
 */
function AmisDivider(
    mixed $title = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $lineStyle = null,
    mixed $direction = null,
    mixed $color = null,
    mixed $rotate = null,
    mixed $titleClassName = null,
    mixed $titlePosition = null
): \AmisSchema\Widget\Layout\Divider
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($lineStyle !== null) $args['lineStyle'] = $lineStyle;
    if ($direction !== null) $args['direction'] = $direction;
    if ($color !== null) $args['color'] = $color;
    if ($rotate !== null) $args['rotate'] = $rotate;
    if ($titleClassName !== null) $args['titleClassName'] = $titleClassName;
    if ($titlePosition !== null) $args['titlePosition'] = $titlePosition;
    return \AmisSchema\Widget\Layout\Divider::make($args);
}

/**
 * 创建 Flex 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $justify 主轴对齐方式，支持: start、flex-start、center、end、flex-end、space-around、space-between、space-evenly
 * @param string $alignItems 交叉轴对齐方式，支持: stretch、start、flex-start、flex-end、end、center、baseline
 * @param array|\AmisSchema\Widget\Widget[] $items Flex 子项
 * 
 * @return \AmisSchema\Widget\Layout\Flex
 */
function AmisFlex(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $justify = null,
    mixed $alignItems = null,
    mixed $items = null
): \AmisSchema\Widget\Layout\Flex
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($justify !== null) $args['justify'] = $justify;
    if ($alignItems !== null) $args['alignItems'] = $alignItems;
    if ($items !== null) $args['items'] = $items;
    return \AmisSchema\Widget\Layout\Flex::make($args);
}

/**
 * 创建 Grid 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $gap 水平间距，支持: xs、sm、base、none、md、lg
 * @param string $valign 垂直对齐方式，支持: top、middle、bottom、between
 * @param string $align 水平对齐方式，支持: left、right、between、center
 * @param array|\AmisSchema\Widget\Widget[] $columns 列集合
 * 
 * @return \AmisSchema\Widget\Layout\Grid
 */
function AmisGrid(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $gap = null,
    mixed $valign = null,
    mixed $align = null,
    mixed $columns = null
): \AmisSchema\Widget\Layout\Grid
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($gap !== null) $args['gap'] = $gap;
    if ($valign !== null) $args['valign'] = $valign;
    if ($align !== null) $args['align'] = $align;
    if ($columns !== null) $args['columns'] = $columns;
    return \AmisSchema\Widget\Layout\Grid::make($args);
}

/**
 * 创建 Grid2D 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $gridClassName 外层 Dom 的类名
 * @param int|string $gap 格子间距，包括水平和垂直
 * @param int $cols 格子水平划分为几个区域
 * @param int $rowHeight 每个格子默认垂直高度
 * @param int|string $rowGap 格子垂直间距
 * @param array|\AmisSchema\Widget\Widget[] $grids 格子集合
 * 
 * @return \AmisSchema\Widget\Layout\Grid2D
 */
function AmisGrid2D(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $gridClassName = null,
    mixed $gap = null,
    mixed $cols = null,
    mixed $rowHeight = null,
    mixed $rowGap = null,
    mixed $grids = null
): \AmisSchema\Widget\Layout\Grid2D
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($gridClassName !== null) $args['gridClassName'] = $gridClassName;
    if ($gap !== null) $args['gap'] = $gap;
    if ($cols !== null) $args['cols'] = $cols;
    if ($rowHeight !== null) $args['rowHeight'] = $rowHeight;
    if ($rowGap !== null) $args['rowGap'] = $rowGap;
    if ($grids !== null) $args['grids'] = $grids;
    return \AmisSchema\Widget\Layout\Grid2D::make($args);
}

/**
 * 创建 HBox 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $gap 水平间距，可选值：'xs'、'sm'、'base'、'none'、'md'、'lg'
 * @param string $valign 垂直对齐方式，可选值：'top'、'middle'、'bottom'、'between'
 * @param string $align 水平对齐方式，可选值：'left'、'right'、'between'、'center'
 * @param array|\AmisSchema\Widget\Widget[] $columns 列集合
 * 
 * @return \AmisSchema\Widget\Layout\HBox
 */
function AmisHBox(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $gap = null,
    mixed $valign = null,
    mixed $align = null,
    mixed $columns = null
): \AmisSchema\Widget\Layout\HBox
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($gap !== null) $args['gap'] = $gap;
    if ($valign !== null) $args['valign'] = $valign;
    if ($align !== null) $args['align'] = $align;
    if ($columns !== null) $args['columns'] = $columns;
    return \AmisSchema\Widget\Layout\HBox::make($args);
}

/**
 * 创建 Page 组件
 * 
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $title 设置页面标题
 * @param \AmisSchema\Widget\Widget|string|array|\AmisSchema\Widget\Widget[] $body 设置页面内容区
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $subTitle 设置页面副标题
 * @param \AmisSchema\Widget\Display\Remark $remark 设置标题附近的提示内容
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $aside 设置页面边栏内容
 * @param bool $asideResizor 设置边栏宽度是否可调整
 * @param int|float $asideMinWidth 设置边栏最小宽度
 * @param int|float $asideMaxWidth 设置边栏最大宽度
 * @param bool $asideSticky 设置边栏是否固定
 * @param string $asidePosition 设置边栏位置（left/right）
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|array|string $toolbar 设置右上角工具栏内容
 * @param array $cssVars 设置自定义 CSS 变量
 * @param string $toolbarClassName 设置 Toolbar dom 类名
 * @param string $bodyClassName 设置 Body dom 类名
 * @param string $asideClassName 设置 Aside dom 类名
 * @param string $headerClassName 设置 Header 区域 dom 类名
 * @param \AmisSchema\Definition\API|string|array $initApi 设置初始数据 API
 * @param bool $initFetch 设置是否自动拉取初始数据
 * @param string $initFetchOn 设置是否拉取初始数据的表达式
 * @param int $interval 设置自动刷新时间间隔（ms）
 * @param bool $silentPolling 设置刷新时是否静默
 * @param string $stopAutoRefreshWhen 设置停止自动刷新的表达式
 * @param array $pullRefresh 设置下拉刷新配置
 * 
 * @return \AmisSchema\Widget\Layout\Page
 */
function AmisPage(
    mixed $title = null,
    mixed $body = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $subTitle = null,
    mixed $remark = null,
    mixed $aside = null,
    mixed $asideResizor = null,
    mixed $asideMinWidth = null,
    mixed $asideMaxWidth = null,
    mixed $asideSticky = null,
    mixed $asidePosition = null,
    mixed $toolbar = null,
    mixed $cssVars = null,
    mixed $toolbarClassName = null,
    mixed $bodyClassName = null,
    mixed $asideClassName = null,
    mixed $headerClassName = null,
    mixed $initApi = null,
    mixed $initFetch = null,
    mixed $initFetchOn = null,
    mixed $interval = null,
    mixed $silentPolling = null,
    mixed $stopAutoRefreshWhen = null,
    mixed $pullRefresh = null
): \AmisSchema\Widget\Layout\Page
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($body !== null) $args['body'] = $body;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($subTitle !== null) $args['subTitle'] = $subTitle;
    if ($remark !== null) $args['remark'] = $remark;
    if ($aside !== null) $args['aside'] = $aside;
    if ($asideResizor !== null) $args['asideResizor'] = $asideResizor;
    if ($asideMinWidth !== null) $args['asideMinWidth'] = $asideMinWidth;
    if ($asideMaxWidth !== null) $args['asideMaxWidth'] = $asideMaxWidth;
    if ($asideSticky !== null) $args['asideSticky'] = $asideSticky;
    if ($asidePosition !== null) $args['asidePosition'] = $asidePosition;
    if ($toolbar !== null) $args['toolbar'] = $toolbar;
    if ($cssVars !== null) $args['cssVars'] = $cssVars;
    if ($toolbarClassName !== null) $args['toolbarClassName'] = $toolbarClassName;
    if ($bodyClassName !== null) $args['bodyClassName'] = $bodyClassName;
    if ($asideClassName !== null) $args['asideClassName'] = $asideClassName;
    if ($headerClassName !== null) $args['headerClassName'] = $headerClassName;
    if ($initApi !== null) $args['initApi'] = $initApi;
    if ($initFetch !== null) $args['initFetch'] = $initFetch;
    if ($initFetchOn !== null) $args['initFetchOn'] = $initFetchOn;
    if ($interval !== null) $args['interval'] = $interval;
    if ($silentPolling !== null) $args['silentPolling'] = $silentPolling;
    if ($stopAutoRefreshWhen !== null) $args['stopAutoRefreshWhen'] = $stopAutoRefreshWhen;
    if ($pullRefresh !== null) $args['pullRefresh'] = $pullRefresh;
    return \AmisSchema\Widget\Layout\Page::make($args);
}

/**
 * 创建 Pagination 组件
 * 
 * @param string $size 组件尺寸，可选值：'sm'、'md'
 * @param bool $disabled 是否禁用
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $mode 迷你版本/简易版本，可选值：'normal'、'simple'
 * @param string|string[] $layout 通过控制 layout 属性的顺序，调整分页结构布局
 * @param int|string $maxButtons 最多显示多少个分页按钮，最小为 5
 * @param int|string $total 总条数
 * @param int|string $activePage 当前页数
 * @param int|string $perPage 每页显示多条数据
 * @param bool $showPerPage 是否展示 perPage 切换器
 * @param int|string $ellipsisPageGap 多页跳转页数，页数较多出现...时点击省略号时每次前进/后退的页数
 * @param int[] $perPageAvailable 指定每页可以显示多少条
 * @param bool $showPageInput 是否显示快速跳转输入框
 * @param string $onPageChange 分页改变触发, (page: number, perPage: number) => void
 * 
 * @return \AmisSchema\Widget\Layout\Pagination
 */
function AmisPagination(
    mixed $size = null,
    mixed $disabled = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $mode = null,
    mixed $layout = null,
    mixed $maxButtons = null,
    mixed $total = null,
    mixed $activePage = null,
    mixed $perPage = null,
    mixed $showPerPage = null,
    mixed $ellipsisPageGap = null,
    mixed $perPageAvailable = null,
    mixed $showPageInput = null,
    mixed $onPageChange = null
): \AmisSchema\Widget\Layout\Pagination
{
    $args = [];
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($mode !== null) $args['mode'] = $mode;
    if ($layout !== null) $args['layout'] = $layout;
    if ($maxButtons !== null) $args['maxButtons'] = $maxButtons;
    if ($total !== null) $args['total'] = $total;
    if ($activePage !== null) $args['activePage'] = $activePage;
    if ($perPage !== null) $args['perPage'] = $perPage;
    if ($showPerPage !== null) $args['showPerPage'] = $showPerPage;
    if ($ellipsisPageGap !== null) $args['ellipsisPageGap'] = $ellipsisPageGap;
    if ($perPageAvailable !== null) $args['perPageAvailable'] = $perPageAvailable;
    if ($showPageInput !== null) $args['showPageInput'] = $showPageInput;
    if ($onPageChange !== null) $args['onPageChange'] = $onPageChange;
    return \AmisSchema\Widget\Layout\Pagination::make($args);
}

/**
 * 创建 PaginationWrapper 组件
 * 
 * @param \AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string|array $body 内容区域
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param bool $showPageInput 是否显示快速跳转输入框
 * @param int $maxButtons 最多显示多少个分页按钮
 * @param string $inputName 输入字段名
 * @param string $outputName 输出字段名
 * @param int $perPage 每页显示多条数据
 * @param string $position 分页显示位置，可选值：'top'、'bottom'、'none'
 * 
 * @return \AmisSchema\Widget\Layout\PaginationWrapper
 */
function AmisPaginationWrapper(
    mixed $body = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $showPageInput = null,
    mixed $maxButtons = null,
    mixed $inputName = null,
    mixed $outputName = null,
    mixed $perPage = null,
    mixed $position = null
): \AmisSchema\Widget\Layout\PaginationWrapper
{
    $args = [];
    if ($body !== null) $args['body'] = $body;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($showPageInput !== null) $args['showPageInput'] = $showPageInput;
    if ($maxButtons !== null) $args['maxButtons'] = $maxButtons;
    if ($inputName !== null) $args['inputName'] = $inputName;
    if ($outputName !== null) $args['outputName'] = $outputName;
    if ($perPage !== null) $args['perPage'] = $perPage;
    if ($position !== null) $args['position'] = $position;
    return \AmisSchema\Widget\Layout\PaginationWrapper::make($args);
}

/**
 * 创建 Panel 组件
 * 
 * @param array|\AmisSchema\Widget\Widget|string $title 标题
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $body 内容容器
 * @param string $className 外层 Dom 的类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $headerClassName header 区域的类名
 * @param string $footerClassName footer 区域的类名
 * @param string $actionsClassName actions 区域的类名
 * @param string $bodyClassName body 区域的类名
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $header 头部容器
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $footer 底部容器
 * @param bool $affixFooter 是否固定底部容器
 * @param \AmisSchema\Widget\Function\Action[]|array $actions 按钮区域
 * 
 * @return \AmisSchema\Widget\Layout\Panel
 */
function AmisPanel(
    mixed $title = null,
    mixed $body = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $headerClassName = null,
    mixed $footerClassName = null,
    mixed $actionsClassName = null,
    mixed $bodyClassName = null,
    mixed $header = null,
    mixed $footer = null,
    mixed $affixFooter = null,
    mixed $actions = null
): \AmisSchema\Widget\Layout\Panel
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($body !== null) $args['body'] = $body;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($headerClassName !== null) $args['headerClassName'] = $headerClassName;
    if ($footerClassName !== null) $args['footerClassName'] = $footerClassName;
    if ($actionsClassName !== null) $args['actionsClassName'] = $actionsClassName;
    if ($bodyClassName !== null) $args['bodyClassName'] = $bodyClassName;
    if ($header !== null) $args['header'] = $header;
    if ($footer !== null) $args['footer'] = $footer;
    if ($affixFooter !== null) $args['affixFooter'] = $affixFooter;
    if ($actions !== null) $args['actions'] = $actions;
    return \AmisSchema\Widget\Layout\Panel::make($args);
}

/**
 * 创建 Portlet 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $tabsClassName Tabs Dom 的类名
 * @param string $contentClassName Tabs content Dom 的类名
 * @param array $tabs tabs 内容
 * @param array $source tabs 关联数据，关联后可以重复生成选项卡
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $toolbar tabs 中的工具栏，不随 tab 切换而变化
 * @param string $description 标题右侧信息
 * @param bool $hideHeader 隐藏头部
 * @param bool $divider 去掉分隔线
 * @param bool $mountOnEnter 只有在点中 tab 的时候才渲染
 * @param bool $unmountOnExit 切换 tab 的时候销毁
 * @param bool $scrollable 是否导航支持内容溢出滚动
 * 
 * @return \AmisSchema\Widget\Layout\Portlet
 */
function AmisPortlet(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $tabsClassName = null,
    mixed $contentClassName = null,
    mixed $tabs = null,
    mixed $source = null,
    mixed $toolbar = null,
    mixed $description = null,
    mixed $hideHeader = null,
    mixed $divider = null,
    mixed $mountOnEnter = null,
    mixed $unmountOnExit = null,
    mixed $scrollable = null
): \AmisSchema\Widget\Layout\Portlet
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($tabsClassName !== null) $args['tabsClassName'] = $tabsClassName;
    if ($contentClassName !== null) $args['contentClassName'] = $contentClassName;
    if ($tabs !== null) $args['tabs'] = $tabs;
    if ($source !== null) $args['source'] = $source;
    if ($toolbar !== null) $args['toolbar'] = $toolbar;
    if ($description !== null) $args['description'] = $description;
    if ($hideHeader !== null) $args['hideHeader'] = $hideHeader;
    if ($divider !== null) $args['divider'] = $divider;
    if ($mountOnEnter !== null) $args['mountOnEnter'] = $mountOnEnter;
    if ($unmountOnExit !== null) $args['unmountOnExit'] = $unmountOnExit;
    if ($scrollable !== null) $args['scrollable'] = $scrollable;
    return \AmisSchema\Widget\Layout\Portlet::make($args);
}

/**
 * 创建 Tabs 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string|int $defaultKey 组件初始化时激活的选项卡，hash 值或索引值，支持使用表达式
 * @param string|int $activeKey 激活的选项卡，hash 值或索引值，支持使用表达式，可响应上下文数据变化
 * @param string $linksClassName Tabs 标题区的类名
 * @param string $contentClassName Tabs 内容区的类名
 * @param string $tabsMode 展示模式，取值可以是 line、card、radio、vertical、chrome、simple、strong、tiled、sidebar
 * @param array $tabs tabs 内容
 * @param string $source tabs 关联数据，关联后可以重复生成选项卡
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $toolbar tabs 中的工具栏
 * @param string $toolbarClassName tabs 中工具栏的类名
 * @param bool $mountOnEnter 只有在点中 tab 的时候才渲染
 * @param bool $unmountOnExit 切换 tab 的时候销毁
 * @param bool $addable 是否支持新增
 * @param string $addBtnText 新增按钮文案
 * @param bool $closable 是否支持删除
 * @param bool $draggable 是否支持拖拽
 * @param bool $showTip 是否支持提示
 * @param string $showTipClassName 提示的类
 * @param bool $editable 是否可编辑标签名
 * @param bool $scrollable 是否导航支持内容溢出滚动（属性废弃）
 * @param string $sidePosition sidebar 模式下，标签栏位置
 * @param int $collapseOnExceed 当 tabs 超出多少个时开始折叠
 * @param string $collapseBtnLabel 用来设置折叠按钮的文字
 * @param bool $swipeable 是否开启手势滑动切换（移动端生效）
 * 
 * @return \AmisSchema\Widget\Layout\Tabs
 */
function AmisTabs(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $defaultKey = null,
    mixed $activeKey = null,
    mixed $linksClassName = null,
    mixed $contentClassName = null,
    mixed $tabsMode = null,
    mixed $tabs = null,
    mixed $source = null,
    mixed $toolbar = null,
    mixed $toolbarClassName = null,
    mixed $mountOnEnter = null,
    mixed $unmountOnExit = null,
    mixed $addable = null,
    mixed $addBtnText = null,
    mixed $closable = null,
    mixed $draggable = null,
    mixed $showTip = null,
    mixed $showTipClassName = null,
    mixed $editable = null,
    mixed $scrollable = null,
    mixed $sidePosition = null,
    mixed $collapseOnExceed = null,
    mixed $collapseBtnLabel = null,
    mixed $swipeable = null
): \AmisSchema\Widget\Layout\Tabs
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($defaultKey !== null) $args['defaultKey'] = $defaultKey;
    if ($activeKey !== null) $args['activeKey'] = $activeKey;
    if ($linksClassName !== null) $args['linksClassName'] = $linksClassName;
    if ($contentClassName !== null) $args['contentClassName'] = $contentClassName;
    if ($tabsMode !== null) $args['tabsMode'] = $tabsMode;
    if ($tabs !== null) $args['tabs'] = $tabs;
    if ($source !== null) $args['source'] = $source;
    if ($toolbar !== null) $args['toolbar'] = $toolbar;
    if ($toolbarClassName !== null) $args['toolbarClassName'] = $toolbarClassName;
    if ($mountOnEnter !== null) $args['mountOnEnter'] = $mountOnEnter;
    if ($unmountOnExit !== null) $args['unmountOnExit'] = $unmountOnExit;
    if ($addable !== null) $args['addable'] = $addable;
    if ($addBtnText !== null) $args['addBtnText'] = $addBtnText;
    if ($closable !== null) $args['closable'] = $closable;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($showTip !== null) $args['showTip'] = $showTip;
    if ($showTipClassName !== null) $args['showTipClassName'] = $showTipClassName;
    if ($editable !== null) $args['editable'] = $editable;
    if ($scrollable !== null) $args['scrollable'] = $scrollable;
    if ($sidePosition !== null) $args['sidePosition'] = $sidePosition;
    if ($collapseOnExceed !== null) $args['collapseOnExceed'] = $collapseOnExceed;
    if ($collapseBtnLabel !== null) $args['collapseBtnLabel'] = $collapseBtnLabel;
    if ($swipeable !== null) $args['swipeable'] = $swipeable;
    return \AmisSchema\Widget\Layout\Tabs::make($args);
}

/**
 * 创建 Wrapper 组件
 * 
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $body 内容容器
 * @param string $size 支持: xs、sm、md 和 lg
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * 
 * @return \AmisSchema\Widget\Layout\Wrapper
 */
function AmisWrapper(
    mixed $body = null,
    mixed $size = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null
): \AmisSchema\Widget\Layout\Wrapper
{
    $args = [];
    if ($body !== null) $args['body'] = $body;
    if ($size !== null) $args['size'] = $size;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    return \AmisSchema\Widget\Layout\Wrapper::make($args);
}

/**
 * 创建 Action 组件
 * 
 * @param string $label 按钮文本，可用 ${xxx} 取值
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $body 作为容器组件时渲染的其他组件
 * @param string $actionType 【必填】指定该 action 的作用类型，支持：ajax、link、url、drawer、dialog、confirm、cancel、prev、next、copy、close等
 * @param string|array|\AmisSchema\Definition\API $api ajax类型时的请求地址
 * @param string $url 页面跳转地址
 * @param string $link 单页跳转地址
 * @param string $level 按钮样式，支持：link、primary、secondary、info、success、warning、danger、light、dark、default
 * @param string $size 按钮大小，支持：xs、sm、md、lg
 * @param string $icon 设置图标，例如fa fa-plus
 * @param bool $disabled 按钮失效状态
 * @param array $required 配置字符串数组，指定在form中进行操作之前，需要指定的字段名的表单项通过验证
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string|array $tooltip 鼠标停留时弹出该段文字，也可以配置对象类型，可用 ${xxx} 取值
 * @param string $confirmText 当设置后，操作在开始前会询问用户，可用 ${xxx} 取值
 * @param string $reload 指定此次操作完后，需要刷新的目标组件名字（组件的name值），多个请用逗号隔开
 * @param bool|string $close 当action配置在dialog或drawer的actions中时，配置为true指定此次操作完后关闭当前dialog或drawer
 * @param string $redirect 指定当前请求结束后跳转的路径
 * @param string|array $dialog 弹框内容配置
 * @param string|array $drawer 抽屉内容配置
 * @param array $feedback ajax类型时，当ajax返回正常后，还能接着弹出一个dialog做其他交互
 * @param array $messages ajax操作成功后提示和失败提示配置
 * @param bool $block 用display:"block"来显示按钮
 * @param bool $active 按钮是否高亮
 * @param bool $loading 显示按钮 loading 效果
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $iconClassName 给图标上添加类名
 * @param string $rightIcon 在按钮文本右侧设置图标，例如fa fa-plus
 * @param string $rightIconClassName 给右侧图标上添加类名
 * @param string $activeLevel 按钮高亮时的样式，配置支持同level
 * @param string $activeClassName 给按钮高亮添加类名
 * @param string $confirmTitle 确认框标题，前提是 confirmText 有内容，支持模版语法
 * @param string|array $disabledTip 被禁用后鼠标停留时弹出该段文字，也可以配置对象类型，可用 ${xxx} 取值
 * @param string $tooltipPlacement 如果配置了tooltip或者disabledTip，指定提示信息位置，可配置top、bottom、left、right
 * @param bool $blank 如果为true将在新tab页面打开
 * @param string $content copy类型时指定复制的内容
 * @param string $target reload类型时需要刷新的目标组件名字
 * @param int $countDown 倒计时时间（秒）
 * @param string $countDownTpl 倒计时显示文本模板
 * @param string $hotKey 键盘快捷键配置
 * @param string $downloadFileName 下载文件名
 * @param string $to 邮件收件人地址
 * @param string $cc 邮件抄送地址
 * @param string $bcc 邮件匿名抄送地址
 * @param string $subject 邮件主题
 * @param string $tooltipTrigger 触发 tooltip
 * @param string $loadingOn 显示按钮 loading 表达式
 * 
 * @return \AmisSchema\Widget\Function\Action
 */
function AmisAction(
    mixed $label = null,
    mixed $body = null,
    mixed $actionType = null,
    mixed $api = null,
    mixed $url = null,
    mixed $link = null,
    mixed $level = null,
    mixed $size = null,
    mixed $icon = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $className = null,
    mixed $style = null,
    mixed $tooltip = null,
    mixed $confirmText = null,
    mixed $reload = null,
    mixed $close = null,
    mixed $redirect = null,
    mixed $dialog = null,
    mixed $drawer = null,
    mixed $feedback = null,
    mixed $messages = null,
    mixed $block = null,
    mixed $active = null,
    mixed $loading = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $iconClassName = null,
    mixed $rightIcon = null,
    mixed $rightIconClassName = null,
    mixed $activeLevel = null,
    mixed $activeClassName = null,
    mixed $confirmTitle = null,
    mixed $disabledTip = null,
    mixed $tooltipPlacement = null,
    mixed $blank = null,
    mixed $content = null,
    mixed $target = null,
    mixed $countDown = null,
    mixed $countDownTpl = null,
    mixed $hotKey = null,
    mixed $downloadFileName = null,
    mixed $to = null,
    mixed $cc = null,
    mixed $bcc = null,
    mixed $subject = null,
    mixed $tooltipTrigger = null,
    mixed $loadingOn = null
): \AmisSchema\Widget\Function\Action
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($body !== null) $args['body'] = $body;
    if ($actionType !== null) $args['actionType'] = $actionType;
    if ($api !== null) $args['api'] = $api;
    if ($url !== null) $args['url'] = $url;
    if ($link !== null) $args['link'] = $link;
    if ($level !== null) $args['level'] = $level;
    if ($size !== null) $args['size'] = $size;
    if ($icon !== null) $args['icon'] = $icon;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($tooltip !== null) $args['tooltip'] = $tooltip;
    if ($confirmText !== null) $args['confirmText'] = $confirmText;
    if ($reload !== null) $args['reload'] = $reload;
    if ($close !== null) $args['close'] = $close;
    if ($redirect !== null) $args['redirect'] = $redirect;
    if ($dialog !== null) $args['dialog'] = $dialog;
    if ($drawer !== null) $args['drawer'] = $drawer;
    if ($feedback !== null) $args['feedback'] = $feedback;
    if ($messages !== null) $args['messages'] = $messages;
    if ($block !== null) $args['block'] = $block;
    if ($active !== null) $args['active'] = $active;
    if ($loading !== null) $args['loading'] = $loading;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($iconClassName !== null) $args['iconClassName'] = $iconClassName;
    if ($rightIcon !== null) $args['rightIcon'] = $rightIcon;
    if ($rightIconClassName !== null) $args['rightIconClassName'] = $rightIconClassName;
    if ($activeLevel !== null) $args['activeLevel'] = $activeLevel;
    if ($activeClassName !== null) $args['activeClassName'] = $activeClassName;
    if ($confirmTitle !== null) $args['confirmTitle'] = $confirmTitle;
    if ($disabledTip !== null) $args['disabledTip'] = $disabledTip;
    if ($tooltipPlacement !== null) $args['tooltipPlacement'] = $tooltipPlacement;
    if ($blank !== null) $args['blank'] = $blank;
    if ($content !== null) $args['content'] = $content;
    if ($target !== null) $args['target'] = $target;
    if ($countDown !== null) $args['countDown'] = $countDown;
    if ($countDownTpl !== null) $args['countDownTpl'] = $countDownTpl;
    if ($hotKey !== null) $args['hotKey'] = $hotKey;
    if ($downloadFileName !== null) $args['downloadFileName'] = $downloadFileName;
    if ($to !== null) $args['to'] = $to;
    if ($cc !== null) $args['cc'] = $cc;
    if ($bcc !== null) $args['bcc'] = $bcc;
    if ($subject !== null) $args['subject'] = $subject;
    if ($tooltipTrigger !== null) $args['tooltipTrigger'] = $tooltipTrigger;
    if ($loadingOn !== null) $args['loadingOn'] = $loadingOn;
    return \AmisSchema\Widget\Function\Action::make($args);
}

/**
 * 创建 AnchorNav 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $active 需要定位的区域
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $linkClassName 导航 Dom 的类名
 * @param string $sectionClassName 锚点区域 Dom 的类名
 * @param string $direction 可以配置导航水平展示还是垂直展示。对应的配置项分别是：vertical、horizontal
 * 
 * @return \AmisSchema\Widget\Function\AnchorNav
 */
function AmisAnchorNav(
    mixed $className = null,
    mixed $style = null,
    mixed $active = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $linkClassName = null,
    mixed $sectionClassName = null,
    mixed $direction = null
): \AmisSchema\Widget\Function\AnchorNav
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($active !== null) $args['active'] = $active;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($linkClassName !== null) $args['linkClassName'] = $linkClassName;
    if ($sectionClassName !== null) $args['sectionClassName'] = $sectionClassName;
    if ($direction !== null) $args['direction'] = $direction;
    return \AmisSchema\Widget\Function\AnchorNav::make($args);
}

/**
 * 创建 App 组件
 * 
 * @param string|array|\AmisSchema\Definition\API $api 页面配置接口，如果想远程拉取页面配置请配置。返回配置路径 json>data>pages
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $brandName 应用名称
 * @param string $logo 支持图片地址，或者 svg
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $header 顶部区域
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $asideBefore 页面菜单上前面区域
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $asideAfter 页面菜单下前面区域
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $footer 页面底部区域
 * @param array|\AmisSchema\Definition\AppPage[] $pages 具体的页面配置，通常为数组，数组第一层为分组
 * 
 * @return \AmisSchema\Widget\Function\App
 */
function AmisApp(
    mixed $api = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $brandName = null,
    mixed $logo = null,
    mixed $header = null,
    mixed $asideBefore = null,
    mixed $asideAfter = null,
    mixed $footer = null,
    mixed $pages = null
): \AmisSchema\Widget\Function\App
{
    $args = [];
    if ($api !== null) $args['api'] = $api;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($brandName !== null) $args['brandName'] = $brandName;
    if ($logo !== null) $args['logo'] = $logo;
    if ($header !== null) $args['header'] = $header;
    if ($asideBefore !== null) $args['asideBefore'] = $asideBefore;
    if ($asideAfter !== null) $args['asideAfter'] = $asideAfter;
    if ($footer !== null) $args['footer'] = $footer;
    if ($pages !== null) $args['pages'] = $pages;
    return \AmisSchema\Widget\Function\App::make($args);
}

/**
 * 创建 Breadcrumb 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $itemClassName 导航项类名
 * @param string $separatorClassName 分割符类名
 * @param string $dropdownClassName 下拉菜单类名
 * @param string $dropdownItemClassName 下拉菜单项类名
 * @param string $separator 分隔符
 * @param int $labelMaxLength 最大展示长度
 * @param string $tooltipPosition 浮窗提示位置
 * @param string|\AmisSchema\Definition\API|array $source 动态数据
 * 
 * @return \AmisSchema\Widget\Function\Breadcrumb
 */
function AmisBreadcrumb(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $itemClassName = null,
    mixed $separatorClassName = null,
    mixed $dropdownClassName = null,
    mixed $dropdownItemClassName = null,
    mixed $separator = null,
    mixed $labelMaxLength = null,
    mixed $tooltipPosition = null,
    mixed $source = null
): \AmisSchema\Widget\Function\Breadcrumb
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($itemClassName !== null) $args['itemClassName'] = $itemClassName;
    if ($separatorClassName !== null) $args['separatorClassName'] = $separatorClassName;
    if ($dropdownClassName !== null) $args['dropdownClassName'] = $dropdownClassName;
    if ($dropdownItemClassName !== null) $args['dropdownItemClassName'] = $dropdownItemClassName;
    if ($separator !== null) $args['separator'] = $separator;
    if ($labelMaxLength !== null) $args['labelMaxLength'] = $labelMaxLength;
    if ($tooltipPosition !== null) $args['tooltipPosition'] = $tooltipPosition;
    if ($source !== null) $args['source'] = $source;
    return \AmisSchema\Widget\Function\Breadcrumb::make($args);
}

/**
 * 创建 Button 组件
 * 
 * @param string $label 按钮文本，可用 ${xxx} 取值
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[]|string $body 作为容器组件时渲染的其他组件
 * @param string $actionType 【必填】指定该 action 的作用类型，支持：ajax、link、url、drawer、dialog、confirm、cancel、prev、next、copy、close等
 * @param string|array|\AmisSchema\Definition\API $api ajax类型时的请求地址
 * @param string $url 页面跳转地址
 * @param string $link 单页跳转地址
 * @param string $level 按钮样式，支持：link、primary、secondary、info、success、warning、danger、light、dark、default
 * @param string $size 按钮大小，支持：xs、sm、md、lg
 * @param string $icon 设置图标，例如fa fa-plus
 * @param bool $disabled 按钮失效状态
 * @param array $required 配置字符串数组，指定在form中进行操作之前，需要指定的字段名的表单项通过验证
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string|array $tooltip 鼠标停留时弹出该段文字，也可以配置对象类型，可用 ${xxx} 取值
 * @param string $confirmText 当设置后，操作在开始前会询问用户，可用 ${xxx} 取值
 * @param string $reload 指定此次操作完后，需要刷新的目标组件名字（组件的name值），多个请用逗号隔开
 * @param bool|string $close 当action配置在dialog或drawer的actions中时，配置为true指定此次操作完后关闭当前dialog或drawer
 * @param string $redirect 指定当前请求结束后跳转的路径
 * @param string|array $dialog 弹框内容配置
 * @param string|array $drawer 抽屉内容配置
 * @param array $feedback ajax类型时，当ajax返回正常后，还能接着弹出一个dialog做其他交互
 * @param array $messages ajax操作成功后提示和失败提示配置
 * @param bool $block 用display:"block"来显示按钮
 * @param bool $active 按钮是否高亮
 * @param bool $loading 显示按钮 loading 效果
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $iconClassName 给图标上添加类名
 * @param string $rightIcon 在按钮文本右侧设置图标，例如fa fa-plus
 * @param string $rightIconClassName 给右侧图标上添加类名
 * @param string $activeLevel 按钮高亮时的样式，配置支持同level
 * @param string $activeClassName 给按钮高亮添加类名
 * @param string $confirmTitle 确认框标题，前提是 confirmText 有内容，支持模版语法
 * @param string|array $disabledTip 被禁用后鼠标停留时弹出该段文字，也可以配置对象类型，可用 ${xxx} 取值
 * @param string $tooltipPlacement 如果配置了tooltip或者disabledTip，指定提示信息位置，可配置top、bottom、left、right
 * @param bool $blank 如果为true将在新tab页面打开
 * @param string $content copy类型时指定复制的内容
 * @param string $target reload类型时需要刷新的目标组件名字
 * @param int $countDown 倒计时时间（秒）
 * @param string $countDownTpl 倒计时显示文本模板
 * @param string $hotKey 键盘快捷键配置
 * @param string $downloadFileName 下载文件名
 * @param string $to 邮件收件人地址
 * @param string $cc 邮件抄送地址
 * @param string $bcc 邮件匿名抄送地址
 * @param string $subject 邮件主题
 * @param string $tooltipTrigger 触发 tooltip
 * @param string $loadingOn 显示按钮 loading 表达式
 * 
 * @return \AmisSchema\Widget\Function\Button
 */
function AmisButton(
    mixed $label = null,
    mixed $body = null,
    mixed $actionType = null,
    mixed $api = null,
    mixed $url = null,
    mixed $link = null,
    mixed $level = null,
    mixed $size = null,
    mixed $icon = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $className = null,
    mixed $style = null,
    mixed $tooltip = null,
    mixed $confirmText = null,
    mixed $reload = null,
    mixed $close = null,
    mixed $redirect = null,
    mixed $dialog = null,
    mixed $drawer = null,
    mixed $feedback = null,
    mixed $messages = null,
    mixed $block = null,
    mixed $active = null,
    mixed $loading = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $iconClassName = null,
    mixed $rightIcon = null,
    mixed $rightIconClassName = null,
    mixed $activeLevel = null,
    mixed $activeClassName = null,
    mixed $confirmTitle = null,
    mixed $disabledTip = null,
    mixed $tooltipPlacement = null,
    mixed $blank = null,
    mixed $content = null,
    mixed $target = null,
    mixed $countDown = null,
    mixed $countDownTpl = null,
    mixed $hotKey = null,
    mixed $downloadFileName = null,
    mixed $to = null,
    mixed $cc = null,
    mixed $bcc = null,
    mixed $subject = null,
    mixed $tooltipTrigger = null,
    mixed $loadingOn = null
): \AmisSchema\Widget\Function\Button
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($body !== null) $args['body'] = $body;
    if ($actionType !== null) $args['actionType'] = $actionType;
    if ($api !== null) $args['api'] = $api;
    if ($url !== null) $args['url'] = $url;
    if ($link !== null) $args['link'] = $link;
    if ($level !== null) $args['level'] = $level;
    if ($size !== null) $args['size'] = $size;
    if ($icon !== null) $args['icon'] = $icon;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($required !== null) $args['required'] = $required;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($tooltip !== null) $args['tooltip'] = $tooltip;
    if ($confirmText !== null) $args['confirmText'] = $confirmText;
    if ($reload !== null) $args['reload'] = $reload;
    if ($close !== null) $args['close'] = $close;
    if ($redirect !== null) $args['redirect'] = $redirect;
    if ($dialog !== null) $args['dialog'] = $dialog;
    if ($drawer !== null) $args['drawer'] = $drawer;
    if ($feedback !== null) $args['feedback'] = $feedback;
    if ($messages !== null) $args['messages'] = $messages;
    if ($block !== null) $args['block'] = $block;
    if ($active !== null) $args['active'] = $active;
    if ($loading !== null) $args['loading'] = $loading;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($iconClassName !== null) $args['iconClassName'] = $iconClassName;
    if ($rightIcon !== null) $args['rightIcon'] = $rightIcon;
    if ($rightIconClassName !== null) $args['rightIconClassName'] = $rightIconClassName;
    if ($activeLevel !== null) $args['activeLevel'] = $activeLevel;
    if ($activeClassName !== null) $args['activeClassName'] = $activeClassName;
    if ($confirmTitle !== null) $args['confirmTitle'] = $confirmTitle;
    if ($disabledTip !== null) $args['disabledTip'] = $disabledTip;
    if ($tooltipPlacement !== null) $args['tooltipPlacement'] = $tooltipPlacement;
    if ($blank !== null) $args['blank'] = $blank;
    if ($content !== null) $args['content'] = $content;
    if ($target !== null) $args['target'] = $target;
    if ($countDown !== null) $args['countDown'] = $countDown;
    if ($countDownTpl !== null) $args['countDownTpl'] = $countDownTpl;
    if ($hotKey !== null) $args['hotKey'] = $hotKey;
    if ($downloadFileName !== null) $args['downloadFileName'] = $downloadFileName;
    if ($to !== null) $args['to'] = $to;
    if ($cc !== null) $args['cc'] = $cc;
    if ($bcc !== null) $args['bcc'] = $bcc;
    if ($subject !== null) $args['subject'] = $subject;
    if ($tooltipTrigger !== null) $args['tooltipTrigger'] = $tooltipTrigger;
    if ($loadingOn !== null) $args['loadingOn'] = $loadingOn;
    return \AmisSchema\Widget\Function\Button::make($args);
}

/**
 * 创建 ButtonGroup 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param bool $vertical 是否使用垂直模式
 * @param bool $tiled 是否使用平铺模式
 * @param string $btnLevel 按钮样式
 * @param string $btnActiveLevel 选中按钮样式
 * @param array|\AmisSchema\Widget\Function\Action[] $buttons 按钮配置数组
 * 
 * @return \AmisSchema\Widget\Function\ButtonGroup
 */
function AmisButtonGroup(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $vertical = null,
    mixed $tiled = null,
    mixed $btnLevel = null,
    mixed $btnActiveLevel = null,
    mixed $buttons = null
): \AmisSchema\Widget\Function\ButtonGroup
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($vertical !== null) $args['vertical'] = $vertical;
    if ($tiled !== null) $args['tiled'] = $tiled;
    if ($btnLevel !== null) $args['btnLevel'] = $btnLevel;
    if ($btnActiveLevel !== null) $args['btnActiveLevel'] = $btnActiveLevel;
    if ($buttons !== null) $args['buttons'] = $buttons;
    return \AmisSchema\Widget\Function\ButtonGroup::make($args);
}

/**
 * 创建 Custom 组件
 * 
 * @param string $name 节点名称
 * @param string $className 节点 class
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $id 节点 id
 * @param bool $inline 默认使用 div 标签，如果 true 就使用 span 标签
 * @param string $html 初始化节点 html
 * @param string $onMount 节点初始化之后调用的函数
 * @param string $onUpdate 数据有更新的时候调用的函数
 * @param string $onUnmount 节点销毁的时候调用的函数
 * 
 * @return \AmisSchema\Widget\Function\Custom
 */
function AmisCustom(
    mixed $name = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $id = null,
    mixed $inline = null,
    mixed $html = null,
    mixed $onMount = null,
    mixed $onUpdate = null,
    mixed $onUnmount = null
): \AmisSchema\Widget\Function\Custom
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($id !== null) $args['id'] = $id;
    if ($inline !== null) $args['inline'] = $inline;
    if ($html !== null) $args['html'] = $html;
    if ($onMount !== null) $args['onMount'] = $onMount;
    if ($onUpdate !== null) $args['onUpdate'] = $onUpdate;
    if ($onUnmount !== null) $args['onUnmount'] = $onUnmount;
    return \AmisSchema\Widget\Function\Custom::make($args);
}

/**
 * 创建 DropDownButton 组件
 * 
 * @param string $label 按钮文本
 * @param string $size 尺寸，支持'xs'、'sm'、'md'、'lg'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param bool $block 块状样式
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $btnClassName 按钮 CSS 类名
 * @param string $menuClassName 下拉菜单 CSS 类名
 * @param string $align 位置，可选'left'或'right'
 * @param array|\AmisSchema\Widget\Function\Button[] $buttons 配置下拉按钮
 * @param bool $iconOnly 只显示 icon
 * @param bool $defaultIsOpened 默认是否打开
 * @param bool $closeOnOutside 点击外侧区域是否收起
 * @param bool $closeOnClick 点击按钮后自动关闭下拉菜单
 * @param string $trigger 触发方式，可选值："click" | "hover"
 * @param bool $hideCaret 隐藏下拉图标
 * 
 * @return \AmisSchema\Widget\Function\DropDownButton
 */
function AmisDropDownButton(
    mixed $label = null,
    mixed $size = null,
    mixed $className = null,
    mixed $style = null,
    mixed $block = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $btnClassName = null,
    mixed $menuClassName = null,
    mixed $align = null,
    mixed $buttons = null,
    mixed $iconOnly = null,
    mixed $defaultIsOpened = null,
    mixed $closeOnOutside = null,
    mixed $closeOnClick = null,
    mixed $trigger = null,
    mixed $hideCaret = null
): \AmisSchema\Widget\Function\DropDownButton
{
    $args = [];
    if ($label !== null) $args['label'] = $label;
    if ($size !== null) $args['size'] = $size;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($block !== null) $args['block'] = $block;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($btnClassName !== null) $args['btnClassName'] = $btnClassName;
    if ($menuClassName !== null) $args['menuClassName'] = $menuClassName;
    if ($align !== null) $args['align'] = $align;
    if ($buttons !== null) $args['buttons'] = $buttons;
    if ($iconOnly !== null) $args['iconOnly'] = $iconOnly;
    if ($defaultIsOpened !== null) $args['defaultIsOpened'] = $defaultIsOpened;
    if ($closeOnOutside !== null) $args['closeOnOutside'] = $closeOnOutside;
    if ($closeOnClick !== null) $args['closeOnClick'] = $closeOnClick;
    if ($trigger !== null) $args['trigger'] = $trigger;
    if ($hideCaret !== null) $args['hideCaret'] = $hideCaret;
    return \AmisSchema\Widget\Function\DropDownButton::make($args);
}

/**
 * 创建 Nav 组件
 * 
 * @param int $level 控制导航最大展示层级数
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $mode 导航模式，可选：inline、float、panel
 * @param bool $collapsed 控制导航是否缩起
 * @param int $indentSize 层级缩进值，仅内联模式下生效
 * @param int $defaultOpenLevel 控制导航最大默认展开层级
 * @param string $popupClassName 当为悬浮模式时，可自定义悬浮层样式
 * @param string|\AmisSchema\Widget\Display\Icon $expandIcon 自定义展开按钮
 * @param string $expandPosition 展开按钮位置，可选：before、after，默认 before
 * @param bool $stacked 设置成 false 可以以 tabs 的形式展示
 * @param bool $accordion 是否开启手风琴模式
 * @param array|string|\AmisSchema\Definition\API $source 可以通过变量或 API 接口动态创建导航
 * @param array|string|\AmisSchema\Definition\API $deferApi 用来延时加载选项详情的接口，可以不配置，不配置公用 source 接口
 * @param array|\AmisSchema\Widget\Widget[] $itemActions 更多操作相关配置
 * @param bool $draggable 是否支持拖拽排序
 * @param bool $dragOnSameLevel 仅允许同层级内拖拽
 * @param string|\AmisSchema\Definition\API $saveOrderApi 保存排序的 api
 * @param \AmisSchema\Widget\Extra\Badge $itemBadge 角标
 * @param array|\AmisSchema\Definition\NavLink[] $links 链接集合
 * @param array|\AmisSchema\Definition\NavOverflow $overflow 响应式收纳配置
 * @param bool $searchable 是否开启搜索
 * @param array|\AmisSchema\Definition\NavSearchConfig $searchConfig 搜索配置
 * 
 * @return \AmisSchema\Widget\Function\Nav
 */
function AmisNav(
    mixed $level = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $mode = null,
    mixed $collapsed = null,
    mixed $indentSize = null,
    mixed $defaultOpenLevel = null,
    mixed $popupClassName = null,
    mixed $expandIcon = null,
    mixed $expandPosition = null,
    mixed $stacked = null,
    mixed $accordion = null,
    mixed $source = null,
    mixed $deferApi = null,
    mixed $itemActions = null,
    mixed $draggable = null,
    mixed $dragOnSameLevel = null,
    mixed $saveOrderApi = null,
    mixed $itemBadge = null,
    mixed $links = null,
    mixed $overflow = null,
    mixed $searchable = null,
    mixed $searchConfig = null
): \AmisSchema\Widget\Function\Nav
{
    $args = [];
    if ($level !== null) $args['level'] = $level;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($mode !== null) $args['mode'] = $mode;
    if ($collapsed !== null) $args['collapsed'] = $collapsed;
    if ($indentSize !== null) $args['indentSize'] = $indentSize;
    if ($defaultOpenLevel !== null) $args['defaultOpenLevel'] = $defaultOpenLevel;
    if ($popupClassName !== null) $args['popupClassName'] = $popupClassName;
    if ($expandIcon !== null) $args['expandIcon'] = $expandIcon;
    if ($expandPosition !== null) $args['expandPosition'] = $expandPosition;
    if ($stacked !== null) $args['stacked'] = $stacked;
    if ($accordion !== null) $args['accordion'] = $accordion;
    if ($source !== null) $args['source'] = $source;
    if ($deferApi !== null) $args['deferApi'] = $deferApi;
    if ($itemActions !== null) $args['itemActions'] = $itemActions;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($dragOnSameLevel !== null) $args['dragOnSameLevel'] = $dragOnSameLevel;
    if ($saveOrderApi !== null) $args['saveOrderApi'] = $saveOrderApi;
    if ($itemBadge !== null) $args['itemBadge'] = $itemBadge;
    if ($links !== null) $args['links'] = $links;
    if ($overflow !== null) $args['overflow'] = $overflow;
    if ($searchable !== null) $args['searchable'] = $searchable;
    if ($searchConfig !== null) $args['searchConfig'] = $searchConfig;
    return \AmisSchema\Widget\Function\Nav::make($args);
}

/**
 * 创建 Service 组件
 * 
 * @param array|\AmisSchema\Widget\Widget[]|\AmisSchema\Widget\Widget|string $body 内容容器
 * @param array|\AmisSchema\Definition\API|string $api 初始化数据域接口地址
 * @param string $className 外层 Dom 的类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $ws WebSocket 地址
 * @param string $dataProvider 数据获取函数
 * @param bool $initFetch 是否默认拉取
 * @param array|\AmisSchema\Definition\API|string $schemaApi 用来获取远程 Schema 接口地址
 * @param bool $initFetchSchema 是否默认拉取 Schema
 * @param int $interval 轮询时间间隔，单位 ms(最低 1000)
 * @param bool $silentPolling 配置轮询时是否显示加载动画
 * @param string $stopAutoRefreshWhen 配置停止轮询的条件
 * @param bool $showErrorMsg 是否以 Alert 的形式显示 api 接口响应的错误信息
 * 
 * @return \AmisSchema\Widget\Function\Service
 */
function AmisService(
    mixed $body = null,
    mixed $api = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $ws = null,
    mixed $dataProvider = null,
    mixed $initFetch = null,
    mixed $schemaApi = null,
    mixed $initFetchSchema = null,
    mixed $interval = null,
    mixed $silentPolling = null,
    mixed $stopAutoRefreshWhen = null,
    mixed $showErrorMsg = null
): \AmisSchema\Widget\Function\Service
{
    $args = [];
    if ($body !== null) $args['body'] = $body;
    if ($api !== null) $args['api'] = $api;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($ws !== null) $args['ws'] = $ws;
    if ($dataProvider !== null) $args['dataProvider'] = $dataProvider;
    if ($initFetch !== null) $args['initFetch'] = $initFetch;
    if ($schemaApi !== null) $args['schemaApi'] = $schemaApi;
    if ($initFetchSchema !== null) $args['initFetchSchema'] = $initFetchSchema;
    if ($interval !== null) $args['interval'] = $interval;
    if ($silentPolling !== null) $args['silentPolling'] = $silentPolling;
    if ($stopAutoRefreshWhen !== null) $args['stopAutoRefreshWhen'] = $stopAutoRefreshWhen;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    return \AmisSchema\Widget\Function\Service::make($args);
}

/**
 * 创建 TooltipWrapper 组件
 * 
 * @param string $title 文字提示标题
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $body 内容容器
 * @param bool $disabled 是否禁用浮层提示
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $content 文字提示内容, 兼容之前的 tooltip 属性
 * @param string $placement 文字提示浮层出现位置，可选值："top" | "left" | "right" | "bottom"
 * @param string $tooltipTheme 主题样式，可选值："light" | "dark"
 * @param array $offset 文字提示浮层位置相对偏移量，单位 px
 * @param bool $showArrow 是否展示浮层指向箭头
 * @param bool $enterable 是否鼠标可以移入到浮层中
 * @param string|array $trigger 浮层触发方式，支持数组写法["hover", "click"]，可选值："hover" | "click" | "focus"
 * @param int $mouseEnterDelay 浮层延迟展示时间，单位 ms
 * @param int $mouseLeaveDelay 浮层延迟隐藏时间，单位 ms
 * @param bool $rootClose 是否点击非内容区域关闭提示
 * @param bool $inline 内容区是否内联显示
 * @param string $wrapperComponent 容器标签名，可选值："div" | "span"
 * @param string|array $tooltipStyle 浮层自定义样式
 * @param string $tooltipClassName 文字提示浮层类名
 * @param string $tooltipArrowClassName 箭头类名
 * 
 * @return \AmisSchema\Widget\Function\TooltipWrapper
 */
function AmisTooltipWrapper(
    mixed $title = null,
    mixed $body = null,
    mixed $disabled = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $content = null,
    mixed $placement = null,
    mixed $tooltipTheme = null,
    mixed $offset = null,
    mixed $showArrow = null,
    mixed $enterable = null,
    mixed $trigger = null,
    mixed $mouseEnterDelay = null,
    mixed $mouseLeaveDelay = null,
    mixed $rootClose = null,
    mixed $inline = null,
    mixed $wrapperComponent = null,
    mixed $tooltipStyle = null,
    mixed $tooltipClassName = null,
    mixed $tooltipArrowClassName = null
): \AmisSchema\Widget\Function\TooltipWrapper
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($body !== null) $args['body'] = $body;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($content !== null) $args['content'] = $content;
    if ($placement !== null) $args['placement'] = $placement;
    if ($tooltipTheme !== null) $args['tooltipTheme'] = $tooltipTheme;
    if ($offset !== null) $args['offset'] = $offset;
    if ($showArrow !== null) $args['showArrow'] = $showArrow;
    if ($enterable !== null) $args['enterable'] = $enterable;
    if ($trigger !== null) $args['trigger'] = $trigger;
    if ($mouseEnterDelay !== null) $args['mouseEnterDelay'] = $mouseEnterDelay;
    if ($mouseLeaveDelay !== null) $args['mouseLeaveDelay'] = $mouseLeaveDelay;
    if ($rootClose !== null) $args['rootClose'] = $rootClose;
    if ($inline !== null) $args['inline'] = $inline;
    if ($wrapperComponent !== null) $args['wrapperComponent'] = $wrapperComponent;
    if ($tooltipStyle !== null) $args['tooltipStyle'] = $tooltipStyle;
    if ($tooltipClassName !== null) $args['tooltipClassName'] = $tooltipClassName;
    if ($tooltipArrowClassName !== null) $args['tooltipArrowClassName'] = $tooltipArrowClassName;
    return \AmisSchema\Widget\Function\TooltipWrapper::make($args);
}

/**
 * 创建 Alert 组件
 * 
 * @param string $title 提示标题
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $body 显示内容，支持 SchemaNode
 * @param string $level 级别：info、success、warning、danger
 * @param string $icon 自定义图标，为空时根据 level 自动选择
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param bool $showCloseButton 是否显示关闭按钮
 * @param string $closeButtonClassName 关闭按钮的 CSS 类名
 * @param bool $showIcon 是否显示图标
 * @param string $iconClassName 图标的 CSS 类名
 * @param array $actions 操作区域配置
 * 
 * @return \AmisSchema\Widget\Feedback\Alert
 */
function AmisAlert(
    mixed $title = null,
    mixed $body = null,
    mixed $level = null,
    mixed $icon = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $showCloseButton = null,
    mixed $closeButtonClassName = null,
    mixed $showIcon = null,
    mixed $iconClassName = null,
    mixed $actions = null
): \AmisSchema\Widget\Feedback\Alert
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($body !== null) $args['body'] = $body;
    if ($level !== null) $args['level'] = $level;
    if ($icon !== null) $args['icon'] = $icon;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($showCloseButton !== null) $args['showCloseButton'] = $showCloseButton;
    if ($closeButtonClassName !== null) $args['closeButtonClassName'] = $closeButtonClassName;
    if ($showIcon !== null) $args['showIcon'] = $showIcon;
    if ($iconClassName !== null) $args['iconClassName'] = $iconClassName;
    if ($actions !== null) $args['actions'] = $actions;
    return \AmisSchema\Widget\Feedback\Alert::make($args);
}

/**
 * 创建 Dialog 组件
 * 
 * @param string|\AmisSchema\Widget\Widget $title 弹出层标题，支持 SchemaNode
 * @param string $name 弹框名称，用于动作控制
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $body 往 Dialog 内容区加内容，支持 SchemaNode
 * @param string $size 指定 dialog 大小：xs、sm、md、lg、xl、full
 * @param bool $disabled 如果设置此属性，则该 Dialog 只读没有提交操作
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param array $data 支持数据映射，如果不设定将默认继承触发按钮的上下文数据
 * @param string $bodyClassName Dialog body 区域的样式类名
 * @param bool $closeOnEsc 是否支持按 Esc 关闭 Dialog
 * @param bool $closeOnOutside 是否支持点击其它区域关闭 Dialog
 * @param bool $showCloseButton 是否显示右上角的关闭按钮
 * @param bool $showErrorMsg 是否在弹框左下角显示报错信息
 * @param bool $showLoading 是否在弹框左下角显示 loading 动画
 * @param array $actions 自定义按钮配置，默认为【确认】和【取消】
 * @param int|string $width 容器的宽度
 * @param int|string $height 容器的高度
 * @param string $headerClassName 头部区域的样式类名
 * @param string $bodyStyle Dialog body 区域的样式
 * @param bool $draggable 是否可拖拽
 * @param string $position 决定弹框的位置
 * @param bool $resizable 是否可调整大小
 * @param bool $overlay 是否显示蒙层
 * 
 * @return \AmisSchema\Widget\Feedback\Dialog
 */
function AmisDialog(
    mixed $title = null,
    mixed $name = null,
    mixed $body = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $bodyClassName = null,
    mixed $closeOnEsc = null,
    mixed $closeOnOutside = null,
    mixed $showCloseButton = null,
    mixed $showErrorMsg = null,
    mixed $showLoading = null,
    mixed $actions = null,
    mixed $width = null,
    mixed $height = null,
    mixed $headerClassName = null,
    mixed $bodyStyle = null,
    mixed $draggable = null,
    mixed $position = null,
    mixed $resizable = null,
    mixed $overlay = null
): \AmisSchema\Widget\Feedback\Dialog
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($name !== null) $args['name'] = $name;
    if ($body !== null) $args['body'] = $body;
    if ($size !== null) $args['size'] = $size;
    if ($disabled !== null) $args['disabled'] = $disabled;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($bodyClassName !== null) $args['bodyClassName'] = $bodyClassName;
    if ($closeOnEsc !== null) $args['closeOnEsc'] = $closeOnEsc;
    if ($closeOnOutside !== null) $args['closeOnOutside'] = $closeOnOutside;
    if ($showCloseButton !== null) $args['showCloseButton'] = $showCloseButton;
    if ($showErrorMsg !== null) $args['showErrorMsg'] = $showErrorMsg;
    if ($showLoading !== null) $args['showLoading'] = $showLoading;
    if ($actions !== null) $args['actions'] = $actions;
    if ($width !== null) $args['width'] = $width;
    if ($height !== null) $args['height'] = $height;
    if ($headerClassName !== null) $args['headerClassName'] = $headerClassName;
    if ($bodyStyle !== null) $args['bodyStyle'] = $bodyStyle;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($position !== null) $args['position'] = $position;
    if ($resizable !== null) $args['resizable'] = $resizable;
    if ($overlay !== null) $args['overlay'] = $overlay;
    return \AmisSchema\Widget\Feedback\Dialog::make($args);
}

/**
 * 创建 Drawer 组件
 * 
 * @param string|\AmisSchema\Widget\Widget $title 弹出层标题，支持 SchemaNode
 * @param string $name 抽屉名称，用于动作控制
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $body 往 Drawer 内容区加内容，支持 SchemaNode
 * @param string $size 指定 Drawer 大小：xs、sm、md、lg、xl
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param array $data 支持数据映射，如果不设定将默认继承触发按钮的上下文数据
 * @param string $position 指定 Drawer 方向：left、right、top、bottom
 * @param string $headerClassName Drawer 头部区域的样式类名
 * @param string $bodyClassName Drawer body 区域的样式类名
 * @param string $footerClassName Drawer 页脚区域的样式类名
 * @param bool $showCloseButton 是否展示关闭按钮，当值为 false 时，默认开启 closeOnOutside
 * @param bool $closeOnEsc 是否支持按 Esc 关闭 Drawer
 * @param bool $closeOnOutside 点击内容区外是否关闭 Drawer
 * @param bool $overlay 是否显示蒙层
 * @param bool $resizable 是否可通过拖拽改变 Drawer 大小
 * @param string|int $width 容器的宽度，在 position 为 left 或 right 时生效
 * @param string|int $height 容器的高度，在 position 为 top 或 bottom 时生效
 * @param array $actions 自定义按钮配置，默认为【确认】和【取消】
 * 
 * @return \AmisSchema\Widget\Feedback\Drawer
 */
function AmisDrawer(
    mixed $title = null,
    mixed $name = null,
    mixed $body = null,
    mixed $size = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $position = null,
    mixed $headerClassName = null,
    mixed $bodyClassName = null,
    mixed $footerClassName = null,
    mixed $showCloseButton = null,
    mixed $closeOnEsc = null,
    mixed $closeOnOutside = null,
    mixed $overlay = null,
    mixed $resizable = null,
    mixed $width = null,
    mixed $height = null,
    mixed $actions = null
): \AmisSchema\Widget\Feedback\Drawer
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($name !== null) $args['name'] = $name;
    if ($body !== null) $args['body'] = $body;
    if ($size !== null) $args['size'] = $size;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($position !== null) $args['position'] = $position;
    if ($headerClassName !== null) $args['headerClassName'] = $headerClassName;
    if ($bodyClassName !== null) $args['bodyClassName'] = $bodyClassName;
    if ($footerClassName !== null) $args['footerClassName'] = $footerClassName;
    if ($showCloseButton !== null) $args['showCloseButton'] = $showCloseButton;
    if ($closeOnEsc !== null) $args['closeOnEsc'] = $closeOnEsc;
    if ($closeOnOutside !== null) $args['closeOnOutside'] = $closeOnOutside;
    if ($overlay !== null) $args['overlay'] = $overlay;
    if ($resizable !== null) $args['resizable'] = $resizable;
    if ($width !== null) $args['width'] = $width;
    if ($height !== null) $args['height'] = $height;
    if ($actions !== null) $args['actions'] = $actions;
    return \AmisSchema\Widget\Feedback\Drawer::make($args);
}

/**
 * 创建 Spinner 组件
 * 
 * @param string $size 大小 sm、lg
 * @param string $icon 自定义图标
 * @param string $className 外层CSS类名
 * @param mixed $style 
 * @param string $type 指定为 Spinner 渲染器
 * @param mixed $onEvent 事件
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $tip 自定义文案
 * @param string $tipPlacement 文案位置 top、right、bottom、left
 * @param int $delay 延迟显示
 * @param bool $overlay 是否显示遮罩
 * 
 * @return \AmisSchema\Widget\Feedback\Spinner
 */
function AmisSpinner(
    mixed $size = null,
    mixed $icon = null,
    mixed $className = null,
    mixed $style = null,
    mixed $type = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $tip = null,
    mixed $tipPlacement = null,
    mixed $delay = null,
    mixed $overlay = null
): \AmisSchema\Widget\Feedback\Spinner
{
    $args = [];
    if ($size !== null) $args['size'] = $size;
    if ($icon !== null) $args['icon'] = $icon;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($type !== null) $args['type'] = $type;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($tip !== null) $args['tip'] = $tip;
    if ($tipPlacement !== null) $args['tipPlacement'] = $tipPlacement;
    if ($delay !== null) $args['delay'] = $delay;
    if ($overlay !== null) $args['overlay'] = $overlay;
    return \AmisSchema\Widget\Feedback\Spinner::make($args);
}

/**
 * 创建 Toast 组件
 * 
 * @param string|\AmisSchema\Widget\Widget $title 标题，支持 SchemaNode
 * @param string|\AmisSchema\Widget\Widget $body 内容，支持 SchemaNode
 * @param string $level 展示图标类型：info、success、error、warning
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $position 提示显示位置：top-right、top-center、top-left、bottom-center、bottom-left、bottom-right、center
 * @param bool $closeButton 是否展示关闭按钮，移动端不展示
 * @param bool $showIcon 是否展示图标
 * @param int $timeout 持续时间，error类型为6000，移动端为3000
 * @param bool $allowHtml 是否会被当作 HTML 片段处理
 * 
 * @return \AmisSchema\Widget\Feedback\Toast
 */
function AmisToast(
    mixed $title = null,
    mixed $body = null,
    mixed $level = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $position = null,
    mixed $closeButton = null,
    mixed $showIcon = null,
    mixed $timeout = null,
    mixed $allowHtml = null
): \AmisSchema\Widget\Feedback\Toast
{
    $args = [];
    if ($title !== null) $args['title'] = $title;
    if ($body !== null) $args['body'] = $body;
    if ($level !== null) $args['level'] = $level;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($position !== null) $args['position'] = $position;
    if ($closeButton !== null) $args['closeButton'] = $closeButton;
    if ($showIcon !== null) $args['showIcon'] = $showIcon;
    if ($timeout !== null) $args['timeout'] = $timeout;
    if ($allowHtml !== null) $args['allowHtml'] = $allowHtml;
    return \AmisSchema\Widget\Feedback\Toast::make($args);
}

/**
 * 创建 Amis 组件
 * 
 * @param string $name 绑定上下文变量名
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param array $props 向下传递的 props，会作为默认值
 * @param \AmisSchema\Schema|array|string $schema amis 配置，可以是 JSON 对象或字符串的 JSON
 * 
 * @return \AmisSchema\Widget\Extra\Amis
 */
function AmisAmis(
    mixed $name = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $props = null,
    mixed $schema = null
): \AmisSchema\Widget\Extra\Amis
{
    $args = [];
    if ($name !== null) $args['name'] = $name;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($props !== null) $args['props'] = $props;
    if ($schema !== null) $args['schema'] = $schema;
    return \AmisSchema\Widget\Extra\Amis::make($args);
}

/**
 * 创建 AmisRenderer 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * 
 * @return \AmisSchema\Widget\Extra\AmisRenderer
 */
function AmisAmisRenderer(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null
): \AmisSchema\Widget\Extra\AmisRenderer
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    return \AmisSchema\Widget\Extra\AmisRenderer::make($args);
}

/**
 * 创建 Audio 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $src 音频地址，支持各种音频格式
 * @param bool $inline 是否是内联模式
 * @param bool $loop 是否循环播放
 * @param bool $autoPlay 是否自动播放
 * @param array $rates 可配置音频播放倍速，如：[1.0, 1.5, 2.0]
 * @param array $controls 内部模块定制化，控制显示哪些功能模块
 * 
 * @return \AmisSchema\Widget\Extra\Audio
 */
function AmisAudio(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $src = null,
    mixed $inline = null,
    mixed $loop = null,
    mixed $autoPlay = null,
    mixed $rates = null,
    mixed $controls = null
): \AmisSchema\Widget\Extra\Audio
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($src !== null) $args['src'] = $src;
    if ($inline !== null) $args['inline'] = $inline;
    if ($loop !== null) $args['loop'] = $loop;
    if ($autoPlay !== null) $args['autoPlay'] = $autoPlay;
    if ($rates !== null) $args['rates'] = $rates;
    if ($controls !== null) $args['controls'] = $controls;
    return \AmisSchema\Widget\Extra\Audio::make($args);
}

/**
 * 创建 Avatar 组件
 * 
 * @param string|int $size 头像大小：default(48)、normal(40)、small(32) 或数字
 * @param string $icon 图标，默认为用户图标
 * @param string $className CSS类名
 * @param array $style 自定义样式，可控制背景及文字颜色
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $src 图片地址，支持变量
 * @param string $defaultAvatar 占位图地址
 * @param string $text 文字内容，支持变量
 * @param string $fit 图片拉伸方式：contain、cover、fill、none、scale-down
 * @param string $shape 头像形状：circle-圆形、square-正方形、rounded-圆角
 * @param int $gap 控制字符类型距离左右两侧边界单位像素
 * @param string $alt 图像无法显示时的替代文本
 * @param bool $draggable 图片是否允许拖动
 * @param string $crossOrigin 图片的 CORS 属性设置：anonymous、use-credentials
 * @param string $onError 图片加载失败的处理函数，返回 true 则进行 text/icon 置换
 * 
 * @return \AmisSchema\Widget\Extra\Avatar
 */
function AmisAvatar(
    mixed $size = null,
    mixed $icon = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $src = null,
    mixed $defaultAvatar = null,
    mixed $text = null,
    mixed $fit = null,
    mixed $shape = null,
    mixed $gap = null,
    mixed $alt = null,
    mixed $draggable = null,
    mixed $crossOrigin = null,
    mixed $onError = null
): \AmisSchema\Widget\Extra\Avatar
{
    $args = [];
    if ($size !== null) $args['size'] = $size;
    if ($icon !== null) $args['icon'] = $icon;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($src !== null) $args['src'] = $src;
    if ($defaultAvatar !== null) $args['defaultAvatar'] = $defaultAvatar;
    if ($text !== null) $args['text'] = $text;
    if ($fit !== null) $args['fit'] = $fit;
    if ($shape !== null) $args['shape'] = $shape;
    if ($gap !== null) $args['gap'] = $gap;
    if ($alt !== null) $args['alt'] = $alt;
    if ($draggable !== null) $args['draggable'] = $draggable;
    if ($crossOrigin !== null) $args['crossOrigin'] = $crossOrigin;
    if ($onError !== null) $args['onError'] = $onError;
    return \AmisSchema\Widget\Extra\Avatar::make($args);
}

/**
 * 创建 Badge 组件
 * 
 * @param string $level 角标级别：info、success、warning、danger，设置之后角标背景颜色不同
 * @param int $size 角标大小
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $mode 角标类型：dot-点状、text-文字、ribbon-缎带
 * @param string|int $text 角标文案，支持字符串和数字，在 mode='dot' 下设置无效
 * @param int $overflowCount 设置封顶的数字值，超过会显示为 ${overflowCount}+
 * @param string $position 角标位置：top-right、top-left、bottom-right、bottom-left
 * @param array $offset 角标位置偏移，格式为 [top, left]，相对于 position 位置进行偏移
 * @param bool $animation 角标是否显示动画，在 mode='dot' 状态下生效
 * 
 * @return \AmisSchema\Widget\Extra\Badge
 */
function AmisBadge(
    mixed $level = null,
    mixed $size = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $mode = null,
    mixed $text = null,
    mixed $overflowCount = null,
    mixed $position = null,
    mixed $offset = null,
    mixed $animation = null
): \AmisSchema\Widget\Extra\Badge
{
    $args = [];
    if ($level !== null) $args['level'] = $level;
    if ($size !== null) $args['size'] = $size;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($mode !== null) $args['mode'] = $mode;
    if ($text !== null) $args['text'] = $text;
    if ($overflowCount !== null) $args['overflowCount'] = $overflowCount;
    if ($position !== null) $args['position'] = $position;
    if ($offset !== null) $args['offset'] = $offset;
    if ($animation !== null) $args['animation'] = $animation;
    return \AmisSchema\Widget\Extra\Badge::make($args);
}

/**
 * 创建 Tasks 组件
 * 
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $tableClassName table Dom 的类名
 * @param string|array|\AmisSchema\Definition\API $checkApi 返回任务列表，返回的数据请参考 items
 * @param string|array|\AmisSchema\Definition\API $submitApi 提交任务使用的 API
 * @param string|array|\AmisSchema\Definition\API $reSubmitApi 如果任务失败，且可以重试，提交的时候会使用此 API
 * @param int $interval 当有任务进行中，会每隔一段时间再次检测，时间间隔默认 3s
 * @param string $taskNameLabel 任务名称列说明
 * @param string $operationLabel 操作列说明
 * @param string $statusLabel 状态列说明
 * @param string $remarkLabel 备注列说明
 * @param string $btnText 操作按钮文字
 * @param string $retryBtnText 重试操作按钮文字
 * @param string $btnClassName 配置容器按钮 className
 * @param string $retryBtnClassName 配置容器重试按钮 className
 * @param array $statusLabelMap 状态显示对应的类名配置
 * @param array $statusTextMap 状态显示对应的文字显示配置
 * 
 * @return \AmisSchema\Widget\Extra\Tasks
 */
function AmisTasks(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $tableClassName = null,
    mixed $checkApi = null,
    mixed $submitApi = null,
    mixed $reSubmitApi = null,
    mixed $interval = null,
    mixed $taskNameLabel = null,
    mixed $operationLabel = null,
    mixed $statusLabel = null,
    mixed $remarkLabel = null,
    mixed $btnText = null,
    mixed $retryBtnText = null,
    mixed $btnClassName = null,
    mixed $retryBtnClassName = null,
    mixed $statusLabelMap = null,
    mixed $statusTextMap = null
): \AmisSchema\Widget\Extra\Tasks
{
    $args = [];
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($tableClassName !== null) $args['tableClassName'] = $tableClassName;
    if ($checkApi !== null) $args['checkApi'] = $checkApi;
    if ($submitApi !== null) $args['submitApi'] = $submitApi;
    if ($reSubmitApi !== null) $args['reSubmitApi'] = $reSubmitApi;
    if ($interval !== null) $args['interval'] = $interval;
    if ($taskNameLabel !== null) $args['taskNameLabel'] = $taskNameLabel;
    if ($operationLabel !== null) $args['operationLabel'] = $operationLabel;
    if ($statusLabel !== null) $args['statusLabel'] = $statusLabel;
    if ($remarkLabel !== null) $args['remarkLabel'] = $remarkLabel;
    if ($btnText !== null) $args['btnText'] = $btnText;
    if ($retryBtnText !== null) $args['retryBtnText'] = $retryBtnText;
    if ($btnClassName !== null) $args['btnClassName'] = $btnClassName;
    if ($retryBtnClassName !== null) $args['retryBtnClassName'] = $retryBtnClassName;
    if ($statusLabelMap !== null) $args['statusLabelMap'] = $statusLabelMap;
    if ($statusTextMap !== null) $args['statusTextMap'] = $statusTextMap;
    return \AmisSchema\Widget\Extra\Tasks::make($args);
}

/**
 * 创建 WebComponent 组件
 * 
 * @param \AmisSchema\Schema|array $body 子节点
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $tag 具体使用的 web-component 标签
 * @param array $props 标签上的属性，props 里的值支持变量替换
 * 
 * @return \AmisSchema\Widget\Extra\WebComponent
 */
function AmisWebComponent(
    mixed $body = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $tag = null,
    mixed $props = null
): \AmisSchema\Widget\Extra\WebComponent
{
    $args = [];
    if ($body !== null) $args['body'] = $body;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($tag !== null) $args['tag'] = $tag;
    if ($props !== null) $args['props'] = $props;
    return \AmisSchema\Widget\Extra\WebComponent::make($args);
}

/**
 * 创建 Wizard 组件
 * 
 * @param string|array|\AmisSchema\Definition\API $api 最后一步保存的接口
 * @param string $className CSS类名
 * @param mixed $style 
 * @param string $reload 操作完后刷新目标对象，填写目标组件的 name 值
 * @param string $redirect 操作完后跳转
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $mode 展示模式：horizontal-水平、vertical-垂直
 * @param string|array|\AmisSchema\Definition\API $initApi 初始化数据接口
 * @param bool $initFetch 初始是否拉取数据
 * @param string $initFetchOn 初始是否拉取数据，通过表达式来配置
 * @param string $actionPrevLabel 上一步按钮文本
 * @param string $actionNextLabel 下一步按钮文本
 * @param string $actionNextSaveLabel 保存并下一步按钮文本
 * @param string $actionFinishLabel 完成按钮文本
 * @param string $actionClassName 按钮 CSS 类名
 * @param string $target 可以把数据提交给别的组件而不是自己保存
 * @param array $steps 数组，配置步骤信息
 * @param string|int $startStep 起始默认值，从第几步开始，支持模版
 * 
 * @return \AmisSchema\Widget\Extra\Wizard
 */
function AmisWizard(
    mixed $api = null,
    mixed $className = null,
    mixed $style = null,
    mixed $reload = null,
    mixed $redirect = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $mode = null,
    mixed $initApi = null,
    mixed $initFetch = null,
    mixed $initFetchOn = null,
    mixed $actionPrevLabel = null,
    mixed $actionNextLabel = null,
    mixed $actionNextSaveLabel = null,
    mixed $actionFinishLabel = null,
    mixed $actionClassName = null,
    mixed $target = null,
    mixed $steps = null,
    mixed $startStep = null
): \AmisSchema\Widget\Extra\Wizard
{
    $args = [];
    if ($api !== null) $args['api'] = $api;
    if ($className !== null) $args['className'] = $className;
    if ($style !== null) $args['style'] = $style;
    if ($reload !== null) $args['reload'] = $reload;
    if ($redirect !== null) $args['redirect'] = $redirect;
    if ($onEvent !== null) $args['onEvent'] = $onEvent;
    if ($visibleOn !== null) $args['visibleOn'] = $visibleOn;
    if ($disabledOn !== null) $args['disabledOn'] = $disabledOn;
    if ($data !== null) $args['data'] = $data;
    if ($mode !== null) $args['mode'] = $mode;
    if ($initApi !== null) $args['initApi'] = $initApi;
    if ($initFetch !== null) $args['initFetch'] = $initFetch;
    if ($initFetchOn !== null) $args['initFetchOn'] = $initFetchOn;
    if ($actionPrevLabel !== null) $args['actionPrevLabel'] = $actionPrevLabel;
    if ($actionNextLabel !== null) $args['actionNextLabel'] = $actionNextLabel;
    if ($actionNextSaveLabel !== null) $args['actionNextSaveLabel'] = $actionNextSaveLabel;
    if ($actionFinishLabel !== null) $args['actionFinishLabel'] = $actionFinishLabel;
    if ($actionClassName !== null) $args['actionClassName'] = $actionClassName;
    if ($target !== null) $args['target'] = $target;
    if ($steps !== null) $args['steps'] = $steps;
    if ($startStep !== null) $args['startStep'] = $startStep;
    return \AmisSchema\Widget\Extra\Wizard::make($args);
}

