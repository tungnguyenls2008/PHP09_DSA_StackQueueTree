<?php


class Stack
{
    private $size;
    private $data;
    private $top;
    public function __construct($size) {
        $this->size = $size;
        $this->data = array();
        $this->top = -1;
    }

    public function push($element) {
        if ($this->top == ($this->size-1)) {
            throw new Exception("Error: Stack is full");
        }
        $this->data[++$this->top] = $element;
    }

    public function pop(){
        if ($this->isempty()) {
            throw new Exception("Error: Stack is empty");
        }
        return $this->data[$this->top--];
    }

    public function top(){
        return $this->data[$this->top];
    }

    public function isempty(){
        if ($this->top == -1)
            return true;

        return false;
    }
}