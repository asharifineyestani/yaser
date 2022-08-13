<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Introduction extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $section;


    public function __construct()
    {


        $this->section['h1'] = 'سرور مجازی لینوکس';
        $this->section['description'] = 'سرور مجازی لینوکس ، یک سرور مجازی است که سیستم عامل های پایه یونیکس/لینوکس بر روی آن نصب شده و با دسترسی Root از طریق SSH در اختیار کاربران قرار می گیرد. زیر ساخت سرورهای مجازی لینوکس دارای سخت افزار قدرتمند اینتل و سوپرمایکرو است که با سیستم مجازی ساز ESXi بازدهی ، سرعت و کیفیت فوق العاده ای را در اختیار کاربران قرار میدهد.';
        $this->section['items'] = [
            [
                'title' => 'سرور اختصاصی',
                'description' => 'سرورهای مجازی یاسرآنلاین با توجه به استفاده از سیستم مجازی سازی ESXi دارای منابع سخت افزاری اختصاصی نیز می باشند.',
                'avatar'=>[
                    'href'=> '/assets/images/1.svg'
                ]
            ],
            [
                'title' => 'پشتیبانی',
                'description' => 'سرورهای مجازی 24 ساعته در 7 روز هفته پشتیبانی شده و با مانیتورینگ پیشرفته از اختلال و بروز خطا احتمالی جلوگیری می گردد.',
                'avatar'=>[
                    'href'=> '/assets/images/2.svg'
                ]
            ],
            [
                'title' => 'راه اندازی سریع',
                'description' => 'تمامی سفارشات سرویس سرور مجازی لینوکس یاسرآنلاین در کمتر از 15 دقیقه به همراه سیستم عامل مورد نظر در اختیار کاربران قرار خواهد گرفت.',
                'avatar'=>[
                    'href'=> '/assets/images/3.svg'
                ]
            ],
            [
                'title' => 'لوکیشن',
                'description' => 'سرویس سرور مجازی یاسرآنلاین در دیتاسنترهای معتبر شش کشور آمریکا ، کانادا ، لیتوانی ، انگلیس ، آلمان و هلند قابل ارائه می باشند.',
                'avatar'=>[
                    'href'=> '/assets/images/4.svg'
                ]
            ],
            [
                'title' => 'سرور اختصاصی',
                'description' => 'سرورهای مجازی یاسرآنلاین با توجه به استفاده از سیستم مجازی سازی ESXi دارای منابع سخت افزاری اختصاصی نیز می باشند.',
                'avatar'=>[
                    'href'=> '/assets/images/5.svg'
                ]
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.introduction');
    }
}
