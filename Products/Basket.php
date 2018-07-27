<?php

class Basket implements \ArrayAccess

{
    public $inBasket = [];
    public function offsetSet($index, $product) //Исключает товар с нулевой ценой
    {
        try {
            if (empty($product->getPrice())) {
                throw new Exception('<b>Внимание!</b> ');
            }
            if (is_null($index)) {
                $this->inBasket[] = $product;
            }
        } catch (Exception $e) {
            echo $e->getMessage(), '<b>У товара - </b> ', $product->name, '<b> отсутствует цена!</b></br>';
        }
    }

    public function offsetGet($index)
    {
        return isset($this->inBasket[$index]) ? $this->inBasket[$index] : null;
    }

    public function offsetExists($index)
    {

        return isset($this->inBasket[$index]);
    }

    public function offsetUnset($index)
    {
        unset($this->inBasket[$index]);
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->inBasket as $product) {
            $totalPrice = $totalPrice + $product->getPrice();
        }
        return $totalPrice;
    }
}