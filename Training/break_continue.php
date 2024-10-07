<?php

// BREAK
$wallet = 1000;
$cart = [
    ['item' => 'myszka', 'price' => 100],
    ['item' => 'papier do drukarki', 'price' => 10],
    ['item' => 'klawiatura', 'price' => 200],
    ['item' => 'laptop', 'price' => 5000],
    ['item' => 'DOOM', 'price' => 159],
];

$cartValue = 0;
foreach ($cart as $item) {
    $cartValue += $item['price'];
    echo $item['item'] . "\n";
    if ($cartValue > $wallet) {
        echo 'Przekroczyłeś kwotę którą dysponujesz';
        break;
    }
}

// CONTINUE
$cart = [
    ['item' => 'myszka', 'price' => 100],
    ['item' => 'papier do drukarki', 'price' => 10],
    ['item' => 'klawiatura', 'price' => 200],
    ['item' => 'laptop', 'price' => 5000],
    ['item' => 'DOOM', 'price' => 159],
];

$cartValue = 0;
foreach ($cart as $item) {
    echo "{$item['item']}\n";
    if ($item['price'] >= 1000) {
        echo "Produkt: {$item['item']} kosztuje za dużo !!! Odłuż go na półkę\n";
        continue;
    }
    $cartValue += $item['price'];
}