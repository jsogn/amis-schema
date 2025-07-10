<?php
declare(strict_types=1);

namespace Jiangwang\AmisSchema;

use Jiangwang\AmisSchema\Widget\Input\InputText;

class Test
{
    public function foo()
    {
//        InputText::make()->name('haha')->borderMode('');
        InputText::make()->addOn([
            'type' => 'haha'
        ])->transform([
            'lowerCase' => true
        ]);
    }
}