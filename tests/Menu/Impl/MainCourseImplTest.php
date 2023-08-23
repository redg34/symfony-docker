<?php

namespace App\Tests\Menu\Impl;

use App\Menu\Impl\DessertDecoratorImpl;
use App\Menu\Impl\MainCourseImpl;
use App\Menu\Impl\StarterDecoratorImpl;
use App\Menu\Items\Glace;
use App\Menu\Items\Pizza;
use App\Menu\Items\Salade;
use PHPUnit\Framework\TestCase;

class MainCourseImplTest extends TestCase
{
    public function testSingleMainCourse(): void
    {
        $menu = new MainCourseImpl();
        $menu->addItem(new Pizza());

        $this->assertEquals(15.50, $menu->getPrice());
    }

    public function testStarterAndMainCourse()
    {
        $menu = new MainCourseImpl();
        $menu->addItem(new Pizza());

        $menu = new StarterDecoratorImpl($menu);
        $menu->addItem(new Salade());

        $this->assertEquals(21.50, $menu->getPrice());
    }

    public function testAllMenu()
    {
        $menu = new MainCourseImpl();
        $menu->addItem(new Pizza());

        $menu = new StarterDecoratorImpl($menu);
        $menu->addItem(new Salade());

        $menu = new DessertDecoratorImpl($menu);
        $menu->addItem(new Glace());

        $this->assertEquals(29, $menu->getPrice());
    }
}