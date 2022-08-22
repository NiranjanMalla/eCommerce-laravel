<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index(){
          // return "WelCome to Product Page";
        //   return Product::all();
        //   just look at the localhost:8000/login and login, you'll redirect to the product page  displaying the data of product table

        $data = Product::all();
        return view('product',['products'=>$data]);
    }
}
