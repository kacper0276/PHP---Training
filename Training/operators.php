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

/*
 Jeśli chcemy zwiększyć wartość istniejącej zmiennej to zamiast używać standardowego zapisu
 możemy się posłużyć skróconym zapisem.
 Należy go czytać w następujący sposób:
 weź wartość która znajduje się w zmiennej po lewej stronie operatora (+=)
 a następnie do tej wartości dodaj wartość znajdującą się po lewej stronie operatora
 na sam koniec wynik działania przypisz do zmiennej znajdującej sie po prawej stronie operatora
*/

$count = 10;
$count += 5;
echo $count;

/*
 Analogicznie działają operatory:
 -=
 *=
 /=
 %=
 **=
*/

/*
 Operator konkatenacji (lączenie stringów)
*/

$firstName = "Jan";
$lastName = "Kowalski";
$fullName = $firstName . " " . $lastName;
var_dump($fullName);

/*
 Możemy również w ramach potrzeb użyć konkatenacji od razu połączonej z przypisaniem.
 */

$php = 'PHP';
$php .= '7.4';
var_dump($php);

// Operatory pre/post inkrementacji i dekrementacji

// Postinkrementacja

$age = 11;
echo $age++;
echo $age;

// preinkrementacja

$age = 11;
echo ++$age;
echo $age;

// Operatory porównania

var_dump('foo' == 'bar');
var_dump(9 == '9');
var_dump(9 === '9');
var_dump(3 === 1);

// !=
//  !==

/*
 Kolejne operatory sprawdzają następujące rzecy:
  > - większe
  >= - większe lub równe
  < - mniejsze
  <= - mniejsze lub równe
*/

var_dump(32 > 2); // true
var_dump(2 > 85); // false
var_dump(43 >= '300');
var_dump(93 >= '93');
var_dump(32 < 2);
var_dump(2 < 85);
var_dump(43 <= '300');
var_dump(93 <= '93');

/*
 <=> - space ship
 Ciekawym operatorem jest "space ship", tłumaczenie nazwy tego operatora będzie cokolwiek śmieszne.
 Genezą stojacą za nazwą jest wyglad samego operatora, który przywodzi na mysł Tie Fightera z Gwiezdnych Wojen.
 Operator ten jak każdy operator porónania porównuje dwie wartości i w zależności od nich może zwrócić:
  - 0 - gdy obie wartości są równe
  - -1 - gdy lewa wartość jest mniejsza od prawej
  - 1 - gdy prawa wartośc jest większa od lewej
 Głównym zastosowanie tego operatora są funkcje sortujące o których zapewne wspomnimy w dalszej części kursu
*/

// var_dump(92 <=> 92);
// var_dump(10 <=> 92);
// var_dump(92 <=> 2);
// var_dump('foo' <=> 'bar');