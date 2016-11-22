<?php
abstract class Creator
{
    abstract protected function factoryMethod();
    public function startFactory()
    {
        $msg = $this->factoryMethod();
        return $msg;
    }
}