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

var_dump($mage);
