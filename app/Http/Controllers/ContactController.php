<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //view контактов
    public function index_contacts(){
        return view('contacts.contact');
    }
}
