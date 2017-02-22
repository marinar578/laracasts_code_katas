<?php

class StringCalculator
{

    public function add($numbers)
    {
        $numbers = explode(',', $numbers);

        $solution = 0;

        foreach ($numbers as $number)
        {
            if ($number < 0) throw new InvalidArgumentException;
            $solution += $number;
        }

        return $solution;
    }
}
