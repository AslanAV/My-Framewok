<?php


class SomeObject
{
    public function __invoke()
    {
        return 'something';
    }
}

$obj = new SomeObject();
assert(true === is_callable($obj));

echo $obj();