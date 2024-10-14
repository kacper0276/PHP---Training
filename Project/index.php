<?php

declare(strict_types=1);

namespace App;

// include ('src/Utils/debug.php'); // On też pokazuje błąd ale nie przerywa działania skryptu (Warning)
// include_once ('src/Utils/debug.php');

// require ('src/Utils/debug.php'); // Przerywa działanie skryptu w miejscu kiedy nie może wczytać pliku (Fatal error)
require_once ('src/Utils/debug.php');
require_once('src/View.php');

const DEFAULT_ACTION = 'list';

$action = $_GET['action'] ?? DEFAULT_ACTION;

$view = new View();

$viewParams = [];

switch ($action) {
    case 'create':
        $page = 'create';
        $created = false;

        if (!empty($_POST)) {
            $created = true;
            $viewParams = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
            ];
        }

        $viewParams['created'] = $created;
        break;
    case 'show':
        $viewParams = [
            'title' => 'TEST',
            'description' => 'Opis',
        ];
        break;
    default:
        $page = 'list';
        $viewParams['resultList'] = 'Wyświetlamy notatki';
        break;
}

$view->render($page, $viewParams);

