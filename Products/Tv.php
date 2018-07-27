<?php

class Tv extends Product implements TvType
{
    public $russianName = 'Телевизор';
    private $make;
    private $model;
    private $country;
    private $size;
    private $resolution;
    public function __toString()
    {
        return 'Телевизор '. $this->make . ' ' . $this->model . ' с диагональю ' . $this->size . ' и форматом ' . $this->resolution.'.'.' Страна производитель: '.$this->country.'('.$this->getTvType().')'.'</br>';
    }

    public function getTvType()
    {
        if ($this->resolution == '1080p')
        {
            return 'FullHD';
        } else {
            return 'UltraHD';
        }
    }
}