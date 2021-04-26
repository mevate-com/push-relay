<?php

require __DIR__ . '/vendor/autoload.php';;
require __DIR__ . "/engine.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();