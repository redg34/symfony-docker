<?php
namespace App\Menu\Items;

class Pizza implements MenuItem {
    private $price = 15.50;

    public function getPrice(): float {
        return $this->price;
    }
}
