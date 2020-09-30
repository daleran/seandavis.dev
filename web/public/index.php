<?php

require('../../vendor/autoload.php');


use Dotenv\Dotenv;
use SD\Hello;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv -> load();

$hello = new Hello();
echo $hello->getHello();

