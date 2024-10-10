<?php

declare(strict_types=1);

error_reporting(E_ALL); // Pokazuje wszystkie błędy, nawet te najmniejsze
ini_set('display_errors', '1');

function dump($data) 
{
    echo '<div 
    style="
        background: lightgray;
        display: inline-block;
        padding: 0 10px;
        border: 1px solid black;
    "
    > 
    <pre>';
        print_r($data);
    echo '</pre>
    </div>
    </br>';
}