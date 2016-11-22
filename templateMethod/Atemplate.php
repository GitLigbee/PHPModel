<?php
abstract class ATemplate
{
    protected $index;
    public function __construct($index)
    {
        $this->index = $index;
        $this->templateMethod();
    }
    private function templateMethod()
    {
        $this->firstStep($this->index);
        $this->secondStep();
        $this->thirdStep();
    }
    abstract protected function firstStep($index);
    abstract protected function secondStep();
    abstract protected function thirdStep();
}