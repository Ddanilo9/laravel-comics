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
   return view('home');
});

Route::get('/prodotti', function () {
   $data = [
      'products' => config('cards'),
   ];

   return view('products.products', $data);
})->name('prodotti');

Route::get('/prodotti/{id}',function($id){ //rotta prodotti singoli
   
   $cards = config('cards');
   if($id < count($cards)) {
      $card = $cards[$id];
      $data = [
         'card' => $card
      ];

      return view('products.show',$data); //home di prova
   }  else {
      abort(404);
   }
   
   // dd($card);
})->where('id', '[0-9]+')
->name('prodotto');