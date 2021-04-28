<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . "/helper/json-response.php";
require __DIR__ . "/helper/util.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);


$token = param("token");
if($token === null || $token !== $_ENV["TOKEN"]) {
	jsonResponse(false, array("error" => "Missing or invalid credentials"));
}
