<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //view страницы с регистрацией
    public function index(){
        return view('users.registers');
    }
    //регистрация пост запрос
    public function create(){

    }
    //view страницы с авторизацией
    public function logout(){
        return view('users.logout');
    }
    //авторизация пост запрос
    public function auth(){

    }

    //view страницы личного кабинета
    public function private(){

    }

    //view страницы мой профиль
    public function profile(){

    }

    //view страницы мои заказы
    public function orders(){

    }

    //view страницы корзины
    public function basket(){

    }

}
