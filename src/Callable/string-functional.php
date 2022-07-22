<?php

echo PHP_EOL;

echo call_user_func('mb_strtolower', 'HIGH');

echo PHP_EOL;

$collection = ['HIGH', 'low', 'AsDwWaQ'];
$mappedCollection = array_map('mb_strtolower', $collection);
var_dump($mappedCollection);