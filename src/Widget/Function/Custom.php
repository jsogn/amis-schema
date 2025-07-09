<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Custom 自定义组件
 * 
 * 用于实现自定义组件，它解决了之前 JS SDK 和可视化编辑器中难以支持自定义组件的问题
 * 
 * @link https://baidu.github.io/amis/zh-CN/components/custom
 * 
 * @method $this id(string $id) 节点 id
 * @method $this name(string $name) 节点名称
 * @method $this className(string $className) 节点 class
 * @method $this inline(bool $inline) 默认使用 div 标签，如果 true 就使用 span 标签，默认 false
 * @method $this html(string $html) 初始化节点 html
 * @method $this onMount(string $onMount) 节点初始化之后调用的函数
 * @method $this onUpdate(string $onUpdate) 数据有更新的时候调用的函数
 * @method $this onUnmount(string $onUnmount) 节点销毁的时候调用的函数
 */
class Custom extends Widget
{
    protected string $type = 'custom';
}