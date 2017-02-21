<?php

class PrimeFactors
{
    public function generate($number)
    {
        $primes = [];

        for ($i = 2; $number > 1; $i++)
        {
            for (; $number % $i == 0; $number /= $i) {
                $primes[] = $i;
            }
        }

        return $primes;
    }
}
