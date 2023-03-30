<?php

class Game {
    protected $player1;
    protected $player1;
}

public function __construct(Player $p)
{
    
}

$game = new Game(
    new Player("Alex", 100),
    new Player("Alice", 100)
);

$game->start(); 