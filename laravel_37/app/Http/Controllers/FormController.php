<?php

namespace App\Http\Controllers;
use App\Models\People;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function displayForm() {
        return view('form');
    }

    function saveForm(Request $request) {
        $name    = $request->post('name');
        $email   = $request->post('email');
        $age     = $request->post('age');
        $phone   = $request->post('phone');

        if(People::where( 'email' , "=" , $email)->count() == 0){
            $people = new People();
            $people->name   = $name; 
            $people->email  = $email; 
            $people->age    = $age; 
            $people->phone  = $phone; 
            $people->save();
        }

        return redirect()->route('form.create');
    }
}
