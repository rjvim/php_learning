<?php 

require 'vendor/autoload.php';


use Sylius\Component\Taxation\Calculator\DefaultCalculator;
use Sylius\Component\Taxation\Model\TaxRate;

$calculator = new DefaultCalculator();

$taxRate = new TaxRate();
$taxRate->setAmount(0.23);

$taxAmount = $calculator->calculate(100, $taxRate);

echo $taxAmount; // Outputs "23".

