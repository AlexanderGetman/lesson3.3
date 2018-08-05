<?php
header("Content-Type: text/html; charset=utf-8");
session_start();


spl_autoload_register ('myAutoLoad');
function myAutoLoad ($className)
{
    $className = str_replace('/', DIRECTORY_SEPARATOR, $className);
    $fileName =  'Products' . DIRECTORY_SEPARATOR . $className . '.php';
    if (file_exists($fileName))
    {
        require_once $fileName;
    } else
    {
        echo 'Файлов нет'.'</br>';
    }
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

$order = new Order($basket);
$order->getOrderInfo();
