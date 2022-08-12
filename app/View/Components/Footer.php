<?php

namespace App\View\Components;

use App\Models\Menu;
use Illuminate\View\Component;

class Footer extends Component
{
    public $links1;
    public $links2;
    public $links3;
    public $links4;


    public function __construct()
    {
        $this->links1 = Menu::limit(4)->get();
        $this->links2 = Menu::limit(4)->get();
        $this->links3 = Menu::limit(4)->get();
        $this->links4 = Menu::whereGroup('footer4')->limit(2)->get();
    }
    public function render()
    {
        return view('components.footer');
    }
}
