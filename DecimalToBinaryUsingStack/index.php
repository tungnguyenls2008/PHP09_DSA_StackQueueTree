<?php
include 'Stack.php';
function DecimalToBinary($num) {
    $stack=new Stack(100);
    $i = "";
    while (floor($num) > 0) {
        $i .= $num % 2;
        try {
            $stack->push($i);
        } catch (Exception $e) {
        }
        $num = floor($num / 2);

    }
    $binaryArr=($stack->getData());
    return ($binaryArr[count($binaryArr)-1]);
    //return strrev($i);
}
echo DecimalToBinary(666);