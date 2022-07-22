<?php

class Math
{
    public static function square(float $num): float
    {
        return $num * $num;
    }
}

$callableString = 'Math::square';

assert(true === is_callable($callableString));
assert(9.0 === $callableString(3));

$number = 3;
printf("\nТест анонимной функции callableString(%s): %s\n\n", $number, $callableString($number));