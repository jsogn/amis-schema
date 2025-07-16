<?php
declare(strict_types=1);

namespace AmisSchema\Definition;

use AmisSchema\Schema;

/**
 * @method $this fetchSuccess(string $fetchSuccess) 接口请求成功时的 toast 提示文字
 * @method $this fetchFailed(string $fetchFailed) 接口请求失败时 toast 提示文字
 *
 * @property string $fetchSuccess 接口请求成功时的 toast 提示文字
 * @property string $fetchFailed 接口请求失败时 toast 提示文字
 */
class ServiceMessage extends Schema
{

}