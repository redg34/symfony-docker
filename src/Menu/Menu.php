<?php
namespace App\Menu;
use App\Menu\Items\MenuItem;

class Menu {
    private $items = [];

    public function addItem(MenuItem $item) {
        $this->items[] = $item;
    }

    public function getPrice() {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item->getPrice();
        }
        return $totalPrice;
    }
}
