<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Aespa - Girls 2nd Mini Album (Kwangya Version)',
            'description' => 'Photocard (random 1 out of 4)',
            'currency' => 'PHP',
            'price' => '908.00',
            'brand' => 'aespa',
            'category' => 'album',
            'image' => 'https://www.cnaphils.com.ph/image/cache/catalog/Album/SME/AESPA/GIRLS/ONHAND/aespa---GIRLS_KWANGYA-01-NETA-800x1064.jpg',
        ]);

        DB::table('products')->insert([
            'title' => 'AESPA - Official Lightstick',
            'description' => 'Power: AAA Batteries 3EA (Battery not included)',
            'currency' => 'PHP',
            'price' => '2499.00',
            'brand' => 'aespa',
            'category' => 'lightstick',
            'image' => 'https://www.cnaphils.com.ph/image/cache/catalog/GOODS/SME/aespa/LIGHTSTICK/aespa-LIGHTSTICK-01-ON-HAND-800x1064.jpg',
        ]);

        DB::table('products')->insert([
            'title' => 'AESPA - Forever Cashbee Transportation Card',
            'description' => '1 Cashbee Card',
            'currency' => 'PHP',
            'price' => '260.00',
            'brand' => 'aespa',
            'category' => 'card',
            'image' => 'https://www.cnaphils.com.ph/image/cache/catalog/GOODS/SME/aespa/01-800x1064.jpg',
        ]);
    }
}
