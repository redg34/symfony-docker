<?php
namespace App\Menu\Items;
use App\Menu\Items\MenuItem;

class Pizza implements MenuItem {
    private $price;

    public function __construct()
    {
        $this->price = 15.50;
    }

    public function addItem(MenuItem $piece): void
    {
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}