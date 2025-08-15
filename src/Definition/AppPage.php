<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;
use AmisSchema\Widget\Layout\Page;

/**
 * App 具体的页面配置
 * @method $this label(string $value) 菜单名称
 * @method $this icon(string $value) 菜单图标，比如：fa fa-file
 * @method $this url(string $value) 页面路由路径，支持参数和父级路径拼接
 * @method $this schema(Page $value) 页面的配置，具体配置参考 Page 页面
 * @method $this schemaApi(string|array|API $value) 通过接口拉取页面配置，返回路径为 json>data
 * @method $this link(string $value) 外部链接菜单
 * @method $this redirect(string $value) 命中当前页面时跳转到目标页面
 * @method $this rewrite(string $value) 渲染其他路径的页面，地址不变
 * @method $this isDefaultPage(bool $value) 是否为默认页面（如自定义 404 页面）
 * @method $this visible(bool $value) 是否在菜单中可见
 * @method $this className(string $value) 菜单类名
 */
class AppPage extends Schema
{

}