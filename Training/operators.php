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
 
 Czasami zdarza się, że z dwóch stringów (ciągów znaków) chcemy utworzyć jeden.
 Do tego celu używamy operatora konkatenacji czyli "."
 Być może nazwa brzmi "strasznie" jednak w praktyce to bardzo prosta operacja.
 
 Należy zauważyć, że łączenie stringów następuję bezpośrednio, czyli do końca stringu znajdującego się po lewej
 stronie operatora doklejany jest string znajdujący się po jego prawej stronie. Tak więc jeśli chcemy
 dodać odstęp (spację) to musimy jeszcze takową dodać samodzielnie, tak jak w poniższym przykładnie
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
