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
                'name'=>'samsung',
                'price'=>'123000',
                'category'=>'mobile',
                'description'=>'500GB//8gb RAM',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnUQHVlBG6roGvLxWmY3TpeHv1WH0MYaod3Q&usqp=CAU'
            ],
            [
                'name'=>'oppo',
                'price'=>'923000',
                'category'=>'mobile',
                'description'=>'300GB//6gb RAM',
                'gallery'=>'https://cdn1.smartprix.com/rx-iuvs4uvlM-w280-h280/oppo-a57-4g-4gb-ram.jpg'
            ],
            [
                'name'=>'Gallexy',
                'price'=>'83000',
                'category'=>'mobile',
                'description'=>'500GB//4gb RAM',
                'gallery'=>'https://www.cnet.com/a/img/resize/b4e892aaec10903c3429cea9f31eba3ff41d3d8c/2022/08/09/c50bf603-388c-49c5-8ffb-fdf86ead6933/samsung-galaxy-foldable-9808.jpg?auto=webp&fit=crop&height=900&width=1200'
            ],
            [
                'name'=>'Huwai',
                'price'=>'33000',
                'category'=>'mobile',
                'description'=>'350GB//8gb RAM',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrj4khHcx-O3TETDZJ1i_ZN_nMmrwNRPtmjA&usqp=CAU'
            ],
        ]);
    }
}
