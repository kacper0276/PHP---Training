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