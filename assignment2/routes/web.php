<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/name', function () {
    return "<h1> Luka Orjonikidze </h1>";
});
Route::get('/age', function () {
    return "<h1> 18 </h1>";
});
Route::get('/hobby', function () {
    return "<h1> Working Out, Coding </h1>";
});
Route::get('/physical_info', function () {
    return "<h1> 193cm 81kg </h1>";
});
Route::get('/interests', function () {
    return "<h1> Gaming, Coding, Puzzles, Business</h1>";
});
Route::match(['get', 'post'], '/postmethod', function () {
    $array1 = ["message" => "წარმატებით განახლდა"];
    return json_encode($array1);
});
Route::match(['get', 'put'], '/putmethod', function () {
    $array1 = ["message" => "წარმატებით დაემატა"];
    return json_encode($array1);
});
Route::match(['get', 'delete'], '/deletemethod', function () {
    $array1 = ["message" => "წარმატებით წაიშალა"];
    return json_encode($array1);
});