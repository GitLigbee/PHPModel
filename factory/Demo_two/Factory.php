<?php
abstract class Factory
{
    abstract protected function factoryMethod(Product $product);
    public function startFactory($product)
    {
        $demo = $product;
        $msg = $this->factoryMethod($demo);
        return $msg;
    }
}