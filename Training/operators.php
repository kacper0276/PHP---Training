<?php

// Operator przypisania
$foo = 'bar';

$foo = $lorem = 'lorem';

/*
 Operatory arytmetyczne
 
 Podstawową grupą operatorów są operatory arytmetycznie, w sklad której wchodzą:
 - dodawanie: +
 - odejmowanie: -
 - mnożenie: *
 - dzielenie: /
 - modulo: %
 - potęgowanie: **
*/

$result = 4 + 5;
var_dump($result);

$priceOne = 3;
$priceTwo = 11;
$total = $priceOne + $priceTwo;
var_dump($total);

echo 9 + 5;

$count = 3.2 + 11;

/* Odejmowanie */
echo 45 - 100;

/*
 Mnożenie
 *
 W przykładnie widzimy kolejną kombinację którą możemy stosować.
 */
$count = 2;
echo 4 * $count;

/* Dzielenie */
echo 50 / 5;

/* Modulo - reszta z dzielenia */
echo 14 / 10;

/* Potęgowanie */
echo 2**4;

/*
 UWAGA - wszystkie działana możemy łączyć ze sobą i dotyczą nas te same zasady co w klasycznej matematyce,
 czyli kolejność wykonywania działań. Jeśli chemy wymusić aby któraś część działań wykonała się szybciej
 to musimy użyć nawiasów.
 */
// echo 2 + 2 * 2;
// echo (2 + 2) * 2;