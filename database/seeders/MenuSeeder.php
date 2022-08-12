<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Menu::create([
            'name' => 'برگ نخست',
            'href' => '/',
            'group' => 'navbar',
        ]);

        Menu::create([
            'name' => 'درباره ما',
            'href' => '/pages/about',
            'group' => 'navbar',
        ]);
        Menu::create([
            'name' => 'تماس با ما',
            'href' => '/pages/contact',
            'group' => 'navbar',
        ]);


        Menu::create([
            'name' => 'برگ نخست',
            'href' => '/',
            'group' => 'footer1',
        ]);
        Menu::create([
            'name' => 'درباره ما',
            'href' => 'about',
            'group' => 'footer1',
        ]);
        Menu::create([
            'name' => 'تماس با ما',
            'href' => 'contact-us',
            'group' => 'footer1',
        ]);
        Menu::create([
            'name' => 'اخبار',
            'href' => 'news',
            'group' => 'footer1',
        ]);
        Menu::create([
            'name' => 'راهنما',
            'href' => 'help',
            'group' => 'footer1',
        ]);


        Menu::create([
            'name' => 'قوانین',
            'href' => '/pages/rules',
            'group' => 'footer4',
        ]);
        Menu::create([
            'name' => 'راهنما',
            'href' => '/pages/help',
            'group' => 'footer4',
        ]);


    }
}
