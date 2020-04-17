<?php
include 'Stack.php';

$array=[1,2,3,4,5];
print_r(reverse($array));
function reverse($array) {
    $stack = new Stack(count($array));
    for ($i=0; $i<count($array); $i++) {
        try {
            $stack->push($array[$i]);
        } catch (Exception $e) {
        }
    }

    $r = "";
    while (!$stack->isempty()) {
        try {
            $r .= $stack->pop().',';
        } catch (Exception $e) {
        }
    }
    return explode(',',$r);
}