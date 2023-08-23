<?php
namespace App\Menu\Items;
use App\Menu\Items\MenuItem;

class Salade implements MenuItem {
    private $price;

    public function __construct()
    {
        $this->price = 6.0;
    }

    public function addItem(MenuItem $piece): void
    {
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

