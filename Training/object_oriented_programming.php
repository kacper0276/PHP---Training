<?php

declare(strict_types= 1);

class Flat 
{
    public $type;
    public string $name;
    public string $type1 = 'M2'; // Domyślna wartość
    public ?string $null = null;

    public function open(): void
    {
        echo "Drzwi zostały otwarte \n";
    }

    public function close(): void
    {
        echo "Drzwi zostały zamknięte \n";
    }

    public function doSomething(string $command): ?int
    {
        if ($command === 'foo') {
            return null;
        } 

        return 10;
    }

    // THIS
    public function isTypeSet(): bool
    {
        return (bool) $this->type;
    }

    public function printType(): void
    {
        if ($this->isTypeSet()) {
            echo "Nasze mieszkanie to: " . $this->type . "\n";
        } else {
            echo "Jeszcze nie wiemy jakiego typu jest nasze mieszkanie\n";
        }
    }

    private function privFoo(): void
    {
        echo "Jestem prywatną metodą \n";
    }

    public function printProperties(): void
    {
        var_dump($this->type);

        $this->privFoo();
    }
}

$myFlat = new Flat();

// aby odwołać się do właściwości obiektu używamy strzałki "->"
// pobranie

$myFlatType = $myFlat->type;
var_dump($myFlatType);

// przypisanie wartości do właściwości
$myFlat->type = 'M4';

// Wywołanie metod
$myFlat->open();
$myFlat->close();
$tmp = $myFlat->doSomething('foo');

/*
 MODYFIKATORY DOSTĘPU
 
 Istnieją trzy rodzaje modyfikatorów dostępu:
 - public
 - private
 - protected
*/