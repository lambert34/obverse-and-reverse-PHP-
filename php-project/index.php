<?php

class Game {
    protected $player1;
    protected $player1;
}

public function __construct(Player $p)
{
    $this->player1 = $player1;
    $this->player2 = $player2;
}

$game = new Game(
    new Player("Alex", 100),
    new Player("Alice", 100)
);

$game->start(); 