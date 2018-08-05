<?php

abstract class Product
{
    public $name;
    public $price;


    public function setTitle($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function orderDescription()
    {
        echo '<b>наименование товара:</b> ' . $this->name . ', <b>на сумму:</b> ' . $this->getPrice() . ' рублей';
    }

}
