<?php
include_once 'DemoAdapter.php';

class Client
{
    public function __construct()
    {
        $demo = new DemoAdapter();
        echo $this->request($demo);
    }
    private function request(IAdapter $demo)
    {
        return $demo->modelName();
    }
}