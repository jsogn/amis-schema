<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * TransferPicker 穿梭选择器组件
 * 
 * 在 Transfer 的基础上扩展了弹窗选择模式，展示值用的是简单的 input 框，但是编辑的操作是弹窗个穿梭框来完成
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/transfer-picker
 *
 * @method $this options(array $value) 设置选项组
 * @method $this source(string|array $value) 设置动态选项组
 * @method $this delimiter(string $value) 设置拼接符，默认为逗号
 * @method $this labelField(string $value) 设置选项标签字段，默认为 label
 * @method $this valueField(string $value) 设置选项值字段，默认为 value
 * @method $this joinValues(bool $value) 设置拼接值，默认为 true
 * @method $this extractValue(bool $value) 设置提取值，默认为 false
 * @method $this searchable(bool $value) 设置当设置为 true 时，左侧列表开启搜索功能
 * @method $this searchApi(string|array $value) 设置如果想通过接口检索，可以设置个 api
 * @method $this statistics(bool $value) 设置是否显示统计数据，默认为 true
 * @method $this selectMode(string $value) 设置选择模式，支持：list、table、tree、chained、associated
 * @method $this columns(array $value) 设置当展示形式为 table 可以用来配置展示哪些列
 * @method $this leftOptions(array $value) 设置当展示形式为 associated 时用来配置左边的选项集
 * @method $this leftMode(string $value) 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree
 * @method $this rightMode(string $value) 设置当展示形式为 associated 时用来配置右边的选择形式
 * @method $this resultListModeFollowSelect(bool $value) 设置结果（右则）列表的模式跟左边的模式保持一致，包括搜索，顶部和底部的工具栏
 * @method $this menuTpl(string $value) 设置支持配置自定义菜单
 * @method $this valueTpl(string $value) 设置支持配置自定义值的展现模板
 * @method $this itemHeight(int $value) 设置每个选项的高度，用于虚拟渲染
 * @method $this virtualThreshold(int $value) 设置在选项数量超过多少时开启虚拟渲染，默认为 100
 * @method $this sortable(bool $value) 设置结果可以进行拖拽排序
 * @method $this selectTitle(string $value) 设置左侧的标题文字
 * @method $this resultTitle(string $value) 设置右侧结果的标题文字
 * @method $this pickerIcon(string $value) 设置选择器按钮图标
 * @method $this resetValue(string $value) 设置清除后设置此配置项给定的值
 * @method $this borderMode(string $value) 设置边框模式，全边框，还是半边框，或者没边框
 * @method $this modalMode(string $value) 设置设置 dialog 或者 drawer，用来配置弹出方式。默认为 dialog
 * @method $this modalTitle(string $value) 设置弹窗标题
 * @method $this modalSize(string $value) 设置弹窗大小，当 modalMode 为 dialog 时有用
 */
class TransferPicker extends Widget
{
    protected string $type = 'transfer-picker';
}
