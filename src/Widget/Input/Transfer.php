<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;
use AmisSchema\Trait\OptionsWidgetTrait;

/**
 * Transfer 穿梭器组件
 *
 * 穿梭器组件
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/transfer
 *
 * @method $this delimeter(string $value = false) 设置拼接符
 * @method $this searchApi(API $value) 设置如果想通过接口检索，可以设置这个 api
 * @method $this resultListModeFollowSelect(bool $value = false) 设置结果面板跟随模式，目前只支持list、table、tree
 * @method $this statistics(bool $value = true) 设置是否显示统计数据
 * @method $this selectTitle(string $value = "请选择") 设置左侧的标题文字
 * @method $this resultTitle(string $value = "当前选择") 设置右侧结果的标题文字
 * @method $this sortable(bool $value = false) 设置结果可以进行拖拽排序（结果列表为树时，不支持排序）
 * @method $this selectMode(string $value = "list") 设置可选：list、table、tree、chained、associated
 * @method $this searchResultMode(string $value) 设置如果不设置将采用 selectMode 的值，可以单独配置，参考 selectMode，决定搜索结果的展示形式
 * @method $this searchPlaceholder(string $value) 设置左侧列表搜索框提示
 * @method $this columns(array $value) 设置当展示形式为 table 可以用来配置展示哪些列，跟 table 中的 columns 配置相似，只是只有展示功能
 * @method $this leftOptions(array $value) 设置当展示形式为 associated 时用来配置左边的选项集
 * @method $this leftMode(string $value = "list") 设置当展示形式为 associated 时用来配置左边的选择形式，支持 list 或者 tree。默认为 list
 * @method $this rightMode(string $value) 设置当展示形式为 associated 时用来配置右边的选择形式，可选：list、table、tree、chained
 * @method $this resultSearchable(bool $value = false) 设置结果（右则）列表的检索功能，当设置为 true 时，可以通过输入检索模糊匹配检索内容
 * @method $this resultSearchPlaceholder(string $value) 设置右侧列表搜索框提示
 * @method $this menuTpl(string $value) 设置用来自定义选项展示
 * @method $this valueTpl(string $value) 设置用来自定义值的展示
 * @method $this pagination(array|\AmisSchema\Definition\TransferPagination $value) Transfer 穿梭器分页配置
 */
class Transfer extends FormItem
{
    use OptionsWidgetTrait;

    protected string $type = 'transfer';
}
