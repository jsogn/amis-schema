<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * Hidden 隐藏字段
 *
 * 默认表单提交，在没有自定义 API 请求数据的情况下，只会发送 body 里面的这些成员，对于隐藏的字段同时又希望提交表单的时候带过去，可以使用 hidden 组件
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/hidden
 */
class Hidden extends FormItem
{
    protected string $type = 'hidden';
}
