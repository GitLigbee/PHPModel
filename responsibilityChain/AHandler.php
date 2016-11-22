<?php
abstract class AHandler
{
    protected $successor;
    protected $hookup;
    protected $handle;
    abstract public function handleRequest($request);
    abstract public function setSuccessor($nextService);
}