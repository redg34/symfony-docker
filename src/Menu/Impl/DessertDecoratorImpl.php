<?php
namespace App\Menu\Impl;

use App\Menu\Items\MenuItem;

final class DessertDecoratorImpl implements MenuItem {

    private $decorator;
    private $pieces = [];

    public function __construct(MenuItem $decorator) {
        $this->decorator = $decorator;
    }

    public function addItem(MenuItem $piece) {
        $this->pieces[] = $piece;
    }

    public function getPrice(): float {
        $totalPrice = $this->decorator->getPrice();
        foreach ($this->pieces as $piece) {
            $totalPrice += $piece->getPrice();
        }
        return $totalPrice;
    }
}
