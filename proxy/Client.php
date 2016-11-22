<?php
include_once 'UniversalConnect.php';
class Client
{
    private $hook;
    public function __construct()
    {
        $this->hook = UniversalConnect::connect();
    }
}