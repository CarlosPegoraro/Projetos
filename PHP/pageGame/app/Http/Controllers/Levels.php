<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Levels extends Controller
{
    public function randomPage() {
        $randomNumber = rand(0,5);
        return view("level$randomNumber");
    }
    //Paginas
    public function menu()
    {
        return view('menu');
    }
    public function level1($routeNumber)
    {
        return view('level1', [$routeNumber]);
    }
    public function level2()
    {
        return view('level2');
    }
    public function level3()
    {
        return view('level3');
    }
    public function level4()
    {
        return view('level4');
    }
    public function level5()
    {
        return view('level5');
    }
}
