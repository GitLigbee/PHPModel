<?php
class Q extends AHandler
{
    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }

    public function handleRequest($request)
    {
        $this->handle = 'q1';
        if($request->getService()){

        }elseif($this->successor != null){
            $this->successor->handleRequest($request);
        }
    }
}