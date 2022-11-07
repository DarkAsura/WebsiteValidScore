<?php

use Illuminate\Support\Facades\Route;
use \View as View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post("users", function (\Illuminate\Http\Request $request){
$nama = $request->name;
$score = $request->score;

return View('view')
    ->with('name',$nama)
    ->with('score',$score);
});






