<?php

declare(strict_types=1);

/**
 * Amis Schema 组件助手函数
 * 
 * 提供类似 Flutter 的组件调用方式
 * 生成时间: 2025-08-15 11:45:40
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
 * @param mixed ...$args 其他参数
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
    mixed $data = null,
    ...$args
): \AmisSchema\Widget\Display\BarCode
{
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    return \AmisSchema\Widget\Display\BarCode::make($args);
}

/**
 * 创建 CRUD 组件
 * 
 * @param string $type 指定为 CRUD 渲染器，默认 'crud'
 * @param string $title 可设置成空，当设置成空时，没有标题栏，默认 '列表'
 * @param \AmisSchema\Definition\API|string $api CRUD 用来获取列表数据的 api
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\CRUD
 */
function AmisCRUD(
    mixed $type = null,
    mixed $title = null,
    mixed $api = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $multiple = null,
    ...$args
): \AmisSchema\Widget\Display\CRUD
{
    $type !== null && $args['type'] = $type;
    $title !== null && $args['title'] = $title;
    $api !== null && $args['api'] = $api;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $mode !== null && $args['mode'] = $mode;
    $deferApi !== null && $args['deferApi'] = $deferApi;
    $loadDataOnce !== null && $args['loadDataOnce'] = $loadDataOnce;
    $loadDataOnceFetchOnFilter !== null && $args['loadDataOnceFetchOnFilter'] = $loadDataOnceFetchOnFilter;
    $source !== null && $args['source'] = $source;
    $filter !== null && $args['filter'] = $filter;
    $filterTogglable !== null && $args['filterTogglable'] = $filterTogglable;
    $filterDefaultVisible !== null && $args['filterDefaultVisible'] = $filterDefaultVisible;
    $initFetch !== null && $args['initFetch'] = $initFetch;
    $interval !== null && $args['interval'] = $interval;
    $silentPolling !== null && $args['silentPolling'] = $silentPolling;
    $stopAutoRefreshWhen !== null && $args['stopAutoRefreshWhen'] = $stopAutoRefreshWhen;
    $stopAutoRefreshWhenModalIsOpen !== null && $args['stopAutoRefreshWhenModalIsOpen'] = $stopAutoRefreshWhenModalIsOpen;
    $syncLocation !== null && $args['syncLocation'] = $syncLocation;
    $draggable !== null && $args['draggable'] = $draggable;
    $resizable !== null && $args['resizable'] = $resizable;
    $itemDraggableOn !== null && $args['itemDraggableOn'] = $itemDraggableOn;
    $saveOrderApi !== null && $args['saveOrderApi'] = $saveOrderApi;
    $quickSaveApi !== null && $args['quickSaveApi'] = $quickSaveApi;
    $quickSaveItemApi !== null && $args['quickSaveItemApi'] = $quickSaveItemApi;
    $bulkActions !== null && $args['bulkActions'] = $bulkActions;
    $primaryField !== null && $args['primaryField'] = $primaryField;
    $perPage !== null && $args['perPage'] = $perPage;
    $orderBy !== null && $args['orderBy'] = $orderBy;
    $orderDir !== null && $args['orderDir'] = $orderDir;
    $defaultParams !== null && $args['defaultParams'] = $defaultParams;
    $pageField !== null && $args['pageField'] = $pageField;
    $perPageField !== null && $args['perPageField'] = $perPageField;
    $perPageAvailable !== null && $args['perPageAvailable'] = $perPageAvailable;
    $orderField !== null && $args['orderField'] = $orderField;
    $hideQuickSaveBtn !== null && $args['hideQuickSaveBtn'] = $hideQuickSaveBtn;
    $autoJumpToTopOnPagerChange !== null && $args['autoJumpToTopOnPagerChange'] = $autoJumpToTopOnPagerChange;
    $syncResponse2Query !== null && $args['syncResponse2Query'] = $syncResponse2Query;
    $keepItemSelectionOnPageChange !== null && $args['keepItemSelectionOnPageChange'] = $keepItemSelectionOnPageChange;
    $labelTpl !== null && $args['labelTpl'] = $labelTpl;
    $maxKeepItemSelectionLength !== null && $args['maxKeepItemSelectionLength'] = $maxKeepItemSelectionLength;
    $maxItemSelectionLength !== null && $args['maxItemSelectionLength'] = $maxItemSelectionLength;
    $headerToolbar !== null && $args['headerToolbar'] = $headerToolbar;
    $footerToolbar !== null && $args['footerToolbar'] = $footerToolbar;
    $alwaysShowPagination !== null && $args['alwaysShowPagination'] = $alwaysShowPagination;
    $affixHeader !== null && $args['affixHeader'] = $affixHeader;
    $affixFooter !== null && $args['affixFooter'] = $affixFooter;
    $autoGenerateFilter !== null && $args['autoGenerateFilter'] = $autoGenerateFilter;
    $resetPageAfterAjaxItemAction !== null && $args['resetPageAfterAjaxItemAction'] = $resetPageAfterAjaxItemAction;
    $autoFillHeight !== null && $args['autoFillHeight'] = $autoFillHeight;
    $canAccessSuperData !== null && $args['canAccessSuperData'] = $canAccessSuperData;
    $matchFunc !== null && $args['matchFunc'] = $matchFunc;
    $parsePrimitiveQuery !== null && $args['parsePrimitiveQuery'] = $parsePrimitiveQuery;
    $columns !== null && $args['columns'] = $columns;
    $card !== null && $args['card'] = $card;
    $listItem !== null && $args['listItem'] = $listItem;
    $itemCheckableOn !== null && $args['itemCheckableOn'] = $itemCheckableOn;
    $checkOnItemClick !== null && $args['checkOnItemClick'] = $checkOnItemClick;
    $itemAction !== null && $args['itemAction'] = $itemAction;
    $selectable !== null && $args['selectable'] = $selectable;
    $multiple !== null && $args['multiple'] = $multiple;
    return \AmisSchema\Widget\Display\CRUD::make($args);
}

/**
 * 创建 Calendar 组件
 * 
 * @param string $type 指定为 calendar 渲染器，默认 'calendar'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param array|string $schedules 日历中展示日程，可设置静态数据或从上下文中取数据，默认 []
 * @param array $scheduleClassNames 日历中展示日程的颜色，参考背景色，默认 ['bg-warning', 'bg-danger', 'bg-success', 'bg-info', 'bg-secondary']
 * @param array|\AmisSchema\Widget\Widget $scheduleAction 自定义日程展示
 * @param bool $largeMode 放大模式，默认 false
 * @param array $todayActiveStyle 今日激活时的自定义样式，默认 []
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Calendar
 */
function AmisCalendar(
    mixed $type = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $schedules = null,
    mixed $scheduleClassNames = null,
    mixed $scheduleAction = null,
    mixed $largeMode = null,
    mixed $todayActiveStyle = null,
    ...$args
): \AmisSchema\Widget\Display\Calendar
{
    $type !== null && $args['type'] = $type;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $schedules !== null && $args['schedules'] = $schedules;
    $scheduleClassNames !== null && $args['scheduleClassNames'] = $scheduleClassNames;
    $scheduleAction !== null && $args['scheduleAction'] = $scheduleAction;
    $largeMode !== null && $args['largeMode'] = $largeMode;
    $todayActiveStyle !== null && $args['todayActiveStyle'] = $todayActiveStyle;
    return \AmisSchema\Widget\Display\Calendar::make($args);
}

/**
 * 创建 Card 组件
 * 
 * @param string $type 指定为 Card 渲染器，默认 'card'
 * @param array $body 内容容器，主要用来放置非表单项组件，默认 []
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Card
 */
function AmisCard(
    mixed $type = null,
    mixed $body = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $useCardLabel = null,
    ...$args
): \AmisSchema\Widget\Display\Card
{
    $type !== null && $args['type'] = $type;
    $body !== null && $args['body'] = $body;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $href !== null && $args['href'] = $href;
    $bodyClassName !== null && $args['bodyClassName'] = $bodyClassName;
    $actions !== null && $args['actions'] = $actions;
    $actionsCount !== null && $args['actionsCount'] = $actionsCount;
    $itemAction !== null && $args['itemAction'] = $itemAction;
    $secondary !== null && $args['secondary'] = $secondary;
    $toolbar !== null && $args['toolbar'] = $toolbar;
    $dragging !== null && $args['dragging'] = $dragging;
    $selectable !== null && $args['selectable'] = $selectable;
    $checkable !== null && $args['checkable'] = $checkable;
    $selected !== null && $args['selected'] = $selected;
    $hideCheckToggler !== null && $args['hideCheckToggler'] = $hideCheckToggler;
    $multiple !== null && $args['multiple'] = $multiple;
    $useCardLabel !== null && $args['useCardLabel'] = $useCardLabel;
    return \AmisSchema\Widget\Display\Card::make($args);
}

/**
 * 创建 Cards 组件
 * 
 * @param string $type 指定为卡片组，默认 'cards'
 * @param string $title 标题，默认 ''
 * @param string $placeholder 当没数据的时候的文字提示，默认 '暂无数据'
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Cards
 */
function AmisCards(
    mixed $type = null,
    mixed $title = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $columnsCount = null,
    ...$args
): \AmisSchema\Widget\Display\Cards
{
    $type !== null && $args['type'] = $type;
    $title !== null && $args['title'] = $title;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $headerClassName !== null && $args['headerClassName'] = $headerClassName;
    $footerClassName !== null && $args['footerClassName'] = $footerClassName;
    $itemClassName !== null && $args['itemClassName'] = $itemClassName;
    $card !== null && $args['card'] = $card;
    $selectable !== null && $args['selectable'] = $selectable;
    $multiple !== null && $args['multiple'] = $multiple;
    $checkOnItemClick !== null && $args['checkOnItemClick'] = $checkOnItemClick;
    $masonryLayout !== null && $args['masonryLayout'] = $masonryLayout;
    $columnsCount !== null && $args['columnsCount'] = $columnsCount;
    return \AmisSchema\Widget\Display\Cards::make($args);
}

/**
 * 创建 Carousel 组件
 * 
 * @param string $type 指定为 carousel 渲染器，默认 'carousel'
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Carousel
 */
function AmisCarousel(
    mixed $type = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $icons = null,
    ...$args
): \AmisSchema\Widget\Display\Carousel
{
    $type !== null && $args['type'] = $type;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $itemSchema !== null && $args['itemSchema'] = $itemSchema;
    $auto !== null && $args['auto'] = $auto;
    $interval !== null && $args['interval'] = $interval;
    $duration !== null && $args['duration'] = $duration;
    $width !== null && $args['width'] = $width;
    $height !== null && $args['height'] = $height;
    $controls !== null && $args['controls'] = $controls;
    $controlsTheme !== null && $args['controlsTheme'] = $controlsTheme;
    $animation !== null && $args['animation'] = $animation;
    $thumbMode !== null && $args['thumbMode'] = $thumbMode;
    $multiple !== null && $args['multiple'] = $multiple;
    $alwaysShowArrow !== null && $args['alwaysShowArrow'] = $alwaysShowArrow;
    $icons !== null && $args['icons'] = $icons;
    return \AmisSchema\Widget\Display\Carousel::make($args);
}

/**
 * 创建 Chart 组件
 * 
 * @param string $type 指定为 chart 渲染器，默认 'chart'
 * @param array $body 内容容器，默认 []
 * @param \AmisSchema\Definition\API|string|array $api 配置项接口地址，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Chart
 */
function AmisChart(
    mixed $type = null,
    mixed $body = null,
    mixed $api = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $clickAction = null,
    ...$args
): \AmisSchema\Widget\Display\Chart
{
    $type !== null && $args['type'] = $type;
    $body !== null && $args['body'] = $body;
    $api !== null && $args['api'] = $api;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $initFetch !== null && $args['initFetch'] = $initFetch;
    $interval !== null && $args['interval'] = $interval;
    $config !== null && $args['config'] = $config;
    $width !== null && $args['width'] = $width;
    $height !== null && $args['height'] = $height;
    $replaceChartOption !== null && $args['replaceChartOption'] = $replaceChartOption;
    $trackExpression !== null && $args['trackExpression'] = $trackExpression;
    $dataFilter !== null && $args['dataFilter'] = $dataFilter;
    $mapURL !== null && $args['mapURL'] = $mapURL;
    $mapName !== null && $args['mapName'] = $mapName;
    $loadBaiduMap !== null && $args['loadBaiduMap'] = $loadBaiduMap;
    $clickAction !== null && $args['clickAction'] = $clickAction;
    return \AmisSchema\Widget\Display\Chart::make($args);
}

/**
 * 创建 Code 组件
 * 
 * @param string $type 指定为 code 渲染器，默认 'code'
 * @param string $name 在其他组件中，时，用作变量映射，默认 ''
 * @param string $value 显示的代码内容，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $language 所使用的高亮语言，默认 'plaintext'
 * @param int $tabSize 默认 tab 大小，默认 4
 * @param string $editorTheme 主题，还有 'vs-dark'，默认 'vs'
 * @param bool $wordWrap 是否折行，默认 true
 * @param string|int $maxHeight 最大高度，超出滚动，默认 ''
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Code
 */
function AmisCode(
    mixed $type = null,
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $language = null,
    mixed $tabSize = null,
    mixed $editorTheme = null,
    mixed $wordWrap = null,
    mixed $maxHeight = null,
    ...$args
): \AmisSchema\Widget\Display\Code
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $language !== null && $args['language'] = $language;
    $tabSize !== null && $args['tabSize'] = $tabSize;
    $editorTheme !== null && $args['editorTheme'] = $editorTheme;
    $wordWrap !== null && $args['wordWrap'] = $wordWrap;
    $maxHeight !== null && $args['maxHeight'] = $maxHeight;
    return \AmisSchema\Widget\Display\Code::make($args);
}

/**
 * 创建 Color 组件
 * 
 * @param string $type 指定为 color 渲染器，在 Table、Card 和 List 中为 "color"；在 Form 中用作静态展示为 "static-color"，默认 'color'
 * @param string $name 在其他组件中，时，用作变量映射，默认 ''
 * @param string $value 显示的颜色值，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $defaultColor 默认颜色值，默认 ''
 * @param bool $showValue 是否显示右边的颜色值，默认 true
 * @param string $popOverContainerSelector 弹层挂载位置选择器，会通过 querySelector 获取，默认 ''
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Color
 */
function AmisColor(
    mixed $type = null,
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $defaultColor = null,
    mixed $showValue = null,
    mixed $popOverContainerSelector = null,
    ...$args
): \AmisSchema\Widget\Display\Color
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $defaultColor !== null && $args['defaultColor'] = $defaultColor;
    $showValue !== null && $args['showValue'] = $showValue;
    $popOverContainerSelector !== null && $args['popOverContainerSelector'] = $popOverContainerSelector;
    return \AmisSchema\Widget\Display\Color::make($args);
}

/**
 * 创建 Date 组件
 * 
 * @param string $type 指定为 date 渲染器，在 Table、Card 和 List 中为 "date"；在 Form 中用作静态展示为 "static-date"，默认 'date'
 * @param string $name 在其他组件中，时，用作变量映射，默认 ''
 * @param string $value 显示的日期数值，默认 ''
 * @param string $placeholder 占位内容，默认 '-'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $displayFormat 展示格式，更多格式类型请参考 moment 文档，默认 'YYYY-MM-DD'
 * @param string $valueFormat 数据格式，默认为时间戳，更多格式类型请参考 moment 文档，默认 'X'
 * @param bool $fromNow 是否显示相对当前的时间描述，比如: 11 小时前、3 天前、1 年前等，fromNow 为 true 时，format 不生效，默认 false
 * @param int $updateFrequency 更新频率，默认为 1 分钟（60000 毫秒），默认 60000
 * @param string $displayTimeZone 设置日期展示时区，默认 ''
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Date
 */
function AmisDate(
    mixed $type = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $displayFormat = null,
    mixed $valueFormat = null,
    mixed $fromNow = null,
    mixed $updateFrequency = null,
    mixed $displayTimeZone = null,
    ...$args
): \AmisSchema\Widget\Display\Date
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $displayFormat !== null && $args['displayFormat'] = $displayFormat;
    $valueFormat !== null && $args['valueFormat'] = $valueFormat;
    $fromNow !== null && $args['fromNow'] = $fromNow;
    $updateFrequency !== null && $args['updateFrequency'] = $updateFrequency;
    $displayTimeZone !== null && $args['displayTimeZone'] = $displayTimeZone;
    return \AmisSchema\Widget\Display\Date::make($args);
}

/**
 * 创建 Each 组件
 * 
 * @param string $type 指定为 Each 组件，默认 'each'
 * @param string $name 获取数据域中变量，默认 ''
 * @param array $value 用于循环的值，默认 []
 * @param string $placeholder 当 value 值不存在或为空数组时的占位文本，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $source 获取数据域中变量，支持数据映射，默认 ''
 * @param array $items 使用 value 中的数据，循环输出渲染器，默认 []
 * @param string $itemKeyName 获取循环当前数组成员的字段名，默认 'item'
 * @param string $indexKeyName 获取循环当前索引的字段名，默认 'index'
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Each
 */
function AmisEach(
    mixed $type = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $items = null,
    mixed $itemKeyName = null,
    mixed $indexKeyName = null,
    ...$args
): \AmisSchema\Widget\Display\Each
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $items !== null && $args['items'] = $items;
    $itemKeyName !== null && $args['itemKeyName'] = $itemKeyName;
    $indexKeyName !== null && $args['indexKeyName'] = $indexKeyName;
    return \AmisSchema\Widget\Display\Each::make($args);
}

/**
 * 创建 GridNav 组件
 * 
 * @param string $type 指定为 GridNav 渲染器，默认 'grid-nav'
 * @param string $name 字段名，映射同名变量，默认 ''
 * @param array $value 宫格数据数组，默认 []
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\GridNav
 */
function AmisGridNav(
    mixed $type = null,
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $columnNum = null,
    ...$args
): \AmisSchema\Widget\Display\GridNav
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $itemClassName !== null && $args['itemClassName'] = $itemClassName;
    $contentClassName !== null && $args['contentClassName'] = $contentClassName;
    $source !== null && $args['source'] = $source;
    $square !== null && $args['square'] = $square;
    $center !== null && $args['center'] = $center;
    $border !== null && $args['border'] = $border;
    $gutter !== null && $args['gutter'] = $gutter;
    $reverse !== null && $args['reverse'] = $reverse;
    $iconRatio !== null && $args['iconRatio'] = $iconRatio;
    $direction !== null && $args['direction'] = $direction;
    $columnNum !== null && $args['columnNum'] = $columnNum;
    return \AmisSchema\Widget\Display\GridNav::make($args);
}

/**
 * 创建 Html 组件
 * 
 * @param string $type 指定为 html 渲染器，默认 'html'
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $html html 代码，默认 ''
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Html
 */
function AmisHtml(
    mixed $type = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $html = null,
    ...$args
): \AmisSchema\Widget\Display\Html
{
    $type !== null && $args['type'] = $type;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $html !== null && $args['html'] = $html;
    return \AmisSchema\Widget\Display\Html::make($args);
}

/**
 * 创建 Icon 组件
 * 
 * @param string $type 指定组件类型，默认 'icon'
 * @param string $icon icon 名称，支持 fontawesome v4 或通过 registerIcon 注册的 icon、或使用 url，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $vendor icon 类型，默认为 fa，表示 fontawesome v4。也支持 iconfont，如果是 fontawesome v5 以上版本或者其他框架可以设置为空字符串，默认 'fa'
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Icon
 */
function AmisIcon(
    mixed $type = null,
    mixed $icon = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $vendor = null,
    ...$args
): \AmisSchema\Widget\Display\Icon
{
    $type !== null && $args['type'] = $type;
    $icon !== null && $args['icon'] = $icon;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $vendor !== null && $args['vendor'] = $vendor;
    return \AmisSchema\Widget\Display\Icon::make($args);
}

/**
 * 创建 Iframe 组件
 * 
 * @param string $type 指定为 iFrame 渲染器，默认 'iframe'
 * @param string $name iframe 名称，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Iframe
 */
function AmisIframe(
    mixed $type = null,
    mixed $name = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $events = null,
    ...$args
): \AmisSchema\Widget\Display\Iframe
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $src !== null && $args['src'] = $src;
    $frameBorder !== null && $args['frameBorder'] = $frameBorder;
    $allow !== null && $args['allow'] = $allow;
    $sandbox !== null && $args['sandbox'] = $sandbox;
    $referrerpolicy !== null && $args['referrerpolicy'] = $referrerpolicy;
    $height !== null && $args['height'] = $height;
    $width !== null && $args['width'] = $width;
    $events !== null && $args['events'] = $events;
    return \AmisSchema\Widget\Display\Iframe::make($args);
}

/**
 * 创建 Image 组件
 * 
 * @param string $type 指定为 image 渲染器，在 Table、Card 和 List 中为 "image"；在 Form 中用作静态展示为 "static-image"，默认 'image'
 * @param string $name 在其他组件中，时，用作变量映射，默认 ''
 * @param string $title 标题，默认 ''
 * @param string $placeholder 占位文本，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Image
 */
function AmisImage(
    mixed $type = null,
    mixed $name = null,
    mixed $title = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $clickAction = null,
    ...$args
): \AmisSchema\Widget\Display\Image
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $title !== null && $args['title'] = $title;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $innerClassName !== null && $args['innerClassName'] = $innerClassName;
    $imageClassName !== null && $args['imageClassName'] = $imageClassName;
    $thumbClassName !== null && $args['thumbClassName'] = $thumbClassName;
    $imageCaption !== null && $args['imageCaption'] = $imageCaption;
    $defaultImage !== null && $args['defaultImage'] = $defaultImage;
    $src !== null && $args['src'] = $src;
    $href !== null && $args['href'] = $href;
    $originalSrc !== null && $args['originalSrc'] = $originalSrc;
    $enlargeAble !== null && $args['enlargeAble'] = $enlargeAble;
    $enlargeTitle !== null && $args['enlargeTitle'] = $enlargeTitle;
    $enlargeCaption !== null && $args['enlargeCaption'] = $enlargeCaption;
    $enlargeWithGallary !== null && $args['enlargeWithGallary'] = $enlargeWithGallary;
    $thumbMode !== null && $args['thumbMode'] = $thumbMode;
    $thumbRatio !== null && $args['thumbRatio'] = $thumbRatio;
    $imageMode !== null && $args['imageMode'] = $imageMode;
    $height !== null && $args['height'] = $height;
    $width !== null && $args['width'] = $width;
    $showToolbar !== null && $args['showToolbar'] = $showToolbar;
    $maxScale !== null && $args['maxScale'] = $maxScale;
    $minScale !== null && $args['minScale'] = $minScale;
    $clickAction !== null && $args['clickAction'] = $clickAction;
    return \AmisSchema\Widget\Display\Image::make($args);
}

/**
 * 创建 Images 组件
 * 
 * @param string $type 如果在 Table、Card 和 List 中，为"images"；在 Form 中用作静态展示，为"static-images"，默认 'images'
 * @param string $name 字段名，映射同名变量，默认 ''
 * @param string|array $value 图片数组，支持字符串数组或对象数组，默认 []
 * @param string $className 外层 CSS 类名，默认 ''
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Images
 */
function AmisImages(
    mixed $type = null,
    mixed $name = null,
    mixed $value = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $options = null,
    ...$args
): \AmisSchema\Widget\Display\Images
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $defaultImage !== null && $args['defaultImage'] = $defaultImage;
    $source !== null && $args['source'] = $source;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $src !== null && $args['src'] = $src;
    $originalSrc !== null && $args['originalSrc'] = $originalSrc;
    $enlargeAble !== null && $args['enlargeAble'] = $enlargeAble;
    $enlargeTitle !== null && $args['enlargeTitle'] = $enlargeTitle;
    $enlargeCaption !== null && $args['enlargeCaption'] = $enlargeCaption;
    $enlargeWithGallary !== null && $args['enlargeWithGallary'] = $enlargeWithGallary;
    $thumbMode !== null && $args['thumbMode'] = $thumbMode;
    $thumbRatio !== null && $args['thumbRatio'] = $thumbRatio;
    $showToolbar !== null && $args['showToolbar'] = $showToolbar;
    $listClassName !== null && $args['listClassName'] = $listClassName;
    $itemClassName !== null && $args['itemClassName'] = $itemClassName;
    $options !== null && $args['options'] = $options;
    return \AmisSchema\Widget\Display\Images::make($args);
}

/**
 * 创建 Json 组件
 * 
 * @param string $type 如果在 Table、Card 和 List 中，为"json"；在 Form 中用作静态展示，为"static-json"，默认 'json'
 * @param string $name 字段名，映射同名变量，默认 ''
 * @param array|string $value json 值，如果是 string 会自动 parse，默认 null
 * @param string $placeholder 占位文本，默认 '-'
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Json
 */
function AmisJson(
    mixed $type = null,
    mixed $name = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $source = null,
    mixed $levelExpand = null,
    mixed $jsonTheme = null,
    mixed $mutable = null,
    mixed $displayDataTypes = null,
    mixed $ellipsisThreshold = null,
    ...$args
): \AmisSchema\Widget\Display\Json
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $levelExpand !== null && $args['levelExpand'] = $levelExpand;
    $jsonTheme !== null && $args['jsonTheme'] = $jsonTheme;
    $mutable !== null && $args['mutable'] = $mutable;
    $displayDataTypes !== null && $args['displayDataTypes'] = $displayDataTypes;
    $ellipsisThreshold !== null && $args['ellipsisThreshold'] = $ellipsisThreshold;
    return \AmisSchema\Widget\Display\Json::make($args);
}

/**
 * 创建 Link 组件
 * 
 * @param string $type 如果在 Table、Card 和 List 中，为"link"；在 Form 中用作静态展示，为"static-link"，默认 'link'
 * @param string $title a 标签的 title，默认 ''
 * @param string $body 标签内文本，默认 ''
 * @param string $icon 超链接图标，以加强显示，默认 ''
 * @param bool $disabled 禁用超链接，默认 false
 * @param string $className CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $href 链接地址，默认 ''
 * @param bool $blank 是否在新标签页打开，默认 false
 * @param string $htmlTarget a 标签的 target，优先于 blank 属性，默认 ''
 * @param string $rightIcon 右侧图标，默认 ''
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Link
 */
function AmisLink(
    mixed $type = null,
    mixed $title = null,
    mixed $body = null,
    mixed $icon = null,
    mixed $disabled = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $href = null,
    mixed $blank = null,
    mixed $htmlTarget = null,
    mixed $rightIcon = null,
    ...$args
): \AmisSchema\Widget\Display\Link
{
    $type !== null && $args['type'] = $type;
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $icon !== null && $args['icon'] = $icon;
    $disabled !== null && $args['disabled'] = $disabled;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $href !== null && $args['href'] = $href;
    $blank !== null && $args['blank'] = $blank;
    $htmlTarget !== null && $args['htmlTarget'] = $htmlTarget;
    $rightIcon !== null && $args['rightIcon'] = $rightIcon;
    return \AmisSchema\Widget\Display\Link::make($args);
}

/**
 * 创建 ListWidget 组件
 * 
 * @param string $type 指定为列表展示，默认 'list'
 * @param string $title 标题，默认 ''
 * @param string $placeholder 当没数据的时候的文字提示，默认 '暂无数据'
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\ListWidget
 */
function AmisList(
    mixed $type = null,
    mixed $title = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $innerClassName = null,
    ...$args
): \AmisSchema\Widget\Display\ListWidget
{
    $type !== null && $args['type'] = $type;
    $title !== null && $args['title'] = $title;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $selectable !== null && $args['selectable'] = $selectable;
    $multiple !== null && $args['multiple'] = $multiple;
    $headerClassName !== null && $args['headerClassName'] = $headerClassName;
    $footerClassName !== null && $args['footerClassName'] = $footerClassName;
    $checkOnItemClick !== null && $args['checkOnItemClick'] = $checkOnItemClick;
    $itemAction !== null && $args['itemAction'] = $itemAction;
    $innerClassName !== null && $args['innerClassName'] = $innerClassName;
    return \AmisSchema\Widget\Display\ListWidget::make($args);
}

/**
 * 创建 Log 组件
 * 
 * @param string $type 指定为 Log 渲染器，默认 'log'
 * @param string $placeholder 加载中的文字，默认 ''
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Log
 */
function AmisLog(
    mixed $type = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $operation = null,
    ...$args
): \AmisSchema\Widget\Display\Log
{
    $type !== null && $args['type'] = $type;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $height !== null && $args['height'] = $height;
    $autoScroll !== null && $args['autoScroll'] = $autoScroll;
    $disableColor !== null && $args['disableColor'] = $disableColor;
    $encoding !== null && $args['encoding'] = $encoding;
    $source !== null && $args['source'] = $source;
    $credentials !== null && $args['credentials'] = $credentials;
    $rowHeight !== null && $args['rowHeight'] = $rowHeight;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $operation !== null && $args['operation'] = $operation;
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
 * @param mixed ...$args 其他参数
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
    mixed $itemSchema = null,
    ...$args
): \AmisSchema\Widget\Display\Mapping
{
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $map !== null && $args['map'] = $map;
    $source !== null && $args['source'] = $source;
    $valueField !== null && $args['valueField'] = $valueField;
    $labelField !== null && $args['labelField'] = $labelField;
    $itemSchema !== null && $args['itemSchema'] = $itemSchema;
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
 * @param string|array|\AmisSchema\Definition\API $src 外部markdown文件地址(since 1.6.5)，默认 ''
 * @param bool $html 是否支持html标签(since 1.8.1)，默认 false
 * @param bool $linkify 是否自动识别链接(since 1.8.1)，默认 true
 * @param bool $breaks 是否回车就是换行(since 1.8.1)，默认 false
 * @param mixed ...$args 其他参数
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
    mixed $breaks = null,
    ...$args
): \AmisSchema\Widget\Display\Markdown
{
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $src !== null && $args['src'] = $src;
    $html !== null && $args['html'] = $html;
    $linkify !== null && $args['linkify'] = $linkify;
    $breaks !== null && $args['breaks'] = $breaks;
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
 * @param mixed ...$args 其他参数
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
    mixed $affix = null,
    ...$args
): \AmisSchema\Widget\Display\Number
{
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $kilobitSeparator !== null && $args['kilobitSeparator'] = $kilobitSeparator;
    $precision !== null && $args['precision'] = $precision;
    $percent !== null && $args['percent'] = $percent;
    $prefix !== null && $args['prefix'] = $prefix;
    $affix !== null && $args['affix'] = $affix;
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
 * @param string|array|\AmisSchema\Definition\API $src 文档地址，默认 ''
 * @param bool $enableVar 是否开启变量替换功能，默认 true
 * @param array $wordOptions Word渲染配置选项，默认 []
 * @param array $excelOptions Excel渲染配置选项(since 6.3.0)，默认 []
 * @param mixed ...$args 其他参数
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
    mixed $excelOptions = null,
    ...$args
): \AmisSchema\Widget\Display\OfficeViewer
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $loading !== null && $args['loading'] = $loading;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $src !== null && $args['src'] = $src;
    $enableVar !== null && $args['enableVar'] = $enableVar;
    $wordOptions !== null && $args['wordOptions'] = $wordOptions;
    $excelOptions !== null && $args['excelOptions'] = $excelOptions;
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
 * @param string|array|\AmisSchema\Definition\API $src PDF文档地址，默认 ''
 * @param int $width 宽度，默认 null
 * @param int $height 高度，默认 null
 * @param string $background PDF背景色，默认 '#fff'
 * @param mixed ...$args 其他参数
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
    mixed $background = null,
    ...$args
): \AmisSchema\Widget\Display\PDFViewer
{
    $name !== null && $args['name'] = $name;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $src !== null && $args['src'] = $src;
    $width !== null && $args['width'] = $width;
    $height !== null && $args['height'] = $height;
    $background !== null && $args['background'] = $background;
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
 * @param mixed ...$args 其他参数
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
    mixed $gapPosition = null,
    ...$args
): \AmisSchema\Widget\Display\Progress
{
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $mode !== null && $args['mode'] = $mode;
    $showLabel !== null && $args['showLabel'] = $showLabel;
    $stripe !== null && $args['stripe'] = $stripe;
    $animate !== null && $args['animate'] = $animate;
    $map !== null && $args['map'] = $map;
    $showThresholdText !== null && $args['showThresholdText'] = $showThresholdText;
    $valueTpl !== null && $args['valueTpl'] = $valueTpl;
    $strokeWidth !== null && $args['strokeWidth'] = $strokeWidth;
    $gapDegree !== null && $args['gapDegree'] = $gapDegree;
    $gapPosition !== null && $args['gapPosition'] = $gapPosition;
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
 * @param mixed ...$args 其他参数
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
    mixed $contentStyle = null,
    ...$args
): \AmisSchema\Widget\Display\Property
{
    $title !== null && $args['title'] = $title;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $mode !== null && $args['mode'] = $mode;
    $separator !== null && $args['separator'] = $separator;
    $column !== null && $args['column'] = $column;
    $labelStyle !== null && $args['labelStyle'] = $labelStyle;
    $contentStyle !== null && $args['contentStyle'] = $contentStyle;
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
 * @param mixed ...$args 其他参数
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
    mixed $foregroundColor = null,
    ...$args
): \AmisSchema\Widget\Display\QRCode
{
    $value !== null && $args['value'] = $value;
    $level !== null && $args['level'] = $level;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $qrcodeClassName !== null && $args['qrcodeClassName'] = $qrcodeClassName;
    $codeSize !== null && $args['codeSize'] = $codeSize;
    $backgroundColor !== null && $args['backgroundColor'] = $backgroundColor;
    $foregroundColor !== null && $args['foregroundColor'] = $foregroundColor;
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
 * @param mixed ...$args 其他参数
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
    mixed $shape = null,
    ...$args
): \AmisSchema\Widget\Display\Remark
{
    $icon !== null && $args['icon'] = $icon;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $content !== null && $args['content'] = $content;
    $placement !== null && $args['placement'] = $placement;
    $trigger !== null && $args['trigger'] = $trigger;
    $shape !== null && $args['shape'] = $shape;
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
 * @param mixed ...$args 其他参数
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
    mixed $clearAndSubmit = null,
    ...$args
): \AmisSchema\Widget\Display\SearchBox
{
    $disabled !== null && $args['disabled'] = $disabled;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $loading !== null && $args['loading'] = $loading;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $mini !== null && $args['mini'] = $mini;
    $searchImediately !== null && $args['searchImediately'] = $searchImediately;
    $clearAndSubmit !== null && $args['clearAndSubmit'] = $clearAndSubmit;
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
 * @param mixed ...$args 其他参数
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
    mixed $path = null,
    ...$args
): \AmisSchema\Widget\Display\Shape
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $shapeType !== null && $args['shapeType'] = $shapeType;
    $color !== null && $args['color'] = $color;
    $width !== null && $args['width'] = $width;
    $height !== null && $args['height'] = $height;
    $radius !== null && $args['radius'] = $radius;
    $borderColor !== null && $args['borderColor'] = $borderColor;
    $borderWidth !== null && $args['borderWidth'] = $borderWidth;
    $borderStyle !== null && $args['borderStyle'] = $borderStyle;
    $path !== null && $args['path'] = $path;
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
 * @param mixed ...$args 其他参数
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
    mixed $clickAction = null,
    ...$args
): \AmisSchema\Widget\Display\Sparkline
{
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $width !== null && $args['width'] = $width;
    $height !== null && $args['height'] = $height;
    $clickAction !== null && $args['clickAction'] = $clickAction;
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
 * @param mixed ...$args 其他参数
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
    mixed $labelMap = null,
    ...$args
): \AmisSchema\Widget\Display\Status
{
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $map !== null && $args['map'] = $map;
    $labelMap !== null && $args['labelMap'] = $labelMap;
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
 * @param string|array|\AmisSchema\Definition\API $source 数据源，支持API或数据映射(since 1.9.1)，默认 ''
 * @param string $mode 步骤条模式，horizontal/vertical/simple，默认 'horizontal'
 * @param string $labelPlacement 标签放置位置，horizontal/vertical，默认 'horizontal'
 * @param bool $progressDot 点状步骤条，默认 false
 * @param mixed ...$args 其他参数
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
    mixed $progressDot = null,
    ...$args
): \AmisSchema\Widget\Display\Steps
{
    $name !== null && $args['name'] = $name;
    $value !== null && $args['value'] = $value;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $steps !== null && $args['steps'] = $steps;
    $source !== null && $args['source'] = $source;
    $mode !== null && $args['mode'] = $mode;
    $labelPlacement !== null && $args['labelPlacement'] = $labelPlacement;
    $progressDot !== null && $args['progressDot'] = $progressDot;
    return \AmisSchema\Widget\Display\Steps::make($args);
}

/**
 * 创建 Table 组件
 * 
 * @param string $type 指定为 Table 渲染器
 * @param string $title 标题
 * @param string $placeholder 当没数据的时候的文字提示
 * @param string $className 外层 CSS 类名
 * @param mixed $style 
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
 * @param bool|string|array|\AmisSchema\Definition\API $reUseRow 默认当 API 返回数据与当前一致时不会触发表格行重渲染，为 false 总会触发重渲染，尽量复用返回数据中 id 一致的对象
 * @param string $persistKey 用于配置列排序、列显示的本地缓存所使用的 key
 * @param string $prefixRowClassName 顶部总结行 CSS 类名
 * @param string $prefixRowClassNameExpr 顶部总结行 CSS 类名表达式
 * @param string $affixRowClassName 底部总结行 CSS 类名
 * @param string $affixRowClassNameExpr 底部总结行 CSS 类名表达式
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Table
 */
function AmisTable(
    mixed $type = null,
    mixed $title = null,
    mixed $placeholder = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $affixRowClassNameExpr = null,
    ...$args
): \AmisSchema\Widget\Display\Table
{
    $type !== null && $args['type'] = $type;
    $title !== null && $args['title'] = $title;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $deferApi !== null && $args['deferApi'] = $deferApi;
    $affixHeader !== null && $args['affixHeader'] = $affixHeader;
    $affixFooter !== null && $args['affixFooter'] = $affixFooter;
    $columnsTogglable !== null && $args['columnsTogglable'] = $columnsTogglable;
    $showIndex !== null && $args['showIndex'] = $showIndex;
    $tableClassName !== null && $args['tableClassName'] = $tableClassName;
    $headerClassName !== null && $args['headerClassName'] = $headerClassName;
    $footerClassName !== null && $args['footerClassName'] = $footerClassName;
    $toolbarClassName !== null && $args['toolbarClassName'] = $toolbarClassName;
    $columns !== null && $args['columns'] = $columns;
    $combineNum !== null && $args['combineNum'] = $combineNum;
    $combineFromIndex !== null && $args['combineFromIndex'] = $combineFromIndex;
    $itemActions !== null && $args['itemActions'] = $itemActions;
    $itemCheckableOn !== null && $args['itemCheckableOn'] = $itemCheckableOn;
    $itemDraggableOn !== null && $args['itemDraggableOn'] = $itemDraggableOn;
    $checkOnItemClick !== null && $args['checkOnItemClick'] = $checkOnItemClick;
    $rowClassName !== null && $args['rowClassName'] = $rowClassName;
    $rowClassNameExpr !== null && $args['rowClassNameExpr'] = $rowClassNameExpr;
    $prefixRow !== null && $args['prefixRow'] = $prefixRow;
    $affixRow !== null && $args['affixRow'] = $affixRow;
    $itemBadge !== null && $args['itemBadge'] = $itemBadge;
    $autoFillHeight !== null && $args['autoFillHeight'] = $autoFillHeight;
    $resizable !== null && $args['resizable'] = $resizable;
    $selectable !== null && $args['selectable'] = $selectable;
    $multiple !== null && $args['multiple'] = $multiple;
    $lazyRenderAfter !== null && $args['lazyRenderAfter'] = $lazyRenderAfter;
    $tableLayout !== null && $args['tableLayout'] = $tableLayout;
    $childrenColumnName !== null && $args['childrenColumnName'] = $childrenColumnName;
    $expandConfig !== null && $args['expandConfig'] = $expandConfig;
    $footable !== null && $args['footable'] = $footable;
    $itemAction !== null && $args['itemAction'] = $itemAction;
    $canAccessSuperData !== null && $args['canAccessSuperData'] = $canAccessSuperData;
    $reUseRow !== null && $args['reUseRow'] = $reUseRow;
    $persistKey !== null && $args['persistKey'] = $persistKey;
    $prefixRowClassName !== null && $args['prefixRowClassName'] = $prefixRowClassName;
    $prefixRowClassNameExpr !== null && $args['prefixRowClassNameExpr'] = $prefixRowClassNameExpr;
    $affixRowClassName !== null && $args['affixRowClassName'] = $affixRowClassName;
    $affixRowClassNameExpr !== null && $args['affixRowClassNameExpr'] = $affixRowClassNameExpr;
    return \AmisSchema\Widget\Display\Table::make($args);
}

/**
 * 创建 Table2 组件
 * 
 * @param string $type 指定为 table2 渲染器
 * @param string $title 标题
 * @param string|array $placeholder 当没数据的时候的文字提示
 * @param string $size 表格尺寸
 * @param string $className CSS类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\Table2
 */
function AmisTable2(
    mixed $type = null,
    mixed $title = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $canAccessSuperData = null,
    ...$args
): \AmisSchema\Widget\Display\Table2
{
    $type !== null && $args['type'] = $type;
    $title !== null && $args['title'] = $title;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $loading !== null && $args['loading'] = $loading;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $sticky !== null && $args['sticky'] = $sticky;
    $footer !== null && $args['footer'] = $footer;
    $columnsTogglable !== null && $args['columnsTogglable'] = $columnsTogglable;
    $rowSelection !== null && $args['rowSelection'] = $rowSelection;
    $rowClassNameExpr !== null && $args['rowClassNameExpr'] = $rowClassNameExpr;
    $expandable !== null && $args['expandable'] = $expandable;
    $lineHeight !== null && $args['lineHeight'] = $lineHeight;
    $footerClassName !== null && $args['footerClassName'] = $footerClassName;
    $toolbarClassName !== null && $args['toolbarClassName'] = $toolbarClassName;
    $columns !== null && $args['columns'] = $columns;
    $combineNum !== null && $args['combineNum'] = $combineNum;
    $itemActions !== null && $args['itemActions'] = $itemActions;
    $itemCheckableOn !== null && $args['itemCheckableOn'] = $itemCheckableOn;
    $itemDraggableOn !== null && $args['itemDraggableOn'] = $itemDraggableOn;
    $checkOnItemClick !== null && $args['checkOnItemClick'] = $checkOnItemClick;
    $rowClassName !== null && $args['rowClassName'] = $rowClassName;
    $prefixRow !== null && $args['prefixRow'] = $prefixRow;
    $affixRow !== null && $args['affixRow'] = $affixRow;
    $itemBadge !== null && $args['itemBadge'] = $itemBadge;
    $autoFillHeight !== null && $args['autoFillHeight'] = $autoFillHeight;
    $lazyRenderAfter !== null && $args['lazyRenderAfter'] = $lazyRenderAfter;
    $bordered !== null && $args['bordered'] = $bordered;
    $scroll !== null && $args['scroll'] = $scroll;
    $resizable !== null && $args['resizable'] = $resizable;
    $draggable !== null && $args['draggable'] = $draggable;
    $headSummary !== null && $args['headSummary'] = $headSummary;
    $footSummary !== null && $args['footSummary'] = $footSummary;
    $childrenColumnName !== null && $args['childrenColumnName'] = $childrenColumnName;
    $indentSize !== null && $args['indentSize'] = $indentSize;
    $selectable !== null && $args['selectable'] = $selectable;
    $multiple !== null && $args['multiple'] = $multiple;
    $maxKeepItemSelectionLength !== null && $args['maxKeepItemSelectionLength'] = $maxKeepItemSelectionLength;
    $primaryField !== null && $args['primaryField'] = $primaryField;
    $keyField !== null && $args['keyField'] = $keyField;
    $quickSaveApi !== null && $args['quickSaveApi'] = $quickSaveApi;
    $quickSaveItemApi !== null && $args['quickSaveItemApi'] = $quickSaveItemApi;
    $canAccessSuperData !== null && $args['canAccessSuperData'] = $canAccessSuperData;
    return \AmisSchema\Widget\Display\Table2::make($args);
}

/**
 * 创建 TableView 组件
 * 
 * @param string $type 指定为 table-view 渲染器
 * @param bool $visible 是否显示
 * @param string $className 外层 CSS 类名
 * @param mixed $style 
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Display\TableView
 */
function AmisTableView(
    mixed $type = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $hiddenOn = null,
    ...$args
): \AmisSchema\Widget\Display\TableView
{
    $type !== null && $args['type'] = $type;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $width !== null && $args['width'] = $width;
    $padding !== null && $args['padding'] = $padding;
    $border !== null && $args['border'] = $border;
    $borderColor !== null && $args['borderColor'] = $borderColor;
    $trs !== null && $args['trs'] = $trs;
    $caption !== null && $args['caption'] = $caption;
    $captionSide !== null && $args['captionSide'] = $captionSide;
    $cols !== null && $args['cols'] = $cols;
    $id !== null && $args['id'] = $id;
    $static !== null && $args['static'] = $static;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
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
 * @param mixed ...$args 其他参数
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
    mixed $closable = null,
    ...$args
): \AmisSchema\Widget\Display\Tag
{
    $label !== null && $args['label'] = $label;
    $icon !== null && $args['icon'] = $icon;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $displayMode !== null && $args['displayMode'] = $displayMode;
    $color !== null && $args['color'] = $color;
    $closable !== null && $args['closable'] = $closable;
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
 * @param string|array|\AmisSchema\Definition\API $source 设置远程数据源
 * @param string $mode 展示模式：left-左侧显示、right-右侧显示、alternate-交替显示
 * @param string $direction 时间轴方向：vertical-垂直、horizontal-水平
 * @param bool $reverse 是否反向展示时间轴
 * @param string $itemTitleClassName 节点标题的类名
 * @param string $itemDetailClassName 节点详情的类名
 * @param mixed ...$args 其他参数
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
    mixed $itemDetailClassName = null,
    ...$args
): \AmisSchema\Widget\Display\Timeline
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $source !== null && $args['source'] = $source;
    $mode !== null && $args['mode'] = $mode;
    $direction !== null && $args['direction'] = $direction;
    $reverse !== null && $args['reverse'] = $reverse;
    $itemTitleClassName !== null && $args['itemTitleClassName'] = $itemTitleClassName;
    $itemDetailClassName !== null && $args['itemDetailClassName'] = $itemDetailClassName;
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
 * @param mixed ...$args 其他参数
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
    mixed $showNativeTitle = null,
    ...$args
): \AmisSchema\Widget\Display\Tpl
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $tpl !== null && $args['tpl'] = $tpl;
    $showNativeTitle !== null && $args['showNativeTitle'] = $showNativeTitle;
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
 * @param mixed ...$args 其他参数
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
    mixed $stopOnNextFrame = null,
    ...$args
): \AmisSchema\Widget\Display\Video
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $src !== null && $args['src'] = $src;
    $isLive !== null && $args['isLive'] = $isLive;
    $videoType !== null && $args['videoType'] = $videoType;
    $poster !== null && $args['poster'] = $poster;
    $muted !== null && $args['muted'] = $muted;
    $loop !== null && $args['loop'] = $loop;
    $autoPlay !== null && $args['autoPlay'] = $autoPlay;
    $rates !== null && $args['rates'] = $rates;
    $frames !== null && $args['frames'] = $frames;
    $jumpBufferDuration !== null && $args['jumpBufferDuration'] = $jumpBufferDuration;
    $stopOnNextFrame !== null && $args['stopOnNextFrame'] = $stopOnNextFrame;
    return \AmisSchema\Widget\Display\Video::make($args);
}

/**
 * 创建 ButtonGroupSelect 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\ButtonGroupSelect
 */
function AmisButtonGroupSelect(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $resetValue = null,
    ...$args
): \AmisSchema\Widget\Input\ButtonGroupSelect
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $vertical !== null && $args['vertical'] = $vertical;
    $tiled !== null && $args['tiled'] = $tiled;
    $btnLevel !== null && $args['btnLevel'] = $btnLevel;
    $btnActiveLevel !== null && $args['btnActiveLevel'] = $btnActiveLevel;
    $clearable !== null && $args['clearable'] = $clearable;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\ButtonGroupSelect::make($args);
}

/**
 * 创建 ButtonToolbar 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\ButtonToolbar
 */
function AmisButtonToolbar(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $buttons = null,
    ...$args
): \AmisSchema\Widget\Input\ButtonToolbar
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $buttons !== null && $args['buttons'] = $buttons;
    return \AmisSchema\Widget\Input\ButtonToolbar::make($args);
}

/**
 * 创建 ChainedSelect 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\ChainedSelect
 */
function AmisChainedSelect(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\ChainedSelect
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    return \AmisSchema\Widget\Input\ChainedSelect::make($args);
}

/**
 * 创建 ChartRadios 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\ChartRadios
 */
function AmisChartRadios(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $chartValueField = null,
    ...$args
): \AmisSchema\Widget\Input\ChartRadios
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $config !== null && $args['config'] = $config;
    $showTooltipOnHighlight !== null && $args['showTooltipOnHighlight'] = $showTooltipOnHighlight;
    $chartValueField !== null && $args['chartValueField'] = $chartValueField;
    return \AmisSchema\Widget\Input\ChartRadios::make($args);
}

/**
 * 创建 Checkbox 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Checkbox
 */
function AmisCheckbox(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $optionType = null,
    ...$args
): \AmisSchema\Widget\Input\Checkbox
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $option !== null && $args['option'] = $option;
    $trueValue !== null && $args['trueValue'] = $trueValue;
    $falseValue !== null && $args['falseValue'] = $falseValue;
    $optionType !== null && $args['optionType'] = $optionType;
    return \AmisSchema\Widget\Input\Checkbox::make($args);
}

/**
 * 创建 Checkboxes 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Checkboxes
 */
function AmisCheckboxes(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $itemClassName = null,
    ...$args
): \AmisSchema\Widget\Input\Checkboxes
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $columnsCount !== null && $args['columnsCount'] = $columnsCount;
    $menuTpl !== null && $args['menuTpl'] = $menuTpl;
    $optionType !== null && $args['optionType'] = $optionType;
    $itemClassName !== null && $args['itemClassName'] = $itemClassName;
    return \AmisSchema\Widget\Input\Checkboxes::make($args);
}

/**
 * 创建 Combo 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Combo
 */
function AmisCombo(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $itemsWrapperClassName = null,
    ...$args
): \AmisSchema\Widget\Input\Combo
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $formClassName !== null && $args['formClassName'] = $formClassName;
    $items !== null && $args['items'] = $items;
    $noBorder !== null && $args['noBorder'] = $noBorder;
    $scaffold !== null && $args['scaffold'] = $scaffold;
    $multiple !== null && $args['multiple'] = $multiple;
    $perPage !== null && $args['perPage'] = $perPage;
    $multiLine !== null && $args['multiLine'] = $multiLine;
    $minLength !== null && $args['minLength'] = $minLength;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $flat !== null && $args['flat'] = $flat;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $addable !== null && $args['addable'] = $addable;
    $addAtTop !== null && $args['addAtTop'] = $addAtTop;
    $addButtonText !== null && $args['addButtonText'] = $addButtonText;
    $addButtonClassName !== null && $args['addButtonClassName'] = $addButtonClassName;
    $addBtn !== null && $args['addBtn'] = $addBtn;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $deleteConfirmText !== null && $args['deleteConfirmText'] = $deleteConfirmText;
    $deleteBtn !== null && $args['deleteBtn'] = $deleteBtn;
    $draggable !== null && $args['draggable'] = $draggable;
    $draggableTip !== null && $args['draggableTip'] = $draggableTip;
    $nullable !== null && $args['nullable'] = $nullable;
    $justify !== null && $args['justify'] = $justify;
    $syncFields !== null && $args['syncFields'] = $syncFields;
    $typeSwitchable !== null && $args['typeSwitchable'] = $typeSwitchable;
    $tabsMode !== null && $args['tabsMode'] = $tabsMode;
    $tabsStyle !== null && $args['tabsStyle'] = $tabsStyle;
    $tabsLabelTpl !== null && $args['tabsLabelTpl'] = $tabsLabelTpl;
    $canAccessSuperData !== null && $args['canAccessSuperData'] = $canAccessSuperData;
    $lazyLoad !== null && $args['lazyLoad'] = $lazyLoad;
    $subFormMode !== null && $args['subFormMode'] = $subFormMode;
    $itemClassName !== null && $args['itemClassName'] = $itemClassName;
    $itemsWrapperClassName !== null && $args['itemsWrapperClassName'] = $itemsWrapperClassName;
    return \AmisSchema\Widget\Input\Combo::make($args);
}

/**
 * 创建 ConditionBuilder 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $title 设置弹窗配置的顶部标题
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param string|array|\AmisSchema\Definition\API $source 设置通过远程拉取配置项
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\ConditionBuilder
 */
function AmisConditionBuilder(
    mixed $type = null,
    mixed $name = null,
    mixed $title = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $formulaForIf = null,
    ...$args
): \AmisSchema\Widget\Input\ConditionBuilder
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $title !== null && $args['title'] = $title;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $fieldClassName !== null && $args['fieldClassName'] = $fieldClassName;
    $source !== null && $args['source'] = $source;
    $embed !== null && $args['embed'] = $embed;
    $fields !== null && $args['fields'] = $fields;
    $showANDOR !== null && $args['showANDOR'] = $showANDOR;
    $showNot !== null && $args['showNot'] = $showNot;
    $draggable !== null && $args['draggable'] = $draggable;
    $searchable !== null && $args['searchable'] = $searchable;
    $selectMode !== null && $args['selectMode'] = $selectMode;
    $addBtnVisibleOn !== null && $args['addBtnVisibleOn'] = $addBtnVisibleOn;
    $addGroupBtnVisibleOn !== null && $args['addGroupBtnVisibleOn'] = $addGroupBtnVisibleOn;
    $formula !== null && $args['formula'] = $formula;
    $showIf !== null && $args['showIf'] = $showIf;
    $formulaForIf !== null && $args['formulaForIf'] = $formulaForIf;
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
 * @param mixed ...$args 其他参数
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
    mixed $description = null,
    ...$args
): \AmisSchema\Widget\Input\Control
{
    $label !== null && $args['label'] = $label;
    $body !== null && $args['body'] = $body;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $description !== null && $args['description'] = $description;
    return \AmisSchema\Widget\Input\Control::make($args);
}

/**
 * 创建 DiffEditor 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\DiffEditor
 */
function AmisDiffEditor(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $options = null,
    ...$args
): \AmisSchema\Widget\Input\DiffEditor
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $language !== null && $args['language'] = $language;
    $diffValue !== null && $args['diffValue'] = $diffValue;
    $options !== null && $args['options'] = $options;
    return \AmisSchema\Widget\Input\DiffEditor::make($args);
}

/**
 * 创建 Editor 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Editor
 */
function AmisEditor(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $editorDidMount = null,
    ...$args
): \AmisSchema\Widget\Input\Editor
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $language !== null && $args['language'] = $language;
    $allowFullscreen !== null && $args['allowFullscreen'] = $allowFullscreen;
    $options !== null && $args['options'] = $options;
    $editorDidMount !== null && $args['editorDidMount'] = $editorDidMount;
    return \AmisSchema\Widget\Input\Editor::make($args);
}

/**
 * 创建 FieldSet 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string|array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $title 标题
 * @param string $label 设置表单项标签。
 * @param array|\AmisSchema\Widget\Input\FormItem[] $body 表单项集合
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\FieldSet
 */
function AmisFieldSet(
    mixed $type = null,
    mixed $name = null,
    mixed $title = null,
    mixed $label = null,
    mixed $body = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $titlePosition = null,
    ...$args
): \AmisSchema\Widget\Input\FieldSet
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $title !== null && $args['title'] = $title;
    $label !== null && $args['label'] = $label;
    $body !== null && $args['body'] = $body;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $headingClassName !== null && $args['headingClassName'] = $headingClassName;
    $bodyClassName !== null && $args['bodyClassName'] = $bodyClassName;
    $collapsable !== null && $args['collapsable'] = $collapsable;
    $collapsed !== null && $args['collapsed'] = $collapsed;
    $collapseTitle !== null && $args['collapseTitle'] = $collapseTitle;
    $titlePosition !== null && $args['titlePosition'] = $titlePosition;
    return \AmisSchema\Widget\Input\FieldSet::make($args);
}

/**
 * 创建 Form 组件
 * 
 * @param string $name 设置表单名称，方便其他组件通信。
 * @param string $title 设置表单标题。
 * @param \AmisSchema\Widget\Input\FormItem[]|\AmisSchema\Widget\Widget[] $body 设置表单项集合。
 * @param string|array|\AmisSchema\Definition\API $api 设置表单提交接口。
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
 * @param string|array|\AmisSchema\Definition\API $initApi 设置初始数据接口。
 * @param int $interval 设置刷新时间间隔（毫秒）。
 * @param bool $silentPolling 设置配置刷新时是否静默。
 * @param string $stopAutoRefreshWhen 设置停止自动刷新的条件。
 * @param string|array|\AmisSchema\Definition\API $initAsyncApi 设置异步初始数据接口。
 * @param bool $initFetch 设置是否初始拉取数据。
 * @param string $initFetchOn 设置初始是否拉取数据的表达式。
 * @param string $initFinishedField 设置异步请求完成后的字段名。
 * @param int $initCheckInterval 设置异步请求轮询间隔。
 * @param string|array|\AmisSchema\Definition\API $asyncApi 设置设置此属性后，表单提交发送保存接口后，还会继续轮询请求该接口，直到返回 finished 属性为 true 才 结束。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Form
 */
function AmisForm(
    mixed $name = null,
    mixed $title = null,
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
    mixed $inheritData = null,
    ...$args
): \AmisSchema\Widget\Input\Form
{
    $name !== null && $args['name'] = $name;
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $api !== null && $args['api'] = $api;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $reload !== null && $args['reload'] = $reload;
    $redirect !== null && $args['redirect'] = $redirect;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $mode !== null && $args['mode'] = $mode;
    $actions !== null && $args['actions'] = $actions;
    $wrapWithPanel !== null && $args['wrapWithPanel'] = $wrapWithPanel;
    $panelClassName !== null && $args['panelClassName'] = $panelClassName;
    $initApi !== null && $args['initApi'] = $initApi;
    $interval !== null && $args['interval'] = $interval;
    $silentPolling !== null && $args['silentPolling'] = $silentPolling;
    $stopAutoRefreshWhen !== null && $args['stopAutoRefreshWhen'] = $stopAutoRefreshWhen;
    $initAsyncApi !== null && $args['initAsyncApi'] = $initAsyncApi;
    $initFetch !== null && $args['initFetch'] = $initFetch;
    $initFetchOn !== null && $args['initFetchOn'] = $initFetchOn;
    $initFinishedField !== null && $args['initFinishedField'] = $initFinishedField;
    $initCheckInterval !== null && $args['initCheckInterval'] = $initCheckInterval;
    $asyncApi !== null && $args['asyncApi'] = $asyncApi;
    $checkInterval !== null && $args['checkInterval'] = $checkInterval;
    $finishedField !== null && $args['finishedField'] = $finishedField;
    $submitText !== null && $args['submitText'] = $submitText;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $canAccessSuperData !== null && $args['canAccessSuperData'] = $canAccessSuperData;
    $persistData !== null && $args['persistData'] = $persistData;
    $clearPersistDataAfterSubmit !== null && $args['clearPersistDataAfterSubmit'] = $clearPersistDataAfterSubmit;
    $preventEnterSubmit !== null && $args['preventEnterSubmit'] = $preventEnterSubmit;
    $trimValues !== null && $args['trimValues'] = $trimValues;
    $promptPageLeave !== null && $args['promptPageLeave'] = $promptPageLeave;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $submitOnInit !== null && $args['submitOnInit'] = $submitOnInit;
    $resetAfterSubmit !== null && $args['resetAfterSubmit'] = $resetAfterSubmit;
    $primaryField !== null && $args['primaryField'] = $primaryField;
    $target !== null && $args['target'] = $target;
    $columnCount !== null && $args['columnCount'] = $columnCount;
    $inherit !== null && $args['inherit'] = $inherit;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $debug !== null && $args['debug'] = $debug;
    $messagesFetchSuccess !== null && $args['messagesFetchSuccess'] = $messagesFetchSuccess;
    $messagesFetchFailed !== null && $args['messagesFetchFailed'] = $messagesFetchFailed;
    $messagesSaveSuccess !== null && $args['messagesSaveSuccess'] = $messagesSaveSuccess;
    $messagesSaveFailed !== null && $args['messagesSaveFailed'] = $messagesSaveFailed;
    $messagesValidateFailed !== null && $args['messagesValidateFailed'] = $messagesValidateFailed;
    $persistDataKeys !== null && $args['persistDataKeys'] = $persistDataKeys;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $closeDialogOnSubmit !== null && $args['closeDialogOnSubmit'] = $closeDialogOnSubmit;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $inheritData !== null && $args['inheritData'] = $inheritData;
    return \AmisSchema\Widget\Input\Form::make($args);
}

/**
 * 创建 FormItem 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\FormItem
 */
function AmisFormItem(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\FormItem
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\FormItem::make($args);
}

/**
 * 创建 Formula 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Formula
 */
function AmisFormula(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $id = null,
    ...$args
): \AmisSchema\Widget\Input\Formula
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $formula !== null && $args['formula'] = $formula;
    $condition !== null && $args['condition'] = $condition;
    $initSet !== null && $args['initSet'] = $initSet;
    $autoSet !== null && $args['autoSet'] = $autoSet;
    $id !== null && $args['id'] = $id;
    return \AmisSchema\Widget\Input\Formula::make($args);
}

/**
 * 创建 Group 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label group 的标签
 * @param array|\AmisSchema\Widget\Widget|\AmisSchema\Widget\Widget[] $body 表单项集合
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Group
 */
function AmisGroup(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $body = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $direction = null,
    ...$args
): \AmisSchema\Widget\Input\Group
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $body !== null && $args['body'] = $body;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $gap !== null && $args['gap'] = $gap;
    $direction !== null && $args['direction'] = $direction;
    return \AmisSchema\Widget\Input\Group::make($args);
}

/**
 * 创建 Hidden 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Hidden
 */
function AmisHidden(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\Hidden
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\Hidden::make($args);
}

/**
 * 创建 InputArray 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputArray
 */
function AmisInputArray(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $scaffold = null,
    ...$args
): \AmisSchema\Widget\Input\InputArray
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $items !== null && $args['items'] = $items;
    $addable !== null && $args['addable'] = $addable;
    $removable !== null && $args['removable'] = $removable;
    $draggable !== null && $args['draggable'] = $draggable;
    $draggableTip !== null && $args['draggableTip'] = $draggableTip;
    $addButtonText !== null && $args['addButtonText'] = $addButtonText;
    $minLength !== null && $args['minLength'] = $minLength;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $scaffold !== null && $args['scaffold'] = $scaffold;
    return \AmisSchema\Widget\Input\InputArray::make($args);
}

/**
 * 创建 InputCity 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputCity
 */
function AmisInputCity(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $allowDistrict = null,
    ...$args
): \AmisSchema\Widget\Input\InputCity
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $allowCity !== null && $args['allowCity'] = $allowCity;
    $allowDistrict !== null && $args['allowDistrict'] = $allowDistrict;
    return \AmisSchema\Widget\Input\InputCity::make($args);
}

/**
 * 创建 InputColor 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputColor
 */
function AmisInputColor(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $resetValue = null,
    ...$args
): \AmisSchema\Widget\Input\InputColor
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $format !== null && $args['format'] = $format;
    $allowCustomColor !== null && $args['allowCustomColor'] = $allowCustomColor;
    $clearable !== null && $args['clearable'] = $clearable;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\InputColor::make($args);
}

/**
 * 创建 InputDate 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputDate
 */
function AmisInputDate(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputDate
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputDate::make($args);
}

/**
 * 创建 InputDateRange 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputDateRange
 */
function AmisInputDateRange(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputDateRange
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputDateRange::make($args);
}

/**
 * 创建 InputDatetime 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputDatetime
 */
function AmisInputDatetime(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputDatetime
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputDatetime::make($args);
}

/**
 * 创建 InputDatetimeRange 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputDatetimeRange
 */
function AmisInputDatetimeRange(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputDatetimeRange
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputDatetimeRange::make($args);
}

/**
 * 创建 InputExcel 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputExcel
 */
function AmisInputExcel(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $maxLength = null,
    ...$args
): \AmisSchema\Widget\Input\InputExcel
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $allSheets !== null && $args['allSheets'] = $allSheets;
    $parseMode !== null && $args['parseMode'] = $parseMode;
    $includeEmpty !== null && $args['includeEmpty'] = $includeEmpty;
    $plainText !== null && $args['plainText'] = $plainText;
    $multiple !== null && $args['multiple'] = $multiple;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    return \AmisSchema\Widget\Input\InputExcel::make($args);
}

/**
 * 创建 InputFile 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputFile
 */
function AmisInputFile(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $invalidSizeMessage = null,
    ...$args
): \AmisSchema\Widget\Input\InputFile
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $receiver !== null && $args['receiver'] = $receiver;
    $accept !== null && $args['accept'] = $accept;
    $capture !== null && $args['capture'] = $capture;
    $asBase64 !== null && $args['asBase64'] = $asBase64;
    $asBlob !== null && $args['asBlob'] = $asBlob;
    $maxSize !== null && $args['maxSize'] = $maxSize;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $multiple !== null && $args['multiple'] = $multiple;
    $drag !== null && $args['drag'] = $drag;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $autoUpload !== null && $args['autoUpload'] = $autoUpload;
    $hideUploadButton !== null && $args['hideUploadButton'] = $hideUploadButton;
    $fileField !== null && $args['fileField'] = $fileField;
    $nameField !== null && $args['nameField'] = $nameField;
    $valueField !== null && $args['valueField'] = $valueField;
    $urlField !== null && $args['urlField'] = $urlField;
    $btnLabel !== null && $args['btnLabel'] = $btnLabel;
    $downloadUrl !== null && $args['downloadUrl'] = $downloadUrl;
    $useChunk !== null && $args['useChunk'] = $useChunk;
    $chunkSize !== null && $args['chunkSize'] = $chunkSize;
    $startChunkApi !== null && $args['startChunkApi'] = $startChunkApi;
    $chunkApi !== null && $args['chunkApi'] = $chunkApi;
    $finishChunkApi !== null && $args['finishChunkApi'] = $finishChunkApi;
    $concurrency !== null && $args['concurrency'] = $concurrency;
    $documentation !== null && $args['documentation'] = $documentation;
    $documentLink !== null && $args['documentLink'] = $documentLink;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $invalidTypeMessage !== null && $args['invalidTypeMessage'] = $invalidTypeMessage;
    $invalidSizeMessage !== null && $args['invalidSizeMessage'] = $invalidSizeMessage;
    return \AmisSchema\Widget\Input\InputFile::make($args);
}

/**
 * 创建 InputFormula 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $title 弹框标题，默认为 '公式编辑器'
 * @param string $label 设置表单项标签。
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputFormula
 */
function AmisInputFormula(
    mixed $type = null,
    mixed $name = null,
    mixed $title = null,
    mixed $label = null,
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
    mixed $mixedMode = null,
    ...$args
): \AmisSchema\Widget\Input\InputFormula
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $title !== null && $args['title'] = $title;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $level !== null && $args['level'] = $level;
    $size !== null && $args['size'] = $size;
    $icon !== null && $args['icon'] = $icon;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $header !== null && $args['header'] = $header;
    $evalMode !== null && $args['evalMode'] = $evalMode;
    $variableMode !== null && $args['variableMode'] = $variableMode;
    $functions !== null && $args['functions'] = $functions;
    $inputMode !== null && $args['inputMode'] = $inputMode;
    $btnLabel !== null && $args['btnLabel'] = $btnLabel;
    $allowInput !== null && $args['allowInput'] = $allowInput;
    $btnSize !== null && $args['btnSize'] = $btnSize;
    $borderMode !== null && $args['borderMode'] = $borderMode;
    $variableClassName !== null && $args['variableClassName'] = $variableClassName;
    $functionClassName !== null && $args['functionClassName'] = $functionClassName;
    $mixedMode !== null && $args['mixedMode'] = $mixedMode;
    return \AmisSchema\Widget\Input\InputFormula::make($args);
}

/**
 * 创建 InputGroup 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param array|\AmisSchema\Widget\Widget[]|\AmisSchema\Widget\Widget $body 表单项集合
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputGroup
 */
function AmisInputGroup(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $body = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputGroup
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $body !== null && $args['body'] = $body;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputGroup::make($args);
}

/**
 * 创建 InputImage 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputImage
 */
function AmisInputImage(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $invalidSizeMessage = null,
    ...$args
): \AmisSchema\Widget\Input\InputImage
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $receiver !== null && $args['receiver'] = $receiver;
    $accept !== null && $args['accept'] = $accept;
    $capture !== null && $args['capture'] = $capture;
    $maxSize !== null && $args['maxSize'] = $maxSize;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $multiple !== null && $args['multiple'] = $multiple;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $autoUpload !== null && $args['autoUpload'] = $autoUpload;
    $hideUploadButton !== null && $args['hideUploadButton'] = $hideUploadButton;
    $fileField !== null && $args['fileField'] = $fileField;
    $cropFormat !== null && $args['cropFormat'] = $cropFormat;
    $cropQuality !== null && $args['cropQuality'] = $cropQuality;
    $frameImage !== null && $args['frameImage'] = $frameImage;
    $fixedSize !== null && $args['fixedSize'] = $fixedSize;
    $fixedSizeClassName !== null && $args['fixedSizeClassName'] = $fixedSizeClassName;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $uploadBtnText !== null && $args['uploadBtnText'] = $uploadBtnText;
    $dropCrop !== null && $args['dropCrop'] = $dropCrop;
    $initCrop !== null && $args['initCrop'] = $initCrop;
    $draggable !== null && $args['draggable'] = $draggable;
    $draggableTip !== null && $args['draggableTip'] = $draggableTip;
    $showErrorModal !== null && $args['showErrorModal'] = $showErrorModal;
    $invalidTypeMessage !== null && $args['invalidTypeMessage'] = $invalidTypeMessage;
    $invalidSizeMessage !== null && $args['invalidSizeMessage'] = $invalidSizeMessage;
    return \AmisSchema\Widget\Input\InputImage::make($args);
}

/**
 * 创建 InputKV 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputKV
 */
function AmisInputKV(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $keySchema = null,
    ...$args
): \AmisSchema\Widget\Input\InputKV
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $valueType !== null && $args['valueType'] = $valueType;
    $keyPlaceholder !== null && $args['keyPlaceholder'] = $keyPlaceholder;
    $valuePlaceholder !== null && $args['valuePlaceholder'] = $valuePlaceholder;
    $draggable !== null && $args['draggable'] = $draggable;
    $autoParseJSON !== null && $args['autoParseJSON'] = $autoParseJSON;
    $valueSchema !== null && $args['valueSchema'] = $valueSchema;
    $keySchema !== null && $args['keySchema'] = $keySchema;
    return \AmisSchema\Widget\Input\InputKV::make($args);
}

/**
 * 创建 InputKVS 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputKVS
 */
function AmisInputKVS(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $valueIsArray = null,
    ...$args
): \AmisSchema\Widget\Input\InputKVS
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $keyItem !== null && $args['keyItem'] = $keyItem;
    $valueItems !== null && $args['valueItems'] = $valueItems;
    $addButtonText !== null && $args['addButtonText'] = $addButtonText;
    $draggable !== null && $args['draggable'] = $draggable;
    $valueIsArray !== null && $args['valueIsArray'] = $valueIsArray;
    return \AmisSchema\Widget\Input\InputKVS::make($args);
}

/**
 * 创建 InputMonth 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputMonth
 */
function AmisInputMonth(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputMonth
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputMonth::make($args);
}

/**
 * 创建 InputMonthRange 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputMonthRange
 */
function AmisInputMonthRange(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $inputFormat = null,
    ...$args
): \AmisSchema\Widget\Input\InputMonthRange
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $format !== null && $args['format'] = $format;
    $inputFormat !== null && $args['inputFormat'] = $inputFormat;
    return \AmisSchema\Widget\Input\InputMonthRange::make($args);
}

/**
 * 创建 InputNumber 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputNumber
 */
function AmisInputNumber(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $clearValueOnEmpty = null,
    ...$args
): \AmisSchema\Widget\Input\InputNumber
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $min !== null && $args['min'] = $min;
    $max !== null && $args['max'] = $max;
    $step !== null && $args['step'] = $step;
    $precision !== null && $args['precision'] = $precision;
    $showSteps !== null && $args['showSteps'] = $showSteps;
    $prefix !== null && $args['prefix'] = $prefix;
    $suffix !== null && $args['suffix'] = $suffix;
    $unitOptions !== null && $args['unitOptions'] = $unitOptions;
    $kilobitSeparator !== null && $args['kilobitSeparator'] = $kilobitSeparator;
    $keyboard !== null && $args['keyboard'] = $keyboard;
    $big !== null && $args['big'] = $big;
    $displayMode !== null && $args['displayMode'] = $displayMode;
    $borderMode !== null && $args['borderMode'] = $borderMode;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    $clearValueOnEmpty !== null && $args['clearValueOnEmpty'] = $clearValueOnEmpty;
    return \AmisSchema\Widget\Input\InputNumber::make($args);
}

/**
 * 创建 InputPassword 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputPassword
 */
function AmisInputPassword(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $revealPassword = null,
    ...$args
): \AmisSchema\Widget\Input\InputPassword
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $trimContents !== null && $args['trimContents'] = $trimContents;
    $clearValueOnEmpty !== null && $args['clearValueOnEmpty'] = $clearValueOnEmpty;
    $clearable !== null && $args['clearable'] = $clearable;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    $prefix !== null && $args['prefix'] = $prefix;
    $suffix !== null && $args['suffix'] = $suffix;
    $showCounter !== null && $args['showCounter'] = $showCounter;
    $minLength !== null && $args['minLength'] = $minLength;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $borderMode !== null && $args['borderMode'] = $borderMode;
    $inputControlClassName !== null && $args['inputControlClassName'] = $inputControlClassName;
    $nativeInputClassName !== null && $args['nativeInputClassName'] = $nativeInputClassName;
    $nativeAutoComplete !== null && $args['nativeAutoComplete'] = $nativeAutoComplete;
    $revealPassword !== null && $args['revealPassword'] = $revealPassword;
    return \AmisSchema\Widget\Input\InputPassword::make($args);
}

/**
 * 创建 InputQuarter 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputQuarter
 */
function AmisInputQuarter(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputQuarter
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputQuarter::make($args);
}

/**
 * 创建 InputQuarterRange 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputQuarterRange
 */
function AmisInputQuarterRange(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputQuarterRange
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputQuarterRange::make($args);
}

/**
 * 创建 InputRange 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputRange
 */
function AmisInputRange(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $showInputUnit = null,
    ...$args
): \AmisSchema\Widget\Input\InputRange
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $min !== null && $args['min'] = $min;
    $max !== null && $args['max'] = $max;
    $step !== null && $args['step'] = $step;
    $showSteps !== null && $args['showSteps'] = $showSteps;
    $parts !== null && $args['parts'] = $parts;
    $tooltipVisible !== null && $args['tooltipVisible'] = $tooltipVisible;
    $tooltipPlacement !== null && $args['tooltipPlacement'] = $tooltipPlacement;
    $unit !== null && $args['unit'] = $unit;
    $clearable !== null && $args['clearable'] = $clearable;
    $showInput !== null && $args['showInput'] = $showInput;
    $showInputUnit !== null && $args['showInputUnit'] = $showInputUnit;
    return \AmisSchema\Widget\Input\InputRange::make($args);
}

/**
 * 创建 InputRating 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputRating
 */
function AmisInputRating(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $texts = null,
    ...$args
): \AmisSchema\Widget\Input\InputRating
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $half !== null && $args['half'] = $half;
    $count !== null && $args['count'] = $count;
    $allowClear !== null && $args['allowClear'] = $allowClear;
    $inactiveColor !== null && $args['inactiveColor'] = $inactiveColor;
    $textPosition !== null && $args['textPosition'] = $textPosition;
    $char !== null && $args['char'] = $char;
    $charClassName !== null && $args['charClassName'] = $charClassName;
    $textClassName !== null && $args['textClassName'] = $textClassName;
    $colors !== null && $args['colors'] = $colors;
    $texts !== null && $args['texts'] = $texts;
    return \AmisSchema\Widget\Input\InputRating::make($args);
}

/**
 * 创建 InputRepeat 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置当不指定值时的说明，默认为 不重复
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputRepeat
 */
function AmisInputRepeat(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputRepeat
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    return \AmisSchema\Widget\Input\InputRepeat::make($args);
}

/**
 * 创建 InputRichText 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputRichText
 */
function AmisInputRichText(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $buttons = null,
    ...$args
): \AmisSchema\Widget\Input\InputRichText
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $saveAsUbb !== null && $args['saveAsUbb'] = $saveAsUbb;
    $receiver !== null && $args['receiver'] = $receiver;
    $videoReceiver !== null && $args['videoReceiver'] = $videoReceiver;
    $fileField !== null && $args['fileField'] = $fileField;
    $options !== null && $args['options'] = $options;
    $buttons !== null && $args['buttons'] = $buttons;
    return \AmisSchema\Widget\Input\InputRichText::make($args);
}

/**
 * 创建 InputSignature 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputSignature
 */
function AmisInputSignature(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $uploadApi = null,
    ...$args
): \AmisSchema\Widget\Input\InputSignature
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $width !== null && $args['width'] = $width;
    $height !== null && $args['height'] = $height;
    $color !== null && $args['color'] = $color;
    $bgColor !== null && $args['bgColor'] = $bgColor;
    $clearBtnLabel !== null && $args['clearBtnLabel'] = $clearBtnLabel;
    $undoBtnLabel !== null && $args['undoBtnLabel'] = $undoBtnLabel;
    $confirmBtnLabel !== null && $args['confirmBtnLabel'] = $confirmBtnLabel;
    $embed !== null && $args['embed'] = $embed;
    $embedConfirmLabel !== null && $args['embedConfirmLabel'] = $embedConfirmLabel;
    $ebmedCancelLabel !== null && $args['ebmedCancelLabel'] = $ebmedCancelLabel;
    $embedBtnIcon !== null && $args['embedBtnIcon'] = $embedBtnIcon;
    $embedBtnLabel !== null && $args['embedBtnLabel'] = $embedBtnLabel;
    $uploadApi !== null && $args['uploadApi'] = $uploadApi;
    return \AmisSchema\Widget\Input\InputSignature::make($args);
}

/**
 * 创建 InputSubForm 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputSubForm
 */
function AmisInputSubForm(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $addButtonText = null,
    ...$args
): \AmisSchema\Widget\Input\InputSubForm
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $btnLabel !== null && $args['btnLabel'] = $btnLabel;
    $minLength !== null && $args['minLength'] = $minLength;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $draggable !== null && $args['draggable'] = $draggable;
    $addable !== null && $args['addable'] = $addable;
    $removable !== null && $args['removable'] = $removable;
    $addButtonClassName !== null && $args['addButtonClassName'] = $addButtonClassName;
    $itemClassName !== null && $args['itemClassName'] = $itemClassName;
    $itemsClassName !== null && $args['itemsClassName'] = $itemsClassName;
    $form !== null && $args['form'] = $form;
    $addButtonText !== null && $args['addButtonText'] = $addButtonText;
    return \AmisSchema\Widget\Input\InputSubForm::make($args);
}

/**
 * 创建 InputTable 组件
 * 
 * @param string $type 指定为 Table 渲染器
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置当没有数据的时候的文字提示
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param string|array|\AmisSchema\Definition\API $addApi 设置新增时提交的API
 * @param string|array|\AmisSchema\Definition\API $updateApi 设置修改时提交的API
 * @param string|array|\AmisSchema\Definition\API $deleteApi 设置删除时提交的API
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputTable
 */
function AmisInputTable(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $subAddBtnIcon = null,
    ...$args
): \AmisSchema\Widget\Input\InputTable
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $addable !== null && $args['addable'] = $addable;
    $copyable !== null && $args['copyable'] = $copyable;
    $editable !== null && $args['editable'] = $editable;
    $removable !== null && $args['removable'] = $removable;
    $showTableAddBtn !== null && $args['showTableAddBtn'] = $showTableAddBtn;
    $showFooterAddBtn !== null && $args['showFooterAddBtn'] = $showFooterAddBtn;
    $addApi !== null && $args['addApi'] = $addApi;
    $updateApi !== null && $args['updateApi'] = $updateApi;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $addBtnLabel !== null && $args['addBtnLabel'] = $addBtnLabel;
    $addBtnIcon !== null && $args['addBtnIcon'] = $addBtnIcon;
    $copyBtnLabel !== null && $args['copyBtnLabel'] = $copyBtnLabel;
    $copyBtnIcon !== null && $args['copyBtnIcon'] = $copyBtnIcon;
    $editBtnLabel !== null && $args['editBtnLabel'] = $editBtnLabel;
    $editBtnIcon !== null && $args['editBtnIcon'] = $editBtnIcon;
    $deleteBtnLabel !== null && $args['deleteBtnLabel'] = $deleteBtnLabel;
    $deleteBtnIcon !== null && $args['deleteBtnIcon'] = $deleteBtnIcon;
    $confirmBtnLabel !== null && $args['confirmBtnLabel'] = $confirmBtnLabel;
    $confirmBtnIcon !== null && $args['confirmBtnIcon'] = $confirmBtnIcon;
    $cancelBtnLabel !== null && $args['cancelBtnLabel'] = $cancelBtnLabel;
    $cancelBtnIcon !== null && $args['cancelBtnIcon'] = $cancelBtnIcon;
    $needConfirm !== null && $args['needConfirm'] = $needConfirm;
    $canAccessSuperData !== null && $args['canAccessSuperData'] = $canAccessSuperData;
    $minLength !== null && $args['minLength'] = $minLength;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $perPage !== null && $args['perPage'] = $perPage;
    $draggable !== null && $args['draggable'] = $draggable;
    $itemCheckableOn !== null && $args['itemCheckableOn'] = $itemCheckableOn;
    $itemDraggableOn !== null && $args['itemDraggableOn'] = $itemDraggableOn;
    $checkOnItemClick !== null && $args['checkOnItemClick'] = $checkOnItemClick;
    $hideCheckToggler !== null && $args['hideCheckToggler'] = $hideCheckToggler;
    $combineNum !== null && $args['combineNum'] = $combineNum;
    $combineFromIndex !== null && $args['combineFromIndex'] = $combineFromIndex;
    $footerAddBtn !== null && $args['footerAddBtn'] = $footerAddBtn;
    $scaffold !== null && $args['scaffold'] = $scaffold;
    $deleteConfirmText !== null && $args['deleteConfirmText'] = $deleteConfirmText;
    $valueField !== null && $args['valueField'] = $valueField;
    $subAddBtnIcon !== null && $args['subAddBtnIcon'] = $subAddBtnIcon;
    return \AmisSchema\Widget\Input\InputTable::make($args);
}

/**
 * 创建 InputTag 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputTag
 */
function AmisInputTag(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $separator = null,
    ...$args
): \AmisSchema\Widget\Input\InputTag
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $optionsTip !== null && $args['optionsTip'] = $optionsTip;
    $clearable !== null && $args['clearable'] = $clearable;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    $max !== null && $args['max'] = $max;
    $maxTagLength !== null && $args['maxTagLength'] = $maxTagLength;
    $maxTagCount !== null && $args['maxTagCount'] = $maxTagCount;
    $enableBatchAdd !== null && $args['enableBatchAdd'] = $enableBatchAdd;
    $separator !== null && $args['separator'] = $separator;
    return \AmisSchema\Widget\Input\InputTag::make($args);
}

/**
 * 创建 InputText 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputText
 */
function AmisInputText(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputText
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $trimContents !== null && $args['trimContents'] = $trimContents;
    $clearValueOnEmpty !== null && $args['clearValueOnEmpty'] = $clearValueOnEmpty;
    $clearable !== null && $args['clearable'] = $clearable;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    $prefix !== null && $args['prefix'] = $prefix;
    $suffix !== null && $args['suffix'] = $suffix;
    $showCounter !== null && $args['showCounter'] = $showCounter;
    $minLength !== null && $args['minLength'] = $minLength;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $borderMode !== null && $args['borderMode'] = $borderMode;
    $inputControlClassName !== null && $args['inputControlClassName'] = $inputControlClassName;
    $nativeInputClassName !== null && $args['nativeInputClassName'] = $nativeInputClassName;
    $nativeAutoComplete !== null && $args['nativeAutoComplete'] = $nativeAutoComplete;
    return \AmisSchema\Widget\Input\InputText::make($args);
}

/**
 * 创建 InputTime 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputTime
 */
function AmisInputTime(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputTime
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputTime::make($args);
}

/**
 * 创建 InputTimeRange 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputTimeRange
 */
function AmisInputTimeRange(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\InputTimeRange
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    return \AmisSchema\Widget\Input\InputTimeRange::make($args);
}

/**
 * 创建 InputTree 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputTree
 */
function AmisInputTree(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $clearable = null,
    ...$args
): \AmisSchema\Widget\Input\InputTree
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $iconField !== null && $args['iconField'] = $iconField;
    $searchApi !== null && $args['searchApi'] = $searchApi;
    $hideRoot !== null && $args['hideRoot'] = $hideRoot;
    $rootLabel !== null && $args['rootLabel'] = $rootLabel;
    $showIcon !== null && $args['showIcon'] = $showIcon;
    $showRadio !== null && $args['showRadio'] = $showRadio;
    $showOutline !== null && $args['showOutline'] = $showOutline;
    $initiallyOpen !== null && $args['initiallyOpen'] = $initiallyOpen;
    $unfoldedLevel !== null && $args['unfoldedLevel'] = $unfoldedLevel;
    $autoCheckChildren !== null && $args['autoCheckChildren'] = $autoCheckChildren;
    $cascade !== null && $args['cascade'] = $cascade;
    $withChildren !== null && $args['withChildren'] = $withChildren;
    $onlyChildren !== null && $args['onlyChildren'] = $onlyChildren;
    $onlyLeaf !== null && $args['onlyLeaf'] = $onlyLeaf;
    $rootCreatable !== null && $args['rootCreatable'] = $rootCreatable;
    $rootCreateTip !== null && $args['rootCreateTip'] = $rootCreateTip;
    $minLength !== null && $args['minLength'] = $minLength;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $treeContainerClassName !== null && $args['treeContainerClassName'] = $treeContainerClassName;
    $treeClassName !== null && $args['treeClassName'] = $treeClassName;
    $enableNodePath !== null && $args['enableNodePath'] = $enableNodePath;
    $pathSeparator !== null && $args['pathSeparator'] = $pathSeparator;
    $highlightTxt !== null && $args['highlightTxt'] = $highlightTxt;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $menuTpl !== null && $args['menuTpl'] = $menuTpl;
    $enableDefaultIcon !== null && $args['enableDefaultIcon'] = $enableDefaultIcon;
    $heightAuto !== null && $args['heightAuto'] = $heightAuto;
    $nodeBehavior !== null && $args['nodeBehavior'] = $nodeBehavior;
    $autoCancelParent !== null && $args['autoCancelParent'] = $autoCancelParent;
    $toolbar !== null && $args['toolbar'] = $toolbar;
    $toolbarClassName !== null && $args['toolbarClassName'] = $toolbarClassName;
    $itemActions !== null && $args['itemActions'] = $itemActions;
    $deferApi !== null && $args['deferApi'] = $deferApi;
    $clearable !== null && $args['clearable'] = $clearable;
    return \AmisSchema\Widget\Input\InputTree::make($args);
}

/**
 * 创建 InputVerificationCode 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\InputVerificationCode
 */
function AmisInputVerificationCode(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $separator = null,
    ...$args
): \AmisSchema\Widget\Input\InputVerificationCode
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $length !== null && $args['length'] = $length;
    $masked !== null && $args['masked'] = $masked;
    $separator !== null && $args['separator'] = $separator;
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
 * @param mixed ...$args 其他参数
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
    mixed $popOverContainerSelector = null,
    ...$args
): \AmisSchema\Widget\Input\InputYear
{
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $format !== null && $args['format'] = $format;
    $inputFormat !== null && $args['inputFormat'] = $inputFormat;
    $displayFormat !== null && $args['displayFormat'] = $displayFormat;
    $clearable !== null && $args['clearable'] = $clearable;
    $embed !== null && $args['embed'] = $embed;
    $minDate !== null && $args['minDate'] = $minDate;
    $maxDate !== null && $args['maxDate'] = $maxDate;
    $popOverContainerSelector !== null && $args['popOverContainerSelector'] = $popOverContainerSelector;
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
 * @param mixed ...$args 其他参数
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
    mixed $popOverContainerSelector = null,
    ...$args
): \AmisSchema\Widget\Input\InputYearRange
{
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $format !== null && $args['format'] = $format;
    $inputFormat !== null && $args['inputFormat'] = $inputFormat;
    $displayFormat !== null && $args['displayFormat'] = $displayFormat;
    $startPlaceholder !== null && $args['startPlaceholder'] = $startPlaceholder;
    $endPlaceholder !== null && $args['endPlaceholder'] = $endPlaceholder;
    $minDate !== null && $args['minDate'] = $minDate;
    $maxDate !== null && $args['maxDate'] = $maxDate;
    $minDuration !== null && $args['minDuration'] = $minDuration;
    $maxDuration !== null && $args['maxDuration'] = $maxDuration;
    $clearable !== null && $args['clearable'] = $clearable;
    $embed !== null && $args['embed'] = $embed;
    $animation !== null && $args['animation'] = $animation;
    $extraName !== null && $args['extraName'] = $extraName;
    $popOverContainerSelector !== null && $args['popOverContainerSelector'] = $popOverContainerSelector;
    return \AmisSchema\Widget\Input\InputYearRange::make($args);
}

/**
 * 创建 JsonSchema 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\JsonSchema
 */
function AmisJsonSchema(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $formula = null,
    ...$args
): \AmisSchema\Widget\Input\JsonSchema
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $schema !== null && $args['schema'] = $schema;
    $schemaApi !== null && $args['schemaApi'] = $schemaApi;
    $formula !== null && $args['formula'] = $formula;
    return \AmisSchema\Widget\Input\JsonSchema::make($args);
}

/**
 * 创建 JsonSchemaEditor 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param array $placeholder 设置属性输入控件的占位提示文本
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\JsonSchemaEditor
 */
function AmisJsonSchemaEditor(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $advancedSettings = null,
    ...$args
): \AmisSchema\Widget\Input\JsonSchemaEditor
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $rootTypeMutable !== null && $args['rootTypeMutable'] = $rootTypeMutable;
    $showRootInfo !== null && $args['showRootInfo'] = $showRootInfo;
    $disabledTypes !== null && $args['disabledTypes'] = $disabledTypes;
    $definitions !== null && $args['definitions'] = $definitions;
    $mini !== null && $args['mini'] = $mini;
    $enableAdvancedSetting !== null && $args['enableAdvancedSetting'] = $enableAdvancedSetting;
    $advancedSettings !== null && $args['advancedSettings'] = $advancedSettings;
    return \AmisSchema\Widget\Input\JsonSchemaEditor::make($args);
}

/**
 * 创建 ListSelect 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\ListSelect
 */
function AmisListSelect(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $listClassName = null,
    ...$args
): \AmisSchema\Widget\Input\ListSelect
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $listClassName !== null && $args['listClassName'] = $listClassName;
    return \AmisSchema\Widget\Input\ListSelect::make($args);
}

/**
 * 创建 LocationPicker 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\LocationPicker
 */
function AmisLocationPicker(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $coordinatesType = null,
    ...$args
): \AmisSchema\Widget\Input\LocationPicker
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $vendor !== null && $args['vendor'] = $vendor;
    $ak !== null && $args['ak'] = $ak;
    $clearable !== null && $args['clearable'] = $clearable;
    $autoSelectCurrentLoc !== null && $args['autoSelectCurrentLoc'] = $autoSelectCurrentLoc;
    $onlySelectCurrentLoc !== null && $args['onlySelectCurrentLoc'] = $onlySelectCurrentLoc;
    $coordinatesType !== null && $args['coordinatesType'] = $coordinatesType;
    return \AmisSchema\Widget\Input\LocationPicker::make($args);
}

/**
 * 创建 MatrixCheckboxes 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param string|array|\AmisSchema\Definition\API $source Api 地址，如果选项组不固定，可以通过配置 source 动态拉取
 * @param bool $multiple 是否多选
 * @param string $singleSelectMode 设置单选模式，multiple为false时有效，可设置为cell, row, column 分别为全部选项中只能单选某个单元格、每行只能单选某个单元格，每列只能单选某个单元格
 * @param string $textAlign 当开启多选+全选时，默认为'left'
 * @param bool $yCheckAll 列上的全选
 * @param bool $xCheckAll 行上的全选
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\MatrixCheckboxes
 */
function AmisMatrixCheckboxes(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $xCheckAll = null,
    ...$args
): \AmisSchema\Widget\Input\MatrixCheckboxes
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $columns !== null && $args['columns'] = $columns;
    $rows !== null && $args['rows'] = $rows;
    $rowLabel !== null && $args['rowLabel'] = $rowLabel;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $singleSelectMode !== null && $args['singleSelectMode'] = $singleSelectMode;
    $textAlign !== null && $args['textAlign'] = $textAlign;
    $yCheckAll !== null && $args['yCheckAll'] = $yCheckAll;
    $xCheckAll !== null && $args['xCheckAll'] = $xCheckAll;
    return \AmisSchema\Widget\Input\MatrixCheckboxes::make($args);
}

/**
 * 创建 NestedSelect 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\NestedSelect
 */
function AmisNestedSelect(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $maxTagCount = null,
    ...$args
): \AmisSchema\Widget\Input\NestedSelect
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $cascade !== null && $args['cascade'] = $cascade;
    $withChildren !== null && $args['withChildren'] = $withChildren;
    $onlyChildren !== null && $args['onlyChildren'] = $onlyChildren;
    $searchPromptText !== null && $args['searchPromptText'] = $searchPromptText;
    $noResultsText !== null && $args['noResultsText'] = $noResultsText;
    $hideNodePathLabel !== null && $args['hideNodePathLabel'] = $hideNodePathLabel;
    $onlyLeaf !== null && $args['onlyLeaf'] = $onlyLeaf;
    $maxTagCount !== null && $args['maxTagCount'] = $maxTagCount;
    return \AmisSchema\Widget\Input\NestedSelect::make($args);
}

/**
 * 创建 Options 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Options
 */
function AmisOptions(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\Options
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    return \AmisSchema\Widget\Input\Options::make($args);
}

/**
 * 创建 Picker 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Picker
 */
function AmisPicker(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $itemClearable = null,
    ...$args
): \AmisSchema\Widget\Input\Picker
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $modalTitle !== null && $args['modalTitle'] = $modalTitle;
    $modalMode !== null && $args['modalMode'] = $modalMode;
    $modalSize !== null && $args['modalSize'] = $modalSize;
    $pickerSchema !== null && $args['pickerSchema'] = $pickerSchema;
    $embed !== null && $args['embed'] = $embed;
    $itemClearable !== null && $args['itemClearable'] = $itemClearable;
    return \AmisSchema\Widget\Input\Picker::make($args);
}

/**
 * 创建 Radio 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Radio
 */
function AmisRadio(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\Radio
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $option !== null && $args['option'] = $option;
    $trueValue !== null && $args['trueValue'] = $trueValue;
    $falseValue !== null && $args['falseValue'] = $falseValue;
    return \AmisSchema\Widget\Input\Radio::make($args);
}

/**
 * 创建 Radios 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Radios
 */
function AmisRadios(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\Radios
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $columnsCount !== null && $args['columnsCount'] = $columnsCount;
    return \AmisSchema\Widget\Input\Radios::make($args);
}

/**
 * 创建 Select 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Select
 */
function AmisSelect(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $noResultsText = null,
    ...$args
): \AmisSchema\Widget\Input\Select
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $options !== null && $args['options'] = $options;
    $source !== null && $args['source'] = $source;
    $multiple !== null && $args['multiple'] = $multiple;
    $labelField !== null && $args['labelField'] = $labelField;
    $valueField !== null && $args['valueField'] = $valueField;
    $deferField !== null && $args['deferField'] = $deferField;
    $joinValues !== null && $args['joinValues'] = $joinValues;
    $extractValue !== null && $args['extractValue'] = $extractValue;
    $delimiter !== null && $args['delimiter'] = $delimiter;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $valuesNoWrap !== null && $args['valuesNoWrap'] = $valuesNoWrap;
    $searchable !== null && $args['searchable'] = $searchable;
    $autoComplete !== null && $args['autoComplete'] = $autoComplete;
    $selectFirst !== null && $args['selectFirst'] = $selectFirst;
    $checkAll !== null && $args['checkAll'] = $checkAll;
    $checkAllLabel !== null && $args['checkAllLabel'] = $checkAllLabel;
    $defaultCheckAll !== null && $args['defaultCheckAll'] = $defaultCheckAll;
    $creatable !== null && $args['creatable'] = $creatable;
    $createBtnLabel !== null && $args['createBtnLabel'] = $createBtnLabel;
    $addControls !== null && $args['addControls'] = $addControls;
    $addApi !== null && $args['addApi'] = $addApi;
    $addDialog !== null && $args['addDialog'] = $addDialog;
    $editable !== null && $args['editable'] = $editable;
    $editControls !== null && $args['editControls'] = $editControls;
    $editApi !== null && $args['editApi'] = $editApi;
    $editDialog !== null && $args['editDialog'] = $editDialog;
    $removable !== null && $args['removable'] = $removable;
    $deleteApi !== null && $args['deleteApi'] = $deleteApi;
    $initAutoFill !== null && $args['initAutoFill'] = $initAutoFill;
    $optionLabel !== null && $args['optionLabel'] = $optionLabel;
    $checkAllBySearch !== null && $args['checkAllBySearch'] = $checkAllBySearch;
    $filterOption !== null && $args['filterOption'] = $filterOption;
    $menuTpl !== null && $args['menuTpl'] = $menuTpl;
    $clearable !== null && $args['clearable'] = $clearable;
    $hideSelected !== null && $args['hideSelected'] = $hideSelected;
    $mobileClassName !== null && $args['mobileClassName'] = $mobileClassName;
    $selectMode !== null && $args['selectMode'] = $selectMode;
    $searchResultMode !== null && $args['searchResultMode'] = $searchResultMode;
    $columns !== null && $args['columns'] = $columns;
    $leftOptions !== null && $args['leftOptions'] = $leftOptions;
    $leftMode !== null && $args['leftMode'] = $leftMode;
    $rightMode !== null && $args['rightMode'] = $rightMode;
    $maxTagCount !== null && $args['maxTagCount'] = $maxTagCount;
    $overflowTagPopover !== null && $args['overflowTagPopover'] = $overflowTagPopover;
    $optionClassName !== null && $args['optionClassName'] = $optionClassName;
    $popOverContainerSelector !== null && $args['popOverContainerSelector'] = $popOverContainerSelector;
    $showInvalidMatch !== null && $args['showInvalidMatch'] = $showInvalidMatch;
    $noResultsText !== null && $args['noResultsText'] = $noResultsText;
    return \AmisSchema\Widget\Input\Select::make($args);
}

/**
 * 创建 StaticWidget 组件
 * 
 * @param string $type 支持通过配置type为static-xxx的形式，展示其他非表单项组件
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置显示的静态值
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\StaticWidget
 */
function AmisStatic(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $popOver = null,
    ...$args
): \AmisSchema\Widget\Input\StaticWidget
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $tpl !== null && $args['tpl'] = $tpl;
    $quickEdit !== null && $args['quickEdit'] = $quickEdit;
    $popOver !== null && $args['popOver'] = $popOver;
    return \AmisSchema\Widget\Input\StaticWidget::make($args);
}

/**
 * 创建 SwitchWidget 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置开关大小，默认为 md
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\SwitchWidget
 */
function AmisSwitch(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $falseValue = null,
    ...$args
): \AmisSchema\Widget\Input\SwitchWidget
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $loading !== null && $args['loading'] = $loading;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $option !== null && $args['option'] = $option;
    $onText !== null && $args['onText'] = $onText;
    $offText !== null && $args['offText'] = $offText;
    $trueValue !== null && $args['trueValue'] = $trueValue;
    $falseValue !== null && $args['falseValue'] = $falseValue;
    return \AmisSchema\Widget\Input\SwitchWidget::make($args);
}

/**
 * 创建 TabsTransfer 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\TabsTransfer
 */
function AmisTabsTransfer(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\TabsTransfer
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $delimeter !== null && $args['delimeter'] = $delimeter;
    $searchApi !== null && $args['searchApi'] = $searchApi;
    $resultListModeFollowSelect !== null && $args['resultListModeFollowSelect'] = $resultListModeFollowSelect;
    $statistics !== null && $args['statistics'] = $statistics;
    $selectTitle !== null && $args['selectTitle'] = $selectTitle;
    $resultTitle !== null && $args['resultTitle'] = $resultTitle;
    $sortable !== null && $args['sortable'] = $sortable;
    $selectMode !== null && $args['selectMode'] = $selectMode;
    $searchResultMode !== null && $args['searchResultMode'] = $searchResultMode;
    $searchPlaceholder !== null && $args['searchPlaceholder'] = $searchPlaceholder;
    $columns !== null && $args['columns'] = $columns;
    $leftOptions !== null && $args['leftOptions'] = $leftOptions;
    $leftMode !== null && $args['leftMode'] = $leftMode;
    $rightMode !== null && $args['rightMode'] = $rightMode;
    $resultSearchable !== null && $args['resultSearchable'] = $resultSearchable;
    $resultSearchPlaceholder !== null && $args['resultSearchPlaceholder'] = $resultSearchPlaceholder;
    $menuTpl !== null && $args['menuTpl'] = $menuTpl;
    $valueTpl !== null && $args['valueTpl'] = $valueTpl;
    return \AmisSchema\Widget\Input\TabsTransfer::make($args);
}

/**
 * 创建 TabsTransferPicker 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\TabsTransferPicker
 */
function AmisTabsTransferPicker(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $resetValue = null,
    ...$args
): \AmisSchema\Widget\Input\TabsTransferPicker
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $delimeter !== null && $args['delimeter'] = $delimeter;
    $searchApi !== null && $args['searchApi'] = $searchApi;
    $resultListModeFollowSelect !== null && $args['resultListModeFollowSelect'] = $resultListModeFollowSelect;
    $statistics !== null && $args['statistics'] = $statistics;
    $selectTitle !== null && $args['selectTitle'] = $selectTitle;
    $resultTitle !== null && $args['resultTitle'] = $resultTitle;
    $sortable !== null && $args['sortable'] = $sortable;
    $selectMode !== null && $args['selectMode'] = $selectMode;
    $searchResultMode !== null && $args['searchResultMode'] = $searchResultMode;
    $searchPlaceholder !== null && $args['searchPlaceholder'] = $searchPlaceholder;
    $columns !== null && $args['columns'] = $columns;
    $leftOptions !== null && $args['leftOptions'] = $leftOptions;
    $leftMode !== null && $args['leftMode'] = $leftMode;
    $rightMode !== null && $args['rightMode'] = $rightMode;
    $resultSearchable !== null && $args['resultSearchable'] = $resultSearchable;
    $resultSearchPlaceholder !== null && $args['resultSearchPlaceholder'] = $resultSearchPlaceholder;
    $menuTpl !== null && $args['menuTpl'] = $menuTpl;
    $valueTpl !== null && $args['valueTpl'] = $valueTpl;
    $borderMode !== null && $args['borderMode'] = $borderMode;
    $modalMode !== null && $args['modalMode'] = $modalMode;
    $modalTitle !== null && $args['modalTitle'] = $modalTitle;
    $modalSize !== null && $args['modalSize'] = $modalSize;
    $pickerIcon !== null && $args['pickerIcon'] = $pickerIcon;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\TabsTransferPicker::make($args);
}

/**
 * 创建 Textarea 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Textarea
 */
function AmisTextarea(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $resetValue = null,
    ...$args
): \AmisSchema\Widget\Input\Textarea
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $minRows !== null && $args['minRows'] = $minRows;
    $maxRows !== null && $args['maxRows'] = $maxRows;
    $trimContents !== null && $args['trimContents'] = $trimContents;
    $showCounter !== null && $args['showCounter'] = $showCounter;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $clearable !== null && $args['clearable'] = $clearable;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\Textarea::make($args);
}

/**
 * 创建 Transfer 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\Transfer
 */
function AmisTransfer(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\Transfer
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $delimeter !== null && $args['delimeter'] = $delimeter;
    $searchApi !== null && $args['searchApi'] = $searchApi;
    $resultListModeFollowSelect !== null && $args['resultListModeFollowSelect'] = $resultListModeFollowSelect;
    $statistics !== null && $args['statistics'] = $statistics;
    $selectTitle !== null && $args['selectTitle'] = $selectTitle;
    $resultTitle !== null && $args['resultTitle'] = $resultTitle;
    $sortable !== null && $args['sortable'] = $sortable;
    $selectMode !== null && $args['selectMode'] = $selectMode;
    $searchResultMode !== null && $args['searchResultMode'] = $searchResultMode;
    $searchPlaceholder !== null && $args['searchPlaceholder'] = $searchPlaceholder;
    $columns !== null && $args['columns'] = $columns;
    $leftOptions !== null && $args['leftOptions'] = $leftOptions;
    $leftMode !== null && $args['leftMode'] = $leftMode;
    $rightMode !== null && $args['rightMode'] = $rightMode;
    $resultSearchable !== null && $args['resultSearchable'] = $resultSearchable;
    $resultSearchPlaceholder !== null && $args['resultSearchPlaceholder'] = $resultSearchPlaceholder;
    $menuTpl !== null && $args['menuTpl'] = $menuTpl;
    $valueTpl !== null && $args['valueTpl'] = $valueTpl;
    return \AmisSchema\Widget\Input\Transfer::make($args);
}

/**
 * 创建 TransferPicker 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\TransferPicker
 */
function AmisTransferPicker(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $resetValue = null,
    ...$args
): \AmisSchema\Widget\Input\TransferPicker
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $delimeter !== null && $args['delimeter'] = $delimeter;
    $searchApi !== null && $args['searchApi'] = $searchApi;
    $resultListModeFollowSelect !== null && $args['resultListModeFollowSelect'] = $resultListModeFollowSelect;
    $statistics !== null && $args['statistics'] = $statistics;
    $selectTitle !== null && $args['selectTitle'] = $selectTitle;
    $resultTitle !== null && $args['resultTitle'] = $resultTitle;
    $sortable !== null && $args['sortable'] = $sortable;
    $selectMode !== null && $args['selectMode'] = $selectMode;
    $searchResultMode !== null && $args['searchResultMode'] = $searchResultMode;
    $searchPlaceholder !== null && $args['searchPlaceholder'] = $searchPlaceholder;
    $columns !== null && $args['columns'] = $columns;
    $leftOptions !== null && $args['leftOptions'] = $leftOptions;
    $leftMode !== null && $args['leftMode'] = $leftMode;
    $rightMode !== null && $args['rightMode'] = $rightMode;
    $resultSearchable !== null && $args['resultSearchable'] = $resultSearchable;
    $resultSearchPlaceholder !== null && $args['resultSearchPlaceholder'] = $resultSearchPlaceholder;
    $menuTpl !== null && $args['menuTpl'] = $menuTpl;
    $valueTpl !== null && $args['valueTpl'] = $valueTpl;
    $borderMode !== null && $args['borderMode'] = $borderMode;
    $modalMode !== null && $args['modalMode'] = $modalMode;
    $modalTitle !== null && $args['modalTitle'] = $modalTitle;
    $modalSize !== null && $args['modalSize'] = $modalSize;
    $pickerIcon !== null && $args['pickerIcon'] = $pickerIcon;
    $resetValue !== null && $args['resetValue'] = $resetValue;
    return \AmisSchema\Widget\Input\TransferPicker::make($args);
}

/**
 * 创建 TreeSelect 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\TreeSelect
 */
function AmisTreeSelect(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    mixed $clearable = null,
    ...$args
): \AmisSchema\Widget\Input\TreeSelect
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $iconField !== null && $args['iconField'] = $iconField;
    $searchApi !== null && $args['searchApi'] = $searchApi;
    $hideRoot !== null && $args['hideRoot'] = $hideRoot;
    $rootLabel !== null && $args['rootLabel'] = $rootLabel;
    $showIcon !== null && $args['showIcon'] = $showIcon;
    $showRadio !== null && $args['showRadio'] = $showRadio;
    $showOutline !== null && $args['showOutline'] = $showOutline;
    $initiallyOpen !== null && $args['initiallyOpen'] = $initiallyOpen;
    $unfoldedLevel !== null && $args['unfoldedLevel'] = $unfoldedLevel;
    $autoCheckChildren !== null && $args['autoCheckChildren'] = $autoCheckChildren;
    $cascade !== null && $args['cascade'] = $cascade;
    $withChildren !== null && $args['withChildren'] = $withChildren;
    $onlyChildren !== null && $args['onlyChildren'] = $onlyChildren;
    $onlyLeaf !== null && $args['onlyLeaf'] = $onlyLeaf;
    $rootCreatable !== null && $args['rootCreatable'] = $rootCreatable;
    $rootCreateTip !== null && $args['rootCreateTip'] = $rootCreateTip;
    $minLength !== null && $args['minLength'] = $minLength;
    $maxLength !== null && $args['maxLength'] = $maxLength;
    $treeContainerClassName !== null && $args['treeContainerClassName'] = $treeContainerClassName;
    $treeClassName !== null && $args['treeClassName'] = $treeClassName;
    $enableNodePath !== null && $args['enableNodePath'] = $enableNodePath;
    $pathSeparator !== null && $args['pathSeparator'] = $pathSeparator;
    $highlightTxt !== null && $args['highlightTxt'] = $highlightTxt;
    $itemHeight !== null && $args['itemHeight'] = $itemHeight;
    $virtualThreshold !== null && $args['virtualThreshold'] = $virtualThreshold;
    $menuTpl !== null && $args['menuTpl'] = $menuTpl;
    $enableDefaultIcon !== null && $args['enableDefaultIcon'] = $enableDefaultIcon;
    $heightAuto !== null && $args['heightAuto'] = $heightAuto;
    $nodeBehavior !== null && $args['nodeBehavior'] = $nodeBehavior;
    $autoCancelParent !== null && $args['autoCancelParent'] = $autoCancelParent;
    $toolbar !== null && $args['toolbar'] = $toolbar;
    $toolbarClassName !== null && $args['toolbarClassName'] = $toolbarClassName;
    $itemActions !== null && $args['itemActions'] = $itemActions;
    $deferApi !== null && $args['deferApi'] = $deferApi;
    $clearable !== null && $args['clearable'] = $clearable;
    return \AmisSchema\Widget\Input\TreeSelect::make($args);
}

/**
 * 创建 UUID 组件
 * 
 * @param string $type 设置指定表单项类型。
 * @param string $name 设置字段名，指定该表单项提交时的 key。
 * @param string $label 设置表单项标签。
 * @param mixed $value 设置默认值。
 * @param string $placeholder 设置表单项占位符。
 * @param string $size 设置表单项大小，可选值：'xs'、'sm'、'md'、'lg'、'full'。
 * @param bool $disabled 设置当前表单项是否为禁用状态。
 * @param bool $required 设置是否为必填项。
 * @param bool $visible 设置当前表单项是否可见。
 * @param string $className 设置表单最外层类名。
 * @param mixed $style 
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
 * @param string|array|\AmisSchema\Definition\API $validateApi 设置表单校验接口。
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Input\UUID
 */
function AmisUUID(
    mixed $type = null,
    mixed $name = null,
    mixed $label = null,
    mixed $value = null,
    mixed $placeholder = null,
    mixed $size = null,
    mixed $disabled = null,
    mixed $required = null,
    mixed $visible = null,
    mixed $className = null,
    mixed $style = null,
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
    ...$args
): \AmisSchema\Widget\Input\UUID
{
    $type !== null && $args['type'] = $type;
    $name !== null && $args['name'] = $name;
    $label !== null && $args['label'] = $label;
    $value !== null && $args['value'] = $value;
    $placeholder !== null && $args['placeholder'] = $placeholder;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $visible !== null && $args['visible'] = $visible;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $inputClassName !== null && $args['inputClassName'] = $inputClassName;
    $labelClassName !== null && $args['labelClassName'] = $labelClassName;
    $labelAlign !== null && $args['labelAlign'] = $labelAlign;
    $labelWidth !== null && $args['labelWidth'] = $labelWidth;
    $description !== null && $args['description'] = $description;
    $inline !== null && $args['inline'] = $inline;
    $submitOnChange !== null && $args['submitOnChange'] = $submitOnChange;
    $readOnly !== null && $args['readOnly'] = $readOnly;
    $readOnlyOn !== null && $args['readOnlyOn'] = $readOnlyOn;
    $requiredOn !== null && $args['requiredOn'] = $requiredOn;
    $validations !== null && $args['validations'] = $validations;
    $validationErrors !== null && $args['validationErrors'] = $validationErrors;
    $validateApi !== null && $args['validateApi'] = $validateApi;
    $clearValueOnHidden !== null && $args['clearValueOnHidden'] = $clearValueOnHidden;
    $autoFocus !== null && $args['autoFocus'] = $autoFocus;
    $mode !== null && $args['mode'] = $mode;
    $horizontal !== null && $args['horizontal'] = $horizontal;
    $hint !== null && $args['hint'] = $hint;
    $remark !== null && $args['remark'] = $remark;
    $labelRemark !== null && $args['labelRemark'] = $labelRemark;
    $inputGroupClassName !== null && $args['inputGroupClassName'] = $inputGroupClassName;
    $defaultValue !== null && $args['defaultValue'] = $defaultValue;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $hidden !== null && $args['hidden'] = $hidden;
    $hiddenOn !== null && $args['hiddenOn'] = $hiddenOn;
    $row !== null && $args['row'] = $row;
    $staticOn !== null && $args['staticOn'] = $staticOn;
    $staticPlaceholder !== null && $args['staticPlaceholder'] = $staticPlaceholder;
    $strictMode !== null && $args['strictMode'] = $strictMode;
    $autoFill !== null && $args['autoFill'] = $autoFill;
    $staticClassName !== null && $args['staticClassName'] = $staticClassName;
    $staticLabelClassName !== null && $args['staticLabelClassName'] = $staticLabelClassName;
    $staticInputClassName !== null && $args['staticInputClassName'] = $staticInputClassName;
    $staticSchema !== null && $args['staticSchema'] = $staticSchema;
    $validateOnChange !== null && $args['validateOnChange'] = $validateOnChange;
    $columnClassName !== null && $args['columnClassName'] = $columnClassName;
    $unique !== null && $args['unique'] = $unique;
    $length !== null && $args['length'] = $length;
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
 * @param mixed ...$args 其他参数
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
    mixed $showArrow = null,
    ...$args
): \AmisSchema\Widget\Layout\Collapse
{
    $body !== null && $args['body'] = $body;
    $disabled !== null && $args['disabled'] = $disabled;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $collapsed !== null && $args['collapsed'] = $collapsed;
    $key !== null && $args['key'] = $key;
    $header !== null && $args['header'] = $header;
    $showArrow !== null && $args['showArrow'] = $showArrow;
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
 * @param mixed ...$args 其他参数
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
    mixed $wrapperComponent = null,
    ...$args
): \AmisSchema\Widget\Layout\Container
{
    $body !== null && $args['body'] = $body;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $bodyClassName !== null && $args['bodyClassName'] = $bodyClassName;
    $wrapperComponent !== null && $args['wrapperComponent'] = $wrapperComponent;
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
 * @param mixed ...$args 其他参数
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
    mixed $titlePosition = null,
    ...$args
): \AmisSchema\Widget\Layout\Divider
{
    $title !== null && $args['title'] = $title;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $lineStyle !== null && $args['lineStyle'] = $lineStyle;
    $direction !== null && $args['direction'] = $direction;
    $color !== null && $args['color'] = $color;
    $rotate !== null && $args['rotate'] = $rotate;
    $titleClassName !== null && $args['titleClassName'] = $titleClassName;
    $titlePosition !== null && $args['titlePosition'] = $titlePosition;
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
 * @param mixed ...$args 其他参数
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
    mixed $items = null,
    ...$args
): \AmisSchema\Widget\Layout\Flex
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $justify !== null && $args['justify'] = $justify;
    $alignItems !== null && $args['alignItems'] = $alignItems;
    $items !== null && $args['items'] = $items;
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
 * @param mixed ...$args 其他参数
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
    mixed $columns = null,
    ...$args
): \AmisSchema\Widget\Layout\Grid
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $gap !== null && $args['gap'] = $gap;
    $valign !== null && $args['valign'] = $valign;
    $align !== null && $args['align'] = $align;
    $columns !== null && $args['columns'] = $columns;
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
 * @param mixed ...$args 其他参数
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
    mixed $grids = null,
    ...$args
): \AmisSchema\Widget\Layout\Grid2D
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $gridClassName !== null && $args['gridClassName'] = $gridClassName;
    $gap !== null && $args['gap'] = $gap;
    $cols !== null && $args['cols'] = $cols;
    $rowHeight !== null && $args['rowHeight'] = $rowHeight;
    $rowGap !== null && $args['rowGap'] = $rowGap;
    $grids !== null && $args['grids'] = $grids;
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
 * @param mixed ...$args 其他参数
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
    mixed $columns = null,
    ...$args
): \AmisSchema\Widget\Layout\HBox
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $gap !== null && $args['gap'] = $gap;
    $valign !== null && $args['valign'] = $valign;
    $align !== null && $args['align'] = $align;
    $columns !== null && $args['columns'] = $columns;
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
 * @param mixed ...$args 其他参数
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
    mixed $pullRefresh = null,
    ...$args
): \AmisSchema\Widget\Layout\Page
{
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $subTitle !== null && $args['subTitle'] = $subTitle;
    $remark !== null && $args['remark'] = $remark;
    $aside !== null && $args['aside'] = $aside;
    $asideResizor !== null && $args['asideResizor'] = $asideResizor;
    $asideMinWidth !== null && $args['asideMinWidth'] = $asideMinWidth;
    $asideMaxWidth !== null && $args['asideMaxWidth'] = $asideMaxWidth;
    $asideSticky !== null && $args['asideSticky'] = $asideSticky;
    $asidePosition !== null && $args['asidePosition'] = $asidePosition;
    $toolbar !== null && $args['toolbar'] = $toolbar;
    $cssVars !== null && $args['cssVars'] = $cssVars;
    $toolbarClassName !== null && $args['toolbarClassName'] = $toolbarClassName;
    $bodyClassName !== null && $args['bodyClassName'] = $bodyClassName;
    $asideClassName !== null && $args['asideClassName'] = $asideClassName;
    $headerClassName !== null && $args['headerClassName'] = $headerClassName;
    $initApi !== null && $args['initApi'] = $initApi;
    $initFetch !== null && $args['initFetch'] = $initFetch;
    $initFetchOn !== null && $args['initFetchOn'] = $initFetchOn;
    $interval !== null && $args['interval'] = $interval;
    $silentPolling !== null && $args['silentPolling'] = $silentPolling;
    $stopAutoRefreshWhen !== null && $args['stopAutoRefreshWhen'] = $stopAutoRefreshWhen;
    $pullRefresh !== null && $args['pullRefresh'] = $pullRefresh;
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
 * @param mixed ...$args 其他参数
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
    mixed $onPageChange = null,
    ...$args
): \AmisSchema\Widget\Layout\Pagination
{
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $mode !== null && $args['mode'] = $mode;
    $layout !== null && $args['layout'] = $layout;
    $maxButtons !== null && $args['maxButtons'] = $maxButtons;
    $total !== null && $args['total'] = $total;
    $activePage !== null && $args['activePage'] = $activePage;
    $perPage !== null && $args['perPage'] = $perPage;
    $showPerPage !== null && $args['showPerPage'] = $showPerPage;
    $ellipsisPageGap !== null && $args['ellipsisPageGap'] = $ellipsisPageGap;
    $perPageAvailable !== null && $args['perPageAvailable'] = $perPageAvailable;
    $showPageInput !== null && $args['showPageInput'] = $showPageInput;
    $onPageChange !== null && $args['onPageChange'] = $onPageChange;
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
 * @param mixed ...$args 其他参数
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
    mixed $position = null,
    ...$args
): \AmisSchema\Widget\Layout\PaginationWrapper
{
    $body !== null && $args['body'] = $body;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $showPageInput !== null && $args['showPageInput'] = $showPageInput;
    $maxButtons !== null && $args['maxButtons'] = $maxButtons;
    $inputName !== null && $args['inputName'] = $inputName;
    $outputName !== null && $args['outputName'] = $outputName;
    $perPage !== null && $args['perPage'] = $perPage;
    $position !== null && $args['position'] = $position;
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
 * @param mixed ...$args 其他参数
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
    mixed $actions = null,
    ...$args
): \AmisSchema\Widget\Layout\Panel
{
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $headerClassName !== null && $args['headerClassName'] = $headerClassName;
    $footerClassName !== null && $args['footerClassName'] = $footerClassName;
    $actionsClassName !== null && $args['actionsClassName'] = $actionsClassName;
    $bodyClassName !== null && $args['bodyClassName'] = $bodyClassName;
    $header !== null && $args['header'] = $header;
    $footer !== null && $args['footer'] = $footer;
    $affixFooter !== null && $args['affixFooter'] = $affixFooter;
    $actions !== null && $args['actions'] = $actions;
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
 * @param mixed ...$args 其他参数
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
    mixed $scrollable = null,
    ...$args
): \AmisSchema\Widget\Layout\Portlet
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $tabsClassName !== null && $args['tabsClassName'] = $tabsClassName;
    $contentClassName !== null && $args['contentClassName'] = $contentClassName;
    $tabs !== null && $args['tabs'] = $tabs;
    $source !== null && $args['source'] = $source;
    $toolbar !== null && $args['toolbar'] = $toolbar;
    $description !== null && $args['description'] = $description;
    $hideHeader !== null && $args['hideHeader'] = $hideHeader;
    $divider !== null && $args['divider'] = $divider;
    $mountOnEnter !== null && $args['mountOnEnter'] = $mountOnEnter;
    $unmountOnExit !== null && $args['unmountOnExit'] = $unmountOnExit;
    $scrollable !== null && $args['scrollable'] = $scrollable;
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
 * @param mixed ...$args 其他参数
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
    mixed $swipeable = null,
    ...$args
): \AmisSchema\Widget\Layout\Tabs
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $defaultKey !== null && $args['defaultKey'] = $defaultKey;
    $activeKey !== null && $args['activeKey'] = $activeKey;
    $linksClassName !== null && $args['linksClassName'] = $linksClassName;
    $contentClassName !== null && $args['contentClassName'] = $contentClassName;
    $tabsMode !== null && $args['tabsMode'] = $tabsMode;
    $tabs !== null && $args['tabs'] = $tabs;
    $source !== null && $args['source'] = $source;
    $toolbar !== null && $args['toolbar'] = $toolbar;
    $toolbarClassName !== null && $args['toolbarClassName'] = $toolbarClassName;
    $mountOnEnter !== null && $args['mountOnEnter'] = $mountOnEnter;
    $unmountOnExit !== null && $args['unmountOnExit'] = $unmountOnExit;
    $addable !== null && $args['addable'] = $addable;
    $addBtnText !== null && $args['addBtnText'] = $addBtnText;
    $closable !== null && $args['closable'] = $closable;
    $draggable !== null && $args['draggable'] = $draggable;
    $showTip !== null && $args['showTip'] = $showTip;
    $showTipClassName !== null && $args['showTipClassName'] = $showTipClassName;
    $editable !== null && $args['editable'] = $editable;
    $scrollable !== null && $args['scrollable'] = $scrollable;
    $sidePosition !== null && $args['sidePosition'] = $sidePosition;
    $collapseOnExceed !== null && $args['collapseOnExceed'] = $collapseOnExceed;
    $collapseBtnLabel !== null && $args['collapseBtnLabel'] = $collapseBtnLabel;
    $swipeable !== null && $args['swipeable'] = $swipeable;
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
 * @param mixed ...$args 其他参数
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
    mixed $data = null,
    ...$args
): \AmisSchema\Widget\Layout\Wrapper
{
    $body !== null && $args['body'] = $body;
    $size !== null && $args['size'] = $size;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
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
 * @param mixed ...$args 其他参数
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
    mixed $loadingOn = null,
    ...$args
): \AmisSchema\Widget\Function\Action
{
    $label !== null && $args['label'] = $label;
    $body !== null && $args['body'] = $body;
    $actionType !== null && $args['actionType'] = $actionType;
    $api !== null && $args['api'] = $api;
    $url !== null && $args['url'] = $url;
    $link !== null && $args['link'] = $link;
    $level !== null && $args['level'] = $level;
    $size !== null && $args['size'] = $size;
    $icon !== null && $args['icon'] = $icon;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $tooltip !== null && $args['tooltip'] = $tooltip;
    $confirmText !== null && $args['confirmText'] = $confirmText;
    $reload !== null && $args['reload'] = $reload;
    $close !== null && $args['close'] = $close;
    $redirect !== null && $args['redirect'] = $redirect;
    $dialog !== null && $args['dialog'] = $dialog;
    $drawer !== null && $args['drawer'] = $drawer;
    $feedback !== null && $args['feedback'] = $feedback;
    $messages !== null && $args['messages'] = $messages;
    $block !== null && $args['block'] = $block;
    $active !== null && $args['active'] = $active;
    $loading !== null && $args['loading'] = $loading;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $iconClassName !== null && $args['iconClassName'] = $iconClassName;
    $rightIcon !== null && $args['rightIcon'] = $rightIcon;
    $rightIconClassName !== null && $args['rightIconClassName'] = $rightIconClassName;
    $activeLevel !== null && $args['activeLevel'] = $activeLevel;
    $activeClassName !== null && $args['activeClassName'] = $activeClassName;
    $confirmTitle !== null && $args['confirmTitle'] = $confirmTitle;
    $disabledTip !== null && $args['disabledTip'] = $disabledTip;
    $tooltipPlacement !== null && $args['tooltipPlacement'] = $tooltipPlacement;
    $blank !== null && $args['blank'] = $blank;
    $content !== null && $args['content'] = $content;
    $target !== null && $args['target'] = $target;
    $countDown !== null && $args['countDown'] = $countDown;
    $countDownTpl !== null && $args['countDownTpl'] = $countDownTpl;
    $hotKey !== null && $args['hotKey'] = $hotKey;
    $downloadFileName !== null && $args['downloadFileName'] = $downloadFileName;
    $to !== null && $args['to'] = $to;
    $cc !== null && $args['cc'] = $cc;
    $bcc !== null && $args['bcc'] = $bcc;
    $subject !== null && $args['subject'] = $subject;
    $tooltipTrigger !== null && $args['tooltipTrigger'] = $tooltipTrigger;
    $loadingOn !== null && $args['loadingOn'] = $loadingOn;
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
 * @param mixed ...$args 其他参数
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
    mixed $direction = null,
    ...$args
): \AmisSchema\Widget\Function\AnchorNav
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $active !== null && $args['active'] = $active;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $linkClassName !== null && $args['linkClassName'] = $linkClassName;
    $sectionClassName !== null && $args['sectionClassName'] = $sectionClassName;
    $direction !== null && $args['direction'] = $direction;
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
 * @param mixed ...$args 其他参数
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
    mixed $pages = null,
    ...$args
): \AmisSchema\Widget\Function\App
{
    $api !== null && $args['api'] = $api;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $brandName !== null && $args['brandName'] = $brandName;
    $logo !== null && $args['logo'] = $logo;
    $header !== null && $args['header'] = $header;
    $asideBefore !== null && $args['asideBefore'] = $asideBefore;
    $asideAfter !== null && $args['asideAfter'] = $asideAfter;
    $footer !== null && $args['footer'] = $footer;
    $pages !== null && $args['pages'] = $pages;
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
 * @param string|array|\AmisSchema\Definition\API $source 动态数据
 * @param mixed ...$args 其他参数
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
    mixed $source = null,
    ...$args
): \AmisSchema\Widget\Function\Breadcrumb
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $itemClassName !== null && $args['itemClassName'] = $itemClassName;
    $separatorClassName !== null && $args['separatorClassName'] = $separatorClassName;
    $dropdownClassName !== null && $args['dropdownClassName'] = $dropdownClassName;
    $dropdownItemClassName !== null && $args['dropdownItemClassName'] = $dropdownItemClassName;
    $separator !== null && $args['separator'] = $separator;
    $labelMaxLength !== null && $args['labelMaxLength'] = $labelMaxLength;
    $tooltipPosition !== null && $args['tooltipPosition'] = $tooltipPosition;
    $source !== null && $args['source'] = $source;
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
 * @param mixed ...$args 其他参数
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
    mixed $loadingOn = null,
    ...$args
): \AmisSchema\Widget\Function\Button
{
    $label !== null && $args['label'] = $label;
    $body !== null && $args['body'] = $body;
    $actionType !== null && $args['actionType'] = $actionType;
    $api !== null && $args['api'] = $api;
    $url !== null && $args['url'] = $url;
    $link !== null && $args['link'] = $link;
    $level !== null && $args['level'] = $level;
    $size !== null && $args['size'] = $size;
    $icon !== null && $args['icon'] = $icon;
    $disabled !== null && $args['disabled'] = $disabled;
    $required !== null && $args['required'] = $required;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $tooltip !== null && $args['tooltip'] = $tooltip;
    $confirmText !== null && $args['confirmText'] = $confirmText;
    $reload !== null && $args['reload'] = $reload;
    $close !== null && $args['close'] = $close;
    $redirect !== null && $args['redirect'] = $redirect;
    $dialog !== null && $args['dialog'] = $dialog;
    $drawer !== null && $args['drawer'] = $drawer;
    $feedback !== null && $args['feedback'] = $feedback;
    $messages !== null && $args['messages'] = $messages;
    $block !== null && $args['block'] = $block;
    $active !== null && $args['active'] = $active;
    $loading !== null && $args['loading'] = $loading;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $iconClassName !== null && $args['iconClassName'] = $iconClassName;
    $rightIcon !== null && $args['rightIcon'] = $rightIcon;
    $rightIconClassName !== null && $args['rightIconClassName'] = $rightIconClassName;
    $activeLevel !== null && $args['activeLevel'] = $activeLevel;
    $activeClassName !== null && $args['activeClassName'] = $activeClassName;
    $confirmTitle !== null && $args['confirmTitle'] = $confirmTitle;
    $disabledTip !== null && $args['disabledTip'] = $disabledTip;
    $tooltipPlacement !== null && $args['tooltipPlacement'] = $tooltipPlacement;
    $blank !== null && $args['blank'] = $blank;
    $content !== null && $args['content'] = $content;
    $target !== null && $args['target'] = $target;
    $countDown !== null && $args['countDown'] = $countDown;
    $countDownTpl !== null && $args['countDownTpl'] = $countDownTpl;
    $hotKey !== null && $args['hotKey'] = $hotKey;
    $downloadFileName !== null && $args['downloadFileName'] = $downloadFileName;
    $to !== null && $args['to'] = $to;
    $cc !== null && $args['cc'] = $cc;
    $bcc !== null && $args['bcc'] = $bcc;
    $subject !== null && $args['subject'] = $subject;
    $tooltipTrigger !== null && $args['tooltipTrigger'] = $tooltipTrigger;
    $loadingOn !== null && $args['loadingOn'] = $loadingOn;
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
 * @param mixed ...$args 其他参数
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
    mixed $buttons = null,
    ...$args
): \AmisSchema\Widget\Function\ButtonGroup
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $vertical !== null && $args['vertical'] = $vertical;
    $tiled !== null && $args['tiled'] = $tiled;
    $btnLevel !== null && $args['btnLevel'] = $btnLevel;
    $btnActiveLevel !== null && $args['btnActiveLevel'] = $btnActiveLevel;
    $buttons !== null && $args['buttons'] = $buttons;
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
 * @param mixed ...$args 其他参数
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
    mixed $onUnmount = null,
    ...$args
): \AmisSchema\Widget\Function\Custom
{
    $name !== null && $args['name'] = $name;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $id !== null && $args['id'] = $id;
    $inline !== null && $args['inline'] = $inline;
    $html !== null && $args['html'] = $html;
    $onMount !== null && $args['onMount'] = $onMount;
    $onUpdate !== null && $args['onUpdate'] = $onUpdate;
    $onUnmount !== null && $args['onUnmount'] = $onUnmount;
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
 * @param mixed ...$args 其他参数
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
    mixed $hideCaret = null,
    ...$args
): \AmisSchema\Widget\Function\DropDownButton
{
    $label !== null && $args['label'] = $label;
    $size !== null && $args['size'] = $size;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $block !== null && $args['block'] = $block;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $btnClassName !== null && $args['btnClassName'] = $btnClassName;
    $menuClassName !== null && $args['menuClassName'] = $menuClassName;
    $align !== null && $args['align'] = $align;
    $buttons !== null && $args['buttons'] = $buttons;
    $iconOnly !== null && $args['iconOnly'] = $iconOnly;
    $defaultIsOpened !== null && $args['defaultIsOpened'] = $defaultIsOpened;
    $closeOnOutside !== null && $args['closeOnOutside'] = $closeOnOutside;
    $closeOnClick !== null && $args['closeOnClick'] = $closeOnClick;
    $trigger !== null && $args['trigger'] = $trigger;
    $hideCaret !== null && $args['hideCaret'] = $hideCaret;
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
 * @param string|array|\AmisSchema\Definition\API $source 可以通过变量或 API 接口动态创建导航
 * @param string|array|\AmisSchema\Definition\API $deferApi 用来延时加载选项详情的接口，可以不配置，不配置公用 source 接口
 * @param array|\AmisSchema\Widget\Widget[] $itemActions 更多操作相关配置
 * @param bool $draggable 是否支持拖拽排序
 * @param bool $dragOnSameLevel 仅允许同层级内拖拽
 * @param string|array|\AmisSchema\Definition\API $saveOrderApi 保存排序的 api
 * @param \AmisSchema\Widget\Extra\Badge $itemBadge 角标
 * @param array|\AmisSchema\Definition\NavLink[] $links 链接集合
 * @param array|\AmisSchema\Definition\NavOverflow $overflow 响应式收纳配置
 * @param bool $searchable 是否开启搜索
 * @param array|\AmisSchema\Definition\NavSearchConfig $searchConfig 搜索配置
 * @param mixed ...$args 其他参数
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
    mixed $searchConfig = null,
    ...$args
): \AmisSchema\Widget\Function\Nav
{
    $level !== null && $args['level'] = $level;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $mode !== null && $args['mode'] = $mode;
    $collapsed !== null && $args['collapsed'] = $collapsed;
    $indentSize !== null && $args['indentSize'] = $indentSize;
    $defaultOpenLevel !== null && $args['defaultOpenLevel'] = $defaultOpenLevel;
    $popupClassName !== null && $args['popupClassName'] = $popupClassName;
    $expandIcon !== null && $args['expandIcon'] = $expandIcon;
    $expandPosition !== null && $args['expandPosition'] = $expandPosition;
    $stacked !== null && $args['stacked'] = $stacked;
    $accordion !== null && $args['accordion'] = $accordion;
    $source !== null && $args['source'] = $source;
    $deferApi !== null && $args['deferApi'] = $deferApi;
    $itemActions !== null && $args['itemActions'] = $itemActions;
    $draggable !== null && $args['draggable'] = $draggable;
    $dragOnSameLevel !== null && $args['dragOnSameLevel'] = $dragOnSameLevel;
    $saveOrderApi !== null && $args['saveOrderApi'] = $saveOrderApi;
    $itemBadge !== null && $args['itemBadge'] = $itemBadge;
    $links !== null && $args['links'] = $links;
    $overflow !== null && $args['overflow'] = $overflow;
    $searchable !== null && $args['searchable'] = $searchable;
    $searchConfig !== null && $args['searchConfig'] = $searchConfig;
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
 * @param mixed ...$args 其他参数
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
    mixed $showErrorMsg = null,
    ...$args
): \AmisSchema\Widget\Function\Service
{
    $body !== null && $args['body'] = $body;
    $api !== null && $args['api'] = $api;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $ws !== null && $args['ws'] = $ws;
    $dataProvider !== null && $args['dataProvider'] = $dataProvider;
    $initFetch !== null && $args['initFetch'] = $initFetch;
    $schemaApi !== null && $args['schemaApi'] = $schemaApi;
    $initFetchSchema !== null && $args['initFetchSchema'] = $initFetchSchema;
    $interval !== null && $args['interval'] = $interval;
    $silentPolling !== null && $args['silentPolling'] = $silentPolling;
    $stopAutoRefreshWhen !== null && $args['stopAutoRefreshWhen'] = $stopAutoRefreshWhen;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
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
 * @param mixed ...$args 其他参数
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
    mixed $tooltipArrowClassName = null,
    ...$args
): \AmisSchema\Widget\Function\TooltipWrapper
{
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $disabled !== null && $args['disabled'] = $disabled;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $content !== null && $args['content'] = $content;
    $placement !== null && $args['placement'] = $placement;
    $tooltipTheme !== null && $args['tooltipTheme'] = $tooltipTheme;
    $offset !== null && $args['offset'] = $offset;
    $showArrow !== null && $args['showArrow'] = $showArrow;
    $enterable !== null && $args['enterable'] = $enterable;
    $trigger !== null && $args['trigger'] = $trigger;
    $mouseEnterDelay !== null && $args['mouseEnterDelay'] = $mouseEnterDelay;
    $mouseLeaveDelay !== null && $args['mouseLeaveDelay'] = $mouseLeaveDelay;
    $rootClose !== null && $args['rootClose'] = $rootClose;
    $inline !== null && $args['inline'] = $inline;
    $wrapperComponent !== null && $args['wrapperComponent'] = $wrapperComponent;
    $tooltipStyle !== null && $args['tooltipStyle'] = $tooltipStyle;
    $tooltipClassName !== null && $args['tooltipClassName'] = $tooltipClassName;
    $tooltipArrowClassName !== null && $args['tooltipArrowClassName'] = $tooltipArrowClassName;
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
 * @param mixed ...$args 其他参数
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
    mixed $actions = null,
    ...$args
): \AmisSchema\Widget\Feedback\Alert
{
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $level !== null && $args['level'] = $level;
    $icon !== null && $args['icon'] = $icon;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $showCloseButton !== null && $args['showCloseButton'] = $showCloseButton;
    $closeButtonClassName !== null && $args['closeButtonClassName'] = $closeButtonClassName;
    $showIcon !== null && $args['showIcon'] = $showIcon;
    $iconClassName !== null && $args['iconClassName'] = $iconClassName;
    $actions !== null && $args['actions'] = $actions;
    return \AmisSchema\Widget\Feedback\Alert::make($args);
}

/**
 * 创建 Dialog 组件
 * 
 * @param string $name 弹框名称，用于动作控制
 * @param string|\AmisSchema\Widget\Widget $title 弹出层标题，支持 SchemaNode
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Feedback\Dialog
 */
function AmisDialog(
    mixed $name = null,
    mixed $title = null,
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
    mixed $overlay = null,
    ...$args
): \AmisSchema\Widget\Feedback\Dialog
{
    $name !== null && $args['name'] = $name;
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $size !== null && $args['size'] = $size;
    $disabled !== null && $args['disabled'] = $disabled;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $bodyClassName !== null && $args['bodyClassName'] = $bodyClassName;
    $closeOnEsc !== null && $args['closeOnEsc'] = $closeOnEsc;
    $closeOnOutside !== null && $args['closeOnOutside'] = $closeOnOutside;
    $showCloseButton !== null && $args['showCloseButton'] = $showCloseButton;
    $showErrorMsg !== null && $args['showErrorMsg'] = $showErrorMsg;
    $showLoading !== null && $args['showLoading'] = $showLoading;
    $actions !== null && $args['actions'] = $actions;
    $width !== null && $args['width'] = $width;
    $height !== null && $args['height'] = $height;
    $headerClassName !== null && $args['headerClassName'] = $headerClassName;
    $bodyStyle !== null && $args['bodyStyle'] = $bodyStyle;
    $draggable !== null && $args['draggable'] = $draggable;
    $position !== null && $args['position'] = $position;
    $resizable !== null && $args['resizable'] = $resizable;
    $overlay !== null && $args['overlay'] = $overlay;
    return \AmisSchema\Widget\Feedback\Dialog::make($args);
}

/**
 * 创建 Drawer 组件
 * 
 * @param string $name 抽屉名称，用于动作控制
 * @param string|\AmisSchema\Widget\Widget $title 弹出层标题，支持 SchemaNode
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Feedback\Drawer
 */
function AmisDrawer(
    mixed $name = null,
    mixed $title = null,
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
    mixed $actions = null,
    ...$args
): \AmisSchema\Widget\Feedback\Drawer
{
    $name !== null && $args['name'] = $name;
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $size !== null && $args['size'] = $size;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $position !== null && $args['position'] = $position;
    $headerClassName !== null && $args['headerClassName'] = $headerClassName;
    $bodyClassName !== null && $args['bodyClassName'] = $bodyClassName;
    $footerClassName !== null && $args['footerClassName'] = $footerClassName;
    $showCloseButton !== null && $args['showCloseButton'] = $showCloseButton;
    $closeOnEsc !== null && $args['closeOnEsc'] = $closeOnEsc;
    $closeOnOutside !== null && $args['closeOnOutside'] = $closeOnOutside;
    $overlay !== null && $args['overlay'] = $overlay;
    $resizable !== null && $args['resizable'] = $resizable;
    $width !== null && $args['width'] = $width;
    $height !== null && $args['height'] = $height;
    $actions !== null && $args['actions'] = $actions;
    return \AmisSchema\Widget\Feedback\Drawer::make($args);
}

/**
 * 创建 Spinner 组件
 * 
 * @param string $type 指定为 Spinner 渲染器
 * @param string $size 大小 sm、lg
 * @param string $icon 自定义图标
 * @param string $className 外层CSS类名
 * @param mixed $style 
 * @param mixed $onEvent 事件
 * @param mixed $visibleOn 
 * @param mixed $disabledOn 
 * @param mixed $data 
 * @param string $tip 自定义文案
 * @param string $tipPlacement 文案位置 top、right、bottom、left
 * @param int $delay 延迟显示
 * @param bool $overlay 是否显示遮罩
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Feedback\Spinner
 */
function AmisSpinner(
    mixed $type = null,
    mixed $size = null,
    mixed $icon = null,
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    mixed $tip = null,
    mixed $tipPlacement = null,
    mixed $delay = null,
    mixed $overlay = null,
    ...$args
): \AmisSchema\Widget\Feedback\Spinner
{
    $type !== null && $args['type'] = $type;
    $size !== null && $args['size'] = $size;
    $icon !== null && $args['icon'] = $icon;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $tip !== null && $args['tip'] = $tip;
    $tipPlacement !== null && $args['tipPlacement'] = $tipPlacement;
    $delay !== null && $args['delay'] = $delay;
    $overlay !== null && $args['overlay'] = $overlay;
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
 * @param mixed ...$args 其他参数
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
    mixed $allowHtml = null,
    ...$args
): \AmisSchema\Widget\Feedback\Toast
{
    $title !== null && $args['title'] = $title;
    $body !== null && $args['body'] = $body;
    $level !== null && $args['level'] = $level;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $position !== null && $args['position'] = $position;
    $closeButton !== null && $args['closeButton'] = $closeButton;
    $showIcon !== null && $args['showIcon'] = $showIcon;
    $timeout !== null && $args['timeout'] = $timeout;
    $allowHtml !== null && $args['allowHtml'] = $allowHtml;
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
 * @param mixed ...$args 其他参数
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
    mixed $schema = null,
    ...$args
): \AmisSchema\Widget\Extra\Amis
{
    $name !== null && $args['name'] = $name;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $props !== null && $args['props'] = $props;
    $schema !== null && $args['schema'] = $schema;
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
 * @param mixed ...$args 其他参数
 * 
 * @return \AmisSchema\Widget\Extra\AmisRenderer
 */
function AmisAmisRenderer(
    mixed $className = null,
    mixed $style = null,
    mixed $onEvent = null,
    mixed $visibleOn = null,
    mixed $disabledOn = null,
    mixed $data = null,
    ...$args
): \AmisSchema\Widget\Extra\AmisRenderer
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
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
 * @param mixed ...$args 其他参数
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
    mixed $controls = null,
    ...$args
): \AmisSchema\Widget\Extra\Audio
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $src !== null && $args['src'] = $src;
    $inline !== null && $args['inline'] = $inline;
    $loop !== null && $args['loop'] = $loop;
    $autoPlay !== null && $args['autoPlay'] = $autoPlay;
    $rates !== null && $args['rates'] = $rates;
    $controls !== null && $args['controls'] = $controls;
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
 * @param mixed ...$args 其他参数
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
    mixed $onError = null,
    ...$args
): \AmisSchema\Widget\Extra\Avatar
{
    $size !== null && $args['size'] = $size;
    $icon !== null && $args['icon'] = $icon;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $src !== null && $args['src'] = $src;
    $defaultAvatar !== null && $args['defaultAvatar'] = $defaultAvatar;
    $text !== null && $args['text'] = $text;
    $fit !== null && $args['fit'] = $fit;
    $shape !== null && $args['shape'] = $shape;
    $gap !== null && $args['gap'] = $gap;
    $alt !== null && $args['alt'] = $alt;
    $draggable !== null && $args['draggable'] = $draggable;
    $crossOrigin !== null && $args['crossOrigin'] = $crossOrigin;
    $onError !== null && $args['onError'] = $onError;
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
 * @param mixed ...$args 其他参数
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
    mixed $animation = null,
    ...$args
): \AmisSchema\Widget\Extra\Badge
{
    $level !== null && $args['level'] = $level;
    $size !== null && $args['size'] = $size;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $mode !== null && $args['mode'] = $mode;
    $text !== null && $args['text'] = $text;
    $overflowCount !== null && $args['overflowCount'] = $overflowCount;
    $position !== null && $args['position'] = $position;
    $offset !== null && $args['offset'] = $offset;
    $animation !== null && $args['animation'] = $animation;
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
 * @param mixed ...$args 其他参数
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
    mixed $statusTextMap = null,
    ...$args
): \AmisSchema\Widget\Extra\Tasks
{
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $tableClassName !== null && $args['tableClassName'] = $tableClassName;
    $checkApi !== null && $args['checkApi'] = $checkApi;
    $submitApi !== null && $args['submitApi'] = $submitApi;
    $reSubmitApi !== null && $args['reSubmitApi'] = $reSubmitApi;
    $interval !== null && $args['interval'] = $interval;
    $taskNameLabel !== null && $args['taskNameLabel'] = $taskNameLabel;
    $operationLabel !== null && $args['operationLabel'] = $operationLabel;
    $statusLabel !== null && $args['statusLabel'] = $statusLabel;
    $remarkLabel !== null && $args['remarkLabel'] = $remarkLabel;
    $btnText !== null && $args['btnText'] = $btnText;
    $retryBtnText !== null && $args['retryBtnText'] = $retryBtnText;
    $btnClassName !== null && $args['btnClassName'] = $btnClassName;
    $retryBtnClassName !== null && $args['retryBtnClassName'] = $retryBtnClassName;
    $statusLabelMap !== null && $args['statusLabelMap'] = $statusLabelMap;
    $statusTextMap !== null && $args['statusTextMap'] = $statusTextMap;
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
 * @param mixed ...$args 其他参数
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
    mixed $props = null,
    ...$args
): \AmisSchema\Widget\Extra\WebComponent
{
    $body !== null && $args['body'] = $body;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $tag !== null && $args['tag'] = $tag;
    $props !== null && $args['props'] = $props;
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
 * @param mixed ...$args 其他参数
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
    mixed $startStep = null,
    ...$args
): \AmisSchema\Widget\Extra\Wizard
{
    $api !== null && $args['api'] = $api;
    $className !== null && $args['className'] = $className;
    $style !== null && $args['style'] = $style;
    $reload !== null && $args['reload'] = $reload;
    $redirect !== null && $args['redirect'] = $redirect;
    $onEvent !== null && $args['onEvent'] = $onEvent;
    $visibleOn !== null && $args['visibleOn'] = $visibleOn;
    $disabledOn !== null && $args['disabledOn'] = $disabledOn;
    $data !== null && $args['data'] = $data;
    $mode !== null && $args['mode'] = $mode;
    $initApi !== null && $args['initApi'] = $initApi;
    $initFetch !== null && $args['initFetch'] = $initFetch;
    $initFetchOn !== null && $args['initFetchOn'] = $initFetchOn;
    $actionPrevLabel !== null && $args['actionPrevLabel'] = $actionPrevLabel;
    $actionNextLabel !== null && $args['actionNextLabel'] = $actionNextLabel;
    $actionNextSaveLabel !== null && $args['actionNextSaveLabel'] = $actionNextSaveLabel;
    $actionFinishLabel !== null && $args['actionFinishLabel'] = $actionFinishLabel;
    $actionClassName !== null && $args['actionClassName'] = $actionClassName;
    $target !== null && $args['target'] = $target;
    $steps !== null && $args['steps'] = $steps;
    $startStep !== null && $args['startStep'] = $startStep;
    return \AmisSchema\Widget\Extra\Wizard::make($args);
}

