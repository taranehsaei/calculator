<?php
require_once 'vendor/autoload.php';
use \Litipk\BigNumbers\Desimal as Desimal;
$one = Desimal:: fromInteger(1);
$two = Desimal:: fromInteger(2);
$three = Desimal :: fromInteger(3);
$seven = Desimal :: fromString('7.0');

$a = $one->div ($seven, 100);
$b = $two->div($seven,100);
$c = $three->div($seven,100);
echo ($c->sub(($a->add($b))));
echo "\n";
echo gmp_strval(gmp_div("1.0","7.0"));
echo "\n";
$oneseven=bcdiv('1','7','100');
$twoseven=bcdiv('2','7','100');
$threeseven=bcdiv('3','7','100');
echo bcsub(bcadd($oneseven,$twoseven,100),$threeseven,100);
echo "\n";