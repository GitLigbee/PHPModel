<?php
function __autoload($className)
{
    include_once $className.'.php';
}
class Client
{
    public $context;
    public function __construct()
    {
        $this->context = new Context();
        $this->context->turnOn();
        $this->context->turnOff();
        $this->context->turnOff();
        $this->context->turnOn();
    }
}
new Client();