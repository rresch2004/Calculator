<?php
require 'vendor/autoload.php';

use \Rresch2004\Logger\EchoLogger;
use \Rresch2004\Calculator\Calc;

$logger = new Rresch2004\Logger\FileLogger("calc.log");
$calc = new Calc($logger);

$calc->add(3,15);