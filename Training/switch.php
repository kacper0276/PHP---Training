<?php

// Switch
 switch ($sprawdzanaWartosc) {
      case 'foo':
          // blok kodu do wykonania gdy sprawdzanaWartosc wynosi 'foo'
          break;
      case 'bar':
          // blok kodu do wykonania gdy sprawdzanaWartosc wynosi 'bar'
          break;
      case 'zaz':
          // blok kodu do wykonania gdy sprawdzanaWartosc wynosi 'zaz'
          break;
      default:
          // domyślny kod bloku do wykonania gdy sprawdzanaWartosc nie zostanie dopasowana do powyższych
          // przypadków, czyli nie wynosi 'foo', 'bar' i 'zaz'
          break;
}

$city = 'Strawczyn';
switch ($city) {
    case 'Berlin':
    case 'Hamburg':
        $country = 'Niemcy';
        break;
    case 'Kraków':
    case 'Warszawa':
    case 'Katowice':
        $country = 'Polska';
        break;
    case 'Moskwa':
        $country = 'Rosja';
        break;
    default:
        $country = 'Nie rozpoznano';
        break;
}
echo $country;