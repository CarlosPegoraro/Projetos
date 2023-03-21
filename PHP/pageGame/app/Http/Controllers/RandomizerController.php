<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class RandomizerController extends Controller
{
    public function randomPage() {
        $randomNumber = rand(0,5);
        switch ($randomNumber) {
            case '1':
                $routeNumber = "/l1";
                break;
            case '2':
                $routeNumber = "/l2";
                break;
            case '3':
                $routeNumber = "/l3";
                break;
            case '4':
                $routeNumber = "/l4";
                break;
            case '5':
                $routeNumber = "/l5";
                break;

            default:
                echo "fudeu";
                break;
        }

        return $routeNumber;
    }
}
