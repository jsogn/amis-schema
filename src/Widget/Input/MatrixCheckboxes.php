<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * MatrixCheckboxes 矩阵勾选组件
 *
 * 矩阵类型的输入框
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/matrix-checkboxes
 *
 * @method $this columns(array $value) 列信息，数组中 label 字段是必须给出的
 * @method $this rows(array $value) 行信息，数组中 label 字段是必须给出的
 * @method $this rowLabel(string $value) 行标题说明
 * @method $this source(string|array|API $value) Api 地址，如果选项组不固定，可以通过配置 source 动态拉取
 * @method $this multiple(bool $value = true) 是否多选
 * @method $this singleSelectMode(string $value = "column") 设置单选模式，multiple为false时有效，可设置为cell, row, column 分别为全部选项中只能单选某个单元格、每行只能单选某个单元格，每列只能单选某个单元格
 * @method $this textAlign(string $value = "center") 当开启多选+全选时，默认为'left'
 * @method $this yCheckAll(bool $value = false) 列上的全选
 * @method $this xCheckAll(bool $value = false) 行上的全选
 */
class MatrixCheckboxes extends FormItem
{
    protected string $type = 'matrix-checkboxes';
}
