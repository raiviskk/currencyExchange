<?php

namespace App;
class Currency
{
    public ?string $name;
    public string $code;


    public function __construct(string $code, ?string $name )
    {
        $this->code = $code;
        $this->name = $name;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}