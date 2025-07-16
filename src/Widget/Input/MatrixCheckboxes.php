<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * MatrixCheckboxes 矩阵勾选组件
 * 
 * 矩阵类型的勾选框
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/matrix-checkboxes
 *
 * @method $this rows(array $value) 设置行配置
 * @method $this columns(array $value) 设置列配置  
 * @method $this rowLabel(string $value) 设置行标题说明
 * @method $this source(string|array $value) 设置Api 地址，如果选项组不固定，可以通过配置 source 动态拉取
 * @method $this multiple(bool $value) 设置设置 true 时，支持多选
 * @method $this singleSelectMode(string $value) 设置设置单选模式，multiple为false时有效，可设置为cell, row, column分别表示全表单选、整行单选、整列单选
 */
class MatrixCheckboxes extends Widget
{
    protected string $type = 'matrix-checkboxes';
}
