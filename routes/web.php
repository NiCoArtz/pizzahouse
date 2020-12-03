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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
  $pizza = [
      'type'=>'hawaiin',
      'base'=> 'çheesy crust',
      'price' => 10
  ];
  $pizzas = [
   ['type' => 'hawaiin', 'base' => 'cheesy crust'],
   ['type' => 'volcano', 'base' => 'garlic crust'],
   ['type' => 'veg supreme', 'base' => 'thin & crispy']
 ];
    return view('pizzas',['pizzas' => $pizzas]);
});
