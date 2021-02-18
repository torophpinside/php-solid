<?php

declare(strict_types=1);

require_once __DIR__ .'/../vendor/autoload.php';

// Criar um programa que faca a soma e subtracao de numeros inteiros

$operation = \Solid\Operation\OperationFactory::getOperation((int)$argv[1], (int)$argv[3], $argv[2]);

$calculatorEng = new \Solid\Engine\CalculatorEngine($operation);
$executor = new \Solid\Executor\Executor($calculatorEng);
$executor->run();
