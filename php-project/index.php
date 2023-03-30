<?php

class Player {
    public $name;
    public $coins;

    public function __construct($name, $coins)
    {
        $this->name = $name;
        $this->coins = $coins;
    }
}

class Game {
    protected $player1;
    protected $player1;
}

public function __construct(Player $p)
{
    $this->player1 = $player1;
    $this->player2 = $player2;
}

public function start()
{
    // Подбросить монету
    $flip = rand(0, 1) ? "орел" : "решка";

//     Если орел, игрок1 получает монету, игрок2 теряет,

    if($flip == "орел") {
        $this->player1->coins++;
        $this->player2->coins--;
    } else {
        $this->player1->coins--;
        $this->player2->coins++;
    }

// Если решка, то игрок1 теряет монету, игрок2 получает,
// Если число монет у любого игрока достигнет 0, то игра окончена.

if($this->player1->coins == 0 || $this->player2->coins ==0) {
    $this->end();
}

// Побеждает тот, у кого больше монет.
}

$game = new Game(
    new Player("Alex", 100),
    new Player("Alice", 100)
);

$game->start(); 