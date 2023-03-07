<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'Zserbó',
                'price'=>'380',
                'description'=>'leírás',
                'category'=>'sütemény',
                'gallery' => 'kepek/1.jpg'
            ],
            [
                'name'=>'Snickers szelet',
                'price'=>'550',
                'description'=>'leírás',
                'category'=>'sütemény',
                'gallery' => 'kepek/2.jpg'
            ],
            [
                'name'=>'Gluténmentes vanília szelet',
                'price'=>'580',
                'description'=>'leírás',
                'category'=>'sütemény',
                'gallery' => 'kepek/3.jpg'
            ],
            [
                'name'=>'Sajtorta',
                'price'=>'400',
                'description'=>'leírás',
                'category'=>'sütemény',
                'gallery' => 'kepek/4.jpg'
            ],
            [
                'name'=>'Sacher',
                'price'=>'500',
                'description'=>'leírás',
                'category'=>'sütemény',
                'gallery' => 'kepek/5.jpg'
            ],
            [
                'name'=>'Tiramisu',
                'price'=>'1800',
                'description'=>'leírás',
                'category'=>'sütemény',
                'gallery' => 'kepek/6.jpg'
            ],
            [
                'name'=>'Lúdláb',
                'price'=>'380',
                'description'=>'leírás',
                'category'=>'sütemény',
                'gallery' => 'kepek/7.jpg'
            ],
            [
                'name'=>'Krémes',
                'price'=>'350',
                'description'=>'leírás',
                'category'=>'sütemény',
                'gallery' => 'kepek/8.jpg'
            ],
        ]);
    }
}
