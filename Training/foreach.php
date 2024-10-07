<?php

/*
  Konstrukcja pętli FOREACH jest następująca:
 
  foreach ($array as $arrayElement) {
      kod do wykonania
  }
*/

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women',
    'Rambo'
];

foreach($cinemaMovies as $movie) {
  echo $movie . "\n";
}

/*
 Jeśli potrzebujemy to możemy też uzyskać dostęp do indeksu - czyli numeru wiersza który przetwarzamy.
 W takim przypadku pętla FOREACH odrobinę zmienia swoją konstrukcję:
 
  foreach ($array as $key => $value) {
      // kod do wykonania
  }
*/

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women'
];

print_r($cinemaMovies);

foreach($cinemaMovies as $index => $movie) {
    echo $index . ': ' . $movie . "\n";
}

$movieDetails = [
    'title' => 'Joker',
    'director' => 'Todd Phillips',
    'writers' => 'Todd Phillips, Scott Silver',
    'cast' => [
        'Joaquin Phoenix' => 'Arthur Fleck',
        'Robert De Niro' => 'Murray Franklin',
        'Zazie Beetz' => 'Sophie Dumond',
        'Frances Conroy' => 'Penny Fleck'
    ],
    'music' => 'Hildur Guðnadóttir'
];

foreach ($movieDetails as $role => $element) {
    echo "$role: $element\n";
}