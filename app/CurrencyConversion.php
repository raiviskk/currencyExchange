<?php
namespace App;
class CurrencyConversion
{
private ?Currency $base;
private float $amount;
private array $result;
private float $rate;

public function __construct(?Currency $base, float $amount, array $result, float $rate)
{
$this->base = $base;
$this->amount = $amount;
$this->result = $result;
$this->rate = $rate;

}

public function getBase(): ?Currency
{
return $this->base;
}

public function getAmount(): float
{
return $this->amount;
}

public function getResult(): array
{
return $this->result;
}

public function getRate(): float
{
return $this->rate;
}

}