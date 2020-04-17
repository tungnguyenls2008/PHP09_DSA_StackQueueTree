<?php
include 'Stack.php';
$stack=new Stack(10,['first thing','something','something else','other thing','some thing special']);
echo 'Initial stack: '.$stack.'<br>';
$stack->pop();
$stack->pop();
$stack->pop();
echo 'Stack after pop: '.$stack.'<br>';
$stack->push('extra thing');
$stack->push('more extra thing');
echo 'Stack after push: '.$stack.'<br>';
echo $stack->displayStackStatus().'<br>';
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
echo 'Stack after pop again: ';
echo $stack->displayStackStatus().'<br>';