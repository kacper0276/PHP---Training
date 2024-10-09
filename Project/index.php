<?php

$test = 'test';

// include ('src/Utils/debug.php'); // On też pokazuje błąd ale nie przerywa działania skryptu (Warning)
// include_once ('src/Utils/debug.php');

// require ('src/Utils/debug.php'); // Przerywa działanie skryptu w miejscu kiedy nie może wczytać pliku (Fatal error)
require_once ('src/Utils/debug.php');

dumb($test);
