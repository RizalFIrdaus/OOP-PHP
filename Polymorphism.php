<?php

require_once "Programmer.php";

use Data\Programmer\BackendProgrammer;
use Data\Programmer\Company;
use Data\Programmer\FrontendProgrammer;
use Data\Programmer\Programmer;

use function Data\Programmer\sayHello;

$company = new Company();
$company->programmer = new FrontendProgrammer("Moja");
$company->programmer = new BackendProgrammer("Uta Uti");
var_dump($company->programmer);
sayHello(new BackendProgrammer("Rizal"));
sayHello(new FrontendProgrammer("Esan"));
sayHello(new Programmer("Iki"));
