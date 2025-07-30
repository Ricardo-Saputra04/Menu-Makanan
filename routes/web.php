<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;

Route::get('/', function () {
    return redirect('/makanan');
});

Route::resource('makanan', MakananController::class);