<?php

namespace Rresch2004\Calculator;

use PHPUnit\Framework\TestCase;
use Rresch2004\Logger\EchoLogger;

class Test extends TestCase
{
    public function testOnePlusOne()
    {
        // arrange
        $logger = new EchoLogger();
        $calc = new Calc($logger);

        // act
        $result = $calc->add(1, 1);

        // assert
        $this->assertEquals($result, 2);
    }

    /**
     * @param $z1
     * @param $z2
     * @param $erg
     * @return void
     * @dataProvider numberProvider
     */
    public function testRandomNum($z1, $z2, $erg)
    {
        // arrange
        $logger = new EchoLogger();
        $calc = new Calc($logger);

        // act
        $result = $calc->add($z1, $z2);

        // assert
        $this->assertEquals($result, $erg);
    }

    public static function numberProvider(): array
    {
        return [
            [1, 2, 3],
            [4,4,8],
            [5,5,10]
    ];
    }
}


