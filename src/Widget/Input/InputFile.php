<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputFile 文件上传组件
 * 
 * 用来负责文件上传，文件上传成功后会返回文件地址，这个地址会作为这个表单项的值
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-file
 *
 * @method $this receiver(string|array $value) 设置上传文件接口
 * @method $this accept(string $value) 设置默认只支持纯文本，要支持其他类型，请配置此属性为文件后缀 .xlsx,.xls
 * @method $this asBase64(bool $value) 设置将文件以base64的形式，赋值给当前组件
 * @method $this asBlob(bool $value) 设置将文件以二进制的形式，赋值给当前组件
 * @method $this maxSize(int $value) 设置默认没有限制，当设置后，文件大小大于此值将不允许上传。单位为B
 * @method $this maxLength(int $value) 设置最多的同时上传的文件数
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this joinValues(bool $value) 设置拼接值
 * @method $this extractValue(bool $value) 设置提取值
 * @method $this delimiter(string $value) 设置拼接符
 * @method $this autoUpload(bool $value) 设置否选择完就自动开始上传
 * @method $this hideUploadButton(bool $value) 设置隐藏上传按钮
 * @method $this stateTextMap(array $value) 设置上传状态文案
 * @method $this fileField(string $value) 设置如果你不想自己存储，则可以忽略此属性。
 * @method $this nameField(string $value) 设置接口返回哪个字段用来标识文件名
 * @method $this valueField(string $value) 设置文件的值用那个字段来标识
 * @method $this urlField(string $value) 设置文件下载地址的字段名
 * @method $this btnLabel(string $value) 设置上传按钮的文字
 * @method $this downloadUrl(string|bool $value) 设置默认显示文件路径的时候会支持直接下载，可以支持加前缀如：http://xx.dom/filename= ，如果不希望这样，可以把当前配置项设置为 false
 * @method $this useChunk(string $value) 设置amis 所在服务器，限制了文件上传大小不得超过 10M，所以 amis 在用户选择大文件的时候，自动会改成分块上传模式
 * @method $this chunkSize(int $value) 设置分块大小，默认为 5M
 * @method $this startChunkApi(string|array $value) 设置startChunkApi
 * @method $this chunkApi(string|array $value) 设置chunkApi
 * @method $this finishChunkApi(string|array $value) 设置finishChunkApi
 * @method $this concurrency(int $value) 设置分块上传时并发数
 * @method $this documentation(string $value) 设置文档内容
 * @method $this documentLink(string $value) 设置文档链接
 */
class InputFile extends Widget
{
    protected string $type = 'input-file';
}
