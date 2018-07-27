<?php

class BallPen extends Product implements BallPenBall
{
    public $russianName = 'Шариковая ручка';
    private $color;
    private $material;
    private $ball;
    public function __toString()
    {
        return ' Ручка шариковая, цвет: ' . $this->color . ', материал корпуса: ' . $this->material . ', диаметр шарика: ' . $this->ball.'.'.'</br>';
    }

    public function getBallSize()
    {
        return $this->color;
    }
}