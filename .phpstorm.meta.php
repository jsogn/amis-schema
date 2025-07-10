<?php
declare(strict_types=1);

namespace PHPSTORM_META {
    registerArgumentsSet('size', 'xs', 'sm', 'md', 'lg', 'full');
    registerArgumentsSet('direction', 'horizontal', 'vertical');
    registerArgumentsSet('align', 'right', 'left', 'center');
    registerArgumentsSet('mode', 'normal', 'horizontal', 'inline');

    expectedArguments(\Jiangwang\AmisSchema\Widget\Layout\Page::asidePosition(), 0, 'left', 'right');

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\Form::labelAlign(), 0, argumentsSet('align'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\Form::mode(), 0, argumentsSet('mode'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\FormItem::labelAlign(), 0, argumentsSet('align'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\FormItem::mode(), 0, argumentsSet('align'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\FormItem::size(), 0, argumentsSet('size'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\InputText::borderMode(), 0, argumentsSet('mode'));
}