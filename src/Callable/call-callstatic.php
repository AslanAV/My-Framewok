<?php

class Always
{
    public static function __callStatic($name, $args)
    {
        return $name;
    }
}

$callableString = 'Always::func';
assert(true === is_callable($callableString));

echo $callableString() . PHP_EOL;