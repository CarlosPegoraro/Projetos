<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Levels extends Controller
{
    public function menu()
    {
        return view('menu');
    }
    public function level1()
    {
        return view('level1');
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
