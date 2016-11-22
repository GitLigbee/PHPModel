<?php
include_once 'Decorator.php';
class DemoTwo
{
    public function __construct(IComponent $obj)
    {
        $this->obj = $obj;
    }
    public function getPrice()
    {
        return 380 + $this->obj->getPrice();
    }
}