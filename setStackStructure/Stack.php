<?php

class Stack {

    protected $stack;
    protected $limit;

    public function __construct($limit = 10, $values = null) {

        $this->limit = $limit;
        $this->stack = array();
        if (is_null($values)) $values = array();
        else if (!is_array($values)) $values = array($values);
        foreach ($values as $value) $this->push($value);
    }
public function __toString()
{
 return implode(", ",$this->stack);   // TODO: Implement __toString() method.
}

    public function push($item) {

        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop() {
        if ($this->isEmpty()) {

            throw new RunTimeException('Stack is empty!');
        } else {

            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
       return empty($this->stack);

    }
public function displayStackStatus(){
        if (empty($this->stack)) echo 'Stack is empty!';
        else echo 'Stack is NOT empty!';
}
}
