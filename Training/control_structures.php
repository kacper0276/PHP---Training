<?php

// Rzutowanie jawne
$boolValue  = (bool) 2;
var_dump($boolValue);

$integer = 32;
$boolValue  = (bool) $integer;
var_dump($boolValue);

$value = 42;
if ((bool) $value) {
//     // każda liczba różna od 0 zawsze będzie uznana za prawdę
}

/*
false - rzutowanie false na typ bool samo w sobie jest bez sensu ale aby mieć pełen komplet możliwości - wymieniam
0 i -0 - integer
0.0 i -0.0 - float
"" i "0" - pusty string oraz string z cyfrą zero
[] - pusta tablica
null
*/

var_dump((bool) "");        // bool(false)
var_dump((bool) -0);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) -0.0);       // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) [0]);        // bool(false)
var_dump((bool) "false");   // bool(true)

$age = 9;
if ($age >= 17) { // wyrażenie1
//     // kod się wykona jeśli wyrażenie1 jest prawdziwe
    echo 'Kupiłeś bilet !!!';
} elseif ($age >= 13) { // wyrażenie2
//     // kod się wykona jeśli wyrażenie1 nie jest spełnione natomiast wyrażenie2 jest spełnione
    echo 'Może jesteś zainteresowany innym filmem z naszej oferty ';
    echo 'Polecamy film: Jumanji: The Next Level';
} elseif ($age >= 10) { // wyrażenie2
//   // kod się wykona jeśli wyrażenie1 nie jest spełnione natomiast wyrażenie2 jest spełnione
    echo 'xxx';
} else {
//     // kod się wykona jeśli żadne z powyższych wyrażeń nie zostanie spełnione
    echo 'Jesteś za młody, nie możesz kupić biletu na ten film';
}