<?php

require_once "data\Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko"); // Hi Joko, my name is Manager Budi

$vp = new VicePresident();
$vp->name = "Adam";
$vp->sayHello("Jamal"); // Hi Jamal, my name is Manager Adam