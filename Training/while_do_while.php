<?php

// While

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women'
];

$index = 0;
$moviesCount = count($cinemaMovies);

while($index < $moviesCount) {
    echo $cinemaMovies[$index] . "\n";
    $index++;
}

// Do while

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji: The Next Level',
    'Little Women'
];

$index = 0;
$moviesCount = count($cinemaMovies);

do {
    echo $cinemaMovies[$index] . "\n";
    $index++;
} while($index < $moviesCount);

