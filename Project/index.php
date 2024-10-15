<?php

declare(strict_types=1);

namespace App;

// include ('src/Utils/debug.php'); // On też pokazuje błąd ale nie przerywa działania skryptu (Warning)
// include_once ('src/Utils/debug.php');

// require ('src/Utils/debug.php'); // Przerywa działanie skryptu w miejscu kiedy nie może wczytać pliku (Fatal error)
require_once ('src/Utils/debug.php');
require_once ('src/Controller.php');
$configuration = require_once('config/config.php');

$request = [
  'get' => $_GET,
  'post' => $_POST
];

//$controller = new Controller($request);
//$controller->run();

(new Controller($request))->run();

