<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    //метод с выводом view доставки
    public function index_delivery(){
        return view('delivery.delivery');
    }
}
