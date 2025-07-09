<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Definition;

use Jiangwang\AmisSchema\Schema;

/**
 * @property string|null $fetchSuccess 获取成功时提示
 * @property string|null $fetchFailed 获取失败时提示
 * @property string|null $saveSuccess 保存成功时提示
 * @property string|null $saveFailed 保存失败时提示
 * @property string $validateFailed 表单验证失败时的提示，默认：依赖的部分字段没有通过验证
 *
 * @method $this fetchSuccess(string $value) 设置获取成功时提示
 * @method $this fetchFailed(string $value) 设置获取失败时提示
 * @method $this saveSuccess(string $value) 设置保存成功时提示
 * @method $this saveFailed(string $value) 设置保存失败时提示
 * @method $this validateFailed(string $value) 设置表单验证失败时的提示
 */
class FormMessages extends Schema
{

}