<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ["name" => "John"];
});

Route::get("/hello/world", [MainController::class, "sayHi"]);
Route::get("/say/{name}", [MainController::class, "sayMyName"]);
Route::get("/contact", [MainController::class, "contact"]);
Route::get("/view", [MainController::class, "view"]);
Route::get("/about/{taka}", [MainController::class, "aboutUs"]);
Route::get("/people", [MainController::class, "allPeople"]);
Route::get("/test", [MainController::class, "testModel"]);

Route::get('/hello/{data}', function ($world) {
    // return "hello world";
    return view("info",[
        "name"=>$world,
        "time"=>time()
    ]);
});

Route::get('/hello/{name}', function ($wordName) {
    // $word = strtoupper($wordName);
    $word = ucwords($wordName);  // another function for capital letter
    return "hello {$word}";
});


// post verify ar jonno ( app/middleware/VerifyCsrfToken.app )
Route::post('/say', function (Request $request){
      $name = $request->post('name');  // HTTP POST VERB
      $greeting = $request->post('greetings');

      return view("info",[
        "name"=>$name,
        "greet"=>$greeting
    ]);
});


// formController routes
Route::get('/form', [FormController::class, 'displayForm'])->name('form.create');
Route::post('/save', [FormController::class, 'saveForm'])->name('form.save');

route::get('/post', [PostController::class, 'createPost']);

