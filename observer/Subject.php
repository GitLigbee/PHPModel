<?php
class Subject implements SplSubject
{
    private $observers;
    private $data;

    public function setObserver()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach($this->observers as $observer){
            $observer->update();
        }
    }

    public function setData($val)
    {
        $this->data = $val;
    }

    public function getData()
    {
        return $this->data;
    }
}