<?php
include 'PriorityQueue.php';

$patientPriorityQueue=new PriorityQueue();
$patientPriorityQueue->AddToQueue('Smith',5);
$patientPriorityQueue->AddToQueue('Jones',4);
$patientPriorityQueue->AddToQueue('Fehrenbach',6);
$patientPriorityQueue->AddToQueue('Brown',1);
$patientPriorityQueue->AddToQueue('Ingram',1);
echo $patientPriorityQueue.'<br>';
$patientPriorityQueue->RemoveFromQueue();
echo $patientPriorityQueue.'<br>';
$patientPriorityQueue->RemoveFromQueue();
echo $patientPriorityQueue.'<br>';