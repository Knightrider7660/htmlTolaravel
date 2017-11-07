<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function welcome(){
        return view('welcome');

    }
    public function index(){
        return view('index');

    }
}
