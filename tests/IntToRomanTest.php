<?php declare(strict_types=1);

namespace App\Tests;

use App\ErrorException;
use App\IntToRoman;
use PHPUnit\Framework\TestCase;

class IntToRomanTest extends TestCase
{
    public function testItsWorking()
    {
        $test = new IntToRoman();
            $this->assertInstanceOf(IntToRoman::class, $test);
    }

    public function testAcceptsIntegerAndReturnsRoman()
    {
        $test = new IntToRoman();
            $this->assertEquals("VI", $test->run(6));
    }

    public function testExceptionRaisedForStringInputs()
    {
        $test = new IntToRoman();
            $this->expectException(ErrorException::class);
            $this->expectExceptionMessage('Input was not Integer.');
            $test->run('string');
    }

    public function testExceptionRaisedForArrayInputs()
    {
        $test = new IntToRoman();
        $this->expectExceptionMessage('Input was not Integer.');
        $test->run(['test', 2, 4]);
    }

    public function testConvertsValuesUnder10()
    {
        $test = new IntToRoman();
            $this->assertEquals("XIIII", $test->run(9));
    }

}