<?php
header("Content-Type: text/html; charset=utf-8");
session_start();


spl_autoload_register ('myAutoLoad');
function myAutoLoad ($className)
{
    $className = str_replace('/', DIRECTORY_SEPARATOR, $className);
    $fileName =  'Products' . DIRECTORY_SEPARATOR . $className . '.php';
    require_once $fileName;
}

$basket = new Basket();

$pagani= new Car('Pagani', 250000);
$basket[] = $pagani;

$koenigsegg = new Car('Koenigsegg', 1750000);
$basket[] = $koenigsegg;

$defaultPen = new BallPen('Ручка', 150);
$basket[] = $defaultPen;

$sony4k = new Tv ('Sony 4K TV Set', 0);
$basket[] = $sony4k;

var_dump ($basket->getTotalPrice());

$order = new Order($basket);
$order->getOrderInfo();
