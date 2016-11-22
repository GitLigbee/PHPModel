<?php
include_once 'Decorator.php';
class DemoOne
{
    public function __construct(IComponent $obj)
    {
        $this->obj = $obj;
    }
    public function getPrice()
    {
        return 100 + $this->obj->getPrice();
    }
}