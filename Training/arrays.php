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

// $index = 11;

// $users = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
// print_r($users);
// $users[$index] = 'Anna Miłosz';
// print_r($users);

/* 
   W ten oto sposób zachowaliśmy starą wartość i ustawiliśmy nową.
   Teraz dodamy nową wartość do tablicy.
   Aby to zrobić nie musimy znać wartości najwyższego indeksu pod którym mamy dane.
   PHP zrobi to za nas.
 */

// $users = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
// $users[] = 'Adrian Onyszko';