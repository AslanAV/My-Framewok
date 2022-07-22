<?php

// callable строки
$callableString = 'mb_strtolower';

assert(true === is_callable($callableString));

$argument = 'HIGH';
printf("\nТест анонимной функции callableString('%s'): %s\n\n", $argument, $callableString($argument));