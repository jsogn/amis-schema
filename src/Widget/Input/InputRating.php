<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema\Widget\Input;

use Jiangwang\AmisSchema\Widget\Widget;

/**
 * InputRating 评分组件
 * 
 * 支持只读和选择两种模式
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-rating
 *
 * @method $this half(bool $value) 设置是否使用半星选择
 * @method $this count(int $value) 设置共有多少颗星可供选择，默认为 5
 * @method $this readOnly(bool $value) 设置是否为只读模式
 * @method $this allowClear(bool $value) 设置是否允许再次点击后清除
 * @method $this colors(array $value) 设置星星被选中的颜色
 * @method $this inactiveColor(string $value) 设置未被选中的星星的颜色
 * @method $this texts(array $value) 设置星星被选中时的提示文字
 * @method $this textPosition(string $value) 设置文字的位置，默认为right，可选left、right、top、bottom
 * @method $this textClassName(string $value) 设置文字的类名
 * @method $this char(string $value) 设置自定义字符
 * @method $this size(int $value) 设置星星的大小
 * @method $this className(string $value) 设置外层dom的类名
 */
class InputRating extends Widget
{
    protected string $type = 'input-rating';
}
