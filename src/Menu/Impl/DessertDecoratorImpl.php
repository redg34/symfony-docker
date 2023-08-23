<?php
namespace App\Menu\Impl;

use App\Menu\Items\MenuItem;

final class DessertDecoratorImpl implements MenuItem {

    private $decorator;
    private $pieces = [];

    public function __construct(MenuItem $decorator) {
        $this->decorator = $decorator;
    }

    public function addItem(MenuItem $piece): void
    {
        $this->pieces = $piece;
    }

    public function getPrice(): float
    {
        return $this->decorator->getPrice() + $this->pieces->getPrice();
    }
}
