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

// Dziedziczenie
class User 
{
    public string $login = 'userLogin';
    private string $topSecret = 'secret';

    public function __construct() 
    {
        // ....
    }
}


class Client extends User
{
    public int $number = 111;

    public function __construct()
    {   
        var_dump($this->login);
        var_dump($this->number);
        //var_dump($this->topSecret);
    }
}

class Admin extends User
{
    public string $role = 'superuser';

    public function __construct()
    {   
        var_dump($this->login);
        var_dump($this->role);
        // var_dump($this->topSecret);
    }
}


$user = new User();
$client = new Client();
$admin = new Admin();

class Rodzic
{
    protected ?string $nazwa = null;

    public function __construct(string $nazwa)
    {
        var_dump("TO JEST KONSTRUKTOR RODZICA\n");
        $this->nazwa = $nazwa;
    }

    public function pobierzNazwe(): ?string
    {
        return $this->nazwa;
    }
}

$obiektRodzica = new Rodzic('testowa nazwa rodzica');
var_dump($obiektRodzica->pobierzNazwe());

class Dziecko extends Rodzic
{
    public function __construct(string $nazwa, int $numer)
    {
        var_dump("TO JEST KONSTRUKTOR DZIECKA\n");
        parent::__construct($nazwa);
    }
}

$obiektDziecko = new Dziecko('testowa nazwa dziecka', 111);
var_dump($obiektDziecko->pobierzNazwe());

// Klasy abstrakcyjne
abstract class SomeClass12 
{
    protected string $property;

    abstract public function doSomething(string $param1, array $param2): object;

    public function property(): string
    {
        return $this->property;
    }
}

class Test extends SomeClass
{
    public function doSomething(string $param1, array $param2): object
    {
        return new object();
    }
}

abstract class Renderer
{
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    abstract public function render(): string;

    public function text(): string
    {
        return $this->text;
    }
}


class HtmlRenderer extends Renderer
{
    public function render(): string
    {
        return '<html><head></head><body><h2> ==>'
         . $this->text 
         . '<== </h2></body></html>';
    }
}

class JsonRenderer extends Renderer
{
    public function render(): string
    {
        return json_encode($this->text);
    }
}


class XmlRenderer extends Renderer
{
    public function render(): string
    {
        return "<xml><teks>{$this->text}</tekst></xml>";
    }
}

$html = new HtmlRenderer('Tekst do wyświetlenia');
echo $html->render();
