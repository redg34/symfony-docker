<?php
namespace App\Menu\Items;

class Glace implements MenuItem {
    private $price = 7.50;

    public function getPrice(): float {
        return $this->price;
    }
}
