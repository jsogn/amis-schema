<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Layout;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Display\Remark;
use AmisSchema\Widget\Widget;

/**
 * Page 组件，AMis 页面布局容器。
 *
 * 支持页面标题、副标题、边栏、工具栏、内容区等丰富配置。
 * 通过 initApi 可拉取初始数据，支持自动刷新、下拉刷新等功能。
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/page
 *
 * @method $this title(Widget|Widget[]|string $value = '') 设置页面标题
 * @method $this subTitle(Widget|Widget[]|string $value = '') 设置页面副标题
 * @method $this remark(Remark $value = null) 设置标题附近的提示内容
 * @method $this aside(Widget|Widget[]|string $value = '') 设置页面边栏内容
 * @method $this asideResizor(bool $value = false) 设置边栏宽度是否可调整
 * @method $this asideMinWidth(int|float $value = 0) 设置边栏最小宽度
 * @method $this asideMaxWidth(int|float $value = 0) 设置边栏最大宽度
 * @method $this asideSticky(bool $value = true) 设置边栏是否固定
 * @method $this asidePosition(string $value = 'left') 设置边栏位置（left/right）
 * @method $this toolbar(Widget|Widget[]|array|string $value = '') 设置右上角工具栏内容
 * @method $this body(Widget|string|array|Widget[] $value = '') 设置页面内容区
 * @method $this cssVars(array $value = []) 设置自定义 CSS 变量
 * @method $this toolbarClassName(string $value = 'v-middle wrapper text-right bg-light b-b') 设置 Toolbar dom 类名
 * @method $this bodyClassName(string $value = 'wrapper') 设置 Body dom 类名
 * @method $this asideClassName(string $value = 'w page-aside-region bg-auto') 设置 Aside dom 类名
 * @method $this headerClassName(string $value = 'bg-light b-b wrapper') 设置 Header 区域 dom 类名
 * @method $this initApi(API|string|array $value = '') 设置初始数据 API
 * @method $this initFetch(bool $value = true) 设置是否自动拉取初始数据
 * @method $this initFetchOn(string $value = '') 设置是否拉取初始数据的表达式
 * @method $this interval(int $value = 3000) 设置自动刷新时间间隔（ms）
 * @method $this silentPolling(bool $value = false) 设置刷新时是否静默
 * @method $this stopAutoRefreshWhen(string $value = '') 设置停止自动刷新的表达式
 * @method $this pullRefresh(array $value = ['disabled' => true]) 设置下拉刷新配置
 */
class Page extends Widget
{
    protected string $type = 'page';
}