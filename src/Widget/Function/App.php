<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Function;

use AmisSchema\Definition\API;
use AmisSchema\Definition\AppPage;
use AmisSchema\Widget\Widget;

/**
 * App 组件，AMis 多页应用渲染器。
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/app
 *
 * @method $this api(string|array|API $value) 页面配置接口，如果想远程拉取页面配置请配置。返回配置路径 json>data>pages
 * @method $this brandName(string $value) 应用名称
 * @method $this logo(string $value) 支持图片地址，或者 svg
 * @method $this header(array|Widget|Widget[]|string $value) 顶部区域
 * @method $this asideBefore(array|Widget|Widget[]|string $value) 页面菜单上前面区域
 * @method $this asideAfter(array|Widget|Widget[]|string $value) 页面菜单下前面区域
 * @method $this footer(array|Widget|Widget[]|string $value) 页面底部区域
 * @method $this pages(array|AppPage[] $value) 具体的页面配置，通常为数组，数组第一层为分组
 */
class App extends Widget
{
    protected string $type = 'app';
}
