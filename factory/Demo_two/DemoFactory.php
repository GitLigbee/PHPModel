<?php
include_once 'Creator.php';
include_once 'DemoProduct.php';
class DemoFactory extends Creator
{
    protected function factoryMethod(IProduct $product)
    {
        $demo = $product;
        return $demo->getProperties();
    }
}