<?php
declare(strict_types=1);

namespace PHPSTORM_META {
    registerArgumentsSet('size', 'xs', 'sm', 'md', 'lg', 'full');
    registerArgumentsSet('direction', 'horizontal', 'vertical');
    registerArgumentsSet('align', 'right', 'left', 'center');
    registerArgumentsSet('mode', 'normal', 'horizontal', 'inline');
    registerArgumentsSet('buttonLevel', 'link', 'primary', 'secondary', 'info', 'success', 'warning', 'danger', 'light', 'dark', 'default');

    expectedArguments(\Jiangwang\AmisSchema\Widget\Layout\Page::asidePosition(), 0, 'left', 'right');

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\Form::labelAlign(), 0, argumentsSet('align'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\Form::mode(), 0, argumentsSet('mode'));

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\FormItem::labelAlign(), 0, argumentsSet('align'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\FormItem::mode(), 0, argumentsSet('align'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\FormItem::size(), 0, argumentsSet('size'));

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\InputText::borderMode(), 0, argumentsSet('mode'));

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\ButtonGroupSelect::btnLevel(), 0, argumentsSet('buttonLevel'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\ButtonGroupSelect::btnActiveLevel(), 0, argumentsSet('buttonLevel'));

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\InputColor::format(), 0, 'hex', 'hexa', 'hls', 'rgb', 'rgba');

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\Combo::tabsStyle(), 0, 'line', 'card', 'radio', 'vertical');
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\Combo::subFormMode(), 0, argumentsSet('mode'));

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\ConditionBuilder::selectMode(), 0, 'list', 'tree', 'chained');

    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\InputFormula::variableMode(), 0, 'list', 'tree', 'tabs');
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\InputFormula::inputMode(), 0, 'button', 'input-button', 'input-group');
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\InputFormula::btnSize(), 0, argumentsSet('size'));
    expectedArguments(\Jiangwang\AmisSchema\Widget\Input\InputFormula::borderMode(), 0, 'full', 'half', 'none');
}