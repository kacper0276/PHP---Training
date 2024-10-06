<?php

$employee1 = 'Jan Kowalski';
$employee2 = 'Zbigniew Nowak';
$employee3 = 'Jadwiga Kaczmarska';

// zapis tablicowy 5.3
$user = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
$user = [$employee1, $employee2, $employee3];
var_dump($user);

/*   
Zmiana wartości
*/

$index = 11;

$users = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
print_r($users);
$users[$index] = 'Anna Miłosz';
print_r($users);

/* 
   W ten oto sposób zachowaliśmy starą wartość i ustawiliśmy nową.
   Teraz dodamy nową wartość do tablicy.
   Aby to zrobić nie musimy znać wartości najwyższego indeksu pod którym mamy dane.
   PHP zrobi to za nas.
 */

$users = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
$users[] = 'Adrian Onyszko';

/* 
   Usuwanie elementu tablicy
*/

print_r($users);
unset($users[1]);
$users[1] = null;
var_dump($users);

/* 
   W przypadku usuwania już musimy podać konkretnie jaką daną chcemy usunąć to znaczy podać konkretny indeks.
*/

/*
   Własne przydzielanie indeksów
*/

$users = [0 => 'Jan Kowalski', 1 => 'Zbigniew Nowak', 2 => 'Jadwiga Kaczmarska'];
print_r($users);
$users = [3 => 'Jan Kowalski', 4 => 'Zbigniew Nowak', 5 => 'Jadwiga Kaczmarska'];
print_r($users);
$users = [30 => 'Jan Kowalski', 4 => 'Zbigniew Nowak', 5 => ' Jadwiga Kaczmarska'];
print_r($users);

/* 
   Podając tylko jeden indeks spowodujemy, że każda kolejna dana dodawana do tablicy będzie się znajdować
   pod kolejnym numerem
*/
$users = [8 => 'Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
print_r($users);

/* 
   Jeszcze inna możliwość uzupełnienia tablicy.
*/
$users = [];
$users[] = 'Jan Kowalski';
$users[] = 'Zbigniew Nowak';
$users[] = 'Jadwiga Kaczmarska';

print_r($users);