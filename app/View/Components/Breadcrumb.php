<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{


    public $section;

    public function __construct()
    {
        //
        $this->section['h1'] = 'سرور مجازی لینوکس';
        $this->section['items'] = [
            [
                'title' => 'هاستینگ',
                'href' => '/',
                'active'=> false
            ],
            [
                'title' => 'سرور مجازی',
                'href' => '/virtual-server',
                'active'=> false
            ],
            [
                'title' => 'سرور مجازی لینوکس',
                'href' => '/linux-virtual-server',
                'active'=> true
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.breadcrumb');
    }
}
