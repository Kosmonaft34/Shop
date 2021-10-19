<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //view с товарами
    public function index_product(){
        return view('product.product');
    }
}
