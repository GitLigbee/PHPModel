<?php
include_once 'DemoAdapter.php';
include_once 'Demo.php';
class Clent
{
    private $model;
    public function __contruct()
    {
        $demo = new Demo();
        $this->model = new DemoAdapter($demo);
        echo $this->model->modelName();
    }
}