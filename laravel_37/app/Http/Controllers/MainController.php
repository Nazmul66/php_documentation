<?php

namespace App\Http\Controllers;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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



    function allPeople() {

        // first way query use
        /* return (DB::table('people')
         ->where('id','>',1)
         ->limit(3)
         ->orderByDesc('id')
         ->get()); */

         // second way query use
        /*  return ((array) DB::table('people')->where('status','=',1)->orderByDesc('id')->first()); */

        // third way query use
        /* return (DB::select('SELECT * FROM people WHERE id > 1 AND id < 4 ORDER BY id DESC ')); */

        // forth way query use
        //  return (DB::table('people')
        //  ->where('id','>',1)
        //  ->where('status','=', 1)
        //  ->orderByDesc('id')
        //  ->get(['id', 'name', 'email', 'status'])); 

        // fifth way query use
        // return (DB::table('people')
        // ->select(['id', 'name', 'email', 'status'])
        // ->where('id','>',1)
        // ->where('status','=', 1)
        // ->limit(1)
        // ->orderByDesc('id')
        // ->get()); 

    }

    function testModel() {
    // $people = People::all()->skip(1)->take(2);
    // $people = People::find(3);
    // $people = People::where('id', '>', 1)->where('id', '<' , 4)->get();
    // $people = People::where('id', '>', 1)->count();
    // $people = People::where('email', '=', 'hnazmul748@gmail.com')->get(['email']);
    // $people = People::select('email')->where('email', '=', 'hnazmul748@gmail.com')->get();
    // $people = People::whereEmail('hnazmul748@gmail.com')->first()->displayName();

    // update any data table
    // $people = People::all();

    // update method
    // $people->name = "Nazmul Hassan";
    // $people->email = "hnazmul7488@gmail.com";
    // $people->save();
    // $people = $people->fresh();

    // delete method
    // $people = $people->delete();


    //  get match data to the foreign keys and must be foreign key should match that table name like ( tablename_id connect to id ) 
    $people = People::find(2);
    $post = $people->posts;
       return $post;
    }
}
