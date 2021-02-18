<?php

declare(strict_types=1);
// Criar um programa que faca a soma e subtracao de numeros inteiros

function execute($a, $b, $c) {
    if ($c === '+') {
        return (int)$a + (int)$b;
    } elseif($c === '-') {
        return (int)$a - (int)$b;
    }

    return false;
}

echo execute($argv[1], $argv[3], $argv[2]);


