<?php
namespace App\Tests\Service;

use App\Menu\Impl\MainCourseImpl;
use App\Menu\Items\MenuItem;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\MenuService;



class MenuServiceTest extends KernelTestCase {
    private $menuService;
    

    protected function setUp(): void {
        self::bootKernel();
         // Get service container
         $container = static::getContainer();
        
        // Get the service from the container
        $this->menuService = $container->get(MenuService::class);
    }

    public function testMainCourseOnly(): void {
        $menu = $this->menuService->mainCourseOnly("Main Dish");
        $this->assertEquals(15.50, $menu->getPrice());
    }

    public function testMainCourseAndStarter(): void {
        $menu = $this->menuService->mainCourseAndStarter("Main Dish", "Starter");
        $this->assertEquals(21.50, $menu->getPrice());
    }

    public function testMainCourseAndDessert(): void {
        $menu = $this->menuService->mainCourseAndDessert("Main Dish", "Dessert");
        $this->assertEquals(23.00, $menu->getPrice());
    }

    public function testFullMenu(): void {
        $menu = $this->menuService->fullMenu("Main Dish", "Starter", "Dessert");
        $this->assertEquals(29.00, $menu->getPrice());
    }
}
