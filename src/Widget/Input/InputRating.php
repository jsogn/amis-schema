<?php
declare(strict_types=1);

namespace AmisSchema\Widget\Input;

/**
 * InputRating 评分组件
 *
 * 评分组件，支持半星、自定义颜色、字符、提示文字等
 *
 * @link https://baidu.github.io/amis/zh-CN/components/form/input-rating
 *
 * @method $this half(bool $value = false) 是否使用半星选择
 * @method $this count(int $value = 5) 总星数
 * @method $this allowClear(bool $value = true) 是否允许再次点击后清除
 * @method $this inactiveColor(string $value = '#e7e7e8') 未被选中的星星的颜色
 * @method $this textPosition(string $value = 'right') 文字的位置，可选值：'right'、'left'
 * @method $this char(string $value = '★') 自定义字符
 * @method $this charClassName(string $value) 自定义字符类名
 * @method $this textClassName(string $value) 自定义文字类名
 * @method $this colors(array $value) 星星被选中的颜色。 若传入字符串，则只有一种颜色。若传入对象，可自定义分段，键名为分段的界限值，键值为对应的类名
 * @method $this texts(array|string $value) 星星被选中时的提示文字。可自定义分段，键名为分段的界限值，键值为对应的类名
 */
class InputRating extends FormItem
{
    protected string $type = 'input-rating';
}
