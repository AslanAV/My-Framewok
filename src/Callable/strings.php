<?php

// callable строки

function mySquare($var) {
  return $var * $var;
}

$callableString = 'mySquare';

assert(true === is_callable($callableString));
assert(true === is_string($callableString));

$number = 3;
printf("\nТест анонимной функции callableString(%s): %s\n\n", $number, $callableString($number));