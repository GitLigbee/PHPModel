<?php
include_once 'DemoFactory.php';
include_once 'DemoProduct.php';
class Client
{
    private $demoObject;
    public function __construct()
    {
        $this->demoObject = new DemoFactory();
        echo $this->demoObject->startFactory();
    }
}
$demo = new Client();