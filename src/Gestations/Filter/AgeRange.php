<?php

namespace SuperMae\Gestations\Filter;

class AgeRange
{
    public $start;
    public $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
}
