<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
}
public function index(){return view('admin.dashboard');
}
public function index (){
    return view('nomi.index');
}
Route::get('/nomi',[NomeController::class,'index'])->name('nomi.index');
