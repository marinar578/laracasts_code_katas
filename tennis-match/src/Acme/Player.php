<?php

namespace Acme;

class Player {
    public $name;

    public $score;

    public function __construct($name, $score)
    {
        $this->score = $score;
        $this->name = $name;
    }
}
