<?php
include_once 'IAdapter.php';

class DemoAdapter implements IAdapter
{
    private $obj;
    public function __construct(DemoAdapter $obj)
    {
        $this->obj = $obj;
    }
    private function modelName()
    {
        $this->obj->modelName();
    }
}