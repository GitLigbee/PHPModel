<?php
class Context
{
    private $onState;
    private $offState;
    private $currentState;
    public function __construct()
    {
        //这个实例化过程用到了一种递归，称为自引用。构造函数参数中的实参写为$this，这是Context类自身的一个引用。
        //状态类希望接手一个Context类实力作为参数，为了在Context类中实例化一个状态实例，它必须使用$this作为实参
        $this->onState = new OnState($this);
        $this->offState = new OffState($this);
        $this->currentState = $this->offState;
    }
    public function on()
    {
        $this->currentState->turnOn();
    }
    public function off()
    {
        $this->currentState->turnOff();
    }
    public function getOnState()
    {
        return $this->onState;
    }
    public function getOffState()
    {
        return $this->offState;
    }
    public function setState(IState $state)
    {
        $this->currentState = $state;
    }
}