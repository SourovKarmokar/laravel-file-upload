<?php

use App\Http\Controllers\demoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('hello',[demoController::class,'DemoAction']);
