<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Function\Button;

/**
 * Combo 组合组件
 *
 * 用于将多个表单项组合到一起，实现深层结构的数据编辑
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/combo
 *
 * @method $this formClassName(string $value) 设置单组表单项的类名
 * @method $this items(array|FormItem[] $value) 设置组合展示的表单项
 * @method $this noBorder(bool $value = false) 设置单组表单项是否显示边框，默认为 false
 * @method $this scaffold(array|FormItem $value) 设置单组表单项初始值，默认为空对象
 * @method $this multiple(bool $value = false) 设置是否多选，默认为 false
 * @method $this perPage(int $value = 0) 设置配置正整数后支持分页展示，默认为 0
 * @method $this multiLine(bool $value) 设置是否竖着展示，默认是横着展示一排，设置以后竖着展示，默认为 false
 * @method $this minLength(int $value) 设置最少添加的条数，2.4.1 版本后支持变量
 * @method $this maxLength(int $value) 设置最多添加的条数，2.4.1 版本后支持变量
 * @method $this flat(bool $value) 设置是否将结果扁平化(去掉name)，只有当items的length为1且multiple为true的时候才有效，默认为 false
 * @method $this joinValues(bool $value) 设置默认为 true，当扁平化开启的时候，是否用分隔符的形式发送给后端，否则采用 array 的方式
 * @method $this delimiter(string $value) 设置当扁平化开启并且joinValues为true时，用什么分隔符
 * @method $this addable(bool $value = false) 设置是否可新增，默认为 false
 * @method $this addAtTop(bool $value = false) 设置在顶部添加，默认为 false
 * @method $this addButtonText(string $value = '新增') 设置新增按钮文字，默认为"新增"
 * @method $this addButtonClassName(string $value) 设置新增按钮 CSS 类名
 * @method $this addBtn(array|Button $value) 设置自定义新增按钮，可新增自定义配置渲染新增按钮，在tabsMode: true下不生效
 * @method $this removable(bool $value = false) 设置是否可删除，默认为 false
 * @method $this deleteApi(string|array|API $value) 设置如果配置了，则删除前会发送一个 api，请求成功才完成删除
 * @method $this deleteConfirmText(string $value = '确认要删除?') 设置删除时用来做用户确认，默认为"确认要删除？"
 * @method $this deleteBtn(array|string|Button $value) 设置自定义删除按钮，只有当removable为 true 时有效；如果为string则为按钮的文本；如果为Button则根据配置渲染删除按钮
 * @method $this draggable(bool $value) 设置是否可以拖动排序，需要注意的是当启用拖动排序的时候，会多一个$id字段，默认为 false
 * @method $this draggableTip(string $value) 设置可拖拽的提示文字
 * @method $this nullable(bool $value = false) 设置允许为空，如果子表单项里面配置验证器，且又是单条模式。可以允许用户选择清空（不填），默认为 false
 * @method $this justify(bool $value = false) 设置默认 false，可以让所有列的宽度相等，多列的时候生效
 * @method $this syncFields(array|string[] $value = []) 设置配置同步字段，只有 strictMode 为 false 时有效，默认为空数组
 * @method $this typeSwitchable(bool $value = false) 设置是否可切换条件，配合conditions使用，默认为 false
 * @method $this tabsMode(bool $value = false) 设置采用 Tabs 展示方式，默认为 false
 * @method $this tabsStyle(string $value) 设置Tabs 的展示模式，可选值：line、card、radio、vertical
 * @method $this tabsLabelTpl(string $value = '成员 ${index|plus}') 设置选项卡标题的生成模板，默认为："成员 \${index|plus}"
 * @method $this canAccessSuperData(bool $value = false) 设置指定是否可以自动获取上层的数据并映射到表单项上，默认为 false
 * @method $this lazyLoad(bool $value) 设置是否为懒加载模式，如果是，则需要点击展开才会渲染内部
 * @method $this subFormMode(string $value = 'normal') 设置子表单模式，可选normal、horizontal、inline，默认为 "normal"
 * @method $this itemClassName(string $value) 设置单组 CSS 类
 * @method $this itemsWrapperClassName(string $value) 设置组合区域 CSS 类
 */
class Combo extends FormItem
{
    protected string $type = 'combo';

    /**
     * 设置数组的形式包含所有条件的渲染类型，单个数组内的test为判断条件，数组内的items为符合该条件后渲染的schema
     * @param array{
     *     label: string,
     *     test: string,
     *     scaffold: array|FormItem,
     *     items: FormItem[]|array
     * } $value
     * @return self
     */
    public function conditions(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }

    /**
     * 设置当 subFormMode 为 horizontal 时有用，用来控制 label 的展示占比，默认为 {"left":2, "right":10, "justify": false}
     * @param array{
     *     left: int,
     *     right: int,
     *     justify: bool
     * } $value
     * @return self
     */
    public function subFormHorizontal(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}
