<?php

namespace Acme;

class Tennis
{
    protected $player1;

    protected $player2;

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;

        $this->player2 = $player2;
    }

    public function score()
    {
        return 'Love-All';
    }


}
