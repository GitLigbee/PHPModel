<?php
function __autoload($className)
{
    require_once $className.'.php';
}
class Client
{
    private $obj;
    public function __construct()
    {
        $this->obj = new Base();
        $component = $this->wrapComponent($this->obj);
        echo $component->getPrice();
    }
    private function wrapComponent(IComponent $component)
    {
        $component = new DemoOne($component);
        $component = new DemoTwo($component);
        return $component;
    }
}
new Client();