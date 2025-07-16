<?php
declare(strict_types=1);

namespace PHPSTORM_META {

    use AmisSchema\Widget\Input\FormItem;

    registerArgumentsSet('size', 'xs', 'sm', 'md', 'lg', 'full');
    registerArgumentsSet('direction', 'horizontal', 'vertical');
    registerArgumentsSet('align', 'right', 'left', 'center');
    registerArgumentsSet('mode', 'normal', 'horizontal', 'inline');
    registerArgumentsSet('buttonLevel', 'link', 'primary', 'secondary', 'info', 'success', 'warning', 'danger', 'light', 'dark', 'default');

    expectedArguments(\AmisSchema\Widget\Layout\Divider::lineStyle(), 0, 'dashed', 'solid');
    expectedArguments(\AmisSchema\Widget\Layout\Divider::direction(), 0, 'horizontal', 'vertical');
    expectedArguments(\AmisSchema\Widget\Layout\Divider::titlePosition(), 0, 'left', 'center', 'right');

    expectedArguments(\AmisSchema\Widget\Layout\Grid::gap(), 0, 'xs', 'sm', 'base', 'none', 'md', 'lg');
    expectedArguments(\AmisSchema\Widget\Layout\Grid::valign(), 0, 'top', 'middle', 'bottom', 'between');
    expectedArguments(\AmisSchema\Widget\Layout\Grid::align(), 0, 'left', 'right', 'between', 'center');

    expectedArguments(\AmisSchema\Widget\Layout\Hbox::gap(), 0, 'xs', 'sm', 'base', 'none', 'md', 'lg');
    expectedArguments(\AmisSchema\Widget\Layout\Hbox::valign(), 0, 'top', 'middle', 'bottom', 'between');
    expectedArguments(\AmisSchema\Widget\Layout\Hbox::align(), 0, 'left', 'right', 'between', 'center');

    expectedArguments(\AmisSchema\Widget\Layout\Flex::justify(), 0, 'start', 'flex-start', 'center', 'end', 'flex-end', 'space-around', 'space-between', 'space-evenly');
    expectedArguments(\AmisSchema\Widget\Layout\Flex::alignItems(), 0, 'stretch', 'start', 'flex-start', 'flex-end', 'end', 'center', 'baseline');

    expectedArguments(\AmisSchema\Widget\Layout\Page::asidePosition(), 0, 'left', 'right');

    expectedArguments(\AmisSchema\Widget\Layout\Pagination::mode(), 0, 'normal', 'simple');
    expectedArguments(\AmisSchema\Widget\Layout\Pagination::size(), 0, 'sm', 'md');

    expectedArguments(\AmisSchema\Widget\Layout\PaginationWrapper::position(), 0, 'top', 'bottom', 'none');

    expectedArguments(\AmisSchema\Widget\Layout\Tabs::tabsMode(), 0, 'line', 'card', 'radio', 'vertical', 'chrome', 'simple', 'strong', 'tiled', 'sidebar');
    expectedArguments(\AmisSchema\Widget\Layout\Tabs::sidePosition(), 0, 'left', 'right');

    expectedArguments(\AmisSchema\Widget\Layout\Wrapper::size(), 0, 'xs', 'sm', 'md', 'lg');

    expectedArguments(\AmisSchema\Widget\Input\Form::labelAlign(), 0, argumentsSet('align'));
    expectedArguments(\AmisSchema\Widget\Input\Form::mode(), 0, argumentsSet('mode'));

    expectedArguments(\AmisSchema\Widget\Input\FormItem::labelAlign(), 0, argumentsSet('align'));
    expectedArguments(\AmisSchema\Widget\Input\FormItem::mode(), 0, argumentsSet('align'));
    expectedArguments(\AmisSchema\Widget\Input\FormItem::size(), 0, argumentsSet('size'));

    expectedArguments(\AmisSchema\Widget\Input\InputText::borderMode(), 0, argumentsSet('mode'));

    expectedArguments(\AmisSchema\Widget\Input\ButtonGroupSelect::btnLevel(), 0, argumentsSet('buttonLevel'));
    expectedArguments(\AmisSchema\Widget\Input\ButtonGroupSelect::btnActiveLevel(), 0, argumentsSet('buttonLevel'));

    expectedArguments(\AmisSchema\Widget\Input\InputColor::format(), 0, 'hex', 'hexa', 'hls', 'rgb', 'rgba');

    expectedArguments(\AmisSchema\Widget\Input\Combo::tabsStyle(), 0, 'line', 'card', 'radio', 'vertical');
    expectedArguments(\AmisSchema\Widget\Input\Combo::subFormMode(), 0, argumentsSet('mode'));

    expectedArguments(\AmisSchema\Widget\Input\ConditionBuilder::selectMode(), 0, 'list', 'tree', 'chained');

    expectedArguments(\AmisSchema\Widget\Input\InputFormula::variableMode(), 0, 'list', 'tree', 'tabs');
    expectedArguments(\AmisSchema\Widget\Input\InputFormula::inputMode(), 0, 'button', 'input-button', 'input-group');
    expectedArguments(\AmisSchema\Widget\Input\InputFormula::btnSize(), 0, argumentsSet('size'));
    expectedArguments(\AmisSchema\Widget\Input\InputFormula::borderMode(), 0, 'full', 'half', 'none');

    expectedArguments(\AmisSchema\Widget\Input\FieldSet::titlePosition(), 0, 'top', 'bottom');
}