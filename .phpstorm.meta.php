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

    expectedArguments(\AmisSchema\Widget\Function\Action::actionType(), 0, 'ajax', 'link', 'url', 'drawer', 'dialog', 'confirm', 'cancel', 'prev', 'next', 'copy', 'close', 'download', 'saveAs', 'email', 'reload', 'submit', 'reset', 'clear', 'reset-and-submit', 'clear-and-submit');
    expectedArguments(\AmisSchema\Widget\Function\Action::level(), 0, argumentsSet('buttonLevel'));
    expectedArguments(\AmisSchema\Widget\Function\Action::activeLevel(), 0, argumentsSet('buttonLevel'));
    expectedArguments(\AmisSchema\Widget\Function\Action::size(), 0, 'xs', 'sm', 'md', 'lg');
    expectedArguments(\AmisSchema\Widget\Function\Action::tooltipPlacement(), 0, 'top', 'bottom', 'left', 'right');

    expectedArguments(\AmisSchema\Widget\Function\Button::size(), 0, 'xs', 'sm', 'md', 'lg');
    expectedArguments(\AmisSchema\Widget\Function\Button::actionType(), 0, 'button', 'reset', 'submit', 'clear', 'url');
    expectedArguments(\AmisSchema\Widget\Function\Button::level(), 0, 'link', 'primary', 'enhance', 'secondary', 'info', 'success', 'warning', 'danger', 'light', 'dark', 'default');
    expectedArguments(\AmisSchema\Widget\Function\Button::tooltipPlacement(), 0, 'top', 'right', 'bottom', 'left');
    expectedArguments(\AmisSchema\Widget\Function\Button::tooltipTrigger(), 0, 'hover', 'focus');

    expectedArguments(\AmisSchema\Widget\Function\ButtonGroup::btnLevel(), 0, argumentsSet('buttonLevel'));
    expectedArguments(\AmisSchema\Widget\Function\ButtonGroup::btnActiveLevel(), 0, argumentsSet('buttonLevel'));

    expectedArguments(\AmisSchema\Widget\Function\Breadcrumb::tooltipPosition(), 0, 'top', 'bottom', 'left', 'right');

    expectedArguments(\AmisSchema\Widget\Function\DropDownButton::size(), 0, 'xs', 'sm', 'md', 'lg');
    expectedArguments(\AmisSchema\Widget\Function\DropDownButton::align(), 0, 'left', 'right');
    expectedArguments(\AmisSchema\Widget\Function\DropDownButton::trigger(), 0, 'click', 'hover');

    expectedArguments(\AmisSchema\Widget\Function\Nav::mode(), 0, 'inline', 'float', 'panel');
    expectedArguments(\AmisSchema\Widget\Function\Nav::expandPosition(), 0, 'before', 'after');

    expectedArguments(\AmisSchema\Widget\Function\AnchorNav::direction(), 0, 'vertical', 'horizontal');

    expectedArguments(\AmisSchema\Widget\Function\TooltipWrapper::placement(), 0, 'top', 'left', 'right', 'bottom');
    expectedArguments(\AmisSchema\Widget\Function\TooltipWrapper::tooltipTheme(), 0, 'light', 'dark');
    expectedArguments(\AmisSchema\Widget\Function\TooltipWrapper::trigger(), 0, 'hover', 'click', 'focus');
    expectedArguments(\AmisSchema\Widget\Function\TooltipWrapper::wrapperComponent(), 0, 'div', 'span');

    expectedArguments(\AmisSchema\Definition\PopOver::mode(), 0, 'popOver', 'dialog', 'drawer');
    expectedArguments(\AmisSchema\Definition\PopOver::trigger(), 0, 'click', 'hover');
    expectedArguments(\AmisSchema\Definition\PopOver::position(), 0, 'center', 'left-top', 'right-top', 'left-bottom', 'right-bottom', 'fixed-center', 'fixed-left-top', 'fixed-right-top', 'fixed-left-bottom', 'fixed-right-bottom');

    expectedArguments(\AmisSchema\Definition\NavLink::mode(), 0, 'group', 'divider');
    expectedArguments(\AmisSchema\Definition\NavOverflow::mode(), 0, 'swipe', 'popup');

    expectedArguments(\AmisSchema\Widget\Input\Form::labelAlign(), 0, argumentsSet('align'));
    expectedArguments(\AmisSchema\Widget\Input\Form::mode(), 0, argumentsSet('mode'));

    expectedArguments(\AmisSchema\Widget\Input\FormItem::labelAlign(), 0, argumentsSet('align'));
    expectedArguments(\AmisSchema\Widget\Input\FormItem::mode(), 0, argumentsSet('align'));
    expectedArguments(\AmisSchema\Widget\Input\FormItem::size(), 0, argumentsSet('size'));

    expectedArguments(\AmisSchema\Widget\Input\InputText::borderMode(), 0, 'full', 'half', 'none');

    expectedArguments(\AmisSchema\Widget\Input\ButtonGroupSelect::btnLevel(), 0, argumentsSet('buttonLevel'));
    expectedArguments(\AmisSchema\Widget\Input\ButtonGroupSelect::btnActiveLevel(), 0, argumentsSet('buttonLevel'));

    expectedArguments(\AmisSchema\Widget\Input\InputColor::format(), 0, 'hex', 'hexa', 'hls', 'rgb', 'rgba');

    expectedArguments(\AmisSchema\Widget\Input\InputTag::separator(), 0, '-', ',', ';', '|');

    expectedArguments(\AmisSchema\Widget\Input\Transfer::selectMode(), 0, 'list', 'table', 'tree', 'chained', 'associated');
    expectedArguments(\AmisSchema\Widget\Input\Transfer::searchResultMode(), 0, 'list', 'table', 'tree', 'chained', 'associated');
    expectedArguments(\AmisSchema\Widget\Input\Transfer::leftMode(), 0, 'list', 'tree');
    expectedArguments(\AmisSchema\Widget\Input\Transfer::rightMode(), 0, 'list', 'table', 'tree', 'chained');

    expectedArguments(\AmisSchema\Widget\Input\TransferPicker::selectMode(), 0, 'list', 'table', 'tree', 'chained', 'associated');
    expectedArguments(\AmisSchema\Widget\Input\TransferPicker::searchResultMode(), 0, 'list', 'table', 'tree', 'chained', 'associated');
    expectedArguments(\AmisSchema\Widget\Input\TransferPicker::leftMode(), 0, 'list', 'tree');
    expectedArguments(\AmisSchema\Widget\Input\TransferPicker::rightMode(), 0, 'list', 'table', 'tree', 'chained');
    expectedArguments(\AmisSchema\Widget\Input\TransferPicker::modalMode(), 0, 'dialog', 'drawer');

    expectedArguments(\AmisSchema\Widget\Input\Combo::tabsStyle(), 0, 'line', 'card', 'radio', 'vertical');
    expectedArguments(\AmisSchema\Widget\Input\Combo::subFormMode(), 0, argumentsSet('mode'));

    expectedArguments(\AmisSchema\Widget\Input\ConditionBuilder::selectMode(), 0, 'list', 'tree', 'chained');

    expectedArguments(\AmisSchema\Widget\Input\InputFormula::variableMode(), 0, 'list', 'tree', 'tabs');
    expectedArguments(\AmisSchema\Widget\Input\InputFormula::inputMode(), 0, 'button', 'input-button', 'input-group');
    expectedArguments(\AmisSchema\Widget\Input\InputFormula::btnSize(), 0, argumentsSet('size'));
    expectedArguments(\AmisSchema\Widget\Input\InputFormula::borderMode(), 0, 'full', 'half', 'none');

    expectedArguments(\AmisSchema\Widget\Input\FieldSet::titlePosition(), 0, 'top', 'bottom');

    expectedArguments(\AmisSchema\Widget\Input\InputExcel::parseMode(), 0, 'array', 'object');

    expectedArguments(\AmisSchema\Widget\Input\InputFile::useChunk(), 0, 'auto', true, false);

    expectedArguments(\AmisSchema\Widget\Input\Group::gap(), 0, 'xs', 'sm', 'normal');
    expectedArguments(\AmisSchema\Widget\Input\Group::direction(), 0, 'horizontal', 'vertical');

    expectedArguments(\AmisSchema\Widget\Input\InputImage::cropFormat(), 0, 'image/png', 'image/jpeg', 'image/webp');

    expectedArguments(\AmisSchema\Widget\Input\LocationPicker::vendor(), 0, 'baidu', 'gaode');
    expectedArguments(\AmisSchema\Widget\Input\LocationPicker::coordinatesType(), 0, 'bd09', 'gcj02');

    expectedArguments(\AmisSchema\Widget\Input\MatrixCheckboxes::singleSelectMode(), 0, 'cell', 'row', 'column');
    expectedArguments(\AmisSchema\Widget\Input\MatrixCheckboxes::textAlign(), 0, 'left', 'center', 'right');

    expectedArguments(\AmisSchema\Widget\Input\InputNumber::displayMode(), 0, 'base', 'enhance');
    expectedArguments(\AmisSchema\Widget\Input\InputNumber::borderMode(), 0, 'full', 'half', 'none');

    expectedArguments(\AmisSchema\Widget\Input\Picker::modalMode(), 0, 'dialog', 'drawer');
    expectedArguments(\AmisSchema\Widget\Input\InputRating::textPosition(), 0, 'right', 'left');
    expectedArguments(\AmisSchema\Widget\Input\InputRange::tooltipPlacement(), 0, 'auto', 'bottom', 'left', 'right', 'top');

    expectedArguments(\AmisSchema\Widget\Input\Select::selectMode(), 0, 'group', 'table', 'tree', 'chained', 'associated');
    expectedArguments(\AmisSchema\Widget\Input\Select::searchResultMode(), 0, 'group', 'table', 'tree', 'chained', 'associated');
    expectedArguments(\AmisSchema\Widget\Input\Select::leftMode(), 0, 'list', 'tree');
    expectedArguments(\AmisSchema\Widget\Input\Select::rightMode(), 0, 'list', 'table', 'tree', 'chained');

    expectedArguments(\AmisSchema\Widget\Input\SwitchControl::size(), 0, 'sm', 'md');

    expectedArguments(\AmisSchema\Widget\Input\InputTree::nodeBehavior(), 0, 'unfold', 'check');

    expectedArguments(\AmisSchema\Widget\Display\Table::columnsTogglable(), 0, 'auto', true, false);
    expectedArguments(\AmisSchema\Widget\Display\Table::tableLayout(), 0, 'auto', 'fixed');
    expectedArguments(\AmisSchema\Widget\Display\Table::reUseRow(), 0, false, 'match');

    expectedArguments(\AmisSchema\Widget\Display\Table2::columnsTogglable(), 0, 'auto', true, false);
    expectedArguments(\AmisSchema\Widget\Display\Table2::lineHeight(), 0, 'large', 'middle');
    expectedArguments(\AmisSchema\Widget\Display\Table2::size(), 0, 'large', 'default', 'small');
}