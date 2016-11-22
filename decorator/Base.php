<?php
include_once 'IComponent.php';
class Base extends IComponet
{
    public function __construct()
    {
        $this->obj = self;
    }
    public function getPrice()
    {
        return 520;
    }
}