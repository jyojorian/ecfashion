<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => 'Black T-shirt',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'image' => '/images/1.jpg',
            'price' => '4500'
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'White T-shirt',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'image' => '/images/2.jpg',
            'price' => '4500'
        ];

        DB::table('products')->insert($param);

        $param = [
            'name' => 'White T-shirt 2',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'image' => '/images/3.jpg',
            'price' => '6800'
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'Black T-shirt Plain',
            'description' => 'コットン素材を使用したクルーネックのカットソー。シンプルなデザインで、様々なスタイリングに合わせやすいアイテム。',
            'image' => '/images/4.jpg',
            'price' => '4500'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'Black T-shirt 2',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'image' => '/images/5.jpg',
            'price' => '4500'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'Navy T-shirt',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'image' => '/images/6.jpg',
            'price' => '4500'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'Border T-shirt',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'image' => '/images/7.jpg',
            'price' => '6800'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'Border Long Sleeve T-shirt',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'image' => '/images/8.jpg',
            'price' => '7800'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'Gray T-shirt',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'image' => '/images/9.jpg',
            'price' => '4500'
        ];
        DB::table('products')->insert($param);
    }
}
