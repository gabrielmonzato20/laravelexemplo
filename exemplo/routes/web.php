<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/hello',function(){
  return "<h1><a href='#'>Fist Exemplo</a></h1>";
});*/
/*Route::get('/ex',function(){
  return view('exemplo/exemplo');
});*/
/*Route::get('/we/{ex}/{qw}',function($ex='exemplo',$qqw){
  return 'This is the '.$ex.$qqw;
});*/
Route::get("/","ExemploController@index");
Route::get("/about","ExemploController@about");
Route::get("/contact","ExemploController@contact");
