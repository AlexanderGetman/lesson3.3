<?php

class Order
{
    private $order;

    public function __construct(Basket $basket)
    {
        $this->order = $basket;
    }

    public function getOrderInfo()
    {
        $i = 1;
        foreach ($this->order->inBasket as $key=>$product) {
            echo "<h3>Товар: {$i}</h3>";
            $this->order[$key]->orderDescription();
            $i++;
            echo '<br>';
        }
    }
}
