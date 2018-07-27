<?php

class Duck extends Product implements DuckVoice
{
    public $russianName = 'Утка';
    private $name;
    private $territory;
    private $weight;
    public function __toString()
    {
        return 'Утка ' . $this->name . ' избрала своим ореолом обитания ' . $this->territory.'.'. ' Средний вес взрослой особи - '.$this->weight.'.'.' А говорит утка '.$this->getDuckVoice().'</br>';
    }

    public function getDuckVoice()
    {
        return 'Кря!';
    }
}