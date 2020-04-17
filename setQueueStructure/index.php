<?php
include 'Queue.php';
$testQueue=new Queue();
$testQueue->enqueue('first');
$testQueue->enqueue('second');
$testQueue->enqueue('third');
echo $testQueue.'<br>';
$testQueue->dequeue();
$testQueue->dequeue();
echo $testQueue.'<br>';
echo $testQueue->displayQueueStatus();
$testQueue->enqueue('forth');
$testQueue->enqueue('fifth');
echo $testQueue.'<br>';
$testQueue->dequeue();
$testQueue->dequeue();
$testQueue->dequeue();
echo $testQueue.'<br>';
echo $testQueue->displayQueueStatus();