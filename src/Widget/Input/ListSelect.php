<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * ListSelect 列表
 *
 * ListSelect 一般用来实现选择，可以单选也可以多选，和 Radio/Checkboxs 最大的不同是在展现方面支持带图片
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/list-select
 *
 * @method $this listClassName(string $listClassName) 支持配置 list div 的 css 类名。比如: flex justify-between
 */
class ListSelect extends Options
{
    protected string $type = 'list-select';
}
