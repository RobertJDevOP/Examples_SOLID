<?php 
include_once 'vendor/autoload.php';

use App\CoffeShop;
use App\Menu;
//Single responsibility

$products = [
    ['id'=>1, 'name'=>'Negro','price'=>25],
    ['id'=>2, 'name'=>'Latte','price'=>35],
    ['id'=>3, 'name'=>'Capuchino','price'=>45]
];

$shop = new CoffeShop();

$shop->addProducts($products);

$menu = new Menu();

echo $menu->view($shop->getProducts());


//echo $shop->viewMenu();