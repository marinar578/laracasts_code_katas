<?php

namespace spec\Acme;

use Acme\Player;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisSpec extends ObjectBehavior
{
    function let()
    {
        $this->john = new Player('John Doe', 0);
        $this->jane = new Player('Jane Doe', 0);

        $this->beConstructedWith($this->john, $this->jane);
    }

    function it_scores_a_scoreless_game()
    {
        $this->score()->shouldReturn('Love-All');
    }

    function it_scores_a_1_0_game()
    {
        $this->score()->shouldReturn('Fifteen-Love');
    }
}
