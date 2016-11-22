<?php
include_once 'Product.php';
class DemoProduct implements IProduct
{
    private $msgProduct;
    public function getProperties()
    {
        $this->msgProduct = "this is demo";
        return $this->msgProduct;
    }
}