<?php

use Prophecy\Exception\InvalidArgumentException;

class StringCalculator
{

    public function add($numbers)
    {
        $numbers = preg_split('/\s*(,|\\\n)\s*/', $numbers);
        $solution = 0;

        foreach ($numbers as $number)
        {
            if ($number < 0) throw new InvalidArgumentException('Invalid number provided: ' . $number);
            if ($number >= 1000) continue;

            $solution += $number;
        }

        return $solution;
    }
}
