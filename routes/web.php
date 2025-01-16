<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Livewire\Homepage;
use App\Livewire\Test;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', Test::class);
Route::get('/', Homepage::class);
