<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about(){
        // $name = "艾莉絲";
        // return view("pages/about", ["name" => $name]);
        $name = ["艾莉絲","魯迪","西露菲","莉莉雅"];
        return view("pages/about", ["name" => $name]);
    }
}
