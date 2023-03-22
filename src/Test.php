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
}


