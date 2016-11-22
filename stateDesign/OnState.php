<?php
class OnState implements IState
{
    private $context;
    public function __construct(Context $context)
    {
        $this->context = $context;
    }
    public function turnOff()
    {
        echo 'turn off the light';
        $this->context->setState($this->context->getOffState());
    }
    public function turnOn()
    {
        echo 'the light have turn on';
    }
}