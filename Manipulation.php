<?php
require_once "ClassCharacter.php";

$mage = new Character("Staff", "Shield");
$mage->weap = "Staff";
$mage->shield = "Shield";
$mage->armor = "Armor";
$mage->muffler = "Muffler";
$mage->shoes = "Shoes";
$mage->facc = "Acc";
$mage->sacc = "Acc";
$mage->talisman = "Talisman";
$mage->int = 0;




echo "Character : Mage" . PHP_EOL;
echo "Weapon : $mage->weap" . PHP_EOL;
echo "Shield : $mage->shield" . PHP_EOL;
echo "Armor : $mage->armor" . PHP_EOL;
echo "Muffler : $mage->weap" . PHP_EOL;
echo "Shoes : $mage->weap" . PHP_EOL;
echo "Accessories : $mage->facc" . PHP_EOL;
echo "Accessories : $mage->sacc" . PHP_EOL;
echo "Talisman : $mage->talisman" . PHP_EOL;
echo "Health : " . $mage->HealthPoint(20000) . PHP_EOL;
echo "Job Level : " . $mage->Job(200) . PHP_EOL;
echo "Base Level : " . $mage->Base(200) . PHP_EOL;
$mage->baseStat(13);
echo "Author : " . $mage::AUTHOR . PHP_EOL;
