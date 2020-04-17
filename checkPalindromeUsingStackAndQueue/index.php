<?php
include "StackAndQueue.php";

$strToCheck = 'able was I ere I saw elba';

$obj = new StackAndQueue();

$len = strlen($strToCheck);
$isPalindrome = true;


for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($strToCheck{$i});
    $obj->enqueueCharacter($strToCheck{$i});
}


for ($i = 0; $i < $len / 2; $i++) {
    if ($obj->popCharacter() != $obj->dequeueCharacter()) {
        $isPalindrome = false;

        break;
    }
}


if ($isPalindrome) {
    echo 'The word "' . $strToCheck . '" is a palindrome.';
} else {
    echo 'The word "' . $strToCheck . '" is NOT a palindrome.';
}