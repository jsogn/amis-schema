<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Definition\AppPage;
use Jiangwang\AmisSchema\Widget\Widget;

/**
 * App 组件，AMis 多页应用渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/app
 *
 * @method $this api(string|array $value) 页面配置接口，如果想远程拉取页面配置请配置。
 * @method $this brandName(string $value) 应用名称。
 * @method $this logo(string $value) 支持图片地址，或者 svg。
 * @method $this className(string $value) css 类名。
 * @method $this header(Widget|Widget[]|string $value) 顶部区域。
 * @method $this asideBefore(Widget|Widget[]|string $value) 页面菜单上前面区域。
 * @method $this asideAfter(Widget|Widget[]|string $value) 页面菜单下前面区域。
 * @method $this footer(Widget|Widget[]|string $value) 页面底部区域。
 * @method $this pages(AppPage[] $value) 具体的页面配置。
 */
class App extends Widget
{
    protected string $type = 'app';
}
