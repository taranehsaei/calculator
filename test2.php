<?php

function add($num1, $num2)
{
    $num1=65185764831;
    $num2=195555555555555;
    $num3=$num2-$num1;
    $num4=($num3/$num2)-($num1+$num3);
    for ($num2=$num3;$num1>888888;$num1--){
       return $num4;
    }
    echo "result is$num4";
//    for ($i = strlen($num1) - 1; $i >= 0; $i--) {
//        $value = ((int)($num2[$i]) - (int)($num1[$i])) % 10;
//        $carry = floor(((int)($num1[$i]) - (int)($num2[$i])) / 10);
//        $num2[$i] = $value;
//    }
//    return $num3;
}
print_r(add('123456', '123444'));


