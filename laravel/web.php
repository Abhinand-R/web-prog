<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   // return view('welcome');
   return 'hello world from abhi';
});

Route::get('/Helloo', function () {       //this is the Helloo tha is given in url ie,
   return view('hello',['name'=>'abhinand']);
   //return 'hello world from abhi';
});

Route::get('Helloo/{name}', function ($name='name') {       //required pareamernytr
   return "my name is $name";
   //return 'hello world from abhi';
});

Route::get('Hello/{name?}', function ($name='abhhhhheee') {       //options
   return $name;
   //return 'hello world from abhi';
});

use App\Http\Controllers\HelloWorldController;
Route::get('/hellocon',[HelloWorldController::class,'index']);