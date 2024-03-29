<?php

use App\Http\Controllers\Modul2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/tugas-mod2', [Modul2Controller::class,'index'])->name('Modul2');
