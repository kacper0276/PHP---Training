<?php

declare(strict_types=1);

namespace App;

use App\Exception\AppException;
use App\Exception\ConfigurationException;
use Throwable;

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

try {
  Controller::initConfiguration($configuration);
  (new Controller($request))->run();
} catch (ConfigurationException $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
  echo 'Problem z applikacją, proszę spróbować za chwilę.';
} catch (AppException $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
  echo '<h3>' . $e->getMessage() . '</h3>';
} catch (Throwable $e) {
  echo '<h1>Wystąpił błąd w aplikacji</h1>';
  dump($e);
}


