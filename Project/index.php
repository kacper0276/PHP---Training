<?php

declare(strict_types=1);

namespace App;

// include ('src/Utils/debug.php'); // On też pokazuje błąd ale nie przerywa działania skryptu (Warning)
// include_once ('src/Utils/debug.php');

// require ('src/Utils/debug.php'); // Przerywa działanie skryptu w miejscu kiedy nie może wczytać pliku (Fatal error)
require_once ('src/Utils/debug.php');

$action = $_GET['action'] ?? null;

if ($action === 'create') {
    include_once('templates/pages/create.php');
} else {
    include_once('templates/pages/list.php');
}