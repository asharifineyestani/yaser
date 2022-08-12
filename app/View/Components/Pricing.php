<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pricing extends Component
{

    public $item;

    public function __construct()
    {

        $this->item = [
            'h1' => 'سرویس ها و قیمت ها',
            'description' => 'Kerio + PPTP + L2TP + Ipsec + Open VPN + Cisco + Tunnel Plus + Stunnel + Telegram Socks

بری خرید VPN سرویس های مناسب خود را در زیر انتخاب کنید!',
            'discount_text' => 'شامل تخفیف',
            'items' => [
                [
                    'id' => 'yek',
                    'title' => 'یک ماهه',
                    'link' => [
                        'title' => 'شروع',
                        'href' => '#',
                    ],
                    'price_month' => 25000,
                    'price_year' => 100000,
                    'price_description' => 'برای هر کاربر',
                    'badge' => [
                        'class' => 'bg-primary',
                        'text' => 'پیشنهادی'
                    ],
                    'attributes' => [
                        [
                            'include' => false,
                            'title' => 'پرداخت ماهانه ۲۹۰۰۰ تومان'
                        ],
                        [
                            'include' => false,
                            'title' => 'اکانت دو کاربره'
                        ],
                        [
                            'include' => true,
                            'title' => '۷ روز رایگان'
                        ],
                        [
                            'include' => true,
                            'title' => 'قابل استفاده درتمام دستگاه ها'
                        ],
                        [
                            'include' => true,
                            'title' => 'پهـــــــــنای بــــــاند نامــحــدود'
                        ],
                    ]

                ],
                [
                    'id' => 'do',
                    'link' => [
                        'title' => 'شروع',
                        'href' => '#',
                    ],
                    'title' => 'یک ماهه',

                    'price_month' => 50000,
                    'price_year' => 200000,
                    'price_description' => 'برای هر کاربر',
                    'badge' => [
                        'class' => 'bg-success',
                        'text' => 'پیشنهادی'
                    ],
                    'attributes' => [
                        [
                            'include' => true,
                            'title' => 'پرداخت ماهانه ۲۹۰۰۰ تومان'
                        ],
                        [
                            'include' => true,
                            'title' => 'اکانت دو کاربره'
                        ],
                        [
                            'include' => true,
                            'title' => '۷ روز رایگان'
                        ],
                        [
                            'include' => true,
                            'title' => 'قابل استفاده درتمام دستگاه ها'
                        ],
                        [
                            'include' => true,
                            'title' => 'پهـــــــــنای بــــــاند نامــحــدود'
                        ],
                    ]

                ],
                [
                    'id' => 'se',
                    'title' => 'یک ماهه',
                    'link' => [
                        'title' => 'شروع',
                        'href' => '#',
                    ],
                    'price_month' => 300000,
                    'price_year' => 1200000,
                    'price_description' => 'برای هر کاربر',
                    'badge' => [
                        'class' => 'bg-orange',
                        'text' => 'پیشنهادی'
                    ],
                    'attributes' => [
                        [
                            'include' => true,
                            'title' => 'پرداخت ماهانه ۲۹۰۰۰ تومان'
                        ],
                        [
                            'include' => true,
                            'title' => 'اکانت دو کاربره'
                        ],
                        [
                            'include' => true,
                            'title' => '۷ روز رایگان'
                        ],
                        [
                            'include' => true,
                            'title' => 'قابل استفاده درتمام دستگاه ها'
                        ],
                        [
                            'include' => true,
                            'title' => 'پهـــــــــنای بــــــاند نامــحــدود'
                        ],
                    ]

                ]
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
        return view('components.pricing');
    }
}
