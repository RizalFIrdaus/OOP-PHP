<?php
require_once "ClassCharacter.php";

$mage = new Character();
$mage->weap = "Staff";
$mage->shield = "Shield";
$mage->armor = "Armor";
$mage->muffler = "Muffler";
$mage->shoes = "Shoes";
$mage->firstAcc = "Acc";
$mage->secondAcc = "Acc";
$mage->talisman = "Talisman";


echo "Character : Mage with :$mage->weap,$mage->shield,$mage->armor,$mage->muffler,$mage->shoes,$mage->firstAcc,$mage->secondAcc,$mage->talisman";
