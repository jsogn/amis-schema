<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

/**
 * ChainedSelect 链式下拉框组件
 *
 * 用于实现无限级别下拉，只支持单选，且必须和 source 搭配，通过 API 拉取数据，
 * 只要 API 有返回结果，就能一直无限级别下拉
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/chain-select
 */
class ChainedSelect extends Options
{
    protected string $type = 'chained-select';
}
