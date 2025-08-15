<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Function\Action;
use AmisSchema\Widget\Widget;

/**
 * Form 表单组件。
 *
 * 支持各种表单项配置、数据提交、验证等功能。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/index
 *
 * @method $this title(string $value) 设置表单标题。
 * @method $this mode(string $value) 设置表单展示方式，可选值：'normal'、'horizontal'、'inline'。
 * @method $this body(FormItem[]|Widget[] $value) 设置表单项集合。
 * @method $this actions(Action[]|Widget[] $value) 设置表单按钮组。
 * @method $this wrapWithPanel(bool $value) 设置是否让表单用 panel 包裹。
 * @method $this panelClassName(string $value) 设置外层 panel 的类名。
 * @method $this api(string|array|API $value) 设置表单提交接口。
 * @method $this initApi(string|array|API $value) 设置初始数据接口。
 * @method $this interval(int $value) 设置刷新时间间隔（毫秒）。
 * @method $this silentPolling(bool $value) 设置配置刷新时是否静默。
 * @method $this stopAutoRefreshWhen(string $value) 设置停止自动刷新的条件。
 * @method $this initAsyncApi(string|array|API $value) 设置异步初始数据接口。
 * @method $this initFetch(bool $value) 设置是否初始拉取数据。
 * @method $this initFetchOn(string $value) 设置初始是否拉取数据的表达式。
 * @method $this initFinishedField(string $value) 设置异步请求完成后的字段名。
 * @method $this initCheckInterval(int $value) 设置异步请求轮询间隔。
 * @method $this asyncApi(string|array|API $value) 设置设置此属性后，表单提交发送保存接口后，还会继续轮询请求该接口，直到返回 finished 属性为 true 才 结束。
 * @method $this checkInterval(int $value) 设置轮询请求的时间间隔。
 * @method $this finishedField(string $value) 设置如果决定结束的字段名不是 finished 请设置此属性。
 * @method $this submitText(string $value) 设置默认的提交按钮名称。
 * @method $this className(string $value) 设置外层 dom 类名。
 * @method $this redirect(string $value) 设置提交成功后跳转到的地址。
 * @method $this reload(string $value) 设置提交成功后刷新目标对象。
 * @method $this autoFocus(bool $value) 设置是否自动聚焦第一个表单项。
 * @method $this canAccessSuperData(bool $value) 设置指定是否可以自动获取上层的数据并映射到表单项上。
 * @method $this persistData(string $value) 设置指定一个唯一的 key，来配置当前表单在 LocalStorage 中缓存的 key。
 * @method $this clearPersistDataAfterSubmit(bool $value) 设置指定表单提交成功后是否清除本地缓存。
 * @method $this preventEnterSubmit(bool $value) 设置禁用回车提交功能。
 * @method $this trimValues(bool $value) 设置是否去除提交数据中的空白字符。
 * @method $this promptPageLeave(bool $value) 设置页面离开提示。
 * @method $this submitOnChange(bool $value) 设置表单修改即提交。
 * @method $this submitOnInit(bool $value) 设置初始就提交一次。
 * @method $this resetAfterSubmit(bool $value) 设置提交后是否重置表单。
 * @method $this primaryField(string $value) 设置设置主键 id，当设置后，检测表单是否完成时（asyncApi），只会携带此数据。
 * @method $this target(string $value) 设置默认表单提交自己会通过发送 api 保存数据，但是也可以设定另外一个 form 的 name 值，或者另外一个 `CRUD` 模型上的 name 值。
 * @method $this columnCount(int $value) 设置表单项显示为几列。
 * @method $this inherit(bool $value) 设置默认表单是独立的，如果想要看到上层数据，需要明确指定这个属性。
 * @method $this staticOn(string $value) 设置是否静态展示表达式。
 * @method $this debug(bool $value) 设置开启调试，就会在表单顶部实时显示表单项数据。
 * @method $this messagesFetchSuccess(string $value) 设置获取成功时提示。
 * @method $this messagesFetchFailed(string $value) 设置获取失败时提示。
 * @method $this messagesSaveSuccess(string $value) 设置保存成功时提示。
 * @method $this messagesSaveFailed(string $value) 设置保存失败时提示。
 * @method $this messagesValidateFailed(string $value) 设置表单验证失败时的提示。
 * @method $this persistDataKeys(string[] $value) 设置本地缓存的 key 列表。
 * @method $this static (bool $value) 设置表单静态展示。
 * @method $this staticClassName(string $value) 设置静态展示时的类名。
 * @method $this closeDialogOnSubmit(bool $value) 设置提交时是否关闭弹窗。
 * @method $this name(string $value) 设置表单名称，方便其他组件通信。
 * @method $this labelAlign(string $value) "right" | "left" 设置表单项标签对齐方式，仅在 horizontal 时生效。
 * @method $this labelWidth(int|string $value) 设置表单项标签自定义宽度。
 * @method $this inheritData(bool $value) 设置是否共用上层数据域。
 */
class Form extends Widget
{
    protected string $type = 'form';

    /**
     * 当 mode 为 horizontal 时有用，用来控制 label 的展示占比
     * @param array{
     *     left: int,
     *     right: int,
     *     justify: bool
     * } $value
     * @return self
     */
    public function horizontal(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }

    /**
     * 消息提示覆写，默认消息读取的是 API 返回的消息，但是在此可以覆写它。
     * @param array{
     *     fetchSuccess?: string,
     *     fetchFailed?: string,
     *     saveSuccess?: string,
     *     saveFailed?: string,
     *     validateFailed?: string
     * } $value
     * @return self
     */
    public function messages(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }

    /**
     * 设置组合校验规则
     * @param array<array{
     *     rule: string,
     *     message: string,
     *     name: array
     * }> $value
     * @return self
     */
    public function rules(array $value): self
    {
        return $this->setAttribute(__FUNCTION__, $value);
    }
}