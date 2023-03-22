<?php
namespace Rresch2004\Calculator;
use Rresch2004\Logger\ILogger;

class Calc
{
    private ILogger $logger;

    public function __construct(ILogger $logger)
    {
        $this->logger = $logger;
    }

    public function add(int $x, int $y)
    {
        $result = $x + $y;

        $this->logger
            -> logEntry('Result of "' . $x . ' + ' . $y . '": ' . $result);

        return $result;
    }
}
