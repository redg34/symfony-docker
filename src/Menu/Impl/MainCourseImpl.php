<?php
namespace App\Menu\Impl;

use App\Menu\Items\MenuItem; // Assurez-vous d'utiliser le bon chemin ici

class MainCourseImpl implements MenuItem {
    private $piece;

    public function addItem(MenuItem $piece): void {
        $this->piece = $piece;
    }

    public function getPrice(): float {
        return $this->piece->getPrice();
    }
}
