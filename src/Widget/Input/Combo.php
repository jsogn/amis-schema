<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Combo 组合组件
 * 
 * 组合输入，支持同时输入多种类型的数据
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/combo
 *
 * @method $this formClassName(string $value) 设置单组表单项的类名
 * @method $this items(array $value) 设置组合展示的表单项
 * @method $this noBorder(bool $value) 设置单组表单项是否显示边框
 * @method $this scaffold(array $value) 设置单组表单项初始值
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this multiLine(bool $value) 设置默认是横着展示一排，设置以后竖着展示
 * @method $this minLength(int $value) 设置最少添加的条数
 * @method $this maxLength(int $value) 设置最多添加的条数
 * @method $this flat(bool $value) 设置是否将结果扁平化(去掉name),只有当items的length为1且multiple为true的时候才有效
 * @method $this joinValues(bool $value) 设置默认为 true 当扁平化开启的时候，是否用分隔符的形式发送给后端，否则采用 array 的方式
 * @method $this delimiter(string $value) 设置当扁平化开启并且joinValues为true时，用什么分隔符
 * @method $this addable(bool $value) 设置是否可新增
 * @method $this addButtonText(string $value) 设置新增按钮文字，默认为"新增"
 * @method $this removable(bool $value) 设置是否可删除
 * @method $this deleteApi(string|array $value) 设置如果配置了，则删除前会发送一个 api，请求成功才完成删除
 * @method $this deleteConfirmText(string $value) 设置删除时用来做用户确认
 * @method $this draggable(bool $value) 设置是否可以拖拽排序, 需要注意的是当启用拖拽排序的时候，会多一个\$id 字段
 * @method $this draggableTip(string $value) 设置可拖拽的提示文字
 * @method $this addBtn(array $value) 设置自定义新增按钮
 * @method $this nullable(bool $value) 设置允许为空，如果子表单项里面配置验证器，且又是单条模式。可以允许用户选择清空（不填）。
 * @method $this justify(bool $value) 设置默认 false, 可以让所有列的宽度相等。多列的时候生效。
 * @method $this strictMode(bool $value) 设置默认为严格模式，设置为 false 时，当其他表单项更新是，里面的表单项也可以及时获取，否则不会。
 * @method $this syncFields(array $value) 设置配置同步字段。只有 strictMode 为 false 时有效。
 * @method $this typeSwitchable(bool $value) 设置支持类型切换，类型切换的前提是items里面不能有name相同的情况
 * @method $this conditions(array $value) 设置类型切换配置
 * @method $this tabsMode(bool $value) 设置采用 Tabs 展示方式？
 * @method $this tabsStyle(string $value) 设置Tabs 的展示模式，可选值：line、card、radio、vertical
 * @method $this tabsLabelTpl(string $value) 设置选项卡标题的生成模板。
 * @method $this placeholder(string $value) 设置占位符
 * @method $this canAccessSuperData(bool $value) 设置指定是否可以自动获取上层的数据并映射到表单项上
 * @method $this lazyLoad(bool $value) 设置是否为懒加载模式，如果是，则需要点击展开才会渲染内部。
 * @method $this subFormMode(string $value) 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 * @method $this subFormHorizontal(array $value) 设置如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
 */
class Combo extends Widget
{
    protected string $type = 'combo';
}
