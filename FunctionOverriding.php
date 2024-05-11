<?php

require_once "data/Manager.php";

// implement function overriding

$manager = new Manager();
$manager->name = "budhi";
$manager->sayHello("Joko"); // Hi Joko, my name is Manager budhi

$vp = new VicePresident();
$vp->name = "andi";
$vp->sayHello("jamal"); // Hi jamal, my name is Vice President andi
