<?php
namespace App\Menu\Items;

interface MenuItem {
    public function getPrice(): float;
    public function addItem(MenuItem $piece): void;
}
