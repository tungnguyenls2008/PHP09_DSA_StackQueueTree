<?php

Class PriorityQueue
{

    private $_limit;
    private $_queue = [];
    private $_flag = false;

    function __construct($limit = 20)
    {
        $this->_limit = $limit;
    }


    public function AddToQueue($item, $priority = 0)
    {

        if ($priority >= count($this->_queue)) {
            $priority = 0;
        }

        $priority = $this->CheckPriority($priority, "AddToQueue");

        if (count($this->_queue) < $this->_limit) {

            if (empty($this->_queue) || ($priority == 0 && $this->_flag == false)) {
                array_push($this->_queue, $item);
            } else {

                $this->AddPriorityItem($item, $priority);
                $this->_flag = false;
            }
        } else {
            echo "Queue size exceeded - AddToQueue";
            exit;
        }
    }


    private function AddPriorityItem($item, $priority)
    {
        $tempArray = [];

        foreach ($this->_queue as $key => $value) {
            if ($key == $priority) {

                array_push($tempArray, $item);

                for ($i = $key; $i < count($this->_queue); $i++) {
                    array_push($tempArray, $this->_queue[$i]);
                }
                break;
            }
            array_push($tempArray, $value);
        }
        $this->_queue = $tempArray;
    }

// not necessary
    /*public function ChangePriority($priorityOld, $priorityNew)
    {
        $priorityOld = $this->CheckPriority($priorityOld, "ChangePriority");
        $priorityNew = $this->CheckPriority($priorityNew, "ChangePriority");

        if ($priorityNew == 0) {
            $this->_flag = true;
        }
        if ($priorityOld < count($this->_queue)) {

            $tempVar = $this->_queue[$priorityOld];

            array_splice($this->_queue, $priorityOld, 1);

            $this->AddToQueue($tempVar, $priorityNew);
        } else {
            echo "Error: Priority is out of range ChangePriority";
            exit;
        }
    }*/


    public function RemoveFromQueue($priority = 0)
    {
        $priority = $this->CheckPriority($priority, "RemoveFromQueue");
        if (!$this->CheckEmpty()) {
            if ($priority != 0) {
                array_splice($this->_queue, $priority, 1);
            } else {
                echo $this->_queue[$this->CheckPriority($priority, "RemoveFromQueue")] . ' is being examine now <br>';
                array_shift($this->_queue);
            }
        } else {
            echo "The queue is empty";
            exit;
        }
    }


    private function CheckPriority($priority, $function)
    {
        if ($priority < 0) {
            echo "Priority aut of range: {$priority} ({$function})";
            exit;
        }
        if (!is_int($priority)) {
            echo "Priority is not of type integer: {$priority} ({$function})";
            exit;
        }
        return $priority;
    }


    private function CheckEmpty()
    {
        if (empty($this->_queue)) {
            return true;
        }
        return false;
    }

    public function __toString()
    {
        echo 'This is a priority queue of added patients: <br>';
        return implode('<br>', $this->_queue);
    }
}

