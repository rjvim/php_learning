<?php 

require 'vendor/autoload.php';


use Sylius\Component\Taxation\Calculator\DefaultCalculator as SyliusDefaultCalculator;
use Sylius\Component\Taxation\Model\TaxRate;

$myCal = new DefaultCalculator();

$myCal->sayHiToPramod();

$calculator = new SyliusDefaultCalculator();

$taxRate = new TaxRate();
$taxRate->setAmount(0.23);

$taxAmount = $calculator->calculate(100, $taxRate);

echo $taxAmount; // Outputs "23".

