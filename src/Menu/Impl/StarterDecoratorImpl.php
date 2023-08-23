<?php
namespace App\Menu\Impl;

use App\Menu\Items\MenuItem; 

final class StarterDecoratorImpl implements MenuItem {
    private $decorator;
    private $piece;
    
    public function __construct(MenuItem $decorator) {
        $this->decorator = $decorator;
    }

    public function addItem(MenuItem $piece): void {
        $this->piece = $piece;  
    }

    public function getPrice(): float {
        return $this->piece->getPrice() + $this->decorator->getPrice();
    }
}
