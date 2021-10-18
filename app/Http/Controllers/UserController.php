<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //view страницы с регистрацией
    public function index(){
        return view('users.registers');
    }
}
