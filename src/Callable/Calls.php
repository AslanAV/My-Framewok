<?php

class Foo
{
    public function __call($name, $args)
    {
        if ($name === 'bar') {
            echo 'bye!';
        }
    }

     public function bar()
     {
       echo 'hello!';
     }
}

$foo = new Foo();
$foo->bar();