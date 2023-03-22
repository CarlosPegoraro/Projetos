<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Levels extends Controller
{
    public function randomPage() {
        $randomNumber = rand(1,5);
        return view("level$randomNumber");
    }
    //Paginas
    public function menu()
    {
        return view('menu');
    }
}
