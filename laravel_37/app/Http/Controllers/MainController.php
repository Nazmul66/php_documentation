<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function sayHi() {
        return "hello world -- from the controller";
    }

    function sayMyName($name) {
        return "Hello {$name}";
    }

    function contact () {    
        return view('contact');
    }

    function aboutUs ($name) {
        return view('aboutUs',[
            "name" => $name
        ]);
    }

    function view () {
        return view('view');
    }
}
