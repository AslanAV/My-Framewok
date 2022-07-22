<?php

class Math
{
    public function square(float $num): float
    {
        return $this->percent *  $num * $num;
    }
}

$callableArray = [Math::class, 'square'];

assert(true === is_callable($callableArray));
assert(9 == $callableArray(3));

$number = 3;
printf("\nТест анонимной функции callableArray(%s): %s\n\n", $number, $callableArray($number));


$math = new Math();
$callableArray2 = [$math, 'square'];

assert(true === is_callable($callableArray2));
assert(90 == $callableArray2(3));

$number = 3;
printf("\nТест анонимной функции callableArray2(%s): %s\n\n", $number, $callableArray2($number));