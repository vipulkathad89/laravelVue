<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });
route::get('/',[IndexController::class,'index'])->name('index');
route::get('/hello',[IndexController::class,'show'])->name('show');
