<?php
/* TAGI PHP, ECHO, KOMENTARZE */

/*
 Omówienie tagów.
 Napisanie nowej wersji hello world
 
 Kod PHP umieszczamy w specjalnych tagach <?php i ?>, w wyniku czego interpreter wie, że ma wykonać ten kod.
 Tagu zamykającego (?>) nie musimy zapisywać, jeśli do końca danego pliku występuje tylko kod PHP.
 Zalecane jest wręcz nie stosowanie go jeśli nie musimy - patrz przypadek wyżej
*/

/*
 Do wyświetlenia tekstu służy konstrukcja "echo".
 Tekstu który, chcemy wyświetlić umieszczamy w apostrofach lub cudzysłowach. Obu możliwości możemy używać zamiennie
 jednak istnieje pomiędzy nimi różnica do której powrócimy w przyszłej części kursu
 UWAGA. Praktycznie każdą linię w PHP kończymy średnikiem. W dalszej części kursu omówimy kiedy średnik nie jest
 wymagany.
 @link http://php.net/manual/en/function.echo.php
*/

echo 'Witamy na kursie !!!';

// to jest komentarz liniowy
// trzeba za każdym razem linię poprzedzać dwoma ukośnikamy
// aby interpreter PHP nie potraktował lini jak kodu do wykonania.

/*
    To jest natomiast komentarz blokowy i wszystko co znajduje się pomiędzy
    jest traktowane jako komentarz i nie będzie wykonane
*/
