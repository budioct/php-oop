<?php

require_once "data\Programmer.php";

$company = new Company();
var_dump($company);

$company->programmer = new Programmer("budhi"); // polymorphism dari parent yang akses child nya
var_dump($company->programmer);

$company->programmer = new BackendProgrammer("jamal");
var_dump($company->programmer);

$company->programmer = new FrontendProgrammer("indah");
var_dump($company->programmer);

// polymorphism sebagai argument
sayHelloProgrammer(new Programmer("budhi")); // Hello Programmer budhi
sayHelloProgrammer(new BackendProgrammer("jamal")); // Hello Backend Programmer jamal
sayHelloProgrammer(new FrontendProgrammer("indah")); // Hello Frontend Programmer indah

/**
 * result
 *object(Company)#1 (0) {
 * ["programmer"]=>
 * uninitialized(Programmer)
 * }
 * object(Programmer)#2 (1) {
 * ["name"]=>
 * string(5) "budhi"
 * }
 * object(BackendProgrammer)#3 (1) {
 * ["name"]=>
 * string(5) "jamal"
 * }
 * object(FrontendProgrammer)#2 (1) {
 * ["name"]=>
 * string(5) "indah"
 * }
 */
