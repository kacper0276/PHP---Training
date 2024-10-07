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

$grade = 4;
$mood = $grade > 4 ? 'happy' : 'unhappy';
echo $mood;

// Operatory logiczne
/*
    Podstawowe operatory logicznie to:
    && - AND - prawda wtedy gdy OBA wyrażenie są prawdziwe (wyrażenie po lewej i prawej stronie musi być prawdziwe)
    || - OR - prawda gdy JEDNO wyrażenie jest prawdziwe (po lewej lub prawej stronie, lub oba prawdziwe)
    xor - prawda gdy TYLKO JEDNO wyrażenie jest prawdziwe (po lewej lub prawej stronie)
    ! - negacja - sprawdza czy wyrażenie nie jest prawdziwe
*/

$a = 1 && 2;
var_dump($a);

var_dump(1 && 0); // false
var_dump(1 && true); // true

var_dump(0 || 1); // true
var_dump(true || false); // true
var_dump(0 || ''); // false

var_dump(!false); // true
var_dump(!0); // true
var_dump(!1); // false

var_dump(2 xor 3); // false
var_dump(false xor true); // true