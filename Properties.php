<?php
require_once "ClassCharacter.php";

$mageOneHand = new Character();
$mageOneHand->weap = "Staff";
$mageOneHand->shield = "Shield";
$mageOneHand->armor = "Armor";
$mageOneHand->muffler = "Muffler";
$mageOneHand->shoes = "Shoes";
$mageOneHand->firstAcc = "Acc";
$mageOneHand->secondAcc = "Acc";
$mageOneHand->talisman = "Talisman";

var_dump($mageOneHand);
