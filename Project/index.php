<?php

declare(strict_types=1);

namespace App;

$test = 'test';

// include ('src/Utils/debug.php'); // On też pokazuje błąd ale nie przerywa działania skryptu (Warning)
// include_once ('src/Utils/debug.php');

// require ('src/Utils/debug.php'); // Przerywa działanie skryptu w miejscu kiedy nie może wczytać pliku (Fatal error)
require_once ('src/Utils/debug.php');

?>

<html>
    <head>

    </head>
    <body>
        <div class="header">
            <h1>Moje notatki</h1>
        </div>

        <div class="container">
            <div class="menu">
                <ul>
                    <li>
                        <a href="/">Lista notatek</a>
                    </li>
                    <li>
                        <a href="/?action=create">Nowa notatka</a>
                    </li>
                </ul>
            </div>

            <div>
                Treść
            </div>
        </div>

        <div class="footer">

        </div>
    </body>
</html>