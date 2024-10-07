<?php


for ($i = 10; $i >= 0; $i--) {
  var_dump($i);
}

$startFoo = 45;
$endFoo = 100;
for ($foo = $startFoo; $foo < $endFoo; $foo += 10) {
  var_dump($foo);
}

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women',
    'Rambo',
    'Commando',
    'Alien'
];

for ($index = 0; $index < count($cinemaMovies); $index++) {
    echo $cinemaMovies[$index] . "\n";
}