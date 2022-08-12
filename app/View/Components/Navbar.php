<?php

namespace App\View\Components;

use App\Models\Menu;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $items;
    public $loggedMenu;

    public function __construct()
    {
        $this->items = Menu::query()
            ->where('group', 'navbar')
            ->get();


        $this->loggedMenu = [
            [
                'title' => 'داشبود',
                'href' => '/user/dashboard/',
                'active' => false,
                'icon' => 'bi bi-gear fa-fw me-2',
            ],
            [

                'title' => 'تغییر پسورد',
                'href' => '/user/password',
                'active' => false,
                'icon' => 'bi bi-gear fa-fw me-2',
            ],

        ];


    }


    public function render()
    {
        return view('components.navbar');
    }
}
