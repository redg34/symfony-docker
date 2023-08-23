<?php
namespace App\Menu\Impl;

use App\Menu\Items\MenuItem; 

class MainCourseImpl implements MenuItem {
    private $piece;
    public function __construct() {}

    public function addItem(MenuItem $piece): void {
        $this->piece = $piece;
    }

    public function getPrice(): float {
        return $this->piece->getPrice();
    }
}