<?php

namespace Acme;

class FizzBuzz
{
    public function execute($number)
    {
        if ($number == 3) return 'fizz';

        if ($number == 5) return 'buzz';

        return $number;
    }
}
