<?php

require 'vendor/autoload.php';

use App\CurrencyConverter;

$apiKey = '';
$converter = new CurrencyConverter($apiKey);


$input = readline("Enter the amount and base currency (e.g., '100 USD'): ");

[$amount, $baseCurrency] = explode(' ', $input);

$exchangeCurrency = readline("Enter the exchange currency: ");


$currencyConversion = $converter->convertCurrency($baseCurrency, $exchangeCurrency, $amount);

echo "----------------------------------------------------------------" . PHP_EOL;
echo "Base Currency: " . $currencyConversion->getBase()->getCode() . PHP_EOL;
echo "Amount: " . $currencyConversion->getAmount() . PHP_EOL;
echo "Conversion Rate: " . $currencyConversion->getRate() . PHP_EOL;
echo "Conversion Result: " . $currencyConversion->getResult()["$exchangeCurrency"] . " $exchangeCurrency" . PHP_EOL;
echo "----------------------------------------------------------------" . PHP_EOL;
