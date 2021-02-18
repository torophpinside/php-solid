<?php

require_once '../src/index.php';

use PHPUnit\Framework\TestCase;

class TestExecute extends TestCase
{
    public function testExecuteSuccess() {
        $a = 2;
        $b = 2;
        $c = '+';

        $this->assertEquals(4, execute($a, $b, $c));
    }

    public function testExecuteSubSuccess() {
        $a = 4;
        $b = 2;
        $c = '-';

        $this->assertEquals(2, execute($a, $b, $c));
    }

    public function testExecuteError() {
        $a = 4;
        $b = 2;
        $c = '*';
        $this->assertFalse(execute($a, $b, $c));
    }
}
