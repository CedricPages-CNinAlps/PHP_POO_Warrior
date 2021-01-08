<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
      public static function createMyWarrior(){
          $guerrier = new MarvelWarrior($GLOBALS['warriorID']);
          $weapon = new Weapon('Marteau',100);
          $weapon->setImageUrl('https://newsroom.disney.fr/media/cache/theming_no_filter_grid_fs/5946a1312016216e388b4697');
          $guerrier->setWeapon($weapon);
          $guerrier->setImageUrl('https://i.pinimg.com/originals/b7/b1/25/b7b125ce27b36af9927d2e0759aa9e9a.png');
          $guerrier->saveNew();
      }

      public static function createOtherWarrior(){
          $guerrier = new StartrekWarrior('Spock');
          $weapon = new Weapon('Blaster',50);
          $weapon->setImageUrl('https://i.pinimg.com/originals/ab/cc/0c/abcc0c9f1322365627afb80ee6ac5d0d.png');
          $guerrier->setWeapon($weapon);
          $guerrier->setImageUrl('https://i.pinimg.com/originals/7f/99/ff/7f99ffc58f76f7e219a4f23af0d95ce3.png');
          $guerrier->saveNew();
      }
  }
