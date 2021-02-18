<?php

declare(strict_types=1);
// Criar um programa que faca a soma e subtracao de numeros inteiros

function sum($a, $b): int
{
    return (int)$a + (int)$b;
}

function sub($a, $b): int
{
    return (int)$a - (int)$b;
}

function execute($a, $b, $c) {
    if ($c === '+') {
        return sum($a, $b);
    } elseif($c === '-') {
        return sub($a, $b);
    }

    return false;
}

echo execute($argv[1], $argv[3], $argv[2]);
