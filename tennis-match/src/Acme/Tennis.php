<?php

namespace Acme;

class Tennis
{
    protected $player1;

    protected $player2;

    protected $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;

        $this->player2 = $player2;
    }

    public function score()
    {
        // Win for NAME
        if ($this->hasWinner())
        {
            return 'Win for John Doe';
            // return 'Win for ' / $this->winner()->name;
        }

        $score = $this->lookup[$this->player1->points] . '-';

        return $score .= $this->tied() ? 'All' : $this->lookup[$this->player2->points];
    }

    private function tied()
    {
        return $this->player1->points == $this->player2->points;
    }

    private function hasWinner()
    {
        return $this->hasEnoughPointstoBeWon() && $this->isLeadingByTwo();
    }

    public function winner()
    {
        return $this->player1->points > $this->player2->points
                ? $this->player1
                : $this->player2;
    }

    private function hasEnoughPointstoBeWon()
    {
        return max([$this->player1->points, $this->player2->points]) >= 4;
    }

    private function isLeadingByTwo()
    {
        return abs($this->player1->points - $this->player2->points >= 2);
    }


}
