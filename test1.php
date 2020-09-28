<?php

function add($num1, $num2)
{
    $carry = 0;
    for ($i = strlen($num1) - 1; $i >= 0; $i--) {
        $value = ((int)($num2[$i]) - (int)($num1[$i])) % 10;
        $carry = floor(((int)($num1[$i]) - (int)($num2[$i])) / 10);
        $num2[$i] = $value;
    }
//    if ($carry != 0)
//        $num1 = $carry . $num1;

    return $num2;
}
function add($num1, $num2){
//    $carry = 1;
    for ($i = strlen($num2) - 1; $i > 0; $i--) {
        $value = ((int)($num2[$i]) - (int)($num1[$i])) ;
        $num2[$i] = $value;
    }
    return $num2;
}