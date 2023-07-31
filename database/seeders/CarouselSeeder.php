<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carousel_assets')->insert([
            ['image'=>'/images/banner-airpods-pro.jpg'],
            ['image'=>'/images/ipad-air.png'],
            ['image'=>'/images/iPhone14.png'],
            ['image'=>'/images/banner-airpods-pro.jpg'],
            ['image'=>'/images/MacBook-Air-15.png'],
            ['image'=>'/images/MacBook-air-m2.png'],
            ['image'=>'/images/macbook-pro.png'],
            ['image'=>'/images/macbook-pro1.jpg'],
            

        ]);
    }
}
