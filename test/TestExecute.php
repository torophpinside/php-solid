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

    public function testExecuteSumSuccess() {
        $a = 2;
        $b = 7;
        $c = '+';

        $this->assertEquals(9, sum($a, $b));
    }

    public function testExecuteSubtSuccess() {
        $a = 4;
        $b = 8;
        $c = '-';

        $this->assertEquals(-4, sub($a, $b));
    }
}
