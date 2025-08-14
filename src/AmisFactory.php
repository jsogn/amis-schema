<?php
declare(strict_types=1);

namespace AmisSchema;

use AmisSchema\Widget\Extra\Badge;
use AmisSchema\Widget\Function\Action;
use AmisSchema\Widget\Function\AnchorNav;
use AmisSchema\Widget\Function\App;
use AmisSchema\Widget\Function\Breadcrumb;
use AmisSchema\Widget\Function\Button;
use AmisSchema\Widget\Function\ButtonGroup;
use AmisSchema\Widget\Function\Custom;
use AmisSchema\Widget\Function\DropDownButton;
use AmisSchema\Widget\Function\Nav;
use AmisSchema\Widget\Function\Service;
use AmisSchema\Widget\Function\TooltipWrapper;
use AmisSchema\Widget\Input\Form;
use AmisSchema\Widget\Input\FormItem;
use AmisSchema\Widget\Layout\Collapse;
use AmisSchema\Widget\Layout\Container;
use AmisSchema\Widget\Layout\Divider;
use AmisSchema\Widget\Layout\Flex;
use AmisSchema\Widget\Layout\Grid;
use AmisSchema\Widget\Layout\Grid2D;
use AmisSchema\Widget\Layout\HBox;
use AmisSchema\Widget\Layout\Page;
use AmisSchema\Widget\Layout\Pagination;
use AmisSchema\Widget\Layout\PaginationWrapper;
use AmisSchema\Widget\Layout\Panel;
use AmisSchema\Widget\Layout\Portlet;
use AmisSchema\Widget\Layout\Tabs;
use AmisSchema\Widget\Layout\Wrapper;

/**
 * Amis Schema 工厂类
 * 
 * 提供简洁的组件创建方法，支持链式调用
 * 
 * @example amis()->Page()->title('首页')->body([...])
 */
class AmisFactory
{
    // Layout 布局组件
    
    /**
     * 创建 Page 页面组件
     */
    public function Page(?array $attribute = []): Page
    {
        return Page::make($attribute);
    }
    
    /**
     * 创建 Container 容器组件
     */
    public function Container(?array $attribute = []): Container
    {
        return Container::make($attribute);
    }
    
    /**
     * 创建 Panel 面板组件
     */
    public function Panel(?array $attribute = []): Panel
    {
        return Panel::make($attribute);
    }
    
    /**
     * 创建 Wrapper 包装器组件
     */
    public function Wrapper(?array $attribute = []): Wrapper
    {
        return Wrapper::make($attribute);
    }
    
    /**
     * 创建 Flex 弹性布局组件
     */
    public function Flex(?array $attribute = []): Flex
    {
        return Flex::make($attribute);
    }
    
    /**
     * 创建 Grid 网格布局组件
     */
    public function Grid(?array $attribute = []): Grid
    {
        return Grid::make($attribute);
    }
    
    /**
     * 创建 Grid2D 二维网格布局组件
     */
    public function Grid2D(?array $attribute = []): Grid2D
    {
        return Grid2D::make($attribute);
    }
    
    /**
     * 创建 HBox 水平布局组件
     */
    public function HBox(?array $attribute = []): HBox
    {
        return HBox::make($attribute);
    }
    
    /**
     * 创建 Tabs 标签页组件
     */
    public function Tabs(?array $attribute = []): Tabs
    {
        return Tabs::make($attribute);
    }
    
    /**
     * 创建 Collapse 折叠面板组件
     */
    public function Collapse(?array $attribute = []): Collapse
    {
        return Collapse::make($attribute);
    }
    
    /**
     * 创建 Divider 分割线组件
     */
    public function Divider(?array $attribute = []): Divider
    {
        return Divider::make($attribute);
    }
    
    /**
     * 创建 Portlet 门户组件
     */
    public function Portlet(?array $attribute = []): Portlet
    {
        return Portlet::make($attribute);
    }
    
    /**
     * 创建 Pagination 分页组件
     */
    public function Pagination(?array $attribute = []): Pagination
    {
        return Pagination::make($attribute);
    }
    
    /**
     * 创建 PaginationWrapper 分页包装器组件
     */
    public function PaginationWrapper(?array $attribute = []): PaginationWrapper
    {
        return PaginationWrapper::make($attribute);
    }
    
    // Function 功能组件
    
    /**
     * 创建 Button 按钮组件
     */
    public function Button(?array $attribute = []): Button
    {
        return Button::make($attribute);
    }
    
    /**
     * 创建 Action 行为按钮组件
     */
    public function Action(?array $attribute = []): Action
    {
        return Action::make($attribute);
    }
    
    /**
     * 创建 ButtonGroup 按钮组组件
     */
    public function ButtonGroup(?array $attribute = []): ButtonGroup
    {
        return ButtonGroup::make($attribute);
    }
    
    /**
     * 创建 DropDownButton 下拉按钮组件
     */
    public function DropDownButton(?array $attribute = []): DropDownButton
    {
        return DropDownButton::make($attribute);
    }
    
    /**
     * 创建 Nav 导航组件
     */
    public function Nav(?array $attribute = []): Nav
    {
        return Nav::make($attribute);
    }
    
    /**
     * 创建 AnchorNav 锚点导航组件
     */
    public function AnchorNav(?array $attribute = []): AnchorNav
    {
        return AnchorNav::make($attribute);
    }
    
    /**
     * 创建 Breadcrumb 面包屑组件
     */
    public function Breadcrumb(?array $attribute = []): Breadcrumb
    {
        return Breadcrumb::make($attribute);
    }
    
    /**
     * 创建 App 应用组件
     */
    public function App(?array $attribute = []): App
    {
        return App::make($attribute);
    }
    
    /**
     * 创建 Service 服务组件
     */
    public function Service(?array $attribute = []): Service
    {
        return Service::make($attribute);
    }
    
    /**
     * 创建 Custom 自定义组件
     */
    public function Custom(?array $attribute = []): Custom
    {
        return Custom::make($attribute);
    }
    
    /**
     * 创建 TooltipWrapper 提示框包装器组件
     */
    public function TooltipWrapper(?array $attribute = []): TooltipWrapper
    {
        return TooltipWrapper::make($attribute);
    }
    
    // Input 输入组件
    
    /**
     * 创建 Form 表单组件
     */
    public function Form(?array $attribute = []): Form
    {
        return Form::make($attribute);
    }
    
    /**
     * 创建 FormItem 表单项组件
     */
    public function FormItem(?array $attribute = []): FormItem
    {
        return FormItem::make($attribute);
    }
    
    // Display 显示组件
    
    /**
     * 创建 Icon 图标组件
     */
    public function Icon(?array $attribute = []): Icon
    {
        return Icon::make($attribute);
    }
    
    /**
     * 创建 Remark 备注组件
     */
    public function Remark(?array $attribute = []): Remark
    {
        return Remark::make($attribute);
    }
    
    // Extra 额外组件
    
    /**
     * 创建 Badge 徽标组件
     */
    public function Badge(?array $attribute = []): Badge
    {
        return Badge::make($attribute);
    }
}
