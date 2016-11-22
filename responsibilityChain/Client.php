<?php
function __autoload($class_name)
{
    require_once "./".$className.".php";
}
class Client
{
    private $query;

    public function __construct()
    {
        if(isset($_GET['query'])){
            $this->query = $_GET['query'];
        }
        //设置后继
        $q1 = new Q();
        $q2 = new Q();
        $q1->setSuccessor($q2);

        $loadup = new Request($this->query);
        $q1->handleRequest($loadup);
    }
}

new Client();