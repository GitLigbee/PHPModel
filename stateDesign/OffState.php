<?php
class OffState
{
    private $context;
    public function __construct(Context $context)
    {
        $this->context = $context;
    }
    public function turnOn()
    {
        echo 'turn on the light';
        $this->context->setState($this->context->getOnState());
    }
    public function turnOff()
    {
        echo 'the light have off';
    }
}