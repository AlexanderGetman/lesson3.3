<?php

class Car extends Product implements CarCountry
{
    private $country;

    public function getCountry()
    {
        return $this->country;
    }

}