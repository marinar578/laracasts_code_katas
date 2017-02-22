<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_translates_an_empty_string_into_zero()
    {
        $this->add('')->shouldEqual(0);
    }

    function it_finds_the_sum_of_one_number()
    {
        $this->add('5')->shouldEqual(5);
    }

    function it_finds_the_sum_of_two_numbers()
    {
        $this->add('1,2')->shouldEqual(3);
    }
}
