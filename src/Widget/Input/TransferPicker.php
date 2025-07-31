<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;
use AmisSchema\Trait\OptionsWidgetTrait;

/**
 * TransferPicker 穿梭选择器组件
 * 
 * 在 Transfer 的基础上扩展了弹窗选择模式，展示值用的是简单的 input 框，但是编辑的操作是弹窗个穿梭框来完成
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/transfer-picker
 *
 * @method $this delimeter(string $value = false) 设置拼接符
 * @method $this searchApi(API $value) 设置如果想通过接口检索，可以设置这个 api
 * @method $this resultListModeFollowSelect(bool $value = false) 设置结果面板跟随模式
 * @method $this statistics(bool $value = true) 设置是否显示统计数据
 * @method $this selectTitle(string $value = "请选择") 设置左侧的标题文字
 * @method $this resultTitle(string $value = "当前选择") 设置右侧结果的标题文字
 * @method $this sortable(bool $value = false) 设置结果可以进行拖拽排序
 * @method $this selectMode(string $value = "list") 设置可选：list、table、tree、chained、associated
 * @method $this searchResultMode(string $value) 设置搜索结果的展示形式
 * @method $this searchPlaceholder(string $value) 设置左侧列表搜索框提示
 * @method $this columns(array $value) 设置当展示形式为 table 可以用来配置展示哪些列
 * @method $this leftOptions(array $value) 设置当展示形式为 associated 时用来配置左边的选项集
 * @method $this leftMode(string $value) 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree
 * @method $this rightMode(string $value) 设置当展示形式为 associated 时用来配置右边的选择形式
 * @method $this resultSearchable(bool $value = false) 设置结果（右则）列表的检索功能
 * @method $this resultSearchPlaceholder(string $value) 设置右侧列表搜索框提示
 * @method $this menuTpl(string $value) 设置用来自定义选项展示
 * @method $this valueTpl(string $value) 设置用来自定义值的展示
 * @method $this borderMode(string $value) 设置边框模式，全边框，还是半边框，或者没边框
 * @method $this modalMode(string $value = "dialog") 设置弹出方式，dialog 或者 drawer
 * @method $this modalTitle(string $value) 设置弹窗标题
 * @method $this modalSize(string $value) 设置弹窗大小，当 modalMode 为 dialog 时有用
 */
class TransferPicker extends FormItem
{
    use OptionsWidgetTrait;

    protected string $type = 'transfer-picker';

    /**
     * 分页配置
     * @param array{
     *     className?: string,
     *     enable?: bool,
     *     layout?: string|array,
     *     perPageAvailable?: array,
     *     maxButtons?: int,
     *     popOverContainerSelector?: string
     * } $value
     * @return self
     */
    public function pagination(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
