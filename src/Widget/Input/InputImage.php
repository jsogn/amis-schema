<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Definition\API;
use AmisSchema\Widget\Widget;

/**
 * InputImage 图片
 *
 * 图片格式输入，需要实现接收器，提交时将以 url 的方式提交，如果需要以表单方式提交请使用 InputFile
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-image
 *
 * @method $this receiver(string|array|API $receiver) 上传文件接口
 * @method $this accept(string $accept = '.jpeg,.jpg,.png,.gif') 支持的图片类型格式，请配置此属性为图片后缀，例如.jpg, .png
 * @method $this capture(string $capture = 'undefined') 用于控制 input[type = file] 标签的 capture 属性，在移动端可控制输入来源
 * @method $this maxSize(int $maxSize) 默认没有限制，当设置后，文件大小大于此值将不允许上传。单位为B
 * @method $this maxLength(int $maxLength) 默认没有限制，当设置后，一次只允许上传指定数量文件
 * @method $this multiple(bool $multiple = false) 是否多选
 * @method $this joinValues(bool $joinValues = true) 拼接值
 * @method $this extractValue(bool $extractValue = false) 提取值
 * @method $this delimiter(string $delimiter = ',') 拼接符
 * @method $this autoUpload(bool $autoUpload = true) 是否选择完就自动开始上传
 * @method $this hideUploadButton(bool $hideUploadButton = false) 隐藏上传按钮
 * @method $this fileField(string $fileField = 'file') 如果你不想自己存储，则可以忽略此属性
 * @method $this cropFormat(string $cropFormat = 'image/png') 裁剪文件格式
 * @method $this cropQuality(float $cropQuality = 1) 裁剪文件格式的质量，用于 jpeg/webp，取值在 0 和 1 之间
 * @method $this frameImage(string $frameImage) 默认占位图地址
 * @method $this fixedSize(bool $fixedSize) 是否开启固定尺寸, 若开启，需同时设置 fixedSizeClassName
 * @method $this fixedSizeClassName(string $fixedSizeClassName) 开启固定尺寸时，根据此值控制展示尺寸。例如h-30, 即图片框高为 h-30, AMIS 将自动缩放比率设置默认图所占位置的宽度，最终上传图片根据此尺寸对应缩放
 * @method $this initAutoFill(bool $initAutoFill = false) 表单反显时是否执行 autoFill
 * @method $this uploadBtnText(string|Widget $uploadBtnText) 上传按钮文案。支持 tpl、schema 形式配置
 * @method $this dropCrop(bool $dropCrop = true) 图片上传后是否进入裁剪模式
 * @method $this initCrop(bool $initCrop = false) 图片选择器初始化后是否立即进入裁剪模式
 * @method $this draggable(bool $draggable = false) 开启后支持拖拽排序改变图片值顺序
 * @method $this draggableTip(string $draggableTip = '拖拽排序') 拖拽提示文案
 * @method $this showErrorModal(bool $showErrorModal = true) 校验失败后是否弹窗提醒
 * @method $this invalidTypeMessage(string $invalidTypeMessage = '文件格式不正确') 校验格式失败后的提示信息
 * @method $this invalidSizeMessage(string $invalidSizeMessage = '文件大小超出限制') 校验文件大小失败时显示的文字信息
 * @method $this crop(bool|array|\AmisSchema\Definition\InputImageCrop $value) InputImage 图片裁剪配置
 * @method $this limit(array|\AmisSchema\Definition\InputImageLimit $value) 限制图片大小，超出不让上传
 */
class InputImage extends FormItem
{
    protected string $type = 'input-image';
}
