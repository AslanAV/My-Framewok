<?php
//string-classic
// https://www.php.net/manual/ru/language.types.callable.php

// Анонимная функция
$square = fn($num) => $num * $num;

assert(true === is_callable($square));
assert(9 === $square(3));

$number = 3;
printf("\nТест анонимной функции square(%s): %s\n\n", $number, $square($number));


//string-function
