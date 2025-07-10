<?php
declare(strict_types=1);

namespace PHPSTORM_META {
    registerArgumentsSet('size', 'xs', 'sm', 'md', 'lg', 'full');
    registerArgumentsSet('direction', 'horizontal', 'vertical');
    registerArgumentsSet('align', 'right', 'left');

    expectedArguments(\Jiangwang\AmisSchema\Widget\Layout\Page::asidePosition(), 0, 'left', 'right');

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\Form::labelAlign(), 0, 'right', 'left');
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\Form::mode(), 0, 'normal', 'horizontal', 'inline');
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\InputText::borderMode(), 0, argumentsSet('size'));
}