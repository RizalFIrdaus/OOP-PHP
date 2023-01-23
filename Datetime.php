<?php



$data = new DateTime();
// $data->setDate(2000, 05, 30);
// $data->setTime(1, 10, 0);

// Date Interval = Penambahan DateTime

// Untuk menambahkan interval
// $data->add(new DateInterval("P1Y"));
// Untuk mengurangi Interval
// $minus = new DateInterval("P1M");
// $minus->invert = true;
// $data->add($minus);

// Set DataTimezone
$ponti = new DateTime();

$ponti->setTimezone(new DateTimeZone("Europe/Berlin"));

var_dump($data);
var_dump($ponti);
