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

Route::get('/esporte/{ano}/{titulo}', function ($ano, $titulo) {
    echo "<h2>" . implode(" ", explode("-", $titulo)) . "</h2>";
});

Route::get('/cadastrar/{id?}', function ($id = null) {
    echo $id == null ? "Não tem id" : $id;
})->where("id", "[0-9]+");

Route::get('/nome/{name}', function($name){
    echo "<h2> Bem vindo <strong>" . implode(" ", explode("-", $name)) . "</strong> </h2>";
})->where("name", "[A-Za-z]+");


Route::get('/{operation}/{v1}/{v2}', 'App\Http\Controllers\ArithmeticController@calc')
    ->whereIn('operation', ['soma', 'subtrai', 'multiplica'])
    ->where(["v1" => "[0-9]+", "v2" => "[0-9]+"]);
