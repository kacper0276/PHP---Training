<?php
function sayHello($name): void 
{
    echo "Hello $name\n";
}

sayHello('Ann');
sayHello('Tom');

$name = 'John';

function sayHello1($name, $language = 'en'): void
{
    $name = $name . ' Rambo';
    echo "IN FUNCTION: Hello $name\n";
}

sayHello1($name);

echo "OUTER: Hello $name\n";

// IN FUNCTION: Hello John Rambo
// OUTER: Hello John

function sayHello2(string $name)
{
    var_dump($name);
    echo "Hello $name\n";
}

// Włączenie trybu ścisłego declare(strict_types=1); (bez rzutowania)

/*
W wersji PHP 7.1 dostaliśmy możliwość określenia, że dany argument może przyjmować wartość null.
A dokładniej wartość null lub wartość innego zdefiniowanego typu
Aby to zrobić posłujemy się znakiem zapytania "?"
*/

function sayHello3(?string $name = null)
{
    if ($name !== null) {
        echo "Name: $name \n";
    } else {
        echo "Hello !!!\n";
    }
}

function countLetters(string $word): int
{
    return strlen($word);
}

$myFunction = function (string $name): void
{
    echo "Name: $name\n";
};

function myCall(string $name, callable $func): void
{
    $func($name);
}

$myFunction = function(string $name): void {
    echo "$name\n";
};

myCall("TOM", $myFunction);

// Funkcje strzałkowe
$myFunction = fn(int $value): int => $value * 2;

// Funckje anonimowe
function (string $name): void
{
    echo "Name: $name\n";
};