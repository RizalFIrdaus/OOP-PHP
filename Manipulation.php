<?php
require_once "ClassCharacter.php";

$mage = new Character();
$mage->weap = "Staff";
$mage->shield = "Shield";
$mage->armor = "Armor";
$mage->muffler = "Muffler";
$mage->shoes = "Shoes";
$mage->facc = "Acc";
$mage->sacc = "Acc";
$mage->talisman = "Talisman";

$swordman = new Character();
$swordman->weap = "Sword";
$swordman->shield = "Sword";
$swordman->armor = "Armor";
$swordman->muffler = "Muffler";
$swordman->shoes = "Shoes";
$swordman->facc = "Acc";
$swordman->sacc = "Acc";
$swordman->talisman = "Talisman";


echo "Character : Mage" . PHP_EOL;
echo "Weapon : $mage->weap" . PHP_EOL;
echo "Shield : $mage->shield" . PHP_EOL;
echo "Armor : $mage->armor" . PHP_EOL;
echo "Muffler : $mage->weap" . PHP_EOL;
echo "Shoes : $mage->weap" . PHP_EOL;
echo "Accessories : $mage->facc" . PHP_EOL;
echo "Accessories : $mage->sacc" . PHP_EOL;
echo "Talisman : $mage->talisman" . PHP_EOL;
echo PHP_EOL;
echo "Character : Swordman" . PHP_EOL;
echo "Weapon : $swordman->weap" . PHP_EOL;
echo "Shield : $swordman->shield" . PHP_EOL;
echo "Armor : $swordman->armor" . PHP_EOL;
echo "Muffler : $swordman->weap" . PHP_EOL;
echo "Shoes : $swordman->weap" . PHP_EOL;
echo "Accessories : $swordman->facc" . PHP_EOL;
echo "Accessories : $swordman->sacc" . PHP_EOL;
echo "Talisman : $swordman->talisman" . PHP_EOL;
