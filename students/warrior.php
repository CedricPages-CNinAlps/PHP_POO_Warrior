<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'Cedric';

abstract class Warrior extends LocalWarrior {
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;

    public function __construct($id)
    {
        $this->id = $id; // Initialisation de l'ID
        $this->speed = 30; // Initialisation de la vitesse à 30.
        $this->life = 100; // Initialisation la vie à 100.
        $this->shield = 20; // Initialisation du bouclier à 20.
    }

};

// Définissez vos class de combattants
class StartrekWarrior extends Warrior {
    public $mentalPower;

    public function power()
    {
        return $this->mentalPower;
    }

    public function __construct()
    {

    }
}
class MarvelWarrior extends Warrior  {
    public $superPower;

    public function power()
    {
        return $this->superPower;
    }

    public function __construct()
    {

    }
}
class PokemonWarrior extends Warrior  {
    public $level;

    public function power()
    {
        return $this->level;
    }

    public function __construct()
    {

    }
}


