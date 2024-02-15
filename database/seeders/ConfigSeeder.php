<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::insert([
            'name' => 'logo',
            'value' => 'logo.png'
        ],
        [
            'name' => 'blogname',
            'value' => 'yukos'
        ],
        [
            'name' => 'title',
            'value' => 'welcome to my jungle'
        ],
        [
            'name' => 'caption',
            'value' => 'welcome to my jungle'
        ],
        [
            'name' => 'ads_widget',
            'value' => 'ads satu'
        ],
        [
            'name' => 'ads_header',
            'value' => 'ads dua'
        ],
        [
            'name' => 'ads_footer',
            'value' => 'ads tiga'
        ],
        [
            'name' => 'phone',
            'value' => '123456'
        ],
        [
            'name' => 'email',
            'value' => 'user@gmail.com'
        ],
        [
            'name' => 'facebook',
            'value' => 'facebook.com'
        ],
        [
            'name' => 'youtube',
            'value' => 'youtube.com'
        ],
        [
            'name' => 'instagram',
            'value' => 'instagram.com'
        ],
        [
            'name' => 'footer',
            'value' => 'welcome to my jungle'
        ]);
    }
}
