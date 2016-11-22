<?php
class Client
{
    public function __construct()
    {
        echo 'demo';
    }
}
$demo = new Client();
$cp = clone $demo;
