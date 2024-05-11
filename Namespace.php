<?php

/**
 * Function dan Constant di Namespace
 * ● Selain class, kita juga menggunakan function dan constant di namespace
 * ● Dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya
 *    dengan diawali dengan nama namespace nya
 */

// namespace{} global namespace
namespace {

    require_once "data\Conflict.php";
    require_once "data\Helper.php";

    $conflict1 = new Data\one\Conflict(); // instance namespace yang include class
    $conflict2 = new Data\two\Conflict();

    // akses namespace
    echo Helper\APPLICATION . PHP_EOL; // namespace\variable_const
    Helper\helpMe(); // namespace\method()

}
