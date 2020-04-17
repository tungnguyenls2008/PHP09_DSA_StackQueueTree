<?php


class StackAndQueue
{
    private $queue = [];
    private $stack = [];


    public function pushCharacter($symbol)
    {
        array_unshift($this->stack, $symbol);
    }


    public function enqueueCharacter($symbol)
    {
        $this->queue[] = $symbol;
    }


    public function popCharacter()
    {
        return array_shift($this->stack);
    }


    public function dequeueCharacter()
    {
        return array_shift($this->queue);
    }

}
