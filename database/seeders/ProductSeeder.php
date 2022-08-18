<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            [
                'name'=>'iphone',
                'price'=>'123000',
                'category'=>'mobile',
                'description'=>'500GB//8gb RAM',
                'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-79729978,imgsize-200,width-1200/79729978.jpg'
            ],
            [
                'name'=>'iphone',
                'price'=>'123000',
                'category'=>'mobile',
                'description'=>'500GB//8gb RAM',
                'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-79729978,imgsize-200,width-1200/79729978.jpg'
            ],
            [
                'name'=>'samsung',
                'price'=>'923000',
                'category'=>'mobile',
                'description'=>'300GB//6gb RAM',
                'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-79729978,imgsize-200,width-1200/79729978.jpg'
            ],
            [
                'name'=>'Oppo',
                'price'=>'83000',
                'category'=>'mobile',
                'description'=>'500GB//4gb RAM',
                'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-79729978,imgsize-200,width-1200/79729978.jpg'
            ],
            [
                'name'=>'Huwai',
                'price'=>'33000',
                'category'=>'mobile',
                'description'=>'350GB//8gb RAM',
                'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-79729978,imgsize-200,width-1200/79729978.jpg'
            ],
        ]);
    }
}
