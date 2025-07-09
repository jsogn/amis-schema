<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema;

use Jiangwang\AmisSchema\Widget\Input\Form;
use Jiangwang\AmisSchema\Widget\Input\InputText;
use Jiangwang\AmisSchema\Widget\Layout\Page;

class Test
{
    public function foo()
    {
        InputText::make()->name('haha')->borderMode('xs');
    }
}