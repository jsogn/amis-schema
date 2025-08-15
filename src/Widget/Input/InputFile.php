<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;

/**
 * InputFile 文件上传组件
 *
 * 用来负责文件上传，文件上传成功后会返回文件地址，这个地址会作为这个表单项的值
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-file
 *
 * @method $this receiver(string|array|API $receiver) 上传文件接口
 * @method $this accept(string $accept = 'text/plain') 默认只支持纯文本，要支持其他类型，请配置此属性为文件后缀
 * @method $this capture(string $capture = 'undefined') 用于控制 input[type = file] 标签的 capture 属性，在移动端可控制输入来源
 * @method $this asBase64(bool $asBase64 = false) 将文件以base64的形式，赋值给当前组件
 * @method $this asBlob(bool $asBlob = false) 将文件以二进制的形式，赋值给当前组件
 * @method $this maxSize(int $maxSize) 默认没有限制，当设置后，文件大小大于此值将不允许上传。单位为B
 * @method $this maxLength(int $maxLength) 默认没有限制，当设置后，一次只允许上传指定数量文件
 * @method $this multiple(bool $multiple = false) 是否多选
 * @method $this drag(bool $drag = false) 是否为拖拽上传
 * @method $this joinValues(bool $joinValues = true) 拼接值
 * @method $this extractValue(bool $extractValue = false) 提取值
 * @method $this delimiter(string $delimiter = ',') 拼接符
 * @method $this autoUpload(bool $autoUpload = true) 是否选择完就自动开始上传
 * @method $this hideUploadButton(bool $hideUploadButton = false) 隐藏上传按钮
 * @method $this fileField(string $fileField = 'file') 如果你不想自己存储，则可以忽略此属性
 * @method $this nameField(string $nameField = 'name') 接口返回哪个字段用来标识文件名
 * @method $this valueField(string $valueField = 'value') 文件的值用那个字段来标识
 * @method $this urlField(string $urlField = 'url') 文件下载地址的字段名
 * @method $this btnLabel(string $btnLabel) 上传按钮的文字
 * @method $this downloadUrl(string|bool $downloadUrl = '') 默认显示文件路径的时候会支持直接下载
 * @method $this useChunk(string|bool $useChunk = 'auto') amis 所在服务器，限制了文件上传大小不得超出 10M，所以 amis 在用户选择大文件的时候，自动会改成分块上传模式
 * @method $this chunkSize(int $chunkSize = 5242880) 分块大小，默认为 5M
 * @method $this startChunkApi(string|array|API $startChunkApi) startChunkApi
 * @method $this chunkApi(string|array|API $chunkApi) chunkApi
 * @method $this finishChunkApi(string|array|API $finishChunkApi) finishChunkApi
 * @method $this concurrency(int $concurrency) 分块上传时并行个数
 * @method $this documentation(string $documentation) 文档内容
 * @method $this documentLink(string $documentLink) 文档链接
 * @method $this initAutoFill(bool $initAutoFill = true) 初始表单反显时是否执行
 * @method $this invalidTypeMessage(string $invalidTypeMessage) 校验格式失败后的提示信息
 * @method $this invalidSizeMessage(string $invalidSizeMessage) 校验文件大小失败时显示的文字信息
 * @method $this stateTextMap(array|\AmisSchema\Definition\InputFileStateTextMap $value) InputFile 文件上传状态文本映射
 */
class InputFile extends FormItem
{
    protected string $type = 'input-file';
}
