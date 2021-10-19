<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokeController extends Controller
{
    //view акции
    public function index_stoke(){
        return view('stoke.stoke');
    }
}
