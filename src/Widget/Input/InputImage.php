<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

use AmisSchema\Widget\Widget;

/**
 * InputImage 图片上传组件
 * 
 * 图片格式输入，需要实现接收器，提交时将以 url 的方式提交，如果需要以表单方式提交请使用 input-file
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-image
 *
 * @method $this receiver(string|array $value) 设置上传文件接口
 * @method $this accept(string $value) 设置支持的图片类型格式，请配置此属性为图片后缀，例如.jpg,.png
 * @method $this maxSize(int $value) 设置默认没有限制，当设置后，文件大小大于此值将不允许上传。单位为B
 * @method $this maxLength(int $value) 设置最多的同时上传的文件数
 * @method $this multiple(bool $value) 设置是否多选
 * @method $this joinValues(bool $value) 设置拼接值
 * @method $this extractValue(bool $value) 设置提取值
 * @method $this delimiter(string $value) 设置拼接符
 * @method $this autoUpload(bool $value) 设置是否选择完就自动开始上传
 * @method $this hideUploadButton(bool $value) 设置隐藏上传按钮
 * @method $this fileField(string $value) 设置如果你不想自己存储，则可以忽略此属性
 * @method $this crop(bool|array $value) 设置用来设置是否支持裁剪
 * @method $this cropFormat(string $value) 设置裁剪文件格式
 * @method $this cropQuality(float $value) 设置裁剪文件格式的质量，用于 jpeg/webp，取值为 0 到 1
 * @method $this limit(array $value) 设置限制图片大小，超出不让上传
 * @method $this frameImage(string $value) 设置默认占位图地址
 * @method $this fixedSize(bool $value) 设置是否开启固定尺寸，若开启，需同时设置 fixedSizeClassName
 * @method $this fixedSizeClassName(string $value) 设置开启固定尺寸时，根据此值控制展示尺寸。例如h-30,w-30
 * @method $this initAutoFill(bool $value) 设置图片上传完毕是否进入裁剪模式
 * @method $this draggable(bool $value) 设置是否支持拖拽排序
 * @method $this uploadBtnText(string $value) 设置上传按钮的文字
 * @method $this imageClassName(string $value) 设置预览图 CSS 类名
 * @method $this thumbMode(string $value) 设置预览图模式，可选：w-full、h-full、contain、cover
 * @method $this thumbRatio(string $value) 设置预览图比例，可选：1:1、4:3、16:9
 */
class InputImage extends Widget
{
    protected string $type = 'input-image';
}
