<?php
include_once 'Demo.php';
include_once 'IAdapter.php';

class DemoAdapter extends Demo implements IAdapter
{
    public function __construct()
    {
        $this->modify();
    }
    private function modify()
    {
        $this->model = 'Adapter Model';
    }
}