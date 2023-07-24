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
                'name' => 'Mac book',
                'price' =>'2000',
                'description' => 'a mac book',
                'category'=>'laptop',
                'gallery' => "https://images.officeworks.com.au/api/2/img/https://s3-ap-southeast-2.amazonaws.com/wc-prod-pim/JPEG_1000x1000/MBAM1256GD_macbook_air_13_3_8_core_m1_7_core_gpu_8gb_256gb_gold.jpg/resize?size=600&auth=MjA5OTcwODkwMg__",
              
    
            ],
            [
                'name' => 'Iphone 14',
                'price' =>'1399',
                'description' => 'am iphone',
                'category'=>'phone',
                'gallery' => "https://www.jbhifi.com.au/cdn/shop/products/596636-Product-0-I-637982181440394078.jpg?v=1686263252",
              
    
            ],
            [
                'name' => 'Sony bravia tv',
                'price' =>'3000',
                'description' => 'a tv',
                'category'=>'tv',
                'gallery' => "https://www.sony.co.uk/image/ef683be7a6951a579e1c26598e038793?fmt=pjpeg&bgcolor=FFFFFF&bgc=FFFFFF&wid=2515&hei=1320",
              
    
            ],
            [
                'name' => 'rtx 4090',
                'price' =>'3999',
                'description' => 'a tv',
                'category'=>'tv',
                'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc7znEHOr8Z1GmgcAKrkVJ2jCkcv8H9lUECZ3YmNJIiCOLxxkcC6gffBSPFdP-o4uccAo&usqp=CAU",
              
    
            ],

        ]);
    }
}
