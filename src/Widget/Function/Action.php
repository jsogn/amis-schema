<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Function;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * Action 组件，AMis 行为按钮渲染器。
 *
 * @link https://baidu.github.io/amis/zh-CN/components/action
 *
 * @method $this actionType(string $value) 【必填】指定该 action 的作用类型，可选值：'ajax'、'link'、'url'、'drawer'、'dialog'、'confirm'、'cancel'、'prev'、'next'、'copy'、'close'等。
 * @method $this label(string $value) 按钮文本。
 * @method $this level(string $value) 按钮样式，可选值：'link'、'primary'、'secondary'、'info'、'success'、'warning'、'danger'、'light'、'dark'、'default'。
 * @method $this size(string $value) 按钮大小，可选值：'xs'、'sm'、'md'、'lg'。
 * @method $this icon(string $value) 设置图标，例如fa fa-plus。
 * @method $this iconClassName(string $value) 给图标上添加类名。
 * @method $this rightIcon(string $value) 在按钮文本右侧设置图标，例如fa fa-plus。
 * @method $this rightIconClassName(string $value) 给右侧图标上添加类名。
 * @method $this active(bool $value) 按钮是否高亮。
 * @method $this activeLevel(string $value) 按钮高亮时的样式，配置支持同level。
 * @method $this activeClassName(string $value) 给按钮高亮添加类名。
 * @method $this block(bool $value) 用display:"block"来显示按钮。
 * @method $this confirmText(string $value) 当设置后，操作在开始前会询问用户。
 * @method $this confirmTitle(string $value) 确认框标题，前提是 confirmText 有内容。
 * @method $this reload(string $value) 指定此次操作完后，需要刷新的目标组件名字（组件的name值），多个请用逗号隔开。
 * @method $this tooltip(string|array $value) 鼠标停留时弹出该段文字，也可以配置对象类型。
 * @method $this disabledTip(string|array $value) 被禁用后鼠标停留时弹出该段文字，也可以配置对象类型。
 * @method $this tooltipPlacement(string $value) 提示信息位置，可选值：'top'、'bottom'、'left'、'right'。
 * @method $this close(bool|string $value) 当action配置在dialog或drawer的actions中时，配置为true指定此次操作完后关闭当前dialog或drawer。
 * @method $this required(string[] $value) 配置字符串数组，指定在form中进行操作之前，需要指定的字段名的表单项通过验证。
 * @method $this api(string|array $value) ajax类型时的请求地址。
 * @method $this redirect(string $value) 指定当前请求结束后跳转的路径。
 * @method $this feedback(array $value) ajax类型时，当ajax返回正常后，还能接着弹出一个dialog做其他交互。
 * @method $this messages(array $value) ajax操作成功后提示和失败提示配置。
 * @method $this link(string $value) 单页跳转地址。
 * @method $this url(string $value) 页面跳转地址。
 * @method $this blank(bool $value) 如果为true将在新tab页面打开。
 * @method $this dialog(string|array $value) 弹框内容配置。
 * @method $this drawer(string|array $value) 抽屉内容配置。
 * @method $this content(string $value) copy类型时指定复制的内容。
 * @method $this target(string $value) reload类型时需要刷新的目标组件名字。
 * @method $this countDown(int $value) 倒计时时间（秒）。
 * @method $this countDownTpl(string $value) 倒计时显示文本模板。
 * @method $this hotKey(string $value) 键盘快捷键配置。
 * @method $this body(Widget|Widget[]|string $value) 作为容器组件时渲染的其他组件。
 * @method $this downloadFileName(string $value) 下载文件名。
 * @method $this to(string $value) 邮件收件人地址。
 * @method $this cc(string $value) 邮件抄送地址。
 * @method $this bcc(string $value) 邮件匿名抄送地址。
 * @method $this subject(string $value) 邮件主题。
 */
class Action extends Widget
{
    protected string $type = 'action';
}