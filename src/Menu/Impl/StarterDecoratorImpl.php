<?php
namespace App\Menu\Impl;

use App\Menu\Items\MenuItem; // Assurez-vous d'utiliser le bon chemin ici

final class StarterDecoratorImpl implements MenuItem {
    private $decorator;
    private $piece;
    
    public function __construct(MenuItem $decorator) {
        $this->decorator = $decorator;
    }

    public function addItem(MenuItem $piece) {
        $this->piece = $piece;  
    }

    public function getPrice(): float {
        return $this->piece->getPrice() + $this->decorator->getPrice();
    }
}
