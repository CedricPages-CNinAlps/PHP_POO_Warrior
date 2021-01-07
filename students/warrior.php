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

    public function setWeapon(Weapon $weapon)    // C'est la notion de TYPE de variable, ici le type d'un object c'est sa class d'objet
                                                //, le type c'est genre int pour un chiffre, array pour un tableau, boolean pour vrai/faux
                                                //en claire on met Weapon devant $weapon, car c'est le type de l'object donc ici c'est sa class d'objet
    {
        $this->weapon = $weapon;
    }

    public function setImageUrl($url)
    {
        $this->imageUrl = $url;
    }

};

// Définissez vos class de combattants
class StartrekWarrior extends Warrior {
    public $mentalPower;

    public function power()
    {
        return $this->mentalPower;
    }

    public function __construct($id)
    {
        parent::__construct($id);
        $this->mentalPower = 8; // Initialisation de la puissance mental à 8.
    }
}
class MarvelWarrior extends Warrior  {
    public $superPower;

    public function power()
    {
        return $this->superPower;
    }

    public function __construct($id)
    {
        parent::__construct($id);
        $this->superPower = 100; // Initialisation du super pouvoir à 100.
    }
}
class PokemonWarrior extends Warrior  {
    public $level;

    public function power()
    {
        return $this->level;
    }

    public function __construct($id)
    {
        parent::__construct($id);
        $this->level = 1; // Initialisation du niveau à 8.
    }
}

class Weapon {
    public $id;
    public $strength;
    public $imageUrl;

    public function __construct($id, $strength)
    {
        $this->id = $id;
        $this->strength = $strength;
    }

    public function setImageUrl($url)
    {
        $this->imageUrl = $url;
    }
}


