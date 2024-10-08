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

// Konstruktor

class SomeClass 
{
    public function __construct()
    {
        echo "Hej to ja, konstruktor Twojej klasy. Ja istnieję !!!\n";
    }
}

$object = new SomeClass();

class Flat1
{
    private int $doorLockCode;

    private bool $closed = true;

    public function __construct(int $doorCode) 
    {
        if (strlen((string) $doorCode) < 6) {
            echo "Kod jest za krótki \n";
        } else {
            $this->doorLockCode = $doorCode;
        }
    }

    public function close(): void
    {
        $this->closed = false;
    }

    public function open(int $code): void
    {
        if ($code === $this->doorLockCode) {
            $this->closed = true;
        } else {
            // logowanie informacji o próbie użycia niepoprawnego kodu
        }
    }

    public function isOpen(): bool
    {
        return !$this->closed;
    }
}

$newDorrCode = rand(100000, 999999);
$flat = new Flat1(123);

// STAŁE ORAZ METODY I WŁAŚCIWOŚCI STATYCZNE

/*
 O stałych w kontekście globalnym, czyli widocznych w dowolnym miejscu kodu który tworzymy mówiliśmy już na początku kursu.
 
 Istnieje jeszcze jeden rodzaj stałych, mianowicie stałe klasy.
 Definiujemy je w klasie przy użyciu słowa 'const'.
 */

class SomeClass1
{
    const BAR = 'bar'; // publiczna
    public const FOO = 'foo';
    private const ZAZ = 'zaz';

    private bool $tmp = true;

    public function doSomething()
    {
        echo self::ZAZ;
    }
}

echo SomeClass1::FOO . "\n";
// echo SomeClass1::ZAZ . "\n"; // Error

$object = new SomeClass1();
var_dump($object);
$object->doSomething();
// var_dump(SomeClass1::ZAZ); // Error

// Metody statyczne

class SomeClass2
{
    public static string $foo;
    private static string $baz;

    public static function doSomething()
    {
        self::$baz = 'Wartość prywatnej zmiennej statycznej';
        echo "Metoda się wykonała\n";
        var_dump(self::$baz);
    }
}

SomeClass2::$foo = 'foo foo';
var_dump(SomeClass2::$foo);
SomeClass2::doSomething();
// SomeClass2::$baz; // ERROR