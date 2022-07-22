<?php

namespace App\Services;

class Service
{
    private array $acc = [];

    public function getMessage(): string
    {
        return 'messsage';
    }

    public function getString(): string
    {
        return 'string';
    }

    public function startBuilder(): Service
    {
        $this->acc[] = 'started';
        return $this;
    }

    public function endBuilder(): string
    {
        $this->acc[] = 'builder';
        $result = implode(' ', $this->acc);
        $this->acc = [];

        return $result;
    }

}