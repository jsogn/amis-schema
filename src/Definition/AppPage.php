<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;
use AmisSchema\Widget\Layout\Page;

/**
 * App 具体的页面配置
 * @method $this label(string $label) 菜单名称
 * @method $this icon(string $icon) 菜单图标，比如：fa fa-file
 * @method $this url(string $url) 页面路由路径，支持参数和父级路径拼接
 * @method $this schema(Page $schema) 页面的配置，具体配置参考 Page 页面
 * @method $this schemaApi(string|API $schemaApi) 通过接口拉取页面配置，返回路径为 json>data
 * @method $this link(string $link) 外部链接菜单
 * @method $this redirect(string $redirect) 命中当前页面时跳转到目标页面
 * @method $this rewrite(string $rewrite) 渲染其他路径的页面，地址不变
 * @method $this isDefaultPage(bool $isDefaultPage) 是否为默认页面（如自定义 404 页面）
 * @method $this visible(bool $visible) 是否在菜单中可见
 * @method $this className(string $className) 菜单类名
 *
 * @property string $label 菜单名称
 * @property string $icon 菜单图标，比如：fa fa-file
 * @property string $url 页面路由路径，支持参数和父级路径拼接
 * @property Page $schema 页面的配置，具体配置参考 Page 页面
 * @property string|API $schemaApi 通过接口拉取页面配置，返回路径为 json>data
 * @property string $link 外部链接菜单
 * @property string $redirect 命中当前页面时跳转到目标页面
 * @property string $rewrite 渲染其他路径的页面，地址不变
 * @property bool $isDefaultPage 是否为默认页面（如自定义 404 页面）
 * @property bool $visible 是否在菜单中可见
 * @property string $className 菜单类名
 */
class AppPage extends Schema
{

}