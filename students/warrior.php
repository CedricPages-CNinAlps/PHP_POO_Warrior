<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'Cedric';

// Définissez vos class de combattants
class StartrekWarrior {}
class MarvelWarrior {}
class PokemonWarrior {}

abstract class Warrior extends LocalWarrior {

};
