<?php
namespace App\Service;


use App\Menu\Items\Pizza;
use App\Menu\Items\Salade;
use App\Menu\Items\Glace;
use App\Menu\Menu;

class MenuService {
    public function mainCourseOnly(string $mainCourse): Menu {
        $menu = new Menu();
        $menu->addItem(new Pizza());
        // Ajoutez ici la logique pour ajouter le plat principal au menu
        return $menu;
    }

    public function mainCourseAndStarter(string $mainCourse, string $starter): Menu {
        $menu = new Menu();
        $menu->addItem(new Salade());
        $menu->addItem(new Pizza());
        // Ajoutez ici la logique pour ajouter le plat principal et l'entrée au menu
        return $menu;
    }

    public function mainCourseAndDessert(string $mainCourse, string $dessert): Menu {
        $menu = new Menu();
        $menu->addItem(new Pizza());
        $menu->addItem(new Glace());
        // Ajoutez ici la logique pour ajouter le plat principal et le dessert au menu
        return $menu;
    }

    public function fullMenu(string $mainCourse, string $starter, string $dessert): Menu {
        $menu = new Menu();
        $menu->addItem(new Salade());
        $menu->addItem(new Pizza());
        $menu->addItem(new Glace());
        // Ajoutez ici la logique pour ajouter le plat principal, l'entrée et le dessert au menu
        return $menu;
    }
}
