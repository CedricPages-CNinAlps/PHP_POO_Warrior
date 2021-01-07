<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
      public static function createMyWarrior(){
          $guerrier = new MarvelWarrior($GLOBALS['warriorID']);
          $weapon = new Weapon('Hache',100);
          $weapon->setImageUrl('http://www.no-cookie.com/w/images/thumb/1/18/Hache_de_combat_de_Victo-screen.jpg/340px-Hache_de_combat_de_Victo-screen.jpg');
          $guerrier->setWeapon($weapon);
          $guerrier->setImageUrl('https://www.armoria.com/Files/23514/Img/18/Figurine-Guerrier-Viking-brandissant-sa-Hache-en-resine-aspect-bronze-vgr708.jpg');
          $guerrier->saveNew();
      }
  }
