<?php

namespace Movim\Widget;

use Movim\Widget\Wrapper;

class Event
{
    function run(string $key, $data = null)
    {
        $widgets = Wrapper::getInstance();
        $widgets->iterate($key, $data);
    }
}
